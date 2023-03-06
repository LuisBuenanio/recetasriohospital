<div class="form-group">
    {!! Form::label('dosis', 'Dósis de Administración:') !!}
    {!! Form::text('dosis', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dósis de Admnistración']) !!} 

    @error('dosis')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('hora', 'Hora:') !!}
    {!! Form::text('hora', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el hora de Aplicación']) !!} 

    @error('hora')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>



