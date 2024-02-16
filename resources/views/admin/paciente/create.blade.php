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


        var cedula = document.getElementById('cedula');

    // Evento para cambiar la visibilidad del campo de cédula según la opción seleccionada
    document.getElementById('si').addEventListener('click', function() {
        document.getElementById('cedula').style.display = 'block';
        cedula.disabled = false;
    });

    document.getElementById('no').addEventListener('click', function() {
        document.getElementById('cedula').style.display = 'none';
        cedula.disabled = true;
        cedula.value = ''; // Limpiamos el valor del campo cédula si se deshabilita
    });

    // Evento para verificar la longitud de la cédula según la nacionalidad seleccionada
    document.getElementById('nacionalidad').addEventListener('change', function() {
        var nacionalidad = this.value;
        
        if (nacionalidad === 'ecuatoriano') {
            cedula.maxLength = 10;
        } else {
            cedula.removeAttribute('maxLength');
        }
    });


    $('#provincia_id').on('change', function () {
            var provinciaId = $(this).val();
            if (provinciaId) {
                $.ajax({
                    url: '/admin/obtener-ciudades/' + provinciaId,
                       
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('#ciudad_id').empty();
                        $.each(data, function (key, value) {
                            $('#ciudad_id').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('#ciudad_id').empty();
            }
        });
    


    </script>
@stop