@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital')

@section('content_header')
    
    <h1>Agregar Medicamento a Receta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => ['admin.receta.medicamentos.store', $receta->id]]) !!}

                <div class="form-group">
                    {!! Form::label('medicamento_id', 'Medicamento') !!}
                    {!! Form::select('medicamento_id', $medicamentos, null, ['class' => 'form-control', 'placeholder' => 'Selecciona un medicamento']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('dosis', 'Dósis') !!}
                    {!! Form::number('dosis', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('horario', 'Horario') !!}
                    {!! Form::number('horario', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

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