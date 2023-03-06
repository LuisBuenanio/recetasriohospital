@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital')

@section('content_header')
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>
    <h1>Crear nueva Receta</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/jquery-ui-1.13.2/jquery-ui.min.css')}}">

    <style>


    </style>


@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.receta.store', 'id'=>'formulario-principal', 'autocomplete' => 'off', 'files' => true])!!}

                {!! Form::hidden('users_id', auth()->user()->id) !!}

                <div class="form-group">
                    {!! Form::label('id', 'Número de Receta:') !!}  
                       
                    {!! Form::text('id', $nextId,['class' => 'form-control', 'readonly']) !!}
                </div>             
           


                <div class="form-group">
                    {!! Form::label('ciudad', 'Ciudad:') !!}
                    {!! Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ciudad']) !!} 

                    @error('ciudad')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>


                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha:') !!}
                    {!! Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de la Receta']) !!} 
                    
                    
                    @error('fecha')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>{{-- 
                <div class="form-group">
                    {!! Form::label('diagnosticoscie10_id', 'CIE-10:') !!}
                    {!! Form::select('diagnosticoscie10_id', $diagnosticoscie10, null, ['class' => 'form-control']) !!} 

                    @error('diagnosticoscie10_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div> --}}


                <!-- For defining autocomplete -->
                <div class="form-group">
                    {!! Form::label('descripcion', 'Diagnóstico') !!}               
                    {!! Form::text('descripcion', null, ['class '=> 'form-control','id'=>'diagnostico_search', 'placeholder' => 'Ingrese el Diagnóstico del Paciente']) !!}
                    @error('descripcion')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>                

                <div class="form-group">
                    
                    {!! Form::hidden('diagnosticoscie10_id', null,['class' => 'form-control', 'id'=>'diagnosticoscie10id', 'placeholder' => 'Nombre del Paciente', 'readonly']) !!}                 
                </div>

                <div class="form-group">
                    {!! Form::label('diagnosticoscie10_clave', 'CIE-10:') !!}
                    {!! Form::text('diagnosticoscie10_clave', null,['class' => 'form-control', 'id'=>'diagnosticoscie10clave', 'placeholder' => 'Nombre del Paciente', 'readonly']) !!}                    
                </div>


                <!-- For defining autocomplete -->
                <div class="form-group">
                    {!! Form::label('cedula', 'Cédula del Paciente:') !!}               
                    {!! Form::text('cedula', null, ['class '=> 'form-control','id'=>'paciente_search', 'placeholder' => 'Ingrese cedula del Paciente']) !!}
                    @error('cedula')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>                

                <div class="form-group">
                    
                    {!! Form::hidden('paciente_id', null,['class' => 'form-control', 'id'=>'pacienteid', 'placeholder' => 'Nombre del Paciente', 'readonly']) !!}                 
                </div>

                <div class="form-group">
                    {!! Form::label('paciente_nombre', 'Nombre del Paciente:') !!}
                    {!! Form::text('paciente_nombre', null,['class' => 'form-control', 'id'=>'pacientenombre', 'placeholder' => 'Nombre del Paciente', 'readonly']) !!}                    
                </div>

                          



                <div class="form-group">
                    {!! Form::label('historia', 'Historia Clínica:') !!}
                    {!! Form::text('historia', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Historia Clínica del Paciente']) !!} 

                    @error('historia')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group">
                    <p class="font-weight-bold">Alergia</p>
                                    
                    <label class="mr-2" id="si">
                        {!! Form::radio('aler', 1 , true,) !!}
                            SI
                    </label>
                    <label class="mr-2" id="no">
                        {!! Form::radio('aler', 2 ,  ) !!}
                            NO
                    </label id="alergia">    
                    {!! Form::text('alergia', null, ['class '=> 'form-control','id'=>'alergia', 'placeholder' => 'Ingrese Alergia del Paciente']) !!}
                                    
                    @error('alergia')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                                    
                </div>   

                
                {{-- <div class="form-group">
                    {!! Form::label('medicamento_id', 'Medicamento:') !!}
                    {!! Form::select('medicamento_id', $medicamento, null, ['class' => 'form-control']) !!} 

                    @error('medicamento_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div> --}}

                {{-- <div class="form-group">
                    {!! Form::label('medicamentos', 'Medicamentos:') !!}
                    {{-- {!! Form::select('medicamento_id', $medicamento, null, ['class' => 'form-control']) !!}
                    <select name="medicamentos[]" id="medicamentos" class="form-control selectpicker" 
                     title="Seleccionar Medicamentos" multiple required>
                        @foreach ($medicamentos as $medicamento )
                            <option value="{{$medicamento->id}}">{{$medicamento->nombre}}</option>
                        @endforeach                    
                    </select>
                    <button type="button" id="agregar-medicamento">Agregar medicamento</button>
                </div>

                {{-- <div class="form-group">
                    {!! Form::label('', 'Medicamentos:') !!}
                    <div class="card-body">
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Medicamento</th>
                                <th>Concentración</th>                            
                                <th>Tipo</th>
                                <th colspan="2"></th>
                            </tr>

                            <tbody>
                                @foreach ($medicamentos as $medicamento)
                                    <tr>
                                        <td>{{$medicamento->id}}</td>
                                        <td>{{$medicamento->nombre}}</td>
                                        <td>{{$medicamento->concentracion}}</td> 
                                        <td>{{$medicamento->tipo}}</td>               
                                    </tr>  
                                @endforeach
                            </tbody>
                      </thead> 

                    </div>
                </div --}}


                {{-- <div class="form-group">
                    {!! Form::label('', 'Medicamentos:') !!}
                    <div class="card-body">
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Medicamento</th>
                                <th>Concentración</th>                            
                                <th>Tipo</th>
                                <th colspan="2"></th>
                            </tr>

                            <tbody>
                                @foreach ($medicamentos as $medicamento)
                                    <tr>
                                        <td>{{$medicamento->id}}</td>
                                        <td>{{$medicamento->nombre}}</td>
                                        <td>{{$medicamento->concentracion}}</td> 
                                        <td>{{$medicamento->tipo}}</td>               
                                    </tr>  
                                @endforeach
                            </tbody>
                      </thead> 

                    </div>
                </div> --}}

                
                


        

                {{-- <div class="form-group">
                    {!! Form::label('dosis', 'Dósis de Administración:') !!}
                    {!! Form::text('dosis', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dósis de Admnistración']) !!} 

                    @error('dosis')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div> --}}


                {{-- <div class="form-group">
                    {!! Form::label('horario', 'Horario:') !!}
                    {!! Form::text('horario', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la hora de Aplicación']) !!} 

                    @error('horario')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div> --}}


                {{-- <div class="form-group">
                    <label for="medicamentos">Medicamentos</label>
            
                    <!-- Botón para agregar medicamento -->
                    <button type="button" class="btn btn-primary" id="agregar-medicamento">Agregar medicamento</button>
            
                    <!-- Contenedor para los medicamentos -->
                    <div id="medicamentos-container"></div>
                </div> --}}

{{-- 
                <hr>

                    <label for="medicamentos">Medicamentos:</label>
                    <br>
                    @foreach ($medicamentos as $medicamento)
                        <input type="checkbox" name="medicamentos[]" value="{{ $medicamento->id }}"> {{ $medicamento->nombre }} {{ $medicamento->concentracion }} {{ $medicamento->tipo }} 
                        <input type="text" name="dosis[{{ $medicamento->id }}]" placeholder="Dosis" >
                        <input type="text" name="horario[{{ $medicamento->id }}]" placeholder="Horario" >
                        <br>
                    @endforeach

                <hr> --}}
                
                {{-- <div class="form-group">
                    <label for="medicamentos">Medicamentos:</label>
            
                    <select name="medicamentos[]" id="medicamentos" class="form-control" multiple>
                        @foreach($medicamentos as $medicamento)
                            <option value="{{ $medicamento->id }}">{{ $medicamento->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="dosis">Dosis:</label>
            
                    <input type="text" name="dosis[]" id="dosis" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <label for="horario">Horario:</label>
            
                    <input type="text" name="horario[]" id="horario" class="form-control" required>
                </div> --}}

                

                {{-- <div class="form-group">
                    {!! Form::label('', 'Medicamentos:') !!}
                    <br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#medicamentos-modal">
                        Agregar medicamentoss
                    </button>
                    
                    <div class="card-body">
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Medicamento</th>
                                <th>Concentración</th>                            
                                <th>Tipo</th>
                                <th>Dósis</th>                            
                                <th>Horario</th>
                                <th colspan="2"></th>
                            </tr>

                            <tbody>
                                @foreach ($medicamentos as $medicamento)
                                    <tr>
                                        <td>{{$medicamento->id}}</td>
                                        <td>{{$medicamento->nombre}}</td>
                                        <td>{{$medicamento->concentracion}}</td> 
                                        <td>{{$medicamento->tipo}}</td>               
                                    </tr>  
                                @endforeach
                            </tbody>
                        </thead> 
                     </table>

                    </div>
                </div> --}}

                {{-- <div class="form-group">

                    <label for="medicamentos">Medicamentos:</label>
                    <br>
                    @foreach ($medicamentos as $medicamento)
                        <input type="checkbox" name="medicamentos[]" value="{{ $medicamento->id }}"> {{ $medicamento->nombre }}
                        <input type="text" name="dosis[{{ $medicamento->id }}]" placeholder="Dosis">
                        <input type="text" name="horario[{{ $medicamento->id }}]" placeholder="Horario" >
                        <br>
                    @endforeach
                </div> --}}

                {{-- <div class="form-group">

                    <label for="medicamentos">Medicamentos:</label>
                    <br>
                    <a href={{ route('admin.receta.medicamentos.store', ['id']) }}>Agregar Medicamentos</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#medicamentos-modal">
                        Agregar medicamentoss
                    </button>
                    
                </div>

                <div class="form-group">

                    <button type="button" onclick="agregarCampo()">Añadir campo</button>
                    <div id="campos"></div>

                    
                </div> --}}

                

                <div class="form-group">
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#medicamentos-modal">Agregar medicamento</button>
                  

                </div>



                <div class="form-group">
                    {!! Form::label('sugerencia', 'Suegerencia No Farmacológica:') !!}
                    {!! Form::text('sugerencia', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la sugerencia no Framacológica de la Receta']) !!} 

                    @error('sugerencia')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                

                {!! Form:: submit('Crear  Receta',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>
@stop



@section('js')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{asset('vendor/jquery-ui-1.13.2/jquery-ui.min.js')}}" type="text/javascript"></script>

    <script>
    
            // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            $( "#paciente_search" ).autocomplete({
                source: function( request, response ) {
                // Fetch data
                    $.ajax({
                        url:"{{route('admin.receta.getPacientes')}}",
                        type: 'post',
                        dataType: "json",
                        data: {
                        _token: CSRF_TOKEN,
                        search: request.term
                        },
                            success: function( data ) {
                            response( data );
                        }
                    });
                },
                select: function (event, ui) {
                // Set selection
                    $('#paciente_search').val(ui.item.label); // display the selected text
                    $('#pacienteid').val(ui.item.value); // save selected id to input
                    $('#pacientenombre').val(ui.item.value1); 
                    return false;
                }
            });

        });

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            $( "#diagnostico_search" ).autocomplete({
                source: function( request, response ) {
                // Fetch data
                    $.ajax({
                        url:"{{route('admin.receta.getDiagnosticoscie10')}}",
                        type: 'post',
                        dataType: "json",
                        data: {
                        _token: CSRF_TOKEN,
                        search: request.term
                        },
                            success: function( data ) {
                            response( data );
                        }
                    });
                },
                select: function (event, ui) {
                // Set selection
                    $('#diagnostico_search').val(ui.item.label); // display the selected text
                    $('#diagnosticoscie10id').val(ui.item.value); // save selected id to input
                    $('#diagnosticoscie10clave').val(ui.item.value1); 
                    return false;
                }
            });

        });
        
        $(document).ready( function() {
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

{{-- <div class="modal fade" id="medicamentos-modal" tabindex="-1" role="dialog" aria-labelledby="medicamentos-modal-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="medicamentos-modal-label">Agregar medicamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Concentración</th>
                <th>Tipo</th>
                <th>Dósis</th>                
                <th>Horario</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($medicamentos as $medicamento)
              <tr>
                <td>{{ $medicamento->nombre }}</td>
                <td>{{ $medicamento->concentracion }}</td>
                <td>{{ $medicamento->tipo }}</td>
                <td><input type="text" class="form-control" name="dosis[{{ $medicamento->id }}]" /></td>
                <td><input type="text" class="form-control" name="horario[{{ $medicamento->id }}]" /></td>
                <td><button type="button" class="btn btn-primary agregar-medicamento" data-dismiss="modal" data-medicamento="{{ $medicamento->id }}">Agregar</button></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>








 --}}
 <!-- Este código va al final del archivo HTML -->
<div class="modal fade" id="medicamentos-modal" tabindex="-1" role="dialog" aria-labelledby="modal-medicamento-titulo">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title" id="modal-medicamento-titulo">Agregar medicamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <form id="agregar-medicamento">
          <!-- Aquí colocas los campos necesarios para ingresar los datos adicionales -->
          
            <div class="form-group">
                {!! Form::label('medicamento', 'Medicamentos:') !!}
                    <select name="medicamento" id="medicamento" class="form-control selectpicker" 
                        title="Seleccionar Medicamento"  required>
                    @foreach ($medicamentos as $medicamento )
                        <option value="{{$medicamento->id}}">{{$medicamento->nombre}}</option>
                    @endforeach                    
                </select>
            </div>

            <div class="form-group">
                <label for="dosis">Dosis:</label>
                <input type="text" class="form-control" id="dosis"  required>
            </div>

            <div class="form-group">
                <label for="horario">Administración:</label>
                <input type="text" class="form-control" id="horario" required>
            </div>
          
          
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit"  class="btn btn-primary" onclick="agregarMedicamento('receta_id')">Guardar</button>
        
        </div>
      </div>
    </div>
</div>
</div>  
        