<div class="form-group">
    {!! Form::label('nombre', 'Nombre Genérico:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre Genérico del Medicamento']) !!} 

    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('comercial', 'Nombre Comercial:') !!}
    {!! Form::text('comercial', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre Comercial del Medicamento']) !!} 

    @error('comercial')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('concentracion', 'Concentración:') !!}
    {!! Form::text('concentracion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Concentración del Medicamento']) !!} 

    @error('concentracion')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('presentacion', 'Presentación:') !!}
    {!! Form::text('presentacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Presentación del Medicamento']) !!} 

    @error('presentacion')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>