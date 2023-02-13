@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital ')

@section('content_header')
    <h1>Editar Receta</h1>
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
        ClassicEditor
            .create( document.querySelector( '#observaciones' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@stop