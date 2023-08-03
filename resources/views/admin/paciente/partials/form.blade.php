<div class="form-group">
    {!! Form::label('cedula', 'Cédula:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cédula del Paciente', 'maxlength' => 13]) !!} 
    
    
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

<div class="form-group">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono del Paciente']) !!} 

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