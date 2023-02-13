<div class="form-group">
    {!! Form::label('clave', 'Clave:') !!}
    {!! Form::text('clave', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la clave de la Categoria CIE-10']) !!} 

    @error('clave')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion de la Categoría CIE-10']) !!} 

    @error('descripcion')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('subgruposcie10_id', 'Sub Grupo CIE-10 :') !!}
    {!! Form::select('subgruposcie10_id', $subgruposcie10, null, ['class' => 'form-control']) !!} 

    @error('subgruposcie10_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>



