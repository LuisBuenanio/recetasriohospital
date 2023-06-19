<div class="form-group">
    {!! Form::label('clave', 'Clave:') !!}
    {!! Form::text('clave', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la clave del Diagnóstico CIE-10']) !!} 

    @error('clave')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion del Diagnóstico CIE-10']) !!} 

    @error('descripcion')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

{{-- <div class="form-group">
    {!! Form::label('categoriascie10_id', 'Categoría CIE-10 :') !!}
    {!! Form::select('categoriascie10_id', $categoriascie10, null, ['class' => 'form-control']) !!} 

    @error('categoriascie10_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div> --}}



