<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Receta;
use App\Models\Medicamento;
use Illuminate\Http\Request;


class MedicamentoRecetaController extends Controller
{
    public function store(Request $request, $receta_id)
    {
        $receta = Receta::find($receta_id);
        $medicamento = Medicamento::find($request->medicamento_id);

        $receta->medicamentos()->attach($medicamento, [
            'dosis' => $request->dosis,
            'horario' => $request->horario
        
            ]);

        return redirect()->route('admin.receta.show', $receta_id)->with('success', 'Medicamento agregado correctamente');
    }
}
