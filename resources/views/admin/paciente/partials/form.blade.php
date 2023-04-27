<div class="form-group">
    {!! Form::label('cedula', 'Cédula:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cédula del Paciente']) !!} 
    
    {{--{!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su cédula', 'required', 'pattern' => '\d{10}', 'data-validation-pattern-message' => 'La cédula debe tener 10 dígitos']) !!}
    {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}--}}
    
    @error('cedula')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Paciente']) !!} 

    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento:') !!}
    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!} 

    @error('fecha_nacimiento')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

{{-- <div class="form-group">
    <p>Fecha de nacimiento: {{ $paciente->edad }}</p>

</div> --}}


{{-- <div class="form-group">
    
    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!} 

        
    @php
        $fecha_nacimiento = new DateTime($fecha_nacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento)->y;
    @endphp


</div>
 --}}


{{-- <p>Fecha de nacimiento: {{ $paciente->fecha_nacimiento }}</p>
<p>Edad: {{ \Carbon\Carbon::parse($paciente->fecha_nacimiento)->age }}</p> --}}


{{-- <div class="form-group">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::number('edad', \Carbon\Carbon::createFromDate('fecha_nacimiento')->age, ['class' => 'form-control', 'placeholder' => 'Ingrese la edad del Paciente']) !!} 

    @error('edad')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div> --}}

<div class="form-group">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono del Paciente']) !!} 

    @error('telefono')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('email', 'Correo Electrónico:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email del Paciente']) !!} 

    @error('email')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('direccion', 'Dirección:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección del Paciente']) !!} 

    @error('direccion')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('sexo_id', 'Sexo:') !!}
    {!! Form::select('sexo_id', $sexo, null, ['class' => 'form-control']) !!} 

    @error('sexo_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>