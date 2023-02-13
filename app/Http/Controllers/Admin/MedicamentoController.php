<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Models\Medicamento;
use App\Http\Requests\MedicamentoRequest;
use App\Models\TipoMedicamento;
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
        $tipo_medicamento = TipoMedicamento::pluck('descripcion', 'id');
        
        return view('admin.medicamento.create', compact('tipo_medicamento'));
    }

    public function store(MedicamentoRequest $request)
    {
        Medicamento::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.medicamento.index')-> with('info', 'Medicamento Creado correctamente');;

    }

    
    
    public function edit(Medicamento $medicamento )
    {
        $tipo_medicamento = TipoMedicamento::pluck('descripcion', 'id');
        return view('admin.medicamento.edit' , compact('medicamento', 'tipo_medicamento'));
   
    }

     public function update(MedicamentoRequest $request, Medicamento $medicamento)
    {
        $medicamento->update($request->all());
        
        Cache::flush();
        return redirect()->route('admin.medicamento.index')-> with('info', 'Datos Actualizados correctamente');;

       
    }

    
    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete();

        Cache::flush();
        return redirect()->route('admin.medicamento.index')-> with('eliminar', 'ok');
  
    }
}
