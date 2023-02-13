<div class="form-group">
    {!! Form::label('dosis', 'Dósis de Adminstración:') !!}
    {!! Form::text('dosis', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dósis de Admnistración']) !!} 

    @error('dosis')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('hora', 'Horario:') !!}
    {!! Form::text('hora', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el hora de Aplicación']) !!} 

    @error('hora')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>



<div class="form-group">
    {!! Form::label('horario', 'Hora:') !!}
    {!! Form::time('horario', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Horario del Medicamento']) !!} 

    @error('horario')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('tipo_administracion_id', 'Tipo Administracion:') !!}
    {!! Form::select('tipo_administracion_id', $tipo_administracion, null, ['class' => 'form-control']) !!} 

    @error('tipo_administracion_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

