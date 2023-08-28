<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receta;
use App\Http\Requests\RecetaRequest;
use App\Models\User;
use App\Models\Medicamento;
use App\Models\MedicamentoReceta;
use App\Models\Diagnosticoscie10;
use App\Models\Paciente;
use Illuminate\Support\Facades\Cache;
use Dompdf\Dompdf;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecetaController extends Controller
{
    public function __construct()
    {
        $this-> middleware('can:admin.receta.index')->only('index');
        $this-> middleware('can:admin.receta.create')->only('create', 'store');        
        $this-> middleware('can:admin.receta.show')->only('show');        
        $this-> middleware('can:admin.receta.edit')->only('edit', 'update');
        $this-> middleware('can:admin.receta.destroy')->only('destroy');
    }

    public function index()
    {
        $recetas = Receta::all();
        return view('admin.receta.index', compact('recetas'));
 
    }  


    public function getPacientes(Request $request){

        $search = $request->search;
  
        if($search == ''){
           $pacientes = Paciente::orderby('cedula','asc')->select('id','nombre','cedula')->limit(5)->get();
        }else{
           $pacientes = Paciente::orderby('cedula','asc')->select('id', 'nombre','cedula')->where('cedula', 'like', '%' .$search . '%')->limit(5)->get();
        }
  
        $response = array();
        foreach($pacientes as $paciente){
           $response[] = array("value"=>$paciente->id,"value1"=>$paciente->nombre,"label"=>$paciente->cedula);
        }
  
        return response()->json($response);
    }
   public function getDiagnosticoscie10(Request $request){

        $search = $request->search;
  
        if($search == ''){
           $diagnosticoscie10s = Diagnosticoscie10::orderby('descripcion','asc')->select('id','clave','descripcion')->limit(15)->get();
        }else{
           $diagnosticoscie10s = Diagnosticoscie10::orderby('descripcion','asc')->select('id', 'clave','descripcion')->where('descripcion', 'like', '%' .$search . '%')->limit(15)->get();
        }
  
        $response = array();
        foreach($diagnosticoscie10s as $diagnosticoscie10){
           $response[] = array("value"=>$diagnosticoscie10->id,"value1"=>$diagnosticoscie10->clave,"label"=>$diagnosticoscie10->descripcion);
        }
  
        return response()->json($response);
    } 
    


    public function create()
    {
       
        $maxRecetaId = Receta::max('id'); // Obtenemos el valor máximo actual del campo 'id' en la tabla 'Receta'
        $nextId = $maxRecetaId + 1; // Incrementamos en uno para obtener el próximo número de receta

        $receta = new Receta();
        $users = User::pluck('name', 'id');
        $medicamentos = Medicamento::all();
        // Obtener medicamentos disponibles para la selección
        $medicamentosDisponibles = Medicamento::pluck('nombre', 'id');
        $diagnosticoscie10 = Diagnosticoscie10::pluck('clave', 'id');
        $paciente = Paciente::pluck('cedula','id');

        return view('admin.receta.create', compact('nextId','users', 'medicamentos','medicamentosDisponibles', 'diagnosticoscie10', 'paciente'));
  
    }

    public function store(RecetaRequest $request)
    {
       

        $receta = Receta::create($request->all());

        $sugerencias = explode("\n", $request->input('sugerencia'));
        $sugerenciaString = implode("\n", $sugerencias);
        
        $medicamentos = $request->input('medicamentos', []);
        $cantidades = $request->input('cantidades', []);
        $indicaciones = $request->input('indicaciones', []);


        for ($medicamento = 0; $medicamento < count($medicamentos); $medicamento++) {
            if ($medicamentos[$medicamento] != '') {
                $receta->medicamentos()->attach($medicamentos[$medicamento], ['cantidad' => $cantidades[$medicamento], 'indicacion' => $indicaciones[$medicamento]]);
            }
        }     
        
       $receta->save();
        return redirect()->route('admin.receta.index')-> with('info', 'Receta Creada correctamente');;

    }

    public function show($id)
    {
        
        
        $receta = Receta::findOrFail($id);
        $medicamentos = $receta->medicamentos;

        
        return view('admin.receta.show', compact('receta', 'medicamentos'));

    }

    
    public function imprimirpdf($id)
    {
        $registro = Receta::findOrFail($id);
        $pdf = new Dompdf();
        $pdf->loadHtml(view('registros.pdf', compact('registro')));
        $pdf->render();
        
        return $pdf->stream("registro-$recetum.pdf");
    }  
   

   
    public function edit($id)
    {
        $receta = Receta::findOrFail($id);
        $users = User::pluck('name', 'id');
        $medicamentos = Medicamento::all();
        // Obtener los medicamentos asociados a la receta
        $medicamentosReceta = $receta->medicamentos()->get();   
        // Crear un arreglo asociativo para el select desplegable
        // Obtener todos los medicamentos con sus campos necesarios
        $medicamentosDisponibles = Medicamento::all();
        $medicamentosSelect = ['' => 'Seleccione un Medicamento'];
        foreach ($medicamentosDisponibles as $medicamento) {
            $medicamentosSelect[$medicamento->id] = $medicamento->nombre_completo;
        }
        

        
        $diagnosticoscie10 = Diagnosticoscie10::pluck('descripcion', 'id');
        $paciente = Paciente::pluck('nombre', 'id');

        return view('admin.receta.edit', compact('receta', 'users', 'medicamentos', 'medicamentosReceta','medicamentosSelect', 'diagnosticoscie10', 'paciente'));
    }
 
    public function update(Request $request, $id)
    {
        
        

        // Obtener la receta existente por su ID
        $receta = Receta::findOrFail($id);

        // Actualizar los campos de la receta con los datos del formulario        
         
        
        $sugerencias = explode("\n", $request->input('sugerencia'));
        $sugerenciaString = implode("\n", $sugerencias); 
        $receta->sugerencia = $sugerenciaString;
        // Agrega aquí otros campos de la tabla Receta según tus necesidades
        $receta->update($request->all());
        // Guardar la receta actualizada en la base de datos
        $receta->save();

        // Lógica para manejar medicamentos asociados a la receta (similar a la lógica del método "store")
        $medicamentos = $request->input('medicamentos', []);
        $cantidades = $request->input('cantidades', []);
        $indicaciones = $request->input('indicaciones', []);

        // Eliminar los medicamentos asociados a la receta existente para actualizarlos
        $receta->medicamentos()->detach();

        // Asociar los nuevos medicamentos a la receta actualizada
        for ($i = 0; $i < count($medicamentos); $i++) {
            if ($medicamentos[$i] != '') {
                $receta->medicamentos()->attach($medicamentos[$i], [
                    'cantidad' => $cantidades[$i],
                    'indicacion' => $indicaciones[$i]
                ]);
            }
        }

        return redirect()->route('admin.receta.index')->with('info', 'Receta actualizada correctamente');
    }
   
    
    public function destroy($id)
    {
        $recetum = Receta::findOrFail($id);
        
        $this->authorize('author', $recetum);
       
        $recetum->delete();

        Cache::flush();
        return redirect()->route('admin.receta.index')-> with('eliminar', 'ok');
  
    }


}
