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

class PdfController extends Controller
{
    
    public function index()
    {
        $recetas = Receta::get();
  
        $data = [
            'recetas' => $recetas
        ]; 
            
        $pdf = PDF::loadView('admin.receta.myPDF', $data);
     
        return $pdf->download('laraveltuts.pdf');
    }

}
