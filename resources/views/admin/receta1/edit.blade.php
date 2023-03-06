@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital ')

@section('content_header')
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>
    <h1>Editar Receta</h1>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/jquery-ui-1.13.2/jquery-ui.min.css')}}">
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            
            {!! Form::model($recetum,['route' => ['admin.receta.update',$recetum], 'autocomplete' => 'off', 'files' => true, 'method' => 'put'])!!}

                {!! Form::hidden('users_id', auth()->user()->id) !!}
                
                <div class="form-group">
                    {!! Form::label('id', 'Número de Receta:') !!}  
                       
                    {!! Form::text('id', $nextId,['class' => 'form-control', 'readonly']) !!}
                </div>
                
                @include('admin.receta.partials.form')
                

                {!! Form:: submit('Actualizar Receta',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>

    
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{asset('vendor/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
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
        
        $(document).ready(() => {});

        $("#medicamentos").selectpicker('val', @json($medicamentos_id));
         



        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
        ClassicEditor
            .create( document.querySelector( '#sugerenci' ) )
            .catch( error => {
                console.error( error );
            } );

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