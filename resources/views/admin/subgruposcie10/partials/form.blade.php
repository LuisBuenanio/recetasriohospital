<div class="form-group">
    {!! Form::label('clave', 'Clave:') !!}
    {!! Form::text('clave', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la clave del Sub Grupo CIE-10']) !!} 

    @error('clave')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion del Sub Grupo CIE-10']) !!} 

    @error('descripcion')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('gruposcie10_id', 'Grupo CIE-10 :') !!}
    {!! Form::select('gruposcie10_id', $gruposcie10, null, ['class' => 'form-control']) !!} 

    @error('gruposcie10_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>



