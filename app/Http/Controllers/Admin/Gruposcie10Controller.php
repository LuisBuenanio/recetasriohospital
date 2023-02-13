<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Gruposcie10Request;
use App\Models\Gruposcie10;
use Illuminate\Support\Facades\Cache;


class Gruposcie10Controller extends Controller
{
    public function __construct()
    {
        $this-> middleware('can:admin.gruposcie10.index')->only('index');
        $this-> middleware('can:admin.gruposcie10.create')->only('create', 'store');        
        $this-> middleware('can:admin.gruposcie10.edit')->only('edit', 'update');
        $this-> middleware('can:admin.gruposcie10.destroy')->only('destroy');
    }
    
    public function index()
    {
        $gruposcie10s = Gruposcie10::all();
        return view('admin.gruposcie10.index', compact('gruposcie10s'));
  
    }

     public function create()
    {
        return view('admin.gruposcie10.create');
  
    }

     public function store(Gruposcie10Request $request)
    {
        Gruposcie10::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.gruposcie10.index')-> with('info', 'Grupo CIE-10 Creado correctamente');;

    }

   
    public function edit(Gruposcie10 $gruposcie10)
    {
        return view('admin.gruposcie10.edit' , compact('gruposcie10'));
    }

    public function update(Gruposcie10Request $request, Gruposcie10 $gruposcie10)
    {
        $gruposcie10->update($request->all());
        Cache::flush();
        return redirect()->route('admin.gruposcie10.index')-> with('info', 'Grupo CIE-10 Actualizado correctamente');
  
    }

     public function destroy(Gruposcie10 $gruposcie10)
    {
        $gruposcie10->delete();
        
        Cache::flush();
        return redirect()->route('admin.gruposcie10.index')-> with('eliminar', 'ok');

    }
}
