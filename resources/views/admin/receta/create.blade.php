@extends('adminlte::page')

@section('title', 'Recetas')

@section('content_header')    
    <h1>Crear nueva Receta</h1>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/jquery-ui-1.13.2/jquery-ui.min.css') }}">
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.receta.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {!! Form::hidden('users_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('id', 'Número de Receta:') !!}

                {!! Form::text('id', $nextId, ['class' => 'form-control', 'readonly']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ciudad', 'Ciudad:') !!}
                {!! Form::text('ciudad', 'RIOBAMBA', ['class' => 'form-control', 'placeholder' => 'Ingrese la Ciudad']) !!}

                @error('ciudad')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>


            <div class="form-group">
                {!! Form::label('fecha', 'Fecha:') !!}
                {!! Form::date('fecha', \Carbon\Carbon::now(), [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese la fecha de la Receta',
                ]) !!}


                @error('fecha')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

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


            <!-- For defining autocomplete -->
            <div class="form-group">
                {!! Form::label('cedula', 'Cédula del Paciente:') !!}
                {!! Form::text('cedula', null, [
                    'class ' => 'form-control',
                    'id' => 'paciente_search',
                    'placeholder' => 'Ingrese la cédula del Paciente',
                ]) !!}
                @error('cedula')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">

                {!! Form::hidden('paciente_id', null, [
                    'class' => 'form-control',
                    'id' => 'pacienteid',
                    'placeholder' => 'Nombre del Paciente',
                    'readonly',
                ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('paciente_nombre', 'Nombre del Paciente:') !!}
                {!! Form::text('paciente_nombre', null, [
                    'class' => 'form-control',
                    'id' => 'pacientenombre',
                    'placeholder' => 'Nombre del Paciente',
                    'readonly',
                ]) !!}
            </div>
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

                <label class="mr-2" id="si">
                    {!! Form::radio('aler', 1, true) !!}
                    SI
                </label>
                <label class="mr-2" id="no">
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


            <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        {!! Form::label('', 'Medicamentos:') !!}
                    </div>
                    <div class="card-body">



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
                                        <select name="medicamentos[]" class="form-control select2">
                                            <option value="">Seleccione un Medicamento</option>
                                            @foreach ($medicamentos as $medicamento)
                                                <option value="{{ $medicamento->id }}">
                                                    {{ $medicamento->nombre }} ({{ $medicamento->comercial }}) {{ $medicamento->concentracion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="cantidades[]" class="form-control" placeholder="Ingrese la Cantidad " value="" />
                                    </td>
                                    <td>
                                        <input type="text" name="indicaciones[]" class="form-control" placeholder="Ingrese las Indicaciones " value="" />
                                    </td>
                                    
                                <td><button type="button" class="btn btn-danger btn-remove-medicamento">Eliminar</button></td>  
                                </tr>
                                <tr id="medicamento1"></tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" id="btn-add-medicamento">Agregar medicamento</button>

                        
                    </div>
                </div>
            </div>
            

            <div class="form-group">
                {!! Form::label('sugerencia', 'Sugerencia No Farmacológica:') !!}
                {!! Form::text('sugerencia', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese la sugerencia no Framacológica de la Receta',
                ]) !!}

                @error('sugerencia')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <script>

        // Inicializar Select2 en el campo de selección de medicamentos
        $('.select2').select2();

                 
        let medicamentoIndex = 1;
        $('#btn-add-medicamento').on('click', function() {
            $('#medicamento_table tbody').append(`
                <tr id="medicamento-${medicamentoIndex}">
                    <td>
                                        <select name="medicamentos[]" class="form-control select2">
                                            <option value="">Seleccione un Medicamento</option>
                                            @foreach ($medicamentos as $medicamento)
                                                <option value="{{ $medicamento->id }}">
                                                    {{ $medicamento->nombre }} ({{ $medicamento->comercial }}) {{ $medicamento->concentracion}} 
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="cantidades[]" class="form-control" placeholder="Ingrese la Cantidad " value="" />
                                    </td>
                                    <td>
                                        <input type="text" name="indicaciones[]" class="form-control" placeholder="Ingrese las Indicaciones " value="" />
                                    </td>

                     <td><button type="button" class="btn btn-danger btn-remove-medicamento">Eliminar</button></td>
                </tr>
            `);
            // Inicializar Select2 en el nuevo campo de selección de medicamentos
            $(`#medicamento-${medicamentoIndex} .select2`).select2();
            medicamentoIndex++;
        });
        $(document).on('click', '.btn-remove-medicamento', function() {
            $(this).closest('tr').remove();
        });

        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function() {
            $("#paciente_search").autocomplete({
                source: function(request, response) {
                    // Fetch data
                    $.ajax({
                        url: "{{ route('admin.receta.getPacientes') }}",
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
                    $('#paciente_search').val(ui.item.label); // display the selected text
                    $('#pacienteid').val(ui.item.value); // save selected id to input
                    $('#pacientenombre').val(ui.item.value1);
                    return false;
                }
            });

        });

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
        document.getElementById('si').addEventListener('click', function(e) {
            console.log('Escribir Alergia');
            alergia.disabled = false;
        });

        // evento para el input radio del "no"
        document.getElementById('no').addEventListener('click', function(e) {
            console.log('Input deshabilitado');
            alergia.disabled = true;
        });

        


    </script>
@stop
