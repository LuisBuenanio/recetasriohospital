<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAdministracion;
use Illuminate\Support\Facades\Cache;

class TipoAdministracionController extends Controller
{
    
    public function __construct()
    {
        $this-> middleware('can:admin.tipoadministracion.index')->only('index');
        $this-> middleware('can:admin.tipoadministracion.create')->only('create', 'store');      
        $this-> middleware('can:admin.tipoadministracion.edit')->only('edit', 'update');
        $this-> middleware('can:admin.tipoadministracion.destroy')->only('destroy');
    }
    
    public function index()
    {
        $tipo_administraciones = TipoAdministracion::all();
        return view('admin.tipoadministracion.index', compact('tipo_administraciones'));
  
    }

    
    public function create()
    {
        return view('admin.tipoadministracion.create');
  
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
            'slug' => 'required|unique:tipo_administracion'
        ]);

        TipoAdministracion::create($request->all());
        return redirect()->route('admin.tipoadministracion.index')-> with('info', 'Tipo de Administración Creado correctamente');
   
    }

   
    
    public function edit(TipoAdministracion $tipoadministracion)
    {
        return view('admin.tipoadministracion.edit' , compact('tipoadministracion'));

    }

    
    public function update(Request $request, TipoAdministracion $tipoadministracion)
    {
        $request->validate([
            'descripcion' => 'required',
            'slug' => "required|unique:tipo_administracion,slug,$tipoadministracion->id"
        ]);

        $tipoadministracion->update($request->all());
        return redirect()->route('admin.tipoadministracion.index')-> with('info', 'Tipo de Administracion Actualizado correctamente');
   
    }

    
    public function destroy(TipoAdministracion $tipoadministracion)
    {
        $tipoadministracion->delete();

        return redirect()->route('admin.tipoadministracion.index')-> with('eliminar', 'ok');

    }
}
