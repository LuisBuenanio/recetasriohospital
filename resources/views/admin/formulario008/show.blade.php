@extends('adminlte::page')

@section('title', 'Formularios 008')


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
            <div class="form-group">
                
                @include('admin.formulario008.partialspdf.1')         


        </div>
    @stop



    @section('js')
        
    @stop
