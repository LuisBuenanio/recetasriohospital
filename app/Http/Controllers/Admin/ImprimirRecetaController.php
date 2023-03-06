<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receta;
use Dompdf\Dompdf;
use PDF;

class ImprimirRecetaController extends Controller
{
    public function imprimirpdf($id)
    {
        
        $receta = Receta::findOrFail($id);

        $html = view('admin.receta.recetapdf', compact('receta'))->render();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape'); // vertical portrait    /// orizontal landscape
        $dompdf->render();
        $dompdf->stream("Receta-{$receta->id}-.pdf");
    }
}
