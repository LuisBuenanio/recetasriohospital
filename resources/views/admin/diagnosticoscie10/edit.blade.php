@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital ')

@section('content_header')
    <h1>Editar Diagnóstico CIE-10</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            
            {!! Form::model($diagnosticoscie10,['route' => ['admin.diagnosticoscie10.update',$diagnosticoscie10], 'autocomplete' => 'off', 'files' => true, 'method' => 'put'])!!}

                @include('admin.diagnosticoscie10.partials.form')
                

                {!! Form:: submit('Actualizar Diagnóstico CIE-10',['class' => 'btn btn-primary']) !!}

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
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
            $("#alergia").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop