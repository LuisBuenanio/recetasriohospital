<div class="form-group">
    {!! Form::label('codigo', 'Código del Medicamento:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el código del Medicamento']) !!} 

    @error('codigo')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null,['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Medicamento', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Medicamento']) !!} 

    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>



<div class="form-group">
    {!! Form::label('fabricante', 'Fabricante:') !!}
    {!! Form::text('fabricante', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el fabricante del Medicamento']) !!} 

    @error('fabricante')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('tipo_medicamento_id', 'Tipo Medicamento:') !!}
    {!! Form::select('tipo_medicamento_id', $tipo_medicamento, null, ['class' => 'form-control']) !!} 

    @error('tipo_medicamento_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('gramos', 'Gramos:') !!}
    {!! Form::number('gramos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los gramos del Medicamento']) !!} 

    @error('gramos')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>