@extends('adminlte::page')

@section('title', 'Recetas')

@section('content_header')
    <h1>Crear nueva Receta</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/jquery-ui-1.13.2/jquery-ui.min.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

@stop
@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.receta.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {!! Form::hidden('users_id', auth()->user()->id) !!}

            <table>
                <thead>
                    <tr>
                        <th>{!! Form::label('id', 'Número de Receta:') !!} </th>
                        <th>{!! Form::label('ciudad', 'Ciudad:') !!}</th>
                        <th>{!! Form::label('fecha', 'Fecha:') !!}</th>

                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>{!! Form::text('id', $nextId, ['class' => 'form-control', 'readonly']) !!}</td>
                        <td>{!! Form::text('ciudad', 'RIOBAMBA', ['class' => 'form-control', 'readonly']) !!}</td>
                        <td>{!! Form::date('fecha', \Carbon\Carbon::now(), [
                            'class' => 'form-control',
                            'placeholder' => 'Ingrese la fecha de la Receta',
                        ]) !!}
                        @error('fecha')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>

            <!-- For defining autocomplete -->
            <div class="form-group">
                {!! Form::label('descripcion', 'Diagnóstico') !!}
                {!! Form::text('descripcion', null, [
                    'class ' => 'form-control',
                    'id' => 'diagnostico_search',
                    'placeholder' => 'Ingrese el Diagnóstico del Paciente',
                ]) !!}
                @error('descripcion')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">

                {!! Form::hidden('diagnosticoscie10_id', null, [
                    'class' => 'form-control',
                    'id' => 'diagnosticoscie10id',
                    'placeholder' => 'Nombre del Paciente',
                    'readonly',
                ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('diagnosticoscie10_clave', 'CIE-10:') !!}
                {!! Form::text('diagnosticoscie10_clave', null, [
                    'class' => 'form-control',
                    'id' => 'diagnosticoscie10clave',
                    'placeholder' => 'Código CIE-10',
                    'readonly',
                ]) !!}
            </div>           

            <div class="card">
                        <div class="form-group">                            

                                <div class="card">
                                    <div class="card-header">
                                        {!! Form::label('', 'Paciente:') !!}
                                        
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-secondary mt-2" data-toggle="modal" data-target="#modalAgregarPaciente">Crear Paciente</button>
                                    </div>
                                    
                                    <div class="card-body">
                                        {!! Form::label('', 'Paciente:') !!}
                                        {!! Form::select('paciente_id', ['' => 'Seleccione un paciente'] + $pacientes->pluck('nombrecompletocedula', 'id')->all(),
                                            null,
                                            ['class' => 'form-control select2', 'id' => 'select-paciente', 'data-placeholder' => 'Seleccione un paciente'],
                                        ) !!}
                                    </div>                                    
                                </div>
                            </div>
                </div>
                        


                            <div class="modal fade" id="modalAgregarPaciente" tabindex="-1" role="dialog"
                                aria-labelledby="modalAgregarPacienteLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalAgregarPacienteLabel">Crear Nuevo Paciente</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div>

                                            <div class="form-group">
                                                <label for="nacionalidad">Nacionalidad:</label>
                                                <select name="nacionalidad" id="nacionalidad" class="form-control">
                                                    <option value="otro" @if (isset($paciente) && $paciente->nacionalidad === 'otro') selected @endif>Seleccione una Nacionalidad</option>
                                                    <option value="ecuatoriano" @if (isset($paciente) && $paciente->nacionalidad === 'ecuatoriano') selected @endif>Ecuatoriano</option>
                                                    <option value="extranjero" @if (isset($paciente) && $paciente->nacionalidad === 'extranjero') selected @endif>Estranjero</option>
                                                    </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                        <p class="font-weight-bold">Dispone de Cédula</p>
                                            
                                                        <label class="mr-2" id="si">
                                                            {!! Form::radio('ced', 1, true) !!}
                                                            SI
                                                        </label>
                                                        <label class="mr-2" id="no">
                                                            {!! Form::radio('ced', 2) !!}
                                                            NO
                                                        </label id="cedula">
                                                        {!! Form::text('cedula', null, [
                                                            'class ' => 'form-control',
                                                            'id' => 'cedula',
                                                            'placeholder' => 'Ingrese la Cédula del Paciente',
                                                        ]) !!}
                                                        {!! Form::label('', '', ['id' => 'lbcedula', 'class' => 'text-danger']) !!} 

                                            {!! Form::label('', '', ['id' => 'lbcedula']) !!} 
                                                        @error('cedula')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                        <small class="text-danger" id="error-cedula"></small>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="form-group">
                                                {!! Form::label('apellido_paterno', 'Apellido Paterno:') !!}
                                                {!! Form::text('apellido_paterno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Apellido Paterno del Paciente']) !!} 
                                                
                                                {!! Form::label('', '', ['id' => 'lbapellido_paterno']) !!}                                                
                                                @error('apellido_paterno')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                {!! Form::label('apellido_materno', 'Apellido Materno:') !!}
                                                {!! Form::text('apellido_materno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Apellido Materno del Paciente']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbapellido_materno']) !!} 
                                                @error('apellido_materno')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                {!! Form::label('nombre', 'Nombres Completos:') !!}
                                                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los nombres del Paciente']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbnombre']) !!} 
                                                @error('nombre')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento:') !!}
                                                {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbfecha_nacimiento']) !!} 
                                                @error('fecha_nacimiento')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            {{-- <div class="form-group">
                                                {!! Form::label('direccion', 'Dirección de Residencia:') !!}
                                                {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección de residencia del Paciente']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbdireccion']) !!} 
                                                @error('direccion')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                                
                                        <div class="form-group">
                                                {!! Form::label('provincia_id', 'Provincia') !!}
                                                {!! Form::select('provincia_id', $provincias->pluck('descripcion', 'id'), null, ['class' => 'form-control', 'id' => 'provincia_id']) !!}
                                                {!! Form::label('', '', ['id' => 'lbprovincia_id']) !!} 
                                            </div>
                                            
                                            <div class="form-group">
                                                {!! Form::label('ciudad_id', 'Ciudad') !!}
                                                {!! Form::select('ciudad_id', [], null, ['class' => 'form-control', 'id' => 'ciudad_id']) !!}
                                                {!! Form::label('', '', ['id' => 'lbciudad_id']) !!} 
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                {!! Form::label('estado_civil', 'Estado Civil:') !!}
                                                {!! Form::select('estado_civil', ['soltero/a' => 'Soltero/a', 'casado/a' => 'Casado/a', 'divorciado/a' => 'Divorciado/a', 'viudo/a' => 'Viudo/a', 'union libre' => 'Unión Libre'], null, ['class' => 'form-control']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbestado_civil']) !!} 
                                                @error('estado_civil')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                {!! Form::label('instruccion', 'Instrucción:') !!}
                                                {!! Form::select('instruccion', ['sin instrucción basica' => 'Sin Instrucción Básica', 'basica' => 'Básica', 'bachiller' => 'Bachiller', 'superior' => 'Superior', 'especialidad' => 'Especialidad'], null, ['class' => 'form-control']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbinstruccion']) !!} 
                                                @error('instruccion')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                {!! Form::label('ocupacion', 'Ocupación:') !!}
                                                {!! Form::text('ocupacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la ocupación del Paciente']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbocupacion']) !!} 
                                                @error('ocupacion')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                {!! Form::label('telefono', 'Teléfono:') !!}
                                                {!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono del Paciente', 'maxlength' => 10]) !!} 
                                                {!! Form::label('', '', ['id' => 'lbtelefono']) !!} 
                                                @error('telefono')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div> --}}
                                            
                                            <div class="form-group">
                                                {!! Form::label('sexo_id', 'Sexo:') !!}
                                                {!! Form::select('sexo_id', $sexo, null, ['class' => 'form-control']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbsexo_id']) !!} 
                                                @error('sexo_id')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>

                                            <div id="mensaje-exito" class="alert alert-success" style="display: none;"></div>

                                            <div id="mensaje-error" class="alert alert-danger" style="display: none;"></div>
                
                                            
                                            <!-- Otros campos del paciente según tus necesidades -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="btnGuardarPaciente">Guardar
                                                Paciente</button>
                                            <button type="button" class="btn btn-success ml-auto"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="mensaje-exito" class="alert alert-success" style="display: none;"></div>

                            <div id="mensaje-error" class="alert alert-danger" style="display: none;"></div>


                            <!-- Modal para agregar un nuevo investigador -->





                            {{-- /**//******************************************************************* --}}
                            <div class="form-group">
                                {!! Form::label('historia', 'Historia Clínica:') !!}
                                {!! Form::text('historia', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Ingrese la Historia Clínica del Paciente',
                                ]) !!}

                                @error('historia')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <div class="form-group">
                                <p class="font-weight-bold">Alergia</p>

                                <label class="mr-2" id="sialer">
                                    {!! Form::radio('aler', 1, true) !!}
                                    SI
                                </label>
                                <label class="mr-2" id="noaler">
                                    {!! Form::radio('aler', 2) !!}
                                    NO
                                </label id="alergia">
                                {!! Form::text('alergia', null, [
                                    'class ' => 'form-control',
                                    'id' => 'alergia',
                                    'placeholder' => 'Ingrese Alergia del Paciente',
                                ]) !!}

                                @error('alergia')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <div class="container">
                                <div class="form-group">
                                    <div class="card">
                                        <div class="card-header">
                                            {!! Form::label('', 'Medicamentos:') !!}
                                        </div>
                                        <div class="card-body">
                                            <!-- Botón para abrir el modal -->
                                            {!! Form::button('Crear Medicamento', [
                                                'class' => 'btn btn-secondary',
                                                'data-toggle' => 'modal',
                                                'data-target' => '#modalAgregarMedicamento',
                                            ]) !!}

                                            <table class="table table-bordered mt-3" id="medicamento_table">
                                                <thead>
                                                    <tr>
                                                        <th>Medicamento</th>
                                                        <th>Cantidad</th>
                                                        <th>Indicaciones</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="medicamento0">
                                                        <td>
                                                            {!! Form::select(
                                                                'medicamentos[]',
                                                                ['' => 'Seleccione un Medicamento'] + $medicamentos->pluck('nombre_completo', 'id')->all(),
                                                                null,
                                                                ['class' => 'form-control select2', 'data-placeholder' => 'Seleccione un Medicamento'],
                                                            ) !!}
                                                        </td>
                                                        <td>
                                                            {!! Form::text('cantidades[]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Cantidad']) !!}
                                                        </td>
                                                        <td>
                                                            {!! Form::text('indicaciones[]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las Indicaciones']) !!}
                                                        </td>
                                                        <td>{!! Form::button('Eliminar', ['type' => 'button', 'class' => 'btn btn-danger btn-remove-medicamento']) !!}</td>
                                                    </tr>
                                                    <!-- Aquí se añadirán los medicamentos dinámicamente -->
                                                </tbody>
                                            </table>
                                            {!! Form::button('Agregar medicamento', [
                                                'type' => 'button',
                                                'class' => 'btn btn-primary',
                                                'id' => 'btn-add-medicamento',
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal para agregar un nuevo medicamento -->
                            <div class="modal fade" id="modalAgregarMedicamento" tabindex="-1" role="dialog"
                                aria-labelledby="modalAgregarMedicamentoLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalAgregarMedicamentoLabel">Crear Medicamento</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Formulario para agregar un nuevo medicamento -->

                                            <div class="form-group">
                                                {!! Form::label('nombre', 'Nombre Genérico:') !!}
                                                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre Genérico']) !!}

                                                @error('nombre')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>


                                            <div class="form-group">
                                                {!! Form::label('comercial', 'Nombre Comercial:') !!}
                                                {!! Form::text('comercial', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre Comercial']) !!}

                                                @error('comercial')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('concentracion', 'Concentración:') !!}
                                                {!! Form::text('concentracion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Concentración']) !!}

                                                @error('concentracion')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('presentacion', 'Presentación:') !!}
                                                {!! Form::text('presentacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Presentación']) !!}

                                                @error('presentacion')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                            <button type="button" class="btn btn-primary"
                                                id="btnGuardarMedicamento">Guardar
                                                Medicamento</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group"> 
                                {!! Form::label('signos', 'Signos de Alarma:') !!}
                                {!! Form::text('signos', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Ingrese los signos de Alarma',
                                ]) !!}

                                @error('signos')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="form-group">
                                {!! Form::label('sugerencia', 'Sugerencia no Farmacológica:') !!}
                                {!! Form::textarea('sugerencia', null, ['rows' => 4, 'cols' => 50]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('medico', 'Médico Tratante:') !!}
                                {!! Form::text('medico', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Ingrese el Médico Tratante la Receta',
                                ]) !!}

                                @error('medico')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            {!! Form::submit('Crear  Receta', ['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}

                        </div>

                    </div>

                @stop

                @section('js')
                <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
                    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
                    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
                    <script src="{{ asset('vendor/jquery-ui-1.13.2/jquery-ui.min.js') }}" type="text/javascript"></script>
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
                        rel="stylesheet" />
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
                    <script src="{{ asset('vendor/jquery-ui-1.13.2/jquery-ui.min.js') }}" type="text/javascript"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

                    <!-- Bootstrap JS (cargado después de jQuery) -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



<script>

$(document).ready(function() {
    // Evento para guardar un paciente
    $('#btnGuardarPaciente').on('click', function() {
        // Obtener los datos del formulario del modal
        var nacionalidad = $('#nacionalidad').val();
        var apellido_paterno = $('#apellido_paterno').val();
        var apellido_materno = $('#apellido_materno').val();
        var nombre = $('#nombre').val();
        var fecha_nacimiento = $('#fecha_nacimiento').val();
        var sexo_id = $('#sexo_id').val();
        var ced = $('#ced').val();
        var cedula = $('#cedula').val();

        // Validar si los campos requeridos están vacíos
        if (!nacionalidad || !apellido_paterno || !apellido_materno || !nombre || !fecha_nacimiento || !sexo_id) {
            // Mostrar mensaje de error si hay campos vacíos
            mostrarMensajeError('Por favor, complete todos los campos obligatorios.');
            return;
        }
        /* if (apellido_paterno =='') {
            $('#lbapellido_paterno').html("<span style='color:red;'>Complete el campo Apellido Paterno</span>");

            // Limpiar el mensaje después de 2 segundos (2000 milisegundos)
            setTimeout(function () {
                $('#lbapellido_paterno').empty(); // Eliminar el contenido del label
            }, 2000);           

            $("#apellido_paterno").focus();
            return false;

                } else  if (apellido_materno =='') {
                    $('#lbapellido_materno').html("<span style='color:red;'>Complete el campo Apellido Materno</span>");
                
                    setTimeout(function(){
                        $('#lbapellido_materno').empty();
                    },2000);

                    $("#apellido_materno").focus();
                    return false;
                } else  if (nombre =='') {
                    $('#lbnombre').html("<span style='color:red;'>Complete el campo Nombres</span>");
                    setTimeout(function(){
                        $('#lbnombre').empty();
                    },2000);

                    $("#nombre").focus();
                    return false;
                } else if (fecha_nacimiento =='') {
                    $('#lbfecha_nacimiento').html("<span style='color:red;'>Complete el campo Fecha de Nacimiento</span>");
                    setTimeout(function(){
                        $('#lbfecha_nacimiento').empty();
                    },2000);
                    $("#fecha_nacimiento").focus();
                    return false;
                } else  if (direccion =='') {
                    $('#lbdireccion').html("<span style='color:red;'>Complete el campo Dirección</span>");
                
                    setTimeout(function(){
                        $('#lbdireccion').empty();
                    },2000);

                    $("#direccion").focus();
                    return false;
                } else  if (provincia_id =='') {
                    $('#lbprovincia_id').html("<span style='color:red;'>Complete el campo Provincia</span>");
                
                    setTimeout(function(){
                        $('#lbprovincia_id').empty();
                    },2000);

                    $("#provincia_id").focus();
                    return false;
                } else  if (ciudad_id =='') {
                    $('#lbciudad_id').html("<span style='color:red;'>Complete el campo Ciudad</span>");
                
                    setTimeout(function(){
                        $('#lbciudad_id').empty();
                    },2000);

                    $("#ciudad_id").focus();
                    return false;
                } else  if (estado_civil =='') {
                    $('#lbestado_civil').html("<span style='color:red;'>Complete el campo Estado Civil</span>");
                
                    setTimeout(function(){
                        $('#lbestado_civil').empty();
                    },2000);

                    $("#estado_civil").focus();
                    return false;
                } else  if (instruccion =='') {
                    $('#lbinstruccion').html("<span style='color:red;'>Complete el campo Instruccion</span>");
                
                    setTimeout(function(){
                        $('#lbinstruccion').empty();
                    },2000);

                    $("#instruccion").focus();
                    return false;
                }else  if (ocupacion =='') {
                    $('#lbocupacion').html("<span style='color:red;'>Complete el campo Ocupacion</span>");
                
                    setTimeout(function(){
                        $('#lbocupacion').empty();
                    },2000);

                    $("#ocupacion").focus();
                    return false;
                } else  if (telefono =='') {
                    $('#lbtelefono').html("<span style='color:red;'>Complete el campo Ocupacion</span>");
                
                    setTimeout(function(){
                        $('#lbtelefono').empty();
                    },2000);

                    $("#lbtelefono").focus();
                    return false;
                } else  if (sexo_id =='') {
                    $('#lbsexo_id').html("<span style='color:red;'>Complete el campo Ocupacion</span>");
                
                    setTimeout(function(){
                        $('#lbsexo_id').empty();
                    },2000);

            $("#sexo_id").focus();
            return false;
        } */
    

        // Realizar la solicitud AJAX para guardar el paciente
        $.ajax({
            type: 'POST',
            url: '{{ route('admin.paciente.store1') }}',
            data: {
                nacionalidad: nacionalidad,
                cedula: cedula,
                apellido_paterno: apellido_paterno,
                apellido_materno: apellido_materno,
                nombre: nombre,
                fecha_nacimiento: fecha_nacimiento,
                sexo_id: sexo_id,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                // Mostrar mensaje de éxito si se guarda correctamente
                mostrarMensajeExito('Paciente agregado correctamente');
                // Agregar el nuevo paciente al select2
                $('#select-paciente').append($('<option>', {
                    value: response.pacienteId,
                    text: nombre +' '+ apellido_paterno +' ' + apellido_materno + '  ' + cedula, // Incluir la cédula en el nombre completo
                    selected: true
                }));
                // Actualizar el select2 para reflejar los cambios
                $('#select-paciente').trigger('change');
                // Limpiar los campos del modal
                $('#modalAgregarPaciente input[type="text"], #modalAgregarPaciente input[type="date"]').val('');
                $('#modalAgregarPaciente select').val('');
                // Cerrar el modal después de 2 segundos
                setTimeout(function() {
                    $('#modalAgregarPaciente').modal('hide');
                }, 2000);
            },
            error: function(xhr, status, error) {
    console.log(xhr.responseJSON); // Muestra toda la respuesta JSON del servidor en la consola

    if (xhr.responseJSON && xhr.responseJSON.errors) {
        // Mostrar el mensaje de error en el label lbcedula
        $('#lbcedula').html("<span style='color:red;'>" + xhr.responseJSON.error + "</span>");
    } else {
        // Si no hay errores específicos de validación en la respuesta del servidor, muestra un mensaje genérico de error
        $('#lbcedula').html("<span style='color:red;'>Cédula ya registrada o Incorrecta.</span>");
    }

    }
        });
    });

    // Función para mostrar mensajes de error
    function mostrarMensajeError(mensaje) {
        $('#mensaje-error').text(mensaje).fadeIn().delay(2000).fadeOut();
    }

    // Función para mostrar mensajes de éxito
    function mostrarMensajeExito(mensaje) {
        $('#mensaje-exito').text(mensaje).fadeIn().delay(2000).fadeOut();
    }
});


                        /////////////////////////////////////////////////////////////////////////////////////////

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function() {
            $("#diagnostico_search").autocomplete({
                                source: function(request, response) {
                                    // Fetch data
                                    $.ajax({
                                        url: "{{ route('admin.receta.getDiagnosticoscie10') }}",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            _token: CSRF_TOKEN,
                                            search: request.term
                                        },
                                        success: function(data) {
                                            response(data);
                                        }
                                    });
                                },
                                select: function(event, ui) {
                                    // Set selection
                                    $('#diagnostico_search').val(ui.item.label); // display the selected text
                                    $('#diagnosticoscie10id').val(ui.item.value); // save selected id to input
                                    $('#diagnosticoscie10clave').val(ui.item.value1);
                                    return false;
                                }
                            });

                        });

                        $(document).ready(function() {
                            $("#nombre").stringToSlug({
                                setEvents: 'keyup keydown blur',
                                getPut: '#slug',
                                space: '-'
                            });
                        });


                        // Accedemos al botón
                        var alergia = document.getElementById('alergia');

                        // evento para el input radio del "si"
                        document.getElementById('sialer').addEventListener('click', function(e) {
                            console.log('Escribir Alergia');
                            alergia.disabled = false;
                        });

                        // evento para el input radio del "no"
                        document.getElementById('noaler').addEventListener('click', function(e) {
                            console.log('Input deshabilitado');
                            alergia.disabled = true;
                        });


                        $(document).ready(function() {
                            $('#agregarBtn').click(function() {
                                var sugerencia = $('#sugerenciaInput').val().trim();
                                if (sugerencia !== '') {
                                    $('#sugerenciaList').append('<li>' + sugerencia + '</li>');
                                    $('#sugerenciaInput').val('');
                                }
                            });

                            $('#sugerenciaInput').keypress(function(event) {
                                if (event.which === 13) {
                                    event.preventDefault();
                                    var sugerencia = $(this).val().trim();
                                    if (sugerencia !== '') {
                                        $('#sugerenciaList').append('<li>' + sugerencia + '</li>');
                                        $(this).val('');
                                    }
                                }
                            });
                        });

                        $(document).ready(function() {
                            // Inicializar Select2
                            function inicializarSelect2() {
                                $('.select2').select2({
                                    width: '100%', // Ajusta el ancho del select al 100%
                                });
                            }

                            // Lógica para agregar dinámicamente más filas de medicamentos
                            $('#btn-add-medicamento').on('click', function() {
                                var nuevaFila = `
            <tr id="medicamento${contadorMedicamentos}">
                <td>
                    {!! Form::select(
                        'medicamentos[]',
                        ['' => 'Seleccione un Medicamento'] + $medicamentos->pluck('nombre_completo', 'id')->all(),
                        null,
                        ['class' => 'form-control select2', 'data-placeholder' => 'Seleccione un Medicamento'],
                    ) !!}
                </td>
                <td>
                    {!! Form::text('cantidades[]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Cantidad']) !!}
                </td>
                <td>
                    {!! Form::text('indicaciones[]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las Indicaciones']) !!}
                </td>
                <td>
                    {!! Form::button('Eliminar', ['type' => 'button', 'class' => 'btn btn-danger btn-remove-medicamento']) !!}
                </td>
            </tr>
        `;
                                contadorMedicamentos++;
                                $('#medicamento_table tbody').append(nuevaFila);
                                inicializarSelect2(); // Reinicializar Select2 en el nuevo elemento
                            });

                            // Lógica para eliminar filas de medicamentos
                            $(document).on('click', '.btn-remove-medicamento', function() {
                                $(this).closest('tr').remove();
                            });

                            // Objeto para almacenar el medicamento seleccionado en cada fila
                            var medicamentosSeleccionados = {};

                            // Resto del código sin cambios

                            $('#btnGuardarMedicamento').on('click', function() {
                                // Obtener los datos del formulario del modal
                                var nombre = $('#nombre').val();
                                var comercial = $('#comercial').val();
                                var concentracion = $('#concentracion').val();
                                var presentacion = $('#presentacion').val();

                                console.log(nombre, comercial, concentracion, presentacion);

                                // Enviar la solicitud AJAX para guardar el medicamento
                                $.ajax({
                                    type: 'POST',
                                    url: '{{ route('admin.medicamento.store') }}',
                                    data: {
                                        nombre: nombre,
                                        comercial: comercial,
                                        concentracion: concentracion,
                                        presentacion: presentacion,
                                        _token: "{{ csrf_token() }}"
                                    },
                                    success: function(response) {
                                        // Si la operación es exitosa, cierra el modal
                                        $('#modalAgregarMedicamento').modal('hide');
                                        agregarNuevoMedicamento(response.medicamentoId,
                                        nombre); // Agregar el nuevo medicamento a la tabla
                                        actualizarSelect2Medicamentos
                                    (); // Actualizar el Select2 de medicamentos
                                        console.log(response.medicamentoId);
                                    },
                                    error: function(xhr, status, error) {
                                        // Si hay un error en la solicitud AJAX, muestra el mensaje de error (opcional)
                                        console.log(xhr.responseText);
                                    }
                                });
                            });


                            function agregarNuevoMedicamento(medicamentoId, nombreMedicamento) {
                                // Verificar si ya existe una fila con el mismo ID de medicamento
                                if (medicamentosSeleccionados.hasOwnProperty(medicamentoId)) {
                                    // Si existe, actualizar los datos en la fila existente
                                    var filaExistente = medicamentosSeleccionados[medicamentoId];
                                    var cantidad = $('#cantidad')
                                .val(); // Suponiendo que tienes un campo con ID "cantidad" para la cantidad del medicamento
                                    var indicaciones = $('#indicaciones')
                                .val(); // Suponiendo que tienes un campo con ID "indicaciones" para las indicaciones del medicamento

                                    filaExistente.find('.cantidad').val(cantidad);
                                    filaExistente.find('.indicaciones').val(indicaciones);
                                } else {
                                    // Si no existe, crear una nueva fila con el medicamento seleccionado
                                    var nuevaFila = `
                    <tr id="medicamento${medicamentoId}">
                        <td>
                            <select name="medicamentos[]" class="form-control select2 select2-medicamentos" data-placeholder="Seleccione un Medicamento">
                                <option value="${medicamentoId}" selected>${nombreMedicamento}</option>
                                @foreach ($medicamentos as $medicamento)
                                    <option value="{{ $medicamento->id }}">{{ $medicamento->nombre_completo }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="text" name="cantidades[]" class="form-control cantidad" placeholder="Ingrese la Cantidad">
                        </td>
                        <td>
                            <input type="text" name="indicaciones[]" class="form-control indicaciones" placeholder="Ingrese las Indicaciones">
                        </td>
                        <td>
                            {!! Form::button('Eliminar', ['type' => 'button', 'class' => 'btn btn-danger btn-remove-medicamento']) !!}
                        </td>
                    </tr>
                `;
                                    contadorMedicamentos++;
                                    $('#medicamento_table tbody').append(nuevaFila);
                                    inicializarSelect2(); // Reinicializar Select2 en el nuevo elemento

                                    // Guardar la referencia a la nueva fila en el objeto de medicamentos seleccionados
                                    medicamentosSeleccionados[medicamentoId] = $('#medicamento_table tbody').find(
                                        `tr#medicamento${medicamentoId}`);
                                }

                                // Restablecer los campos del formulario del modal
                                $('#cantidad').val('');
                                $('#indicaciones').val('');
                            }

                            function actualizarSelect2Medicamentos() {
                                $.ajax({
                                    type: 'GET',
                                    url: '{{ route('admin.medicamento.lista') }}', // Ajusta la ruta según corresponda
                                    dataType: 'json',
                                    success: function(data) {
                                        // Obtener el Select2 de medicamentos
                                        var select2Medicamentos = $('.select2.select2-medicamentos');

                                        // Guardar la selección actual del Select2
                                        var selectedOption = select2Medicamentos.val();

                                        // Vaciar el Select2 y agregar las nuevas opciones
                                        select2Medicamentos.empty();
                                        select2Medicamentos.append($('<option></option>').attr('value', '').text(
                                            'Seleccione un Medicamento'));
                                        $.each(data, function(key, value) {
                                            select2Medicamentos.append($('<option></option>').attr('value', key)
                                                .text(value));
                                        });

                                        // Restaurar la selección anterior en el Select2
                                        select2Medicamentos.val(selectedOption).trigger('change');
                                    },
                                    error: function(xhr, status, error) {
                                        console.log(xhr.responseText);
                                    }
                                });
                            }


                            // Contador para identificar filas de medicamentos
                            var contadorMedicamentos = 1;
                            inicializarSelect2();
                        });


                        var cedula = document.getElementById('cedula');

        // Evento para cambiar la visibilidad del campo de cédula según la opción seleccionada
        document.getElementById('si').addEventListener('click', function() {
            document.getElementById('cedula').style.display = 'block';
            cedula.disabled = false;
        });

        document.getElementById('no').addEventListener('click', function() {
            document.getElementById('cedula').style.display = 'none';
            cedula.disabled = true;
            cedula.value = ''; // Limpiamos el valor del campo cédula si se deshabilita
        });

        // Evento para verificar la longitud de la cédula según la nacionalidad seleccionada
        document.getElementById('nacionalidad').addEventListener('change', function() {
            var nacionalidad = this.value;
            
            if (nacionalidad === 'ecuatoriano') {
                cedula.maxLength = 10;
            } else {
                cedula.removeAttribute('maxLength');
            }
        });


        $('#provincia_id').on('change', function () {
                var provinciaId = $(this).val();
                if (provinciaId) {
                    $.ajax({
                        url: '/admin/obtener-ciudades/' + provinciaId,
                        
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#ciudad_id').empty();
                            $.each(data, function (key, value) {
                                $('#ciudad_id').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#ciudad_id').empty();
                }
            });

           
            
</script>
@stop
