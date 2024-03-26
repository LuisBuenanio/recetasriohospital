@extends('adminlte::page')

@section('title', 'Formulario 008')
@section('content_header')
@stop

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
            {!! Form::model($formulario008, ['route' => ['admin.formulario008.update', $formulario008->id],'autocomplete' => 'off','files' => true,'method' => 'put', ]) !!}
            
            <div class="form-group">
                @include('admin.formulario008.partialsedit.encabezado')
                @include('admin.formulario008.partialsedit.1admision')
                @include('admin.formulario008.partialsedit.2inicioatencion')
                @include('admin.formulario008.partialsedit.3intoxicacion')
                @include('admin.formulario008.partialsedit.4antec_perso_familiar')
                @include('admin.formulario008.partialsedit.5enfer_actual_sistemas')
                @include('admin.formulario008.partialsedit.6caracteristicasdolor')
                @include('admin.formulario008.partialsedit.7signosvitales')
                @include('admin.formulario008.partialsedit.8examen_fisico')
                @include('admin.formulario008.partialsedit.9diagrama_topografico')
                @include('admin.formulario008.partialsedit.10embarazo_parto')
                @include('admin.formulario008.partialsedit.11analisis_problemas')
                @include('admin.formulario008.partialsedit.12plan_diagnostico')
                @include('admin.formulario008.partialsedit.14diagnosticos')
                @include('admin.formulario008.partialsedit.15plan_tratamiento')
                @include('admin.formulario008.partialsedit.16salida')

                {{-- {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!} --}}

                
                {!! Form::submit('Actualizar ', ['class' => 'btn btn-primary']) !!}


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
               
                var checkboxIntoxicacion = document.getElementById("aplica_intoxicacion");
                
                var checkboxEnfermedad = document.getElementById("aplica_actual_sistemas");                
                
                var checkboxCaracteristicasDolor = document.getElementById("aplica_caracteristicas_dolor");                
               
                var checkboxAntecedentes = document.getElementById("aplica_antecedentes");
                
                
                
                
                var checkboxEmbarazo = document.getElementById("aplica_embarazo_parto");

                
                var checkboxAnalisisProblemas = document.getElementById("aplica_analisis_problemas");
             
                 
                var checkboxPlanDiagnostico = document.getElementById("aplica_plan_diagnostico");


                
                var camposIntoxicacion = [
                    document.getElementById("lugar_evento"),
                    document.getElementById("direccion_evento"),
                    document.getElementById("fecha_evento"),
                    document.getElementById("hora_evento"),
                    document.getElementById("vehiculo_arma"),
                    document.getElementById("tipo_evento"),
                    document.getElementById("tipo_evento1"),
                    document.getElementById("tipo_evento2"),
                    document.getElementById("tipo_evento3"),
                    document.getElementById("autoridad_competente"),
                    document.getElementById("hora_denuncia"),
                    document.getElementById("custodia_policial"),
                    document.getElementById("observaciones"),
                    document.getElementById("aliento_etilico"),
                    document.getElementById("valor_alcochekc"),
                    document.getElementById("hora_examen"),
                    document.getElementById("alcoholemia"),
                    document.getElementById("otras_sustancias1"),
                    document.getElementById("otras_sustancias2"), 
                    document.getElementById("v_sospecha"),
                    document.getElementById("v_abuso_fisico"),
                    document.getElementById("v_abuso_psicologico"),
                    document.getElementById("v_abuso_sexual"),
                    document.getElementById("obser_intoxi_violen"),
                    document.getElementById("quemaduras"),
                    document.getElementById("quemaduras1"),
                    document.getElementById("quemaduras2"),
                    document.getElementById("porcent_superficie"), 
                    document.getElementById("picadura"),
                    document.getElementById("mordedura")
                ];
                
                var camposAntecedentes = [                    
                    document.getElementById("alergicos"),
                    document.getElementById("clinicos"),
                    document.getElementById("ginecologicos"),
                    document.getElementById("traumatologicos"),
                    document.getElementById("pediatricos"),
                    document.getElementById("quirurgicos"),
                    document.getElementById("farmacologicos"),
                    document.getElementById("otros"),
                    document.getElementById("obser_antec_personales")
                ];
                
                var camposEnfermedad = [
                    document.getElementById("enf_actual_sistemas")
                ];
                
                var camposCaracteristicas = [
                    document.getElementById("region_anatomica_1"),
                    document.getElementById("punto_doloroso_1"),
                    document.getElementById("evolucion_1"),
                    document.getElementById("modificaciones_1"),
                    document.getElementById("tipo_1"),
                    document.getElementById("intensidad_1"),
                    document.getElementById("alivia_con_1"),
                    document.getElementById("punto_doloroso_2"),
                    document.getElementById("region_anatomica_2"),
                    document.getElementById("evolucion_2"),
                    document.getElementById("tipo_2"),
                    document.getElementById("modificaciones_2"),
                    document.getElementById("alivia_con_2"),
                    document.getElementById("intensidad_2"),
                    document.getElementById("region_anatomica_3"),
                    document.getElementById("punto_doloroso_3"),
                    document.getElementById("evolucion_3"),
                    document.getElementById("tipo_3"),
                    document.getElementById("modificaciones_3"),
                    document.getElementById("alivia_con_3"),
                    document.getElementById("intensidad_3")

                ];

                
                
                var camposEmbarazo = [                  
                    document.getElementById("gestas"),
                    document.getElementById("partos"),
                    document.getElementById("abortos"),
                    document.getElementById("cesareas"),
                    document.getElementById("fecha_ult_menstruacion"),
                    document.getElementById("semanas_gestacion"),
                    document.getElementById("movimiento_fetal"),
                    document.getElementById("frecuencia_card_fetal"),
                    document.getElementById("membranas_rota"),
                    document.getElementById("tiempo_membranas_rota"),
                    document.getElementById("altura_uterina"),
                    document.getElementById("presentacion"),
                    document.getElementById("dilatacion"),
                    document.getElementById("borramiento"),
                    document.getElementById("plano"),
                    document.getElementById("pelvis_util"),
                    document.getElementById("sangrado_vaginal"),
                    document.getElementById("contracciones"),
                    document.getElementById("obser_embarazo_parto")

                ];

               
                var camposAnalisisProblemas = [                  
                    document.getElementById("analisis_problemas")

                ];

                 
                 var camposPlanDiagnostico = [                  
                    document.getElementById("biometria"),
                    document.getElementById("quimica_sanguinea"),
                    document.getElementById("gasometria"),
                    document.getElementById("endoscopia"),
                    document.getElementById("radiografia_abdomen"),
                    document.getElementById("tomografia"),
                    document.getElementById("ecografia_pelvica"),
                    document.getElementById("interconsulta_especializada"),
                    document.getElementById("uroanalisis"),  
                    document.getElementById("electrolitos"),
                    document.getElementById("electrocardiograma"),
                    document.getElementById("r_x_torax"),
                    document.getElementById("r_x_osea"),
                    document.getElementById("resonancia"),
                    document.getElementById("ecografia_abdominal"),
                    document.getElementById("pd_otros"),
                    document.getElementById("obser_plan_diagnostico")

                ];
                
                
                checkboxIntoxicacion.addEventListener("change", function() {
                    actualizarEstadoCampos(this.checked, camposIntoxicacion);
                });
                
                checkboxAntecedentes.addEventListener("change", function() {
                    actualizarEstadoCampos(this.checked, camposAntecedentes);
                });
                
                checkboxEnfermedad.addEventListener("change", function() {
                    actualizarEstadoCampos(this.checked, camposEnfermedad);
                });
                 
                checkboxCaracteristicasDolor.addEventListener("change", function() {
                    actualizarEstadoCampos(this.checked, camposCaracteristicas);
                });

                 
                 checkboxAnalisisProblemas.addEventListener("change", function() {
                    actualizarEstadoCampos(this.checked, camposAnalisisProblemas);
                });

                
                 checkboxPlanDiagnostico.addEventListener("change", function() {
                    actualizarEstadoCampos(this.checked, camposPlanDiagnostico);
                });

                
                 if (checkboxPlanDiagnostico.checked) {
                    actualizarEstadoCampos(true, camposPlanDiagnostico);
                }
                
                if (checkboxAnalisisProblemas.checked) {
                    actualizarEstadoCampos(true, camposAnalisisProblemas);
                }

                 
                 if (checkboxEmbarazo.checked) {
                    actualizarEstadoCampos(true, camposEmbarazo);
                }  

                 
                 checkboxEmbarazo.addEventListener("change", function() {
                    actualizarEstadoCampos(this.checked, camposEmbarazo);
                });
               

                //  3. ACCIDENTE, VIOLENCIA, INTOXICACIÓN  ///
                if (checkboxIntoxicacion.checked) {
                    actualizarEstadoCampos(true, camposIntoxicacion);
                }
                // 4. ANTECEDENTES PERSONALES Y FAMILIARES RELEVANTES  
                if (checkboxAntecedentes.checked) {
                    actualizarEstadoCampos(true, camposAntecedentes);
                }
                 //5. ENFERMEDAD ACTUAL Y REVISION DE SISTEMA  
                if (checkboxEnfermedad.checked) {
                    actualizarEstadoCampos(true, camposEnfermedad);
                }
                 // 6. CARACTERÍSTICAS DEL DOLOR  
                if (checkboxCaracteristicasDolor.checked) {
                    actualizarEstadoCampos(true, camposCaracteristicas);
                }
                 

                      
            });


            function actualizarEstadoCampos(checked, campos) {
                campos.forEach(function(campo) {
                    campo.disabled = checked;
                });
            }

            //9  DIAGRAMA TOPOGRÁFICO  */
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

           
            /* document.addEventListener("DOMContentLoaded", function() {
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

                        
                    }
                });
            }); */

           ////////////////////////////////////////////////////////////

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

           ////////////////////////////// DIAGRAMA TOPOGRÁFICO //////////////////////////////////
          
            $(document).ready(function() {
                var contenedor = $('#contenedor-imagen');
                var numerosContainer = $('#numeros-container');

                // Función para hacer movibles y eliminables las lesiones existentes
                function habilitarFuncionalidadesLesionesExistente() {
                    $('.numero-ingresado').each(function() {
                        var idLesion = $(this).data('id-lesion');

                        // Hacer los números movibles
                        $(this).draggable({
                            containment: contenedor,
                            scroll: false,
                            drag: function(event, ui) {
                                var posX = ui.position.left;
                                var posY = ui.position.top;
                                $(this).css({ top: posY, left: posX });

                                // Actualizar las coordenadas en los campos ocultos
                                var index = $('.numero-ingresado[data-id-lesion="' + idLesion + '"]').index($(this));
                                $('input[name="lesiones[' + idLesion + '][coordenadas][' + index + '][posicion_x]"]').val(posX);
                                $('input[name="lesiones[' + idLesion + '][coordenadas][' + index + '][posicion_y]"]').val(posY);

                                // Imprimir las coordenadas en la consola
                                console.log('Lesión ' + idLesion + ': Posición X = ' + posX + ', Posición Y = ' + posY);
                            }
                        });

                        // Añadir evento para eliminar al hacer clic derecho
                        $(this).on('contextmenu', function(e) {
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
                    });
                }

                // Llamar a la función para habilitar las funcionalidades de las lesiones existentes al cargar la página
                habilitarFuncionalidadesLesionesExistente();

                // Función para agregar una nueva lesión
                function agregarLesion(posX, posY, idLesion) {
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

                    // Hacer los números movibles
                    numeroIngresado.draggable({
                        containment: contenedor,
                        scroll: false,
                        drag: function(event, ui) {
                            var posX = ui.position.left;
                            var posY = ui.position.top;
                            $(this).css({ top: posY, left: posX });

                            // Actualizar las coordenadas en los campos ocultos
                            var index = $('.numero-ingresado[data-id-lesion="' + idLesion + '"]').index($(this));
                            $('input[name="lesiones[' + idLesion + '][coordenadas][' + index + '][posicion_x]"]').val(posX);
                            $('input[name="lesiones[' + idLesion + '][coordenadas][' + index + '][posicion_y]"]').val(posY);

                            // Imprimir las coordenadas en la consola
                            console.log('Lesión ' + idLesion + ': Posición X = ' + posX + ', Posición Y = ' + posY);
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
                }

                // Evento click para agregar una nueva lesión
                contenedor.on('click', function(event) {
                    var posX = event.offsetX; // Obtiene la posición X relativa al contenedor de la imagen
                    var posY = event.offsetY; // Obtiene la posición Y relativa al contenedor de la imagen

                    //var idLesion = $('input[type="lesion_checkbox"]:checked').val();
                    //
                    var idLesion = $('input[type="checkbox"][id^="lesion_checkbox_"]:checked').val();

                    

                    if (idLesion) {
                        agregarLesion(posX, posY, idLesion);
                        console.log('Coordenadas a enviar al controlador:');
                        console.log('X: ' + posX + ', Y: ' + posY);
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
