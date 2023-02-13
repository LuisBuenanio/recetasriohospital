<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoMedicamento;
use Illuminate\Support\Facades\Cache;

class TipoMedicamentoController extends Controller
{
    
    public function __construct()
    {
        $this-> middleware('can:admin.tipomedicamento.index')->only('index');
        $this-> middleware('can:admin.tipomedicamento.create')->only('create', 'store');      
        $this-> middleware('can:admin.tipomedicamento.edit')->only('edit', 'update');
        $this-> middleware('can:admin.tipomedicamento.destroy')->only('destroy');
    }
    
    public function index()
    {
        $tipo_medicamentos = TipoMedicamento::all();
        return view('admin.tipomedicamento.index', compact('tipo_medicamentos'));
   
    }

    
    public function create()
    {
        return view('admin.tipomedicamento.create');
  
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
            'slug' => 'required|unique:tipo_medicamento'
        ]);

        TipoMedicamento::create($request->all());
        return redirect()->route('admin.tipomedicamento.index')-> with('info', 'Tipo de Medicamento Creado correctamente');
   
    }

    
    public function show(TipoMedicamento $tipomedicamento)
    {
        return view('admin.tipomedicamento.show' , compact('tipomedicamento'));
    }

    
    public function edit(TipoMedicamento $tipomedicamento)
    {
        return view('admin.tipomedicamento.edit' , compact('tipomedicamento'));

    }

    
    public function update(Request $request, TipoMedicamento $tipomedicamento)
    {
        $request->validate([
            'descripcion' => 'required',
            'slug' => "required|unique:tipo_medicamento,slug,$tipomedicamento->id"
        ]);

        $tipomedicamento->update($request->all());
        return redirect()->route('admin.tipomedicamento.index')-> with('info', 'Tipo de Medicamento Actualizado correctamente');
   
    }

    
    public function destroy(TipoMedicamento $tipomedicamento)
    {
        $tipomedicamento->delete();

        return redirect()->route('admin.tipomedicamento.index')-> with('eliminar', 'ok');

    }
}
