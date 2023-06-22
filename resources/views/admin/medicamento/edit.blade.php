@extends('adminlte::page')

@section('title', 'Medicamentos ')

@section('content_header')
    <h1>Editar Medicamento</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            
            {!! Form::model($medicamento,['route' => ['admin.medicamento.update',$medicamento->id], 'autocomplete' => 'off', 'files' => true, 'method' => 'put'])!!}

                
                
                @include('admin.medicamento.partials.form')
                

                {!! Form:: submit('Actualizar Medicamento',['class' => 'btn btn-primary']) !!}

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
            $("#codigo").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop