<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receta;
use Dompdf\Dompdf;
use PDF;


class ExampleController extends Controller
{
   
    /* public function show(Receta $recetum)
    {
        $registro = Receta::find($recetum);
        $pdf = new Dompdf();
        $pdf->loadHtml(view('admin.receta.generadopdf', compact('registro')));
        $pdf->render();
        
        return $pdf->stream("registro-$recetum.pdf");
    } */

    /* public function show(Receta $recetum)
    {
        $recetas = Receta::find($recetum);
  
        $data = [
            'receta' => $recetas
        ]; 
            
        $pdf = PDF::loadView('admin.receta.generadopdf', $data);
     
        return $pdf->download('laraveltuts.pdf');
    } */ 

    public function show($id)
    {
        $receta = Receta::findOrFail($id);
        $html = view('admin.receta.generadopdf', compact('receta'))->render();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("registro-{$receta->id}.pdf");
    }
}
