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
                        <button type="button" class="btn btn-primary" id="btnGuardarMedicamento">Guardar
                            Medicamento</button>
                    </div>
                </div>
            </div>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{ asset('vendor/jquery-ui-1.13.2/jquery-ui.min.js') }}" type="text/javascript"></script>


 <script>
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

$('#btnGuardarMedicamento').on('click', function () {
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
        success: function (response) {
            // Si la operación es exitosa, cierra el modal
            $('#modalAgregarMedicamento').modal('hide');
            agregarNuevoMedicamento(response.medicamentoId, nombre); // Agregar el nuevo medicamento a la tabla
            actualizarSelect2Medicamentos(); // Actualizar el Select2 de medicamentos
            console.log(response.medicamentoId);
        },
        error: function (xhr, status, error) {
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
                var cantidad = $('#cantidad').val(); // Suponiendo que tienes un campo con ID "cantidad" para la cantidad del medicamento
                var indicaciones = $('#indicaciones').val(); // Suponiendo que tienes un campo con ID "indicaciones" para las indicaciones del medicamento
                
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
                medicamentosSeleccionados[medicamentoId] = $('#medicamento_table tbody').find(`tr#medicamento${medicamentoId}`);
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
                success: function (data) {
                    // Obtener el Select2 de medicamentos
                    var select2Medicamentos = $('.select2.select2-medicamentos');

                    // Guardar la selección actual del Select2
                    var selectedOption = select2Medicamentos.val();

                    // Vaciar el Select2 y agregar las nuevas opciones
                    select2Medicamentos.empty();
                    select2Medicamentos.append($('<option></option>').attr('value', '').text('Seleccione un Medicamento'));
                    $.each(data, function (key, value) {
                        select2Medicamentos.append($('<option></option>').attr('value', key).text(value));
                    });

                    // Restaurar la selección anterior en el Select2
                    select2Medicamentos.val(selectedOption).trigger('change');
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }


        // Contador para identificar filas de medicamentos
        var contadorMedicamentos = 1;
        inicializarSelect2();
    });
</script>
@stop
