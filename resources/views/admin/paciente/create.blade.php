@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <h1>Crear nuevo Paciente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.paciente.store', 'autocomplete' => 'off', 'files' => true]) !!}


            @include('admin.paciente.partials.form')

            {!! Form::submit('Crear  Paciente', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>
@stop



@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        Validator::extend('cedula', function($attribute, $value, $parameters, $validator) {
            return validarCedula($value);
        });

        /* function validarCedula(cedula) {
            // Preguntar si la cédula tiene 10 dígitos y si son numéricos
            if (/^\d{10}$/.test(cedula)) {
                // Obtener los dos primeros dígitos de la cédula
                var digitoRegion = cedula.substring(0, 2);
                // Validar si los dos primeros dígitos corresponden a una región válida
                if (digitoRegion >= 1 && digitoRegion <= 24) {
                    // Obtener el último dígito de la cédula
                    var ultimoDigito = parseInt(cedula.substring(9, 10));
                    // Validar el último dígito
                    var suma = 0;
                    var multiplicador = 2;
                    for (var i = 8; i >= 0; i--) {
                        var digito = parseInt(cedula.charAt(i));
                        var producto = digito * multiplicador;
                        if (producto >= 10) {
                            suma += parseInt(producto.toString().charAt(0)) + parseInt(producto.toString().charAt(1));
                        } else {
                            suma += producto;
                        }
                        multiplicador = multiplicador == 2 ? 1 : 2;
                    }
                    var resultado = (10 - (suma % 10)) % 10;
                    if (resultado == ultimoDigito) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } */
    </script>
@stop
