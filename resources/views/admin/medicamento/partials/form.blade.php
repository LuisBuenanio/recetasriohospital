<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Medicamento']) !!} 

    @error('nombre')
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
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo del Medicamento']) !!} 

    @error('tipo')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

