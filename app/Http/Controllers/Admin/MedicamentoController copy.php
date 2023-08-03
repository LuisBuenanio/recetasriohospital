<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Models\Medicamento;
use App\Http\Requests\MedicamentoRequest;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    
    public function __construct()
    {
        $this-> middleware('can:admin.medicamento.index')->only('index');
        $this-> middleware('can:admin.medicamento.create')->only('create', 'store');        
        $this-> middleware('can:admin.medicamento.edit')->only('edit', 'update');
        $this-> middleware('can:admin.medicamento.destroy')->only('destroy');
    }
    
    public function index()
    {
        $medicamentos = Medicamento::all();
        return view('admin.medicamento.index', compact('medicamentos'));
    }

     public function create()
    {
        ;
        return view('admin.medicamento.create');
    }
    
    public function store1(MedicamentoRequest $request)
    {
        Medicamento::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.medicamento.index')-> with('info', 'Medicamento Creado correctamente');;

    } 
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'comercial' => 'nullable',
        'concentracion' => 'nullable',
        'presentacion' => 'nullable',
    ]);

    $medicamento = Medicamento::create([
        'nombre' => $request->nombre,
        'comercial' => $request->comercial,
        'concentracion' => $request->concentracion,
        'presentacion' => $request->presentacion,
    ]);

    return response()->json(['success' => true, 'medicamento' => $medicamento]);
}
   
    public function edit($id)
    {
        $medicamento = Medicamento::where('id', $id)->firstOrFail();
        
        return view('admin.medicamento.edit', compact('medicamento'));
    }

     public function update(MedicamentoRequest $request, $id)
    {
        $medicamento = Medicamento::findOrFail($id);

       
        $medicamento->update($request->all());
        
        Cache::flush();
        return redirect()->route('admin.medicamento.index')-> with('info', 'Datos Actualizados correctamente');;

       
    }

    
    public function destroy($id)
    {
        
        $medicamento = Medicamento::findOrFail($id);
        $medicamento->delete();

        Cache::flush();
        return redirect()->route('admin.medicamento.index')-> with('eliminar', 'ok');
  
    }
}
