<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Administracion;
use App\Http\Requests\AdministracionRequest;
use App\Models\TipoAdministracion;

class AdministracionController extends Controller
{
    public function __construct()
    {
        $this-> middleware('can:admin.administracion.index')->only('index');
        $this-> middleware('can:admin.administracion.create')->only('create', 'store');        
        $this-> middleware('can:admin.administracion.edit')->only('edit', 'update');
        $this-> middleware('can:admin.administracion.destroy')->only('destroy');
    }
    
    
    public function index()
    {
        $administraciones = Administracion::all();
        return view('admin.administracion.index', compact('administraciones'));
    }

     public function create()
    {
        $tipo_administracion = TipoAdministracion::pluck('descripcion', 'id');
        
        return view('admin.administracion.create', compact('tipo_administracion'));
    }

      public function store(AdministracionRequest $request)
    {
        Administracion::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.administracion.index')-> with('info', 'Administracion Creado correctamente');;

    }

    
    
    public function edit(Administracion $administracion )
    {
        $tipo_administracion = TipoAdministracion::pluck('descripcion', 'id');
        return view('admin.administracion.edit' , compact('administracion', 'tipo_administracion'));
   
    }

     public function update(AdministracionRequest $request, Administracion $administracion)
    {
        $administracion->update($request->all());
        
        Cache::flush();
        return redirect()->route('admin.administracion.index')-> with('info', 'Datos Actualizados correctamente');;

       
    }

    
    public function destroy(Administracion $administracion)
    {
        $administracion->delete();

        Cache::flush();
        return redirect()->route('admin.administracion.index')-> with('eliminar', 'ok');
  
    }
}
