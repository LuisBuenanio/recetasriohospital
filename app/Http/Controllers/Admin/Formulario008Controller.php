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

        $diagnosticoscie10 = Diagnosticoscie10::pluck('clave', 'id');

        $sexo = Sexo::pluck('descripcion', 'id');
        $pacientes = Paciente::all();
        $provincias = Provincia::all();
        
        $lesiones = Lesion::all();
        $ciudades = Ciudad::all(); // Obtener todas las ciudades
    

        return view('admin.formulario008.create', compact('nextId','users', 'sexo', 'diagnosticoscie10', 'pacientes', 'lesiones', 'ciudades', 'provincias'));
        
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

        return redirect()->route('admin.formulario008.index')-> with('info', 'Formulario 008 Creado correctamente');

            
    } 

   /*  public function store(Request $request)
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

            // Obtener las lesiones seleccionadas del formulario
            $lesionesSeleccionadas = $request->input('lesiones', []);

            // Recorrer cada lesión seleccionada
            foreach ($lesionesSeleccionadas as $lesionId => $coordenadas) {
                // Verificar si la lesión existe
                $lesion = Lesion::find($lesionId);

                if ($lesion) {
                    // Crear una nueva instancia de LesionFormulario008 y relacionarla con el formulario
                    $lesionFormulario008 = new LesionFormulario008();
                    $lesionFormulario008->formulario008_id = $formulario008->id;
                    $lesionFormulario008->lesion_id = $lesion->id;
                    $lesionFormulario008->posicion_x = $coordenadas['posicion_x'];
                    $lesionFormulario008->posicion_y = $coordenadas['posicion_y'];
                    $lesionFormulario008->save();
                }
            }
                    

           

        return redirect()->route('admin.formulario008.index')-> with('info', 'Formulario 008 Creado correctamente');

        
    } */

    public function imprimirpdf($id)
    {
        $formulario008 = Formulario008::findOrFail($id);       

        $html = view('admin.formulario008.formulario008pdf', compact('formulario008'))->render();
       
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        
        
        return $dompdf->stream("Formulario-{$formulario008->id}-.pdf");
    }

   


}
