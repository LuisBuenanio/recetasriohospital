<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Subgruposcie10Request;
use App\Models\Subgruposcie10;
use App\Models\Gruposcie10;
use Illuminate\Support\Facades\Cache;


class Subgruposcie10Controller extends Controller
{
    
    public function __construct()
    {
        $this-> middleware('can:admin.subgruposcie10.index')->only('index');
        $this-> middleware('can:admin.subgruposcie10.create')->only('create', 'store');      
        $this-> middleware('can:admin.subgruposcie10.edit')->only('edit', 'update');
        $this-> middleware('can:admin.subgruposcie10.destroy')->only('destroy');
    }

    public function index()
    {
        $subgruposcie10s = Subgruposcie10::all();
        return view('admin.subgruposcie10.index', compact('subgruposcie10s'));
  
    }


    
    public function create()
    {
        $gruposcie10 = Gruposcie10::pluck( 'clave', 'id');
        
        return view('admin.subgruposcie10.create', compact('gruposcie10'));
 
    }

    
    public function store(Subgruposcie10Request $request)
    {
        Subgruposcie10::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.subgruposcie10.index')-> with('info', 'Sub Grupo CIE-10 Creado correctamente');;

    }

    
    
    public function edit(Subgruposcie10 $subgruposcie10)
    {
        $gruposcie10 = Gruposcie10::pluck( 'clave', 'id');
        return view('admin.subgruposcie10.edit' , compact('subgruposcie10', 'gruposcie10'));
  
    }

    public function update(Subgruposcie10Request $request, Subgruposcie10 $subgruposcie10)
    {
        $subgruposcie10->update($request->all());
        
        Cache::flush();
        return redirect()->route('admin.subgruposcie10.index')-> with('info', 'Datos Actualizados correctamente');;

    }

    public function destroy(Subgruposcie10 $subgruposcie10)
    {
        $subgruposcie10->delete();

        Cache::flush();
        return redirect()->route('admin.subgruposcie10.index')-> with('eliminar', 'ok');
  
    }
}
