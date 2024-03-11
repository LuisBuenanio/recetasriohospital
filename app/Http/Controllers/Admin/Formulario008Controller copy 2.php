<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formulario008;
use App\Models\User;
use App\Models\Diagnosticoscie10;
use App\Models\Paciente;
use App\Models\Sexo;
use App\Models\Provincia;
use App\Models\Ciudad;
use App\Models\Lesion;
use App\Models\LesionFormulario;
use Illuminate\Support\Facades\Cache;
use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class Formulario008Controller extends Controller
{
    public function __construct()
    {
        $this-> middleware('can:admin.formulario008.index')->only('index');
        $this-> middleware('can:admin.formulario008.create')->only('create', 'store');        
        $this-> middleware('can:admin.formulario008.show')->only('show');        
        $this-> middleware('can:admin.formulario008.edit')->only('edit', 'update');
        $this-> middleware('can:admin.formulario008.destroy')->only('destroy');
    }

    
    public function getPacientes(Request $request)
    {
        $pacienteId = $request->input('paciente_id');

        // Aquí realizas las operaciones para obtener los datos del paciente con el ID proporcionado
        $paciente = Paciente::findOrFail($pacienteId);

        // Verificar si el paciente tiene provincia y ciudad especificadas
        if (!$paciente->ciudad_id) {
            // Obtener la primera ciudad existente y asignarla al paciente
            $primeraCiudad = Ciudad::orderBy('id', 'asc')->first();
            if ($primeraCiudad) {
                $paciente->ciudad_id = $primeraCiudad->id;
                $paciente->save();
            }
        }

        if (!$paciente->ciudad->provincia_id) {
            // Obtener la primera provincia de la ciudad asignada al paciente
            $primeraProvincia = Provincia::where('id', $paciente->ciudad->provincia_id)->first();
            if ($primeraProvincia) {
                $paciente->ciudad->provincia_id = $primeraProvincia->id;
                $paciente->ciudad->save();
            }
        }

         // Asignar valor a la nacionalidad
        $nacionalidad = strtolower($paciente->nacionalidad);
        if ($nacionalidad === 'ecuatoriano') {
            $paciente->nacionalidad = 'ECUATORIANO';
        } elseif ($nacionalidad === 'extranjero') {
            $paciente->nacionalidad = 'EXTRANJERO';
        } else {
            $paciente->nacionalidad = 'SIN NACIONALIDAD';
        }
        // Luego, devuelves los datos del paciente como una respuesta JSON
        return response()->json([
            'nacionalidad' => $paciente->nacionalidad,
            'apellido_paterno' => $paciente->apellido_paterno,
            'apellido_materno' => $paciente->apellido_materno,
            'nombre' => $paciente->nombre,
            'edad' => $paciente->edad,
            'telefono' => $paciente->telefono,
            'direccion' => $paciente->direccion,
            'ocupacion' => $paciente->ocupacion,
            'estado_civil' => $paciente->estado_civil,
            'instruccion' => $paciente->instruccion,
            'sexo' => $paciente->sexo->descripcion,
            'provincia1' => $paciente->ciudad->provincia->descripcion,
            'ciudad' => $paciente->ciudad->descripcion,
        ]);
    }

    public function getPacientes1(Request $request)
    {
        $pacienteId = $request->input('paciente_id');

        // Aquí realizas las operaciones para obtener los datos del paciente con el ID proporcionado
        $paciente = Paciente::findOrFail($pacienteId);

        // Verificar si el paciente tiene provincia y ciudad especificadas
        if (!$paciente->ciudad_id) {
            // Obtener la primera ciudad existente y asignarla al paciente
            $primeraCiudad = Ciudad::orderBy('id', 'asc')->first();
            if ($primeraCiudad) {
                $paciente->ciudad_id = $primeraCiudad->id;
                $paciente->save();
            }
        }

        if (!$paciente->ciudad->provincia_id) {
            // Obtener la primera provincia de la ciudad asignada al paciente
            $primeraProvincia = Provincia::where('id', $paciente->ciudad->provincia_id)->first();
            if ($primeraProvincia) {
                $paciente->ciudad->provincia_id = $primeraProvincia->id;
                $paciente->ciudad->save();
            }
        }

         // Asignar valor a la nacionalidad
        $nacionalidad = strtolower($paciente->nacionalidad);
        if ($nacionalidad === 'ecuatoriano') {
            $paciente->nacionalidad = 'ECUATORIANO';
        } elseif ($nacionalidad === 'extranjero') {
            $paciente->nacionalidad = 'EXTRANJERO';
        } else {
            $paciente->nacionalidad = 'SIN NACIONALIDAD';
        }
        // Luego, devuelves los datos del paciente como una respuesta JSON
        return response()->json([
            'nacionalidad' => $paciente->nacionalidad,
            'apellido_paterno' => $paciente->apellido_paterno,
            'apellido_materno' => $paciente->apellido_materno,
            'nombre' => $paciente->nombre,
            'edad' => $paciente->edad,
            'telefono' => $paciente->telefono,
            'direccion' => $paciente->direccion,
            'ocupacion' => $paciente->ocupacion,
            'estado_civil' => $paciente->estado_civil,
            'instruccion' => $paciente->instruccion,
            'sexo' => $paciente->sexo->descripcion,
            'provincia1' => $paciente->ciudad->provincia->descripcion,
            'ciudad' => $paciente->ciudad->descripcion,
        ]);
    }

    
    


    public function getDiagnosticoscie10(Request $request){

        $search = $request->search;
  
        if($search == ''){
           $diagnosticoscie10s = Diagnosticoscie10::orderby('descripcion','asc')->select('id','clave','descripcion')->limit(15)->get();
        }else{
           $diagnosticoscie10s = Diagnosticoscie10::orderby('descripcion','asc')->select('id', 'clave','descripcion')->where('descripcion', 'like', '%' .$search . '%')->limit(15)->get();
        }
  
        $response = array();
        foreach($diagnosticoscie10s as $diagnosticoscie10){
           $response[] = array("id"=>$diagnosticoscie10->id, "text"=>$diagnosticoscie10->clave ,"descripcion"=>$diagnosticoscie10->descripcion, );
        }
  
        return response()->json($response);
    } 
    

    public function index()
    {
        $formulario008s = Formulario008::all();
        return view('admin.formulario008.index', compact('formulario008s'));
    }

    public function create()
    {
        $maxFormulario008Id = Formulario008::max('id'); // Obtenemos el valor máximo actual del campo 'id' en la tabla 'formulario008'
        $nextId = $maxFormulario008Id + 1; // Incrementamos en uno para obtener el próximo número de formulario008

        $formulario008 = new Formulario008();
        $users = User::pluck('name', 'id');
        // Obtener medicamentos disponibles para la selección

       /*  $diagnosticoscie10s = Diagnosticoscie10::pluck('clave', 'id'); */

        $sexo = Sexo::pluck('descripcion', 'id');
        $pacientes = Paciente::all();
        $provincias = Provincia::all();

        
        $diagnosticoscie10s = Diagnosticoscie10::all();
        
        $lesiones = Lesion::all();
        $ciudades = Ciudad::all(); // Obtener todas las ciudades
    

        return view('admin.formulario008.create', compact('nextId','users', 'sexo', 'diagnosticoscie10s', 'pacientes', 'lesiones', 'ciudades', 'provincias'));
        
    }

    public function store(Request $request)
    {
        

            $formulario008 = Formulario008::create($request->all());

            $obser_antec_personaless = explode("\n", $request->input('obser_antec_personales'));
            $obser_antec_personalesString = implode("\n", $obser_antec_personaless);
            $enf_actual_sistemass = explode("\n", $request->input('enf_actual_sistemas'));
            $enf_actual_sistemasString = implode("\n", $enf_actual_sistemass);
            $obser_examen_fisicos = explode("\n", $request->input('obser_examen_fisico'));
            $obser_examen_fisicoString = implode("\n", $obser_examen_fisicos);
            $obser_embarazo_partos = explode("\n", $request->input('obser_embarazo_parto'));
            $obser_embarazo_partoString = implode("\n", $obser_embarazo_partos);
            $analisis_problemass = explode("\n", $request->input('analisis_problemas'));
            $analisis_problemasString = implode("\n", $analisis_problemass);

            
            $formulario008->save();

            
                    // Procesar las lesiones
                $lesiones = $request->input('lesiones', []);

                foreach ($lesiones as $lesion) {
                    if (isset($lesion['id'])) {
                        $lesion_id = $lesion['id'];
                        $posicion_x = $lesion['posicion_x'];
                        $posicion_y = $lesion['posicion_y'];

                        // Guardar la relación en la tabla lesion_formulario
                        $formulario008->lesiones()->attach($lesion_id, [
                            'posicion_x' => $posicion_x,
                            'posicion_y' => $posicion_y
                        ]);
                    }
                }


                /* // Luego, generas el PDF
                    $html = view('admin.formulario008.formulario008pdf', compact('formulario008'))->render();
                    
                    $dompdf = new Dompdf();
                    $dompdf->loadHtml($html);
                    $dompdf->setPaper('A4', 'portrait');
                    $dompdf->render();

                    $dompdf->stream("Formulario-{$formulario008->id}-.pdf");
            */
        // Verifica si hay diagnósticos seleccionados
        /* if ($request->has('diagnosticoscie10s')) {
            // Filtra los diagnósticos seleccionados para eliminar los valores vacíos
            $diagnosticosIds = array_filter($request->input('diagnosticoscie10s'));

            // Verifica si hay al menos un diagnóstico seleccionado
            if (!empty($diagnosticosIds)) {
                // Adjunta los diagnósticos CIE-10 al formulario
                $formulario008->diagnosticoscie10()->attach($diagnosticosIds);
            }
        } */

        // Verificar si hay diagnósticos presuntivos seleccionados
        if ($request->has('diagnosticos_presuntivos')) {
            
            $diagnosticosIds = array_filter($request->input('diagnosticos_presuntivos'));

             // Verifica si hay al menos un diagnóstico seleccionado
             if (!empty($diagnosticosIds)) {
                // Adjunta los diagnósticos CIE-10 al formulario
                $formulario008->diagnosticosPresuntivos()->attach($diagnosticosIds);
            }            
        }


        // Verificar si hay diagnósticos presuntivos seleccionados
        if ($request->has('diagnosticos_definitivos')) {
            
            $diagnosticosIds = array_filter($request->input('diagnosticos_definitivos'));

             // Verifica si hay al menos un diagnóstico seleccionado
             if (!empty($diagnosticosIds)) {
                // Adjunta los diagnósticos CIE-10 al formulario
                $formulario008->diagnosticosDefinitivos()->attach($diagnosticosIds);
            }            
        }



  


        return redirect()->route('admin.formulario008.index')-> with('info', 'Formulario 008 Creado correctamente');

            
    }   

    public function imprimirpdf($id)
    {
        $formulario008 = Formulario008::findOrFail($id);      
        $lesiones = Lesion::all();     

        $html = view('admin.formulario008.formulario008pdf', compact('formulario008','lesiones'))->render();
       
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        
        
        return $dompdf->stream("Formulario-{$formulario008->id}-.pdf");
    }

    public function imprimirpdf1($id)
    {
        $formulario008 = Formulario008::findOrFail($id);       
        $lesiones = Lesion::all();

        $html = view('admin.formulario008.formulario008pdf', compact('formulario008', 'lesiones'))->render();
    
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Cambiar de stream a output para mostrar en pantalla
        $pdfOutput = $dompdf->output();

        // Retornar una respuesta con el PDF en pantalla
        return Response::make($pdfOutput, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Formulario-' . $formulario008->id . '.pdf"'
        ]);


    }

    public function show($id)
    {
        
        
        $formulario008 = Formulario008::findOrFail($id);
        $diagnosticoscie10s = $formulario008->diagnosticoscie10s;

        
        return view('admin.formulario008.show', compact('formulario008', 'diagnosticoscie10s'));

    }

    public function edit($id)
    {
        $formulario008 = Formulario008::findOrFail($id);

        /* $this->authorize('author', $formulario008); */
        $users = User::pluck('name', 'id');


        $sexo = Sexo::pluck('descripcion', 'id');
        $lesiones = Lesion::all();
        $pacientes = Paciente::all();
        $provincias = Provincia::all();
        $ciudades = Ciudad::all(); 
        $diagnosticoscie10s = Diagnosticoscie10::all();

      /*   $medicamentos = Medicamento::selectRaw("CONCAT(nombre, ' (', concentracion, ') ', tipo) as nombre_concentracion, id")
        ->pluck('nombre_concentracion', 'id');
         */

        
              
         // Recuperar los diagnósticos presuntivos asociados al formulario
        $diagnosticosPresuntivos = $formulario008->diagnosticosPresuntivos;

        // Recuperar los diagnósticos definitivos asociados al formulario
        $diagnosticosDefinitivos = $formulario008->diagnosticosDefinitivos;

        // Obtener todos los diagnósticos disponibles para el formulario
        $diagnosticos = Diagnosticoscie10::all();

        return view('admin.formulario008.edit', compact('formulario008', 'users', 'diagnosticos' , 'diagnosticoscie10s' ,'pacientes', 'provincias', 'ciudades', 'sexo','diagnosticosPresuntivos', 'diagnosticosDefinitivos' ,'lesiones'));
    }
 
    public function update(Request $request, $id)
    {
         //
        $formulario008 = Formulario008::findOrFail($id);

       /*  $this->authorize('author', $formulario008); */

        //        
        $formulario008->via_aerea_libre = $request->has('via_aerea_libre') ? 'Si' : 'No';
        $formulario008->via_aerea_obstruida = $request->has('via_aerea_obstruida') ? 'Si' : 'No';
        
        $formulario008->custodia_policial = $request->has('custodia_policial') ? 'Si' : 'No';
        $formulario008->aliento_etilico = $request->has('aliento_etilico') ? 'Si' : 'No';
        $formulario008->alcoholemia = $request->has('alcoholemia') ? 'Si' : 'No';
        $formulario008->otras_sustancias1 = $request->has('otras_sustancias1') ? 'Si' : 'No';
        $formulario008->otras_sustancias2 = $request->has('otras_sustancias2') ? 'Si' : 'No';
        
        $formulario008->v_sospecha = $request->has('v_sospecha') ? 'Si' : 'No';
        $formulario008->v_abuso_fisico = $request->has('v_abuso_fisico') ? 'Si' : 'No';
        $formulario008->v_abuso_psicologico = $request->has('v_abuso_psicologico') ? 'Si' : 'No';
        $formulario008->v_abuso_sexual = $request->has('v_abuso_sexual') ? 'Si' : 'No';
       
        $formulario008->alergicos = $request->has('alergicos') ? 'Si' : 'No';
        $formulario008->clinicos = $request->has('clinicos') ? 'Si' : 'No';
        $formulario008->ginecologicos = $request->has('ginecologicos') ? 'Si' : 'No';
        $formulario008->traumatologicos = $request->has('traumatologicos') ? 'Si' : 'No';
        $formulario008->pediatricos = $request->has('pediatricos') ? 'Si' : 'No';
        $formulario008->quirurgicos = $request->has('quirurgicos') ? 'Si' : 'No';
        $formulario008->farmacologicos = $request->has('farmacologicos') ? 'Si' : 'No';
        $formulario008->otros = $request->has('otros') ? 'Si' : 'No';
       //linea 57 de base de datos

       //cuando los checkbox de 9. examen fisico se cambia a null en edicion
        if ($request->has('r_piel_faneras')) {
                $formulario008->r_piel_faneras = $request->input('r_piel_faneras');
            } else {
            
                $formulario008->r_piel_faneras = null;
            }
            //
            if ($request->has('r_cabeza')) {
                $formulario008->r_cabeza = $request->input('r_cabeza');
            } else {
            
                $formulario008->r_cabeza = null;
            }
            //
            if ($request->has('r_ojos')) {
                $formulario008->r_ojos = $request->input('r_ojos');
            } else {
            
                $formulario008->r_ojos = null;
            }
            if ($request->has('r_oidos')) {
                $formulario008->r_oidos = $request->input('r_oidos');
            } else {
            
                $formulario008->r_oidos = null;
            }
            //
            if ($request->has('r_nariz')) {
                $formulario008->r_nariz = $request->input('r_nariz');
            } else {
            
                $formulario008->r_nariz = null;
            }
            //
            if ($request->has('r_boca')) {
                $formulario008->r_boca = $request->input('r_boca');
            } else {
            
                $formulario008->r_boca = null;
            }
            //
            if ($request->has('r_oro_faringe')) {
                $formulario008->r_oro_faringe = $request->input('r_oro_faringe');
            } else {
            
                $formulario008->r_oro_faringe = null;
            }
            //
            if ($request->has('r_cuello')) {
                $formulario008->r_cuello = $request->input('r_cuello');
            } else {
            
                $formulario008->r_cuello = null;
            }
            //
            if ($request->has('r_axilas_mamas')) {
                $formulario008->r_axilas_mamas = $request->input('r_axilas_mamas');
            } else {
            
                $formulario008->r_axilas_mamas = null;
            }
            //
            if ($request->has('r_torax')) {
                $formulario008->r_torax = $request->input('r_torax');
            } else {
            
                $formulario008->r_torax = null;
            }
            //
            if ($request->has('r_abdomen')) {
                $formulario008->r_abdomen = $request->input('r_abdomen');
            } else {
            
                $formulario008->r_abdomen = null;
            }
            //
            if ($request->has('r_columna_vertebral')) {
                $formulario008->r_columna_vertebral = $request->input('r_columna_vertebral');
            } else {
            
                $formulario008->r_columna_vertebral = null;
            }
            //
            if ($request->has('r_ingle_perine')) {
                $formulario008->r_ingle_perine = $request->input('r_ingle_perine');
            } else {
            
                $formulario008->r_ingle_perine = null;
            }
            //
            if ($request->has('r_miembros_superiores')) {
                $formulario008->r_miembros_superiores = $request->input('r_miembros_superiores');
            } else {
            
                $formulario008->r_miembros_superiores = null;
            }

            //
            if ($request->has('r_miembros_inferiores')) {
                $formulario008->r_miembros_superiores = $request->input('r_miembros_inferiores');
            } else {
            
                $formulario008->r_miembros_inferiores = null;
            }
            ////

            //
            if ($request->has('s_organos_sentidos')) {
                $formulario008->s_organos_sentidos = $request->input('s_organos_sentidos');
            } else {
            
                $formulario008->s_organos_sentidos = null;
            }
            ////
            if ($request->has('s_respiratorio')) {
                $formulario008->s_respiratorio = $request->input('s_respiratorio');
            } else {
            
                $formulario008->s_respiratorio = null;
            }
            ////
            if ($request->has('s_cardiovascular')) {
                $formulario008->s_cardiovascular = $request->input('s_cardiovascular');
            } else {
            
                $formulario008->s_cardiovascular = null;
            }
            ////
            if ($request->has('s_digestivo')) {
                $formulario008->s_digestivo = $request->input('s_digestivo');
            } else {
            
                $formulario008->s_digestivo = null;
            }
            ////
            if ($request->has('s_genital')) {
                $formulario008->s_genital = $request->input('s_genital');
            } else {
            
                $formulario008->s_genital = null;
            }
            ////
            if ($request->has('s_urinario')) {
                $formulario008->s_urinario = $request->input('s_urinario');
            } else {
            
                $formulario008->s_urinario = null;
            }
            ////
            if ($request->has('s_musculo_esqueletico')) {
                $formulario008->s_musculo_esqueletico = $request->input('s_musculo_esqueletico');
            } else {
            
                $formulario008->s_musculo_esqueletico = null;
            }
            ////
            if ($request->has('s_endocrino')) {
                $formulario008->s_endocrino = $request->input('s_endocrino');
            } else {
            
                $formulario008->s_endocrino = null;
            }
            ////
            if ($request->has('s_hemolinfatico')) {
                $formulario008->s_hemolinfatico = $request->input('s_hemolinfatico');
            } else {
            
                $formulario008->s_hemolinfatico = null;
            }
            ////
            if ($request->has('s_neurologico')) {
                $formulario008->s_neurologico = $request->input('s_neurologico');
            } else {
            
                $formulario008->s_neurologico = null;
        }
            ////      
        
        $formulario008->biometria = $request->has('biometria') ? 'Si' : 'No';
        $formulario008->quimica_sanguinea = $request->has('quimica_sanguinea') ? 'Si' : 'No';
        $formulario008->gasometria = $request->has('gasometria') ? 'Si' : 'No';
        $formulario008->endoscopia = $request->has('endoscopia') ? 'Si' : 'No';
        $formulario008->radiografia_abdomen = $request->has('radiografia_abdomen') ? 'Si' : 'No';
        $formulario008->tomografia = $request->has('tomografia') ? 'Si' : 'No';
        $formulario008->endoscopia = $request->has('endoscopia') ? 'Si' : 'No';
        $formulario008->radiografia_abdomen = $request->has('radiografia_abdomen') ? 'Si' : 'No';
        $formulario008->tomografia = $request->has('tomografia') ? 'Si' : 'No';
        $formulario008->ecografia_pelvica = $request->has('ecografia_pelvica') ? 'Si' : 'No';
        $formulario008->interconsulta_especializada = $request->has('interconsulta_especializada') ? 'Si' : 'No';
        $formulario008->uroanalisis = $request->has('uroanalisis') ? 'Si' : 'No';
        $formulario008->electrolitos = $request->has('electrolitos') ? 'Si' : 'No';
        $formulario008->electrocardiograma = $request->has('electrocardiograma') ? 'Si' : 'No';
        $formulario008->r_x_torax = $request->has('r_x_torax') ? 'Si' : 'No';
        $formulario008->r_x_osea = $request->has('r_x_osea') ? 'Si' : 'No';
        $formulario008->resonancia = $request->has('resonancia') ? 'Si' : 'No';
        $formulario008->ecografia_abdominal = $request->has('ecografia_abdominal') ? 'Si' : 'No';
        $formulario008->pd_otros = $request->has('pd_otros') ? 'Si' : 'No';

        
        $formulario008->pt_indicaciones_generales = $request->has('pt_indicaciones_generales') ? 'Si' : 'No';        
        $formulario008->pt_consentimiento_informado  = $request->has('pt_consentimiento_informado') ? 'Si' : 'No';        
        $formulario008->pt_procedimientos = $request->has('pt_procedimientos') ? 'Si' : 'No';
        $formulario008->pt_otros = $request->has('pt_otros') ? 'Si' : 'No';
        
        $formulario008->muerto_emergencia = $request->has('muerto_emergencia') ? 'Si' : 'No';

        if ($request->has('causa_muerte')) {
            $formulario008->causa_muerte = $request->input('causa_muerte');
        } else {
        
            $formulario008->causa_muerte = null;
        }

        $formulario008->update($request->all());
        // 
        $formulario008->save();

        
        //Diagnosticos Presuntivos
        $formulario008->diagnosticosPresuntivos()->detach();

        $diagnosticos_presuntivos = $request->input('diagnosticos_presuntivos', []);

        for ($diagnosticoscie10 = 0; $diagnosticoscie10 < count($diagnosticos_presuntivos); $diagnosticoscie10++) {
            if ($diagnosticos_presuntivos[$diagnosticoscie10] != '') {
                $formulario008->diagnosticosPresuntivos()->attach($diagnosticos_presuntivos[$diagnosticoscie10]);
            }
        } 
        // Diagnosticos definitivos
        $formulario008->diagnosticosDefinitivos()->detach();

        $diagnosticos_definitivos = $request->input('diagnosticos_definitivos', []);

        for ($diagnosticoscie10 = 0; $diagnosticoscie10 < count($diagnosticos_definitivos); $diagnosticoscie10++) {
            if ($diagnosticos_definitivos[$diagnosticoscie10] != '') {
                $formulario008->diagnosticosDefinitivos()->attach($diagnosticos_definitivos[$diagnosticoscie10]);
            }
        }

        
      
         
        return redirect()->route('admin.formulario008.index')->with('info', 'Formulario 008 actualizado correctamente');
    }

   
    public function destroy($id)
    {
        
        
        $formulario008 = Formulario008::findOrFail($id);
        
        /* $this->authorize('author', $formulario008); */

        $formulario008->delete();

        return redirect()->route('admin.formulario008.index')-> with('eliminar', 'ok');
       
    }    

}
