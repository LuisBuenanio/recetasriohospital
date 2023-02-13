<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Diagnosticoscie10Request;
use App\Models\Categoriascie10;
use App\Models\Diagnosticoscie10;
use Illuminate\Support\Facades\Cache;

class Diagnosticoscie10Controller extends Controller
{
    public function __construct()
    {
        $this-> middleware('can:admin.diagnosticoscie10.index')->only('index');
        $this-> middleware('can:admin.diagnosticoscie10.create')->only('create', 'store');        
        $this-> middleware('can:admin.diagnosticoscie10.edit')->only('edit', 'update');
        $this-> middleware('can:admin.diagnosticoscie10.destroy')->only('destroy');
    }
    
    public function index()
    {
        $diagnosticoscie10s = Diagnosticoscie10::all();
        return view('admin.diagnosticoscie10.index', compact('diagnosticoscie10s'));
  
    }
     public function create()
    {
        $categoriascie10 = Categoriascie10::pluck( 'clave', 'id');
        
        return view('admin.diagnosticoscie10.create', compact('categoriascie10'));
 
    }

       public function store(Diagnosticoscie10Request $request)
    {
        Diagnosticoscie10::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.diagnosticoscie10.index')-> with('info', 'Diagnóstico CIE-10 Creado correctamente');;

    }

    
    public function edit(Diagnosticoscie10 $diagnosticoscie10)
    {
        $categoriascie10 = Categoriascie10::pluck( 'clave', 'id');
        return view('admin.diagnosticoscie10.edit' , compact('diagnosticoscie10', 'categoriascie10'));
  
    }

    public function update(Diagnosticoscie10Request $request, Diagnosticoscie10 $diagnosticoscie10)
    {
        $diagnosticoscie10->update($request->all());
        
        Cache::flush();
        return redirect()->route('admin.diagnosticoscie10.index')-> with('info', 'Datos Actualizados correctamente');;

 
    }

    
    public function destroy(Diagnosticoscie10 $diagnosticoscie10)
    {
        $diagnosticoscie10->delete();

        Cache::flush();
        return redirect()->route('admin.diagnosticoscie10.index')-> with('eliminar', 'ok');
  
    }
}
