<div class="form-group">
    {!! Form::label('cedula', 'cedula:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cédula del Paciente']) !!} 

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
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null,['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Paciente', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::number('edad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la edad del Paciente']) !!} 

    @error('edad')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

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