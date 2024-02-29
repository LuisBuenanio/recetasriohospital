<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formulario008;
use Dompdf\Dompdf;
use PDF;


class ImprimirFormulario008Controller extends Controller
{
    public function imprimirpdf($id)
    {
        
        $formulario008 = Formulario008::findOrFail($id);

        $html = view('admin.formulario008.formulario008pdf', compact('formulario008'))->render();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait'); // vertical portrait    /// orizontal landscape
        $dompdf->render();
        $dompdf->stream("Formulario-{$formulario008->id}-.pdf");
    }
}
