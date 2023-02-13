<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receta;
use App\Http\Requests\RecetaRequest;
use App\Models\User;
use App\Models\Alergia;
use App\Models\Medicamento;
use App\Models\Administracion;
use App\Models\Diagnosticoscie10;
use App\Models\Paciente;
use Illuminate\Support\Facades\Cache;

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
  
    public function create()
    {
        $users = User::pluck('name', 'id');
        $alergium = Alergia::pluck('descripcion', 'id');
        $medicamento = Medicamento::pluck('nombre','id');
        $administracion = Administracion::pluck('dosis', 'id');
        $diagnosticoscie10 = Diagnosticoscie10::pluck('descripcion', 'id');
        $paciente = Paciente::pluck('nombre','id');
        
        return view('admin.receta.create', compact('users', 'alergium', 'medicamento', 'administracion', 'diagnosticoscie10', 'paciente'));
  
    }

    
    public function store(RecetaRequest $request)
    {
        Receta::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.receta.index')-> with('info', 'Receta Creada correctamente');;

    }

    
    public function show(Receta $recetum)
    {
        return view('admin.receta.show', compact('recetum'));

    }

    
    public function edit(Receta $recetum)
    {
        
        $this->authorize('author', $recetum);

        $users = User::pluck('name', 'id');
        $alergium = Alergia::pluck('descripcion', 'id');
        $medicamento = Medicamento::pluck('nombre','id');
        $administracion = Administracion::pluck('dosis', 'id');
        $diagnosticoscie10 = Diagnosticoscie10::pluck('descripcion', 'id');
        $paciente = Paciente::pluck('nombre','id');
        /* $pacientes = Paciente::all(); */
         
        return view('admin.receta.edit', compact('recetum', 'users', 'alergium', 'medicamento', 'administracion', 'diagnosticoscie10', 'paciente'));
  
    }

    
    public function update(RecetaRequest $request, Receta $recetum)
    {
        $this->authorize('author', $recetum);
        
        $recetum->update($request->all());
        
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
