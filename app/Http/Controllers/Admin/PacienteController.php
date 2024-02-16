<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteRequest;
use App\Models\Paciente;
use App\Models\Sexo;
use App\Models\Ciudad;
use App\Models\Provincia;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Rules\ValidarCedulaEc;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this-> middleware('can:admin.paciente.index')->only('index');
        $this-> middleware('can:admin.paciente.create')->only('create', 'store');        
        $this-> middleware('can:admin.paciente.edit')->only('edit', 'update');
        $this-> middleware('can:admin.paciente.destroy')->only('destroy');
    }
    
    public function index()
    {
        $pacientes = Paciente::all();
        return view('admin.paciente.index', compact('pacientes'));
  
    }

     public function create()
    {
        $sexo = Sexo::pluck('descripcion', 'id');
        $provincias = Provincia::all();
        $ciudades = Ciudad::all(); // Obtener todas las ciudades
    

        // Retornar la vista con los datos necesarios
        return view('admin.paciente.create', compact('sexo','provincias', 'ciudades'));
  
    }
    public function ciudadesPorProvincia($provinciaId)
    {
        $ciudades = Ciudad::where('provincia_id', $provinciaId)->pluck('descripcion', 'id');
        return response()->json($ciudades);
    }

    public function lista()
    {
        $pacientes = Paciente::all(); // Suponiendo que tienes una tabla "pacientes" en la base de datos

        $pacienteList = [];
        foreach ($pacientes as $paciente) {
            $pacienteList[$paciente->id] = $paciente->nombre_completo;
        }

        return response()->json($pacienteList);
    }


    /* public function store1(Request $request)
    {
        // Realiza las validaciones necesarias para los campos del formulario
        $request->validate([
            'nacionalidad' => 'nullable',
            'ced' => 'nullable',
            'cedula' => 'nullable',
            'apellido_paterno' => 'nullable',
            'apellido_materno' => 'nullable',
            'nombre' => 'nullable',
            'fecha_nacimiento' => 'nullable',
            'direccion' => 'nullable',
            'provincia_id' => 'nullable',
            'ciudad_id' => 'nullable',
            'estado_civil' => 'nullable',
            'instruccion' => 'nullable',
            'ocupacion' => 'nullable',
            'telefono' => 'nullable',
            'sexo_id' => 'nullable',
        ]);


           // Calcula la edad antes de asignar la fecha de nacimiento
            $fechaNacimiento = Carbon::parse($request->input('fecha_nacimiento'));
            $edad = $fechaNacimiento->age;


        $paciente = new Paciente();

       
        
        $paciente->nacionalidad = $request->input('nacionalidad');
        $paciente->cedula = $request->input('cedula');    
        $paciente->apellido_paterno = $request->input('apellido_paterno');
        $paciente->apellido_materno = $request->input('apellido_materno');
        $paciente->nombre = $request->input('nombre');   
        $paciente->fecha_nacimiento = $fechaNacimiento;
        $paciente->edad = $edad;  
        $paciente->direccion = $request->input('direccion');
        $paciente->provincia_id = $request->input('provincia_id');        
        $paciente->ciudad_id = $request->input('ciudad_id');
        $paciente->estado_civil = $request->input('estado_civil');        
        $paciente->instruccion = $request->input('instruccion');
        $paciente->ocupacion = $request->input('ocupacion');
        $paciente->telefono = $request->input('telefono');
        $paciente->sexo_id = $request->input('sexo_id');

        // Intenta guardar el paciente en la base de datos
        try {
            $paciente->save();
        } catch (\Exception $e) {
            // Si ocurre un error, devuelve una respuesta de error
            return response()->json(['error' => 'Error al intentar guardar el paciente'], 500);
        }

        // Si se guardó exitosamente, devuelve una respuesta con el ID del nuevo paciente
        return response()->json(['pacienteId' => $paciente->id], 200);
    } */
    /* public function store1(PacienteRequest $request)
    {
        
        $paciente = Paciente::create($request->all()); 
        $paciente->fecha_nacimiento = Carbon::parse($request->fecha_nacimiento);
       
        $paciente->save(); 
        // Intenta guardar el paciente en la base de datos
        try {
            $paciente->save();
        } catch (\Exception $e) {
            // Si ocurre un error, devuelve una respuesta de error
            return response()->json(['error' => 'Error al intentar guardar el paciente'], 500);
        }

        // Si se guardó exitosamente, devuelve una respuesta con el ID del nuevo paciente
        return response()->json(['pacienteId' => $paciente->id], 200);
    } */

    public function store1(PacienteRequest $request)
    {
        // Validar si la cédula del paciente ya está registrada
        // Validar si la cédula del paciente ya está registrada
        if ($request->ced == '2') {
            $cedulaExistente = Paciente::where('cedula', $request->cedula)->exists();

            if ($cedulaExistente) {
                // Si la cédula ya existe, devuelve una respuesta de error
                return response()->json(['error' => 'La cédula ya está registrada'], 422);
            }
        }
        
        // Si la cédula no existe, procede con la creación del paciente
        $paciente = new Paciente();
        $paciente->fill($request->all()); // Llenar el modelo con los datos de la solicitud
        $paciente->fecha_nacimiento = Carbon::parse($request->fecha_nacimiento);

        // Intenta guardar el paciente en la base de datos
        try {
            $paciente->save();
        } catch (\Exception $e) {
            // Si ocurre un error, devuelve una respuesta de error
            return response()->json(['error' => 'Error al intentar guardar el paciente'], 500);
        }

        // Si se guardó exitosamente, devuelve una respuesta con el ID del nuevo paciente
        return response()->json(['pacienteId' => $paciente->id], 200);
    }

    


    public function store(PacienteRequest $request)
    {      
        $paciente = Paciente::create($request->all()); 
        $paciente->fecha_nacimiento = Carbon::parse($request->fecha_nacimiento);
       
        $paciente->save();        
        return redirect()->route('admin.paciente.index')-> with('info', 'Paciente Creado correctamente');;

    }

   
    public function edit(Paciente $paciente)
    {
        
        $sexo = Sexo::pluck('descripcion', 'id');
        $provincias = Provincia::all();
        $ciudades = Ciudad::where('provincia_id', $paciente->ciudad->provincia_id)->get();
        return view('admin.paciente.edit', compact('paciente','sexo', 'provincias', 'ciudades'));
    }

    public function update(PacienteRequest $request, Paciente $paciente)
    {
        
        
        
        $paciente->update($request->all());

        Cache::flush();
        return redirect()->route('admin.paciente.index')-> with('info', 'Paciente Actualizado correctamente');
  
    }

     public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();
        
        Cache::flush();
        return redirect()->route('admin.paciente.index')-> with('eliminar', 'ok');

    }
}
