<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use Illuminate\Http\Request;

class BuscarPacienteController extends Controller
{
    public function pacientes(Request $request){
        $term = $request->get('term');

        $querys = Paciente::where('cedula', 'LIKE', '%'. $term. '%' )->get();

        $data = [];

        foreach ($querys as $query) {
            
            $data[] = [
                'label' => $query->cedula
            ];
        }
        return $data;
        
    } 

    public function index()
    {
        return view('autocomplete-search');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $res = Paciente::select("cedula")
                ->where("name","LIKE","%{$request->term}%")
                ->get();
    
        return response()->json($res);
    }
}
