<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alergia;
use App\Http\Requests\AlergiaRequest;
use Illuminate\Support\Facades\Cache;


class AlergiaController extends Controller
{
    public function __construct()
    {
        $this-> middleware('can:admin.alergia.index')->only('index');
        $this-> middleware('can:admin.alergia.create')->only('create', 'store');        
        $this-> middleware('can:admin.alergia.edit')->only('edit', 'update');
        $this-> middleware('can:admin.alergia.destroy')->only('destroy');
    }
    public function index()
    {
        $alergias = Alergia::all();
        return view('admin.alergia.index', compact('alergias'));
    }
     public function create()
    {
        return view('admin.alergia.create');
  
    }

     public function store(AlergiaRequest $request)
    {
        Alergia::create($request->all());
        
        Cache::flush();
        return redirect()->route('admin.alergia.index')-> with('info', 'Alergia Creada correctamente');;

    }

    
    public function edit(Alergia $alergium)
    {
        return view('admin.alergia.edit' , compact('alergium'));
  
    }

    public function update(AlergiaRequest $request, Alergia $alergium)
    {
        $alergium->update($request->all());
        Cache::flush();
        return redirect()->route('admin.alergia.index')-> with('info', 'Alergia Actualizada correctamente');
   
    }

   
    public function destroy(Alergia $alergium)
    {
        $alergium->delete();
        
        Cache::flush();
        return redirect()->route('admin.alergia.index')-> with('eliminar', 'ok');

    }
}
