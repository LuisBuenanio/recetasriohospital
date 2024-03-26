@extends('adminlte::page')

@section('title', 'Formulario 008')


@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/jquery-ui-1.13.2/jquery-ui.min.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/ficha08.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ficha.css') }}" />

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.formulario008.store', 'autocomplete' => 'off', 'files' => true]) !!}

            <div class="form-group">
                @include('admin.formulario008.partials.encabezado')
                @include('admin.formulario008.partials.1admision')
                @include('admin.formulario008.partials.2inicioatencion')
                @include('admin.formulario008.partials.3intoxicacion')
                @include('admin.formulario008.partials.4antec_perso_familiar')
                @include('admin.formulario008.partials.5enfer_actual_sistemas')
                @include('admin.formulario008.partials.6caracteristicasdolor')
                @include('admin.formulario008.partials.7signosvitales')
                @include('admin.formulario008.partials.8examen_fisico')
                @include('admin.formulario008.partials.9diagrama_topografico')
                {{-- @include('admin.formulario008.partials.9diagrama_topografico1') --}}
                @include('admin.formulario008.partials.10embarazo_parto')
                @include('admin.formulario008.partials.11analisis_problemas')
                @include('admin.formulario008.partials.12plan_diagnostico'){{-- 
                @include('admin.formulario008.partials.13diagnosticos_presuntivos')
                @include('admin.formulario008.partials.14diagnosticos_definitivos') --}}
                @include('admin.formulario008.partials.14diagnosticos')
                @include('admin.formulario008.partials.15plan_tratamiento')
                @include('admin.formulario008.partials.16salida')
                {{-- @include('admin.formulario008.partials.form')   --}}

                {{-- {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!} --}}

                <form method="post" action="/guardar-y-generar-pdf">
                    {!! Form::submit('Guardar y generar PDF', ['class' => 'btn btn-primary']) !!}
                </form>

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

        <!-- Bootstrap JS (cargado después de jQuery) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.0/js/i18n/es.min.js"></script>

        <script>
            $(document).ready(function() {

                $('#select-paciente').on('change', function() {
                    var pacienteId = $(this).val(); // Obtener el ID del paciente seleccionado

                    // Realizar una solicitud AJAX para obtener los datos del paciente seleccionado
                    $.ajax({
                        type: 'GET',
                        // Ajusta la URL según tu ruta
                        url: "{{ route('admin.formulario008.getPacientes') }}",
                        data: {
                            paciente_id: pacienteId // Enviar el pacienteId como un parámetro
                        },
                        success: function(response) {
                            // Llenar los campos del formulario con los datos del paciente
                            $('#nacionalidad').val(response.nacionalidad);
                            $('#apellido_paterno').val(response.apellido_paterno);
                            $('#apellido_materno').val(response.apellido_materno);
                            $('#nombre').val(response.nombre);
                            $('#edad').val(response.edad);
                            $('#telefono').val(response.telefono);
                            $('#direccion').val(response.direccion);
                            $('#ocupacion').val(response.ocupacion);
                            $('#estado_civil').val(response.estado_civil);
                            $('#instruccion').val(response.instruccion);
                            $('#sexo').val(response.sexo);
                            $('#ciudad').val(response.ciudad);
                            $('#provincia1').val(response.provincia1);
                            // Otros campos que desees llenar

                            // Opcional: Disparar el evento change para que los campos dependientes se actualicen
                            $('#nacionalidad, #apellido_paterno, #apellido_materno, #nombre, #edad, #telefono, #direccion, #ocupacion, #estado_civil, #instruccion, #sexo, #provincia1, #ciudad')
                                .trigger('change');
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            // Manejar el error si la solicitud falla
                        }
                    });
                });
                //CREAR NUEVO PACIENTE
                $(document).ready(function() {
                    // Inicializar el Select2
                    $('#select-paciente').select2({
                        placeholder: 'Seleccione un paciente'
                        // Otras opciones que desees agregar
                    });
                    // Evento para guardar un paciente
                    $('#btnGuardarPaciente').on('click', function() {
                        // Obtener los datos del formulario del modal
                        var nacionalidad = $('#nacionalidad_p').val();
                        var apellido_paterno = $('#apellido_paterno_p').val();
                        var apellido_materno = $('#apellido_materno_p').val();
                        var nombre = $('#nombre_p').val();
                        var fecha_nacimiento = $('#fecha_nacimiento').val();
                        var sexo_id = $('#sexo_id').val();
                        var ced = $('#ced').val();
                        var cedula = $('#cedula').val();

                        console.log('Nacionalidad:', nacionalidad);
                        console.log('Apellido Paterno:', apellido_paterno);
                        console.log('Apellido Materno:', apellido_materno);
                        console.log('Nombre:', nombre);
                        console.log('Fecha de Nacimiento:', fecha_nacimiento);
                        console.log('Sexo ID:', sexo_id);

                        // Validar si los campos requeridos están vacíos
                        if (!nacionalidad || !apellido_paterno || !apellido_materno || !nombre || !
                            fecha_nacimiento || !sexo_id) {
                            // Mostrar mensaje de error si hay campos vacíos
                            mostrarMensajeError('Por favor, complete todos los campos obligatorios.');
                            return;
                        }


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
                                    text: nombre + ' ' + apellido_paterno +
                                        ' ' +
                                        apellido_materno + '  ' +
                                        cedula, // Incluir la cédula en el nombre completo
                                    selected: true
                                }));
                                // Actualizar el select2 para reflejar los cambios
                                $('#select-paciente').trigger('change');
                                // Limpiar los campos del modal
                                $('#modalAgregarPaciente input[type="text"], #modalAgregarPaciente input[type="date"]')
                                    .val('');
                                $('#modalAgregarPaciente select').val('');
                                // Cerrar el modal después de 2 segundos
                                setTimeout(function() {
                                    $('#modalAgregarPaciente').modal('hide');
                                }, 2000);
                            },
                            error: function(xhr, status, error) {
                                console.log(xhr
                                    .responseJSON
                                ); // Muestra toda la respuesta JSON del servidor en la consola

                                if (xhr.responseJSON && xhr.responseJSON.errors) {
                                    // Mostrar el mensaje de error en el label lbcedula
                                    $('#lbcedula').html("<span style='color:red;'>" + xhr
                                        .responseJSON
                                        .error + "</span>");
                                } else {
                                    // Si no hay errores específicos de validación en la respuesta del servidor, muestra un mensaje genérico de error
                                    $('#lbcedula').html(
                                        "<span style='color:red;'>Cédula ya registrada o Incorrecta.</span>"
                                    );
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
            });

            var inputHoraAtencion = document.getElementById('hora_atencion');

            // Obtener la hora actual del usuario
            var horaActual = new Date().toLocaleTimeString('es-ES', {
                hour: '2-digit',
                minute: '2-digit'
            });

            // Establecer el valor del campo de entrada de tiempo
            inputHoraAtencion.value = horaActual;


            var inputHoraLlegada = document.getElementById('hora_llegada');

            inputHoraLlegada.value = horaActual;




            const horaLlegaInput = document.getElementById('hora_llegada');
            const horaAtencionInput = document.getElementById('hora_atencion');

            // Función para sincronizar las horas
            function sincronizarHoras(event) {
                const valor = event.target.value;
                horaLlegaInput.value = valor;
                horaAtencionInput.value = valor;
            }

            // Escuchar los cambios en el campo hora_llega
            horaLlegaInput.addEventListener('input', sincronizarHoras);

            // Escuchar los cambios en el campo hora_atencion
            horaAtencionInput.addEventListener('input', sincronizarHoras);



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
            document.getElementById('nacionalidad_p').addEventListener('change', function() {
                var nacionalidad = this.value;

                if (nacionalidad === 'ecuatoriano') {
                    cedula.maxLength = 10;
                } else {
                    cedula.removeAttribute('maxLength');
                }
            });

            $(document).ready(function() {
                // Inicializar Select2
                function inicializarSelect2() {
                    $('.select2').select2({
                        width: '100%', // Ajusta el ancho del select al 100%
                    });
                }
            });


            $('#provincia_id').on('change', function() {
                var provinciaId = $(this).val();
                if (provinciaId) {
                    $.ajax({
                        url: '/admin/obtener-ciudades/' + provinciaId,

                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('#ciudad_id').empty();
                            $.each(data, function(key, value) {
                                $('#ciudad_id').append('<option value="' + key + '">' + value +
                                    '</option>');
                            });
                        }
                    });
                } else {
                    $('#ciudad_id').empty();
                }
            });

            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.getElementById("aplica_intoxicacion");
                var lugarEvento = document.getElementById("lugar_evento");
                var direccionEvento = document.getElementById("direccion_evento");
                var fechaEvento = document.getElementById("fecha_evento");
                var horaEvento = document.getElementById("hora_evento");
                var vehiculoArma = document.getElementById("vehiculo_arma");
                var tipoEvento = document.getElementById("tipo_evento");
                var tipoEvento1 = document.getElementById("tipo_evento1");
                var tipoEvento2 = document.getElementById("tipo_evento2");
                var tipoEvento3 = document.getElementById("tipo_evento3");
                var autoridadCompetente = document.getElementById("autoridad_competente");
                var horaDenuncia = document.getElementById("hora_denuncia");
                var custodiaPolicial = document.getElementById("custodia_policial");
                var observaciones = document.getElementById("observaciones");
                var alientoEtilico = document.getElementById("aliento_etilico");
                var valorAlcochekc = document.getElementById("valor_alcochekc");
                var horaExamen = document.getElementById("hora_examen");
                var alcoholemia = document.getElementById("alcoholemia");
                var otrasSustancias1 = document.getElementById("otras_sustancias1");
                var otrasSustancias2 = document.getElementById("otras_sustancias2");
                var vSospecha = document.getElementById("v_sospecha");
                var vAbusoFisico = document.getElementById("v_abuso_fisico");
                var vAbusoPsicologico = document.getElementById("v_abuso_psicologico");
                var vAbusSexual = document.getElementById("v_abuso_sexual");
                var obserintoxiviolen = document.getElementById("obser_intoxi_violen");
                var quemaduras = document.getElementById("quemaduras");
                var quemaduras1 = document.getElementById("quemaduras1");
                var quemaduras2 = document.getElementById("quemaduras2");
                var porcentSuperficie = document.getElementById("porcent_superficie");
                var picadura = document.getElementById("picadura");
                var mordedura = document.getElementById("mordedura");


                checkbox.addEventListener("change", function() {
                    if (this.checked) {
                        // Checkbox "No Aplica" seleccionado
                        lugarEvento.disabled = true;
                        direccionEvento.disabled = true;
                        fechaEvento.disabled = true;
                        horaEvento.disabled = true;
                        vehiculoArma.disabled = true;
                        tipoEvento.disabled = true;
                        tipoEvento1.disabled = true;
                        tipoEvento2.disabled = true;
                        tipoEvento3.disabled = true;
                        autoridadCompetente.disabled = true;
                        horaDenuncia.disabled = true;
                        custodiaPolicial.disabled = true;
                        observaciones.disabled = true;
                        alientoEtilico.disabled = true;
                        valorAlcochekc.disabled = true;
                        horaExamen.disabled = true;
                        alcoholemia.disabled = true;
                        otrasSustancias1.disabled = true;
                        otrasSustancias2.disabled = true;
                        vSospecha.disabled = true;
                        vAbusoFisico.disabled = true;
                        vAbusoPsicologico.disabled = true;
                        vAbusSexual.disabled = true;
                        obserintoxiviolen.disabled = true;
                        quemaduras.disabled = true;
                        quemaduras1.disabled = true;
                        quemaduras2.disabled = true;
                        porcentSuperficie.disabled = true;
                        picadura.disabled = true;
                        mordedura.disabled = true;


                        //Oculata Campos

                        /* lugarEvento.style.display = 'none';
                        direccionEvento.style.display = 'none';
                        fechaEvento.style.display = 'none';
                        horaEvento.style.display = 'none';
                        vehiculoArma.style.display = 'none';
                        tipoEvento.style.display = 'none';
                        tipoEvento1.style.display = 'none';
                        tipoEvento2.style.display = 'none';
                        tipoEvento3.style.display = 'none';
                        autoridadCompetente.style.display = 'none';
                        horaDenuncia.style.display = 'none';
                        custodiaPolicial.style.display = 'none';
                        observaciones.style.display = 'none';
                        alientoEtilico.style.display = 'none';
                        valorAlcochekc.style.display = 'none';
                        horaExamen.style.display = 'none';
                        alcoholemia.style.display = 'none';
                        otrasSustancias1.style.display = 'none';
                        otrasSustancias2.style.display = 'none';
                        vSospecha.style.display = 'none';
                        vAbusoFisico.style.display = 'none';
                        vAbusoPsicologico.style.display = 'none';
                        vAbusSexual.style.display = 'none';
                        obserintoxiviolen.style.display = 'none';
                        quemaduras.style.display = 'none';
                        quemaduras1.style.display = 'none';
                        quemaduras2.style.display = 'none';
                        porcentSuperficie.style.display = 'none';
                        picadura.style.display = 'none';
                        mordedura.style.display = 'none'; */



                    } else {
                        // Checkbox "No Aplica" no seleccionado
                        lugarEvento.disabled = false;
                        direccionEvento.disabled = false;
                        fechaEvento.disabled = false;
                        horaEvento.disabled = false;
                        vehiculoArma.disabled = false;
                        tipoEvento.disabled = false;
                        tipoEvento1.disabled = false;
                        tipoEvento2.disabled = false;
                        tipoEvento3.disabled = false;
                        autoridadCompetente.disabled = false;
                        horaDenuncia.disabled = false;
                        custodiaPolicial.disabled = false;
                        observaciones.disabled = false;
                        alientoEtilico.disabled = false;
                        valorAlcochekc.disabled = false;
                        horaExamen.disabled = false;
                        alcoholemia.disabled = false;
                        otrasSustancias1.disabled = false;
                        otrasSustancias2.disabled = false;
                        vSospecha.disabled = false;
                        vAbusoFisico.disabled = false;
                        vAbusoPsicologico.disabled = false;
                        vAbusSexual.disabled = false;
                        obserintoxiviolen.disabled = false;
                        quemaduras.disabled = false;
                        quemaduras1.disabled = false;
                        quemaduras2.disabled = false;
                        porcentSuperficie.disabled = true;
                        picadura.disabled = false;
                        mordedura.disabled = false;


                        // Muestra campos

                        /* lugarEvento.style.display = 'block';
                        direccionEvento.style.display = 'block';
                        fechaEvento.style.display = 'block';
                        horaEvento.style.display = 'block';
                        vehiculoArma.style.display = 'block';
                        tipoEvento.style.display = 'block';
                        tipoEvento1.style.display = 'block';
                        tipoEvento2.style.display = 'block';
                        tipoEvento3.style.display = 'block';
                        autoridadCompetente.style.display = 'block';
                        horaDenuncia.style.display = 'block';
                        custodiaPolicial.style.display = 'block';
                        observaciones.style.display = 'block';
                        alientoEtilico.style.display = 'block';
                        valorAlcochekc.style.display = 'block';
                        horaExamen.style.display = 'block';
                        alcoholemia.style.display = 'block';
                        otrasSustancias1.style.display = 'block';
                        otrasSustancias2.style.display = 'block';
                        vSospecha.style.display = 'block';
                        vAbusoFisico.style.display = 'block';
                        vAbusoPsicologico.style.display = 'block';
                        vAbusSexual.style.display = 'block';
                        obserintoxiviolen.style.display = 'block';
                        quemaduras.style.display = 'block';
                        quemaduras1.style.display = 'block';
                        quemaduras2.style.display = 'block';
                        porcentSuperficie.style.display = 'block';
                        picadura.style.display = 'block';
                        mordedura.style.display = 'block'; */


                    }
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.getElementById("aplica_antecedentes");
                var alergicos = document.getElementById("alergicos");
                var clinicos = document.getElementById("clinicos");
                var ginecologicos = document.getElementById("ginecologicos");
                var traumatologicos = document.getElementById("traumatologicos");
                var pediatricos = document.getElementById("pediatricos");
                var quirurgicos = document.getElementById("quirurgicos");
                var farmacologicos = document.getElementById("farmacologicos");
                var otros = document.getElementById("otros");
                var obserantecpersonales = document.getElementById("obser_antec_personales");


                checkbox.addEventListener("change", function() {
                    if (this.checked) {
                        // Checkbox "No Aplica" seleccionado
                        alergicos.disabled = true;
                        clinicos.disabled = true;
                        ginecologicos.disabled = true;
                        traumatologicos.disabled = true;
                        pediatricos.disabled = true;
                        quirurgicos.disabled = true;
                        farmacologicos.disabled = true;
                        otros.disabled = true;
                        obserantecpersonales.disabled = true;

                        /* //Oculta los campos                
                        alergicos.style.display = 'none';
                        clinicos.style.display = 'none';
                        ginecologicos.style.display = 'none';
                        traumatologicos.style.display = 'none';
                        pediatricos.style.display = 'none';
                        quirurgicos.style.display = 'none';
                        farmacologicos.style.display = 'none';
                        otros.style.display = 'none';
                        obserantecpersonales.style.display = 'none'; */

                    } else {
                        // Checkbox "No Aplica" no seleccionado
                        alergicos.disabled = false;
                        clinicos.disabled = false;
                        ginecologicos.disabled = false;
                        traumatologicos.disabled = false;
                        pediatricos.disabled = false;
                        quirurgicos.disabled = false;
                        farmacologicos.disabled = false;
                        otros.disabled = false;
                        obserantecpersonales.disabled = false;

                        /*  alergicos.style.display = 'block';
                         clinicos.style.display = 'block';
                         ginecologicos.style.display = 'block';
                         traumatologicos.style.display = 'block';
                         pediatricos.style.display = 'block';
                         quirurgicos.style.display = 'block';
                         farmacologicos.style.display = 'block';
                         otros.style.display = 'block';
                         obserantecpersonales.style.display = 'block'; */
                    }
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.getElementById("aplica_actual_sistemas");
                var enfActualSistemas = document.getElementById("enf_actual_sistemas");


                checkbox.addEventListener("change", function() {
                    if (this.checked) {

                        enfActualSistemas.disabled = true;

                        enfActualSistemas.style.display = 'none';

                    } else {

                        enfActualSistemas.disabled = false;

                        enfActualSistemas.style.display = 'block';
                    }
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.getElementById("aplica_caracteristicas_dolor");

                var region_anatomica_1 = document.getElementById("region_anatomica_1");
                var punto_doloroso_1 = document.getElementById("punto_doloroso_1");
                var evolucion_1 = document.getElementById("evolucion_1");
                var tipo_1 = document.getElementById("tipo_1");
                var modificaciones_1 = document.getElementById("modificaciones_1");
                var alivia_con_1 = document.getElementById("alivia_con_1");
                var intensidad_1 = document.getElementById("intensidad_1");
                var region_anatomica_2 = document.getElementById("region_anatomica_2");
                var punto_doloroso_2 = document.getElementById("punto_doloroso_2");
                var evolucion_2 = document.getElementById("evolucion_2");
                var tipo_2 = document.getElementById("tipo_2");
                var modificaciones_2 = document.getElementById("modificaciones_2");
                var alivia_con_2 = document.getElementById("alivia_con_2");
                var intensidad_2 = document.getElementById("intensidad_2");
                var region_anatomica_3 = document.getElementById("region_anatomica_3");
                var punto_doloroso_3 = document.getElementById("punto_doloroso_3");
                var evolucion_3 = document.getElementById("evolucion_3");
                var tipo_3 = document.getElementById("tipo_3");
                var modificaciones_3 = document.getElementById("modificaciones_3");
                var alivia_con_3 = document.getElementById("alivia_con_3");
                var intensidad_3 = document.getElementById("intensidad_3");


                checkbox.addEventListener("change", function() {
                    if (this.checked) {

                        region_anatomica_1.disabled = true;
                        punto_doloroso_1.disabled = true;
                        evolucion_1.disabled = true;
                        tipo_1.disabled = true;
                        modificaciones_1.disabled = true;
                        alivia_con_1.disabled = true;
                        intensidad_1.disabled = true;

                        region_anatomica_2.disabled = true;
                        punto_doloroso_2.disabled = true;
                        evolucion_2.disabled = true;
                        tipo_2.disabled = true;
                        modificaciones_2.disabled = true;
                        alivia_con_2.disabled = true;
                        intensidad_2.disabled = true;

                        region_anatomica_3.disabled = true;
                        punto_doloroso_3.disabled = true;
                        evolucion_3.disabled = true;
                        tipo_3.disabled = true;
                        modificaciones_3.disabled = true;
                        alivia_con_3.disabled = true;
                        intensidad_3.disabled = true;

                        ////////////////////////////////////////////////
                        region_anatomica_1.style.display = 'none';
                        punto_doloroso_1.style.display = 'none';
                        evolucion_1.style.display = 'none';
                        tipo_1.style.display = 'none';
                        modificaciones_1.style.display = 'none';
                        alivia_con_1.style.display = 'none';
                        intensidad_1.style.display = 'none';

                        region_anatomica_2.style.display = 'none';
                        punto_doloroso_2.style.display = 'none';
                        evolucion_2.style.display = 'none';
                        tipo_2.style.display = 'none';
                        modificaciones_2.style.display = 'none';
                        alivia_con_2.style.display = 'none';
                        intensidad_2.style.display = 'none';

                        region_anatomica_3.style.display = 'none';
                        punto_doloroso_3.style.display = 'none';
                        evolucion_3.style.display = 'none';
                        tipo_3.style.display = 'none';
                        modificaciones_3.style.display = 'none';
                        alivia_con_3.style.display = 'none';
                        intensidad_3.style.display = 'none';

                    } else {

                        region_anatomica_1.disabled = false;
                        punto_doloroso_1.disabled = false;
                        evolucion_1.disabled = false;
                        tipo_1.disabled = false;
                        modificaciones_1.disabled = false;
                        alivia_con_1.disabled = false;
                        intensidad_1.disabled = false;

                        region_anatomica_2.disabled = false;
                        punto_doloroso_2.disabled = false;
                        evolucion_2.disabled = false;
                        tipo_2.disabled = false;
                        modificaciones_2.disabled = false;
                        alivia_con_2.disabled = false;
                        intensidad_2.disabled = false;

                        region_anatomica_3.disabled = false;
                        punto_doloroso_3.disabled = false;
                        evolucion_3.disabled = false;
                        tipo_3.disabled = false;
                        modificaciones_3.disabled = false;
                        alivia_con_3.disabled = false;
                        intensidad_3.disabled = false;

                        //////////////////////////////////////////////
                        region_anatomica_1.style.display = 'block';
                        punto_doloroso_1.style.display = 'block';
                        evolucion_1.style.display = 'block';
                        tipo_1.style.display = 'block';
                        modificaciones_1.style.display = 'block';
                        alivia_con_1.style.display = 'block';
                        intensidad_1.style.display = 'block';

                        region_anatomica_2.style.display = 'block';
                        punto_doloroso_2.style.display = 'block';
                        evolucion_2.style.display = 'block';
                        tipo_2.style.display = 'block';
                        modificaciones_2.style.display = 'block';
                        alivia_con_2.style.display = 'block';
                        intensidad_2.style.display = 'block';

                        region_anatomica_3.style.display = 'block';
                        punto_doloroso_3.style.display = 'block';
                        evolucion_3.style.display = 'block';
                        tipo_3.style.display = 'block';
                        modificaciones_3.style.display = 'block';
                        alivia_con_3.style.display = 'block';
                        intensidad_3.style.display = 'block';
                    }
                });
            });

            

            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.getElementById("aplica_embarazo_parto");

                var gestas = document.getElementById("gestas");
                var partos = document.getElementById("partos");
                var abortos = document.getElementById("abortos");
                var cesareas = document.getElementById("cesareas");
                var fecha_ult_menstruacion = document.getElementById("fecha_ult_menstruacion");
                var semanas_gestacion = document.getElementById("semanas_gestacion");
                var movimiento_fetal = document.getElementById("movimiento_fetal");
                var frecuencia_card_fetal = document.getElementById("frecuencia_card_fetal");
                var membranas_rota = document.getElementById("membranas_rota");
                var tiempo_membranas_rota = document.getElementById("tiempo_membranas_rota");
                var altura_uterina = document.getElementById("altura_uterina");
                var presentacion = document.getElementById("presentacion");
                var dilatacion = document.getElementById("dilatacion");
                var borramiento = document.getElementById("borramiento");
                var plano = document.getElementById("plano");
                var pelvis_util = document.getElementById("pelvis_util");
                var sangrado_vaginal = document.getElementById("sangrado_vaginal");
                var contracciones = document.getElementById("contracciones");
                var obser_embarazo_parto = document.getElementById("obser_embarazo_parto");
                checkbox.addEventListener("change", function() {
                    if (this.checked) {

                        gestas.disabled = true;
                        partos.disabled = true;
                        abortos.disabled = true;
                        cesareas.disabled = true;
                        fecha_ult_menstruacion.disabled = true;
                        semanas_gestacion.disabled = true;
                        movimiento_fetal.disabled = true;
                        frecuencia_card_fetal.disabled = true;
                        membranas_rota.disabled = true;
                        tiempo_membranas_rota.disabled = true;
                        altura_uterina.disabled = true;
                        presentacion.disabled = true;
                        dilatacion.disabled = true;
                        borramiento.disabled = true;
                        plano.disabled = true;
                        pelvis_util.disabled = true;
                        sangrado_vaginal.disabled = true;
                        contracciones.disabled = true;
                        obser_embarazo_parto.disabled = true;

                        ////////////////////////////////////////////////
                        gestas.style.display = 'none';
                        partos.style.display = 'none';
                        abortos.style.display = 'none';
                        cesareas.style.display = 'none';
                        fecha_ult_menstruacion.style.display = 'none';
                        semanas_gestacion.style.display = 'none';
                        movimiento_fetal.style.display = 'none';
                        frecuencia_card_fetal.style.display = 'none';
                        membranas_rota.style.display = 'none';
                        tiempo_membranas_rota.style.display = 'none';
                        altura_uterina.style.display = 'none';
                        presentacion.style.display = 'none';
                        dilatacion.style.display = 'none';
                        borramiento.style.display = 'none';
                        plano.style.display = 'none';
                        pelvis_util.style.display = 'none';
                        sangrado_vaginal.style.display = 'none';
                        contracciones.style.display = 'none';
                        obser_embarazo_parto.style.display = 'none';

                    } else {

                        gestas.disabled = false;
                        partos.disabled = false;
                        abortos.disabled = false;
                        cesareas.disabled = false;
                        fecha_ult_menstruacion.disabled = false;
                        semanas_gestacion.disabled = false;
                        movimiento_fetal.disabled = false;
                        frecuencia_card_fetal.disabled = false;
                        membranas_rota.disabled = false;
                        tiempo_membranas_rota.disabled = false;
                        altura_uterina.disabled = false;
                        presentacion.disabled = false;
                        dilatacion.disabled = false;
                        borramiento.disabled = false;
                        plano.disabled = false;
                        pelvis_util.disabled = false;
                        sangrado_vaginal.disabled = false;
                        contracciones.disabled = false;
                        obser_embarazo_parto.disabled = false;

                        //////////////////////////////////////////////
                        gestas.style.display = 'block';
                        partos.style.display = 'block';
                        abortos.style.display = 'block';
                        cesareas.style.display = 'block';
                        fecha_ult_menstruacion.style.display = 'block';
                        semanas_gestacion.style.display = 'block';
                        movimiento_fetal.style.display = 'block';
                        frecuencia_card_fetal.style.display = 'block';
                        membranas_rota.style.display = 'block';
                        tiempo_membranas_rota.style.display = 'block';
                        altura_uterina.style.display = 'block';
                        presentacion.style.display = 'block';
                        dilatacion.style.display = 'block';
                        borramiento.style.display = 'block';
                        plano.style.display = 'block';
                        pelvis_util.style.display = 'block';
                        sangrado_vaginal.style.display = 'block';
                        contracciones.style.display = 'block';
                        obser_embarazo_parto.style.display = 'block';
                    }
                });
            });


            document.addEventListener("DOMContentLoaded", function() {
                var checkboxDiagramaTopografico = document.getElementById("aplica_diagrama_topografico");
                var checkboxesLesiones = document.querySelectorAll('[id^="lesion_checkbox_"]');

                checkboxDiagramaTopografico.addEventListener("change", function() {
                    var isChecked = this.checked;
                    checkboxesLesiones.forEach(function(checkbox) {
                        checkbox.disabled = isChecked;
                    });
                });

                // Verifica el estado inicial del checkbox de diagrama topográfico al cargar la página
                if (checkboxDiagramaTopografico.checked) {
                    checkboxesLesiones.forEach(function(checkbox) {
                        checkbox.disabled = true;
                    });
                }
            });

            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.getElementById("aplica_analisis_problemas");

                var analisis_problemas = document.getElementById("analisis_problemas");


                checkbox.addEventListener("change", function() {
                    if (this.checked) {

                        analisis_problemas.disabled = true;

                        ////////////////////////////////////////////////
                        analisis_problemas.style.display = 'none';

                    } else {

                        analisis_problemas.disabled = false;

                        //////////////////////////////////////////////
                        analisis_problemas.style.display = 'block';
                    }
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.getElementById("aplica_plan_diagnostico");

                var biometria = document.getElementById("biometria");
                var quimica_sanguinea = document.getElementById("quimica_sanguinea");
                var gasometria = document.getElementById("gasometria");
                var endoscopia = document.getElementById("endoscopia");
                var radiografia_abdomen = document.getElementById("radiografia_abdomen");
                var tomografia = document.getElementById("tomografia");
                var ecografia_pelvica = document.getElementById("ecografia_pelvica");
                var interconsulta_especializada = document.getElementById("interconsulta_especializada");
                var uroanalisis = document.getElementById("uroanalisis");
                var electrolitos = document.getElementById("electrolitos");
                var electrocardiograma = document.getElementById("electrocardiograma");
                var r_x_torax = document.getElementById("r_x_torax");
                var r_x_osea = document.getElementById("r_x_osea");
                var resonancia = document.getElementById("resonancia");
                var ecografia_abdominal = document.getElementById("ecografia_abdominal");
                var pd_otros = document.getElementById("pd_otros");
                var obser_plan_diagnostico = document.getElementById("obser_plan_diagnostico");


                checkbox.addEventListener("change", function() {
                    if (this.checked) {

                        biometria.disabled = true;
                        quimica_sanguinea.disabled = true;
                        gasometria.disabled = true;
                        endoscopia.disabled = true;
                        radiografia_abdomen.disabled = true;
                        tomografia.disabled = true;
                        ecografia_pelvica.disabled = true;
                        interconsulta_especializada.disabled = true;
                        uroanalisis.disabled = true;
                        electrolitos.disabled = true;
                        electrocardiograma.disabled = true;
                        r_x_torax.disabled = true;
                        r_x_osea.disabled = true;
                        resonancia.disabled = true;
                        ecografia_abdominal.disabled = true;
                        pd_otros.disabled = true;
                        obser_plan_diagnostico.disabled = true;

                    } else {

                        biometria.disabled = false;
                        quimica_sanguinea.disabled = false;
                        gasometria.disabled = false;
                        endoscopia.disabled = false;
                        radiografia_abdomen.disabled = false;
                        tomografia.disabled = false;
                        ecografia_pelvica.disabled = false;
                        interconsulta_especializada.disabled = false;
                        uroanalisis.disabled = false;
                        electrolitos.disabled = false;
                        electrocardiograma.disabled = false;
                        r_x_torax.disabled = false;
                        r_x_osea.disabled = false;
                        resonancia.disabled = false;
                        ecografia_abdominal.disabled = false;
                        pd_otros.disabled = false;
                        obser_plan_diagnostico.disabled = false;

                    }
                });
            });

            //punto 13 diagnosticos presuntivos
            // Inicializar Select2 en el campo de selección de diagnosticocie10s
            $('.select2cie10').select2();


            let diagnosticocie10Index = 1;
            let diagnosticocie10Count = 0;
            $('#btn-add-diagnosticocie10').on('click', function() {
              if (diagnosticocie10Count < 2) {
                $('#diagnosticoscie10_table tbody').append(`
                    <tr id="diagnosticocie10-${diagnosticocie10Index}">
                        <td>
                            <select name="diagnosticos_presuntivos[]" class="form-control select2cie10">
                                <option value="">SELECCIONE UN DIAGNÓSTICO</option>
                                    @foreach ($diagnosticoscie10s as $diagnosticoscie10)
                                        <option value="{{ $diagnosticoscie10->id }}">
                                            {{ $diagnosticoscie10->descripcion }} ({{ $diagnosticoscie10->clave }}) 
                                        </option>
                                    @endforeach
                            </select>
                        </td>     
                        <td style="font-size: 12px">
                            <input class="form-control diagnosticocie10-clave" type="text" name="diagnosticocie10_generico_3" readonly>
                        </td>

                        
                        <td>
                            <button type="button" class="btn btn-danger btn-remove-diagnosticocie10">
                                <i class="fas fa-trash-alt"></i> <!-- Ícono de bote de basura -->
                            </button>
                            
                        </td>
                    </tr>
                `);
                // Inicializar Select2 en el nuevo campo de selección de diagnosticocie10s
            $(`#diagnosticocie10-${diagnosticocie10Index} .select2cie10`).select2();
                diagnosticocie10Index++;
                diagnosticocie10Count++;

                // Deshabilitar el botón después de agregar 3 diagnósticos
                if (diagnosticocie10Count === 2) {
                    $(this).prop('disabled', true);
                }
              }
            });

            $(document).on('click', '.btn-remove-diagnosticocie10', function() {
                $(this).closest('tr').remove();
                diagnosticocie10Count--;

                // Habilitar el botón cuando se elimina un diagnóstico
                $('#btn-add-diagnosticocie10').prop('disabled', false);
            });

            // Cuando se selecciona un diagnóstico, actualizar el campo de texto con la clave
            $(document).on('change', '.select2cie10', function() {
                var selectedOption = $(this).find('option:selected');
                var clave = selectedOption.text().split('(')[1].replace(')', '').trim();
                $(this).closest('tr').find('.diagnosticocie10-clave').val(clave);
            });

            $(document).on('click', '.btn-remove-diagnosticocie10', function() {
                $(this).closest('tr').remove();
            });




            //punto 14 diagnosticos definitivos
            // Inicializar Select2 en el campo de selección de diagnosticocie10s
            $('.select2cie10f').select2();


            let diagnosticocie10fIndex = 1;
            let diagnosticocie10fCount = 0;
            $('#btn-add-diagnosticocie10f').on('click', function() {
              if (diagnosticocie10fCount < 2) {
                $('#diagnosticoscie10f_table tbody').append(`
                    <tr id="diagnosticocie10f-${diagnosticocie10fIndex}">
                        <td>
                            <select name="diagnosticos_definitivos[]" class="form-control select2cie10f">
                                <option value="">SELECCIONE UN DIAGNÓSTICO</option>
                                    @foreach ($diagnosticoscie10s as $diagnosticoscie10)
                                        <option value="{{ $diagnosticoscie10->id }}">
                                            {{ $diagnosticoscie10->descripcion }} ({{ $diagnosticoscie10->clave }}) 
                                        </option>
                                    @endforeach
                            </select>
                        </td>     
                        <td style="font-size: 12px">
                            <input class="form-control diagnosticocie10f-clave" type="text" name="diagnosticocie10f_generico_3" readonly>
                        </td>

                        
                        <td>
                            <button type="button" class="btn btn-danger btn-remove-diagnosticocie10f">
                                <i class="fas fa-trash-alt"></i> <!-- Ícono de bote de basura -->
                            </button>
                            
                        </td>
                    </tr>
                `);
                // Inicializar Select2 en el nuevo campo de selección de diagnosticocie10s
            $(`#diagnosticocie10f-${diagnosticocie10fIndex} .select2cie10f`).select2();
                diagnosticocie10fIndex++;
                diagnosticocie10fCount++;

                // Deshabilitar el botón después de agregar 3 diagnósticos
                if (diagnosticocie10fCount === 2) {
                    $(this).prop('disabled', true);
                }
              }
            });

            $(document).on('click', '.btn-remove-diagnosticocie10f', function() {
                $(this).closest('tr').remove();
                diagnosticocie10fCount--;

                // Habilitar el botón cuando se elimina un diagnóstico
                $('#btn-add-diagnosticocie10f').prop('disabled', false);
            });

            // Cuando se selecciona un diagnóstico, actualizar el campo de texto con la clave
            $(document).on('change', '.select2cie10f', function() {
                var selectedOption = $(this).find('option:selected');
                var clave = selectedOption.text().split('(')[1].replace(')', '').trim();
                $(this).closest('tr').find('.diagnosticocie10f-clave').val(clave);
            });

            $(document).on('click', '.btn-remove-diagnosticocie10f', function() {
                $(this).closest('tr').remove();
            });

           ////////////////////////////////////////////////////////////



           ////////////////////////////// DIAGRAMA TOPOGRÁFICO //////////////////////////////////
            
                  
           $(document).ready(function() {
                    var contenedor = $('#contenedor-imagen');
                    var numerosContainer = $('#numeros-container');

                    contenedor.on('click', function(event) {
                        var posX = event.offsetX; // Obtiene la posición X relativa al contenedor de la imagen
                        var posY = event.offsetY; // Obtiene la posición Y relativa al contenedor de la imagen

                        //var idLesion = $('input[type="checkbox"]:checked').val();
                        var idLesion = $('input[type="checkbox"][id^="lesion_checkbox_"]:checked').val();


                        if (idLesion) {
                            // Variable count específica para este número ingresado
                            var count = $('.numero-ingresado[data-id-lesion="' + idLesion + '"]').length;

                            var numeroIngresado = $('<div class="numero-ingresado" data-id-lesion="' + idLesion + '">' + idLesion + '</div>').css({
                                top: posY,
                                left: posX
                            }).appendTo(contenedor);

                            // Agregar coordenadas al formulario
                            var coordenadaX = $('<input type="hidden" name="lesiones[' + idLesion + '][coordenadas][' + count + '][posicion_x]" value="' + posX + '">');
                            var coordenadaY = $('<input type="hidden" name="lesiones[' + idLesion + '][coordenadas][' + count + '][posicion_y]" value="' + posY + '">');
                            $('#table-container').append(coordenadaX);
                            $('#table-container').append(coordenadaY);

                            console.log('Lesión ' + idLesion + ': Posición X = ' + posX + ', Posición Y = ' + posY);
                            // Hacer los números movibles
                            numeroIngresado.draggable({
                                containment: contenedor,
                                scroll: false,
                                drag: function(event, ui) {
                                    var posX = ui.position.left;
                                    var posY = ui.position.top;
                                    $(this).css({ top: posY, left: posX });

                                    // Actualizar las coordenadas en los campos ocultos
                                    var idLesion = $(this).data('id-lesion');
                                    var index = $('.numero-ingresado[data-id-lesion="' + idLesion + '"]').index($(this));
                                    $('input[name="lesiones[' + idLesion + '][coordenadas][' + index + '][posicion_x]"]').val(posX);
                                    $('input[name="lesiones[' + idLesion + '][coordenadas][' + index + '][posicion_y]"]').val(posY);

                                    // Imprimir las coordenadas en la consola
                                    //console.log('Lesión ' + idLesion + ': Posición X = ' + posX + ', Posición Y = ' + posY);
                                }
                                
                            });

                             
                            

                            // Añadir evento para eliminar al hacer clic derecho
                            numeroIngresado.on('contextmenu', function(e) {
                                e.preventDefault();
                                var idLesion = $(this).data('id-lesion');
                                var index = $('.numero-ingresado[data-id-lesion="' + idLesion + '"]').index($(this));

                                // Eliminar las coordenadas del formulario
                                $('input[name="lesiones[' + idLesion + '][coordenadas][' + index + '][posicion_x]"]').remove();
                                $('input[name="lesiones[' + idLesion + '][coordenadas][' + index + '][posicion_y]"]').remove();

                                // Eliminar también las coordenadas y datos de la lesión asociada en la base de datos
                                $(this).remove();

                                // Imprimir el mensaje de eliminación en la consola
                                console.log('Lesión ' + idLesion + ' eliminada junto con sus coordenadas');
                            });

                        } else {
                            alert('Por favor, seleccione una lesión primero.');
                        }
                    });          
            });
        


            document.addEventListener("DOMContentLoaded", function() {
                // Seleccionar todos los campos de entrada de texto
                var inputs = document.querySelectorAll('input[type="text"]');

                // Iterar sobre cada campo de entrada
                inputs.forEach(function(input) {
                    // Agregar un evento de escucha para cuando se ingrese texto
                    input.addEventListener("input", function() {
                        // Convertir el valor del campo a mayúsculas
                        this.value = this.value.toUpperCase();
                    });
                });
            });


             
            function validarTelefono(input) {
                var telefono = input.value;

                // Eliminar todos los caracteres no numéricos excepto el signo más al inicio
                telefono = telefono.replace(/[^0-9+]/g, '');

                
                if (!isNaN(telefono) && telefono.replace(/\+/g, '').length <= 10) {
                    
                    input.value = telefono; 
                } else {
                    
                    alert('El teléfono debe contener números y tener máximo 10 dígitos numéricos.');
                    input.value = ''; 
                }
            } 
            
            // Evento para validar el formato del número de teléfono cuando se ingresa texto
            document.getElementById('per_notific_telefono').addEventListener('input', function() {
                validarTelefono(this);
            });

            document.getElementById('acompa_telefono').addEventListener('input', function() {
                validarTelefono(this);
            });

            document.getElementById('telefono_pers_entrega').addEventListener('input', function() {
                validarTelefono(this);
            });


          
        
        
       

       
       
       </script>
    @stop
