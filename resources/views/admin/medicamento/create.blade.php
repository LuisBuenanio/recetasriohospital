@extends('adminlte::page')

@section('title', 'Medicamentos')

@section('content_header')
    <h1>Crear nuevo Medicamento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.medicamento.store1', 'autocomplete' => 'off', 'files' => true])!!}

                                
                @include('admin.medicamento.partials.form')

                {!! Form:: submit('Crear  Medicamento',['class' => 'btn btn-primary']) !!}

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