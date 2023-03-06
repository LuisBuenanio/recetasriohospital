<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteRequest;
use App\Models\Paciente;
use App\Models\Sexo;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

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
        $sexo = Sexo::pluck('descripcion', 'id');
        return view('admin.paciente.create', compact('sexo'));
  
    }
    public function store(PacienteRequest $request)
    {
        
        $paciente = Paciente::create($request->all()); 

        $paciente->fecha_nacimiento = Carbon::parse($request->fecha_nacimiento);
       
        
        /* $carbon_fecha_nacimiento = new Carbon($fecha_nacimiento);
        $edad = $carbon_fecha_nacimiento->diffInYears(Carbon::now()); */
        /* $paciente->fecha_nacimiento = Carbon::parse($request->fecha_nacimiento); */
        /* $fechaNacimiento = Carbon::createFromFormat('Y-m-d', $request->input('fecha_nacimiento'));
        $edad = $fechaNacimiento->diffInYears(Carbon::now());
        */ 
        $paciente->save();
        Cache::flush();
        
        return redirect()->route('admin.paciente.index')-> with('info', 'Paciente Creado correctamente');;

    }

   
    public function edit(Paciente $paciente)
    {
        
        $sexo = Sexo::pluck('descripcion', 'id');
        return view('admin.paciente.edit', compact('paciente','sexo'));
    }

    public function update(PacienteRequest $request, Paciente $paciente)
    {
        
        $paciente->update($request->all());
        Cache::flush();
        return redirect()->route('admin.paciente.index')-> with('info', 'Paciente Actualizado correctamente');
  
    }

     public function destroy(Paciente $paciente)
    {
         
        $paciente->delete();
        
        Cache::flush();
        return redirect()->route('admin.paciente.index')-> with('eliminar', 'ok');

    }
}
