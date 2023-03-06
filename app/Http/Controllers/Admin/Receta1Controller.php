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
           $diagnosticoscie10s = Diagnosticoscie10::orderby('descripcion','asc')->select('id','clave','descripcion')->limit(5)->get();
        }else{
           $diagnosticoscie10s = Diagnosticoscie10::orderby('descripcion','asc')->select('id', 'clave','descripcion')->where('descripcion', 'like', '%' .$search . '%')->limit(5)->get();
        }
  
        $response = array();
        foreach($diagnosticoscie10s as $diagnosticoscie10){
           $response[] = array("value"=>$diagnosticoscie10->id,"value1"=>$diagnosticoscie10->clave,"label"=>$diagnosticoscie10->descripcion);
        }
  
        return response()->json($response);
    }
    
  
    public function create()
    {
        $nextId = Receta::count() + 1;
        $users = User::pluck('name', 'id');
        $medicamentos = Medicamento::all();
        $medicamentoreceta = new MedicamentoReceta();
        $diagnosticoscie10 = Diagnosticoscie10::pluck('clave', 'id');
        $paciente = Paciente::pluck('cedula','id');
        
        return view('admin.receta.create', compact('nextId','users', 'medicamentos', 'medicamentoreceta','diagnosticoscie10', 'paciente'));
  
    }

    public function createMedication($receta_id)
    {
        
        
        $receta = Receta::find($receta_id);
        $medicamentos = Medicamento::all();

        return view('admin.medicamentos.create', compact('receta', 'medicamentos'));
        
  
    }
    
    public function agregarMedicamento(Request $request)
    {
        
        $request->validate([
            'dosis' => 'required',
            'horario' => 'required'
        ]);

        $medicamento_receta = MedicamentoReceta::create($request->all());

        
        
        $receta = Receta::find($request->input('receta_id'));
        $medicamento = Medicamento::find($request->input('medicamento_id'));
        $dosis = $request->input('dosis');
        $horario = $request->input('horario');

        $receta->medicamentos()->attach($medicamento->id, ['dosis' => $dosis , 'horario' => $horario]);

        return redirect()->back('receta', 'medicamento');
    }

    public function mostrarModal()
    {
            $datosModal = [
                'nombre' => 'nombre',
                'concentracion' => 'concentracion',
                'tipo' => 'tipo',
                'dosis' => 'dosis',                
                'horario' => 'horario',
                // ...
            ];

            return view('admin.receta.create')->with('datosModal', $datosModal);
    }

    
    
  
    /* public function store(RecetaRequest $request)
    {
        
         // Validar la entrada del formulario
            $validatedData = $request->validate([
                'nombre' => 'required|max:255',
                'descripcion' => 'required|max:255',
                'medicamento.*.id' => 'required|exists:medicamento,id',
                'medicamento.*.dosis' => 'required',
                'medicamento.*.horario' => 'required',
            ]);
              
        
        // Crear la receta        
        $receta = Receta::create($request->all()); 

        // Agregar los medicamentos a la receta
        foreach ($validatedData['medicamento'] as $medicamentoData) {
            $medicamento = Medicamento::find($medicamentoData['id']);

            $receta->medicamentos()->attach($medicamento, [
                'dosis' => $medicamentoData['dosis'],
                'horario' => $medicamentoData['horario'],
            ]);
        }
        $receta->save();
        Cache::flush();
        return redirect()->route('admin.receta.index')-> with('info', 'Receta Creada correctamente');;

    } */

    public function store(RecetaRequest $request)
    {
        
        $receta = new Receta; 
       /* $receta = Receta::create($request->all()); */ 
        $receta->ciudad = $request->ciudad; 
        $receta->save();
    
        foreach ($request->medicamentos as $medicamento_id) {
            $dosis = $request->dosis[$medicamento_id];
            $horario = $request->horario[$medicamento_id];
    
            $receta->medicamentos()->attach($medicamento_id, ['dosis' => $dosis, 'horario' => $horario]);
        }    
        
        Cache::flush();
        return redirect()->route('admin.receta.index')-> with('info', 'Receta Creada correctamente');;

    }


    
    public function show(Receta $recetum)
    {
        $recetum = Receta::find($recetum->id);
        $recetum->medicamentos;/* 
        return json_encode($recetum); */
        
        return view('admin.receta.show', compact('recetum'));

    }

    
    public function imprimirpdf(Receta $recetum)
    {
        $registro = Receta::find($recetum);
        $pdf = new Dompdf();
        $pdf->loadHtml(view('registros.pdf', compact('registro')));
        $pdf->render();
        
        return $pdf->stream("registro-$recetum.pdf");
    }

    
    public function edit(Receta $recetum)
    {
        
        $nextId = Receta::count();
        
        $this->authorize('author', $recetum);

        $users = User::pluck('name', 'id');
        $medicamentos = Medicamento::all();
        $medicamentos_id = $recetum->medicamentos()->pluck('medicamento.id');
        $diagnosticoscie10 = Diagnosticoscie10::pluck('descripcion', 'id');
        $paciente = Paciente::pluck('nombre','id');
        /* $pacientes = Paciente::all(); */
         
        return view('admin.receta.edit', compact('nextId','recetum', 'users', 'medicamentos','medicamentos_id', 'diagnosticoscie10', 'paciente'));
  
    }

    
    public function update(RecetaRequest $request, Receta $recetum)
    {
        $this->authorize('author', $recetum);
        
        $recetum->update($request->all());

        $recetum->medicamentos()->sync($request->input('medicamentos'));
        
        Cache::flush();
        return redirect()->route('admin.receta.index')-> with('info', 'Datos Actualizados correctamente');;

    
    }

    
    public function destroy(Receta $recetum)
    {
        $this->authorize('author', $recetum);
        
        $recetum->delete();

        Cache::flush();
        return redirect()->route('admin.receta.index')-> with('eliminar', 'ok');
  
    }
}
