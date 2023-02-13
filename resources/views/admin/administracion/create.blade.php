@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital')

@section('content_header')
    <h1>Crear nuevo Administración</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.administracion.store', 'autocomplete' => 'off', 'files' => true])!!}

                @include('admin.administracion.partials.form')

                {!! Form:: submit('Crear  Administracion',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>
@stop



@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
            $("#codigo").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop