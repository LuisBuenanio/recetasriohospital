@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital')

@section('content_header')
    <h1>Crear nueva Diagnóstico CIE-10</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.diagnosticoscie10.store', 'autocomplete' => 'off', 'files' => true])!!}

                @include('admin.diagnosticoscie10.partials.form')

                {!! Form:: submit('Crear  Diagnóstico CIE-10',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>
@stop



@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop