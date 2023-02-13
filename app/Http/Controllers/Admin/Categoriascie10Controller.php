<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Categoriascie10Request;
use App\Models\Categoriascie10;
use App\Models\Subgruposcie10;
use Illuminate\Support\Facades\Cache;

class Categoriascie10Controller extends Controller
{
    public function __construct()
    {
        $this-> middleware('can:admin.categoriascie10.index')->only('index');
        $this-> middleware('can:admin.categoriascie10.create')->only('create', 'store');        
        $this-> middleware('can:admin.categoriascie10.edit')->only('edit', 'update');
        $this-> middleware('can:admin.categoriascie10.destroy')->only('destroy');
    }
    
    public function index()
    {
        $categoriascie10s = Categoriascie10::all();
        return view('admin.categoriascie10.index', compact('categoriascie10s'));
  
    }
     public function create()
    {
        $subgruposcie10 = Subgruposcie10::pluck( 'clave', 'id');
        
        return view('admin.categoriascie10.create', compact('subgruposcie10'));
 
    }

       public function store(Categoriascie10Request $request)
    {
        Categoriascie10::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.categoriascie10.index')-> with('info', 'Categoría CIE-10 Creado correctamente');;

    }

    
    public function edit(Categoriascie10 $categoriascie10)
    {
        $subgruposcie10 = Subgruposcie10::pluck( 'clave', 'id');
        return view('admin.categoriascie10.edit' , compact('categoriascie10', 'subgruposcie10'));
  
    }

    public function update(Categoriascie10Request $request, Categoriascie10 $categoriascie10)
    {
        $categoriascie10->update($request->all());
        
        Cache::flush();
        return redirect()->route('admin.categoriascie10.index')-> with('info', 'Datos Actualizados correctamente');;

 
    }

    
    public function destroy(Categoriascie10 $categoriascie10)
    {
        $categoriascie10->delete();

        Cache::flush();
        return redirect()->route('admin.categoriascie10.index')-> with('eliminar', 'ok');
  
    }
}
