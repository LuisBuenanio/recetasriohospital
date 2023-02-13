<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteRequest;
use App\Models\Paciente;
use App\Models\User;
use App\Models\Sexo;
use Illuminate\Support\Facades\Cache;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this-> middleware('can:admin.paciente.index')->only('index');
        $this-> middleware('can:admin.paciente.create')->only('create', 'store');        
        $this-> middleware('can:admin.paciente.edit')->only('edit', 'update');
        $this-> middleware('can:admin.paciente.destroy')->only('destroy');
    }
    
    public function index()
    {
        $pacientes = Paciente::all();
        return view('admin.paciente.index', compact('pacientes'));
  
    }

     public function create()
    {
        $users = User::pluck('name', 'id');
        $sexo = Sexo::pluck('descripcion', 'id');
        return view('admin.paciente.create', compact('users','sexo'));
  
    }
    public function store(PacienteRequest $request)
    {
        Paciente::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.paciente.index')-> with('info', 'Paciente Creado correctamente');;

    }

   
    public function edit(Paciente $paciente)
    {
        $this->authorize('author', $paciente);
        
        $users = User::pluck('name', 'id');
        $sexo = Sexo::pluck('descripcion', 'id');
        return view('admin.paciente.edit', compact('paciente','users', 'sexo'));
    }

    public function update(PacienteRequest $request, Paciente $paciente)
    {
        $this->authorize('author', $paciente);
        
        $paciente->update($request->all());
        Cache::flush();
        return redirect()->route('admin.paciente.index')-> with('info', 'Paciente Actualizado correctamente');
  
    }

     public function destroy(Paciente $paciente)
    {
        $this->authorize('author', $paciente);
        
        $paciente->delete();
        
        Cache::flush();
        return redirect()->route('admin.paciente.index')-> with('eliminar', 'ok');

    }
}
