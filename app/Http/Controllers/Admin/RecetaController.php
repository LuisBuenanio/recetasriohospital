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
        $diagnosticoscie10 = Diagnosticoscie10::pluck('clave', 'id');
        $paciente = Paciente::pluck('cedula','id');

        return view('admin.receta.create', compact('nextId','users', 'medicamentos', 'diagnosticoscie10', 'paciente'));
  
    }

    public function store(RecetaRequest $request)
    {
       

        $receta = Receta::create($request->all());
        
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



    public function show(Receta $recetum)
    {
        $receta = Receta::findOrFail($recetum->id);
        /* $recetum = Receta::find($recetum->id); */
        /*$recetum->medicamentos;/* 
        return json_encode($recetum); */
        $medicamentos = $receta->medicamentos;

        
        return view('admin.receta.show', compact('receta', 'medicamentos'));

    }

    
    public function imprimirpdf(Receta $recetum)
    {
        $registro = Receta::find($recetum);
        $pdf = new Dompdf();
        $pdf->loadHtml(view('registros.pdf', compact('registro')));
        $pdf->render();
        
        return $pdf->stream("registro-$recetum.pdf");
    }
    

    /* public function edit(Receta $recetum)
    {
        
        $nextId = Receta::count();
        
        $this->authorize('author', $recetum);

        $users = User::pluck('name', 'id'); 
        $medicamentos = Medicamento::all(); 
        $medicamentos = Medicamento::pluck('nombre', 'id'); 
        $medicamentos_id = $recetum->medicamentos()->pluck('medicamento.id');
        $diagnosticoscie10 = Diagnosticoscie10::pluck('descripcion', 'id');
        $paciente = Paciente::pluck('nombre','id');
        $pacientes = Paciente::all(); 
         
        return view('admin.receta.edit', compact('nextId','recetum', 'users', 'medicamentos','medicamentos_id', 'diagnosticoscie10', 'paciente'));
   
  
    }*/

    public function edit(Receta $recetum)
    {
        $nextId = Receta::count();

        $users = User::pluck('name', 'id');/* 
        $medicamentos = Medicamento::all(); *//* 
        $medicamentos = Medicamento::pluck('nombre','id'); */
        $medicamentos = Medicamento::selectRaw("CONCAT(nombre, ' (', comercial, ') ', concentracion) as nombre_concentracion, id")
        ->pluck('nombre_concentracion', 'id');
        $diagnosticoscie10 = Diagnosticoscie10::pluck('descripcion', 'id');
        $paciente = Paciente::pluck('nombre','id');

        return view('admin.receta.edit', compact('nextId', 'recetum', 'users', 'medicamentos', 'diagnosticoscie10', 'paciente'));
    }
 
    
    /* public function update(RecetaRequest $request, Receta $recetum)
    {
        $this->authorize('author', $recetum);
        
        $recetum->update($request->all());

        $medicamentos = $request->input('medicamentos', []);
        $cantidades = $request->input('cantidades', []);
        $indicaciones = $request->input('indicaciones', []);


        for ($medicamento = 0; $medicamento < count($medicamentos); $medicamento++) {
            if ($medicamentos[$medicamento] != '') {
                $recetum->medicamentos()->attach($medicamentos[$medicamento], ['cantidad' => $cantidades[$medicamento], 'indicacion' => $indicaciones[$medicamento]]);
            }
        }    

        
        
        Cache::flush();
        return redirect()->route('admin.receta.index')-> with('info', 'Datos Actualizados correctamente');;

    
    } */

    public function update(RecetaRequest $request, Receta $recetum)
    {
        $this->authorize('author', $recetum);        
        $recetum->update($request->all());

        //Eliminar las relaciones anteriores
        $recetum->medicamentos()->detach();

        // Actualizar relaciones
        $medicamentos = $request->input('medicamentos', []);
        $cantidades = $request->input('cantidades', []);
        $indicaciones = $request->input('indicaciones', []);

        for ($medicamento = 0; $medicamento < count($medicamentos); $medicamento++) {
            if ($medicamentos[$medicamento] != '') {
                $recetum->medicamentos()->attach($medicamentos[$medicamento], ['cantidad' => $cantidades[$medicamento], 'indicacion' => $indicaciones[$medicamento]]);
            }
        }
        Cache::flush();
        return redirect()->route('admin.receta.index')->with('info', 'Receta actualizada correctamente');
    }

    
    public function destroy(Receta $recetum)
    {
        $this->authorize('author', $recetum);
        
        $recetum->delete();

        Cache::flush();
        return redirect()->route('admin.receta.index')-> with('eliminar', 'ok');
  
    }


}
