<div class="form-group">
    {!! Form::label('codigo', 'Código:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el código de la Receta']) !!} 

    @error('codigo')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ciudad']) !!} 

    @error('ciudad')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de la Receta']) !!} 

    @error('fecha')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('diagnosticoscie10_id', 'CIE-10:') !!}
    {!! Form::select('diagnosticoscie10_id', $diagnosticoscie10, null, ['class' => 'form-control']) !!} 

    @error('diagnosticoscie10_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('paciente_id', 'Paciente:') !!}
    {!! Form::select('paciente_id', $paciente, null, ['class' => 'form-control']) !!} 

    @error('paciente_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

{{-- <div class="form-group">
    {!! Form::label('$paciente->nombre', 'Paciente:') !!}
    {!! Form::select('$paciente->nombre', $pacientes, null, ['class' => 'form-control']) !!} 

    @error('paciente_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div> --}}

{{-- <div class="form-group">
    <p class="font-weight-bold">Datos del Paciente</p>

    @foreach ($pacientes as $paciente)

        <label class="mr-2">
            {!! Form::checkbox('pacientes[]', $paciente->id, null) !!}
            {{$paciente->nombre}}    
        </label>
        
    @endforeach

</div> --}}


<div class="form-group">
    {!! Form::label('alergia_id', 'Alergía:') !!}
    {!! Form::select('alergia_id', $alergium, null, ['class' => 'form-control']) !!} 

    @error('alergia_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('medicamento_id', 'Medicamento:') !!}
    {!! Form::select('medicamento_id', $medicamento, null, ['class' => 'form-control']) !!} 

    @error('medicamento_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('administracion_id', 'Administración:') !!}
    {!! Form::select('administracion_id', $administracion, null, ['class' => 'form-control']) !!} 

    @error('administracion_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('observaciones', 'Observaciones Generales:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'placeholder' => 'Ingrese alguna observacion de la Receta']) !!} 

    @error('observaciones')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>