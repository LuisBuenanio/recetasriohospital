<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Models\Medicamento;
use App\Models\User;
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
        /* $this->authorize('author', $medicamento); */
        $medicamentos = Medicamento::all();
        return view('admin.medicamento.index', compact('medicamentos'));
    }

     public function create()
    {
        $users = User::pluck('name', 'id');
        return view('admin.medicamento.create', compact('users'));
    }

    public function store(MedicamentoRequest $request)
    {
        Medicamento::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.medicamento.index')-> with('info', 'Medicamento Creado correctamente');;

    }

    
    
    public function edit(Medicamento $medicamento )
    {
        $this->authorize('author', $medicamento);
        
        $users = User::pluck('name', 'id');
        return view('admin.medicamento.edit' , compact('medicamento', 'users'));
   
    }

     public function update(MedicamentoRequest $request, Medicamento $medicamento)
    {
        $this->authorize('author', $medicamento);
       
        $medicamento->update($request->all());
        
        Cache::flush();
        return redirect()->route('admin.medicamento.index')-> with('info', 'Datos Actualizados correctamente');;

       
    }

    
    public function destroy(Medicamento $medicamento)
    {
        $this->authorize('author', $medicamento);
        
        $medicamento->delete();

        Cache::flush();
        return redirect()->route('admin.medicamento.index')-> with('eliminar', 'ok');
  
    }
}
