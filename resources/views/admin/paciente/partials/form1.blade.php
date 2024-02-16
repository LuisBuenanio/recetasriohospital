<div class="form-group">
    <label for="nacionalidad">Nacionalidad:</label>
    <select name="nacionalidad" id="nacionalidad" class="form-control">
        <option value="otro" @if (isset($paciente) && $paciente->nacionalidad === 'otro') selected @endif>Seleccione una Nacionalidad</option>
        <option value="ecuatoriano" @if (isset($paciente) && $paciente->nacionalidad === 'ecuatoriano') selected @endif>Ecuatoriano</option>
        <option value="extranjero" @if (isset($paciente) && $paciente->nacionalidad === 'extranjero') selected @endif>Estranjero</option>
        </select>
</div>

<div class="form-group">
            <p class="font-weight-bold">Dispone de Cédula</p>

            <label class="mr-2" id="si">
                {!! Form::radio('ced', 1, true) !!}
                SI
            </label>
            <label class="mr-2" id="no">
                {!! Form::radio('ced', 2) !!}
                NO
            </label id="cedula">
            {!! Form::text('cedula', null, [
                'class ' => 'form-control',
                'id' => 'cedula',
                'placeholder' => 'Ingrese la Cédula del Paciente',
            ]) !!}

            @error('cedula')
                <small class="text-danger">{{ $message }}</small>
            @enderror
</div>







<div class="form-group">
    {!! Form::label('apellido_paterno', 'Apellido Paterno:') !!}
    {!! Form::text('apellido_paterno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Apellido Paterno del Paciente']) !!} 

    @error('apellido_paterno')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('apellido_materno', 'Apellido Materno:') !!}
    {!! Form::text('apellido_materno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Apellido Materno del Paciente']) !!} 

    @error('apellido_materno')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('nombre', 'Nombres Completos:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los nombres del Paciente']) !!} 

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
<div class="form-group">
    {!! Form::label('direccion', 'Dirección de Residencia:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección de residencia del Paciente']) !!} 

    @error('direccion')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
{{-- <div class="form-group">
    {!! Form::label('provincia_id', 'Provincia:') !!}
    {!! Form::select('provincia_id', $provincias, null, ['class' => 'form-control']) !!} 

    @error('provincia_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('ciudad_id', 'Ciudad:') !!}
    {!! Form::select('ciudad_id', $ciudades, null, ['class' => 'form-control']) !!} 

    @error('ciudad_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div> --}}


<div class="form-group">
    {!! Form::label('provincia_id', 'Provincia') !!}
    {!! Form::select('provincia_id', $provincias->pluck('descripcion', 'id'), $paciente->ciudad->provincia_id, ['class' => 'form-control', 'id' => 'provincia_id']) !!}
</div>

<div class="form-group">
    {!! Form::label('ciudad_id', 'Ciudad') !!}
    {!! Form::select('ciudad_id', $ciudades->pluck('descripcion', 'id'), $paciente->ciudad_id, ['class' => 'form-control', 'id' => 'ciudad_id']) !!}
</div>

<div class="form-group">
    {!! Form::label('estado_civil', 'Estado Civil:') !!}
    {!! Form::select('estado_civil', ['soltero/a' => 'Soltero/a', 'casado/a' => 'Casado/a', 'divorciado/a' => 'Divorciado/a', 'viudo/a' => 'Viudo/a', 'union libre' => 'Unión Libre'], $paciente->estado_civil, ['class' => 'form-control']) !!} 

    @error('estado_civil')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('instruccion', 'Instrucción:') !!}
    {!! Form::select('instruccion', ['sin instrucción basica' => 'Sin Instrucción Básica', 'basica' => 'Básica', 'bachiller' => 'Bachiller', 'superior' => 'Superior', 'especialidad' => 'Especialidad'], $paciente->instruccion, ['class' => 'form-control']) !!} 

    @error('instruccion')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('ocupacion', 'Ocupación:') !!}
    {!! Form::text('ocupacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la ocupación del Paciente']) !!} 

    @error('ocupacion')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>



<div class="form-group">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono del Paciente', 'maxlength' => 10]) !!} 

    @error('telefono')
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