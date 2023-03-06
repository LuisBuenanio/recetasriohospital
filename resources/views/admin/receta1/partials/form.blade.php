


{{-- <div class="form-group">
    {!! Form::label('id', 'Número de Receta:') !!}  
       
    {!! Form::text('id', $nextId,['class' => 'form-control', 'readonly']) !!}
</div> --}}

<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ciudad']) !!} 

    @error('ciudad')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de la Receta']) !!} 
    
    
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
{{-- <div class="form-group">
    {!! Form::label('diagnosticoscie10_id', 'CIE-10:') !!}
    {!! Form::select('diagnosticoscie10_id', $diagnosticoscie10, null, ['class' => 'form-control']) !!} 

    @error('diagnosticoscie10_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div> --}}

<div class="form-group">
    {!! Form::label('paciente_id', 'Paciente:') !!}
    {!! Form::select('paciente_id', $paciente, null, ['class' => 'form-control']) !!} 

    @error('paciente_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>



<div class="form-group">
    {!! Form::label('historia', 'Historia Clínica:') !!}
    {!! Form::text('historia', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Historia Clínica del Paciente']) !!} 

    @error('historia')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Alergia</p>
                    
    <label class="mr-2" id="si">
        {!! Form::radio('aler', 1 , true,) !!}
            SI
    </label>
    <label class="mr-2" id="no">
        {!! Form::radio('aler', 2 ,  ) !!}
            NO
    </label id="alergia">    
    {!! Form::text('alergia', null, ['class '=> 'form-control','id'=>'alergia', 'placeholder' => 'Ingrese Alergia del Paciente']) !!}
                    
     @error('alergia')
        <small class="text-danger">{{$message}}</small>
    @enderror
                    
</div>   

{{-- <div class="form-group">
    {!! Form::label('medicamento_id', 'Medicamento:') !!}
    {!! Form::select('medicamento_id', $medicamento, null, ['class' => 'form-control']) !!} 

    @error('medicamento_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div> --}}
<div class="form-group">
    {!! Form::label('Medicamentos:') !!}
    {{-- {!! Form::select('medicamento_id', $medicamento, null, ['class' => 'form-control']) !!}  --}}
    <select name="medicamentos[]" id="medicamentos" class="form-control selectpicker" 
    data-style="btn-primary" title="Seleccionar Medicamentos" multiple required>
        @foreach ($medicamentos as $medicamento )
            <option value="{{$medicamento->id}}">{{$medicamento->nombre}}</option>
        @endforeach
    
    </select>

</div>

<div class="form-group">
    {!! Form::label('dosis', 'Dósis de Administración:') !!}
    {!! Form::text('dosis', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dósis de Admnistración']) !!} 

    @error('dosis')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('horario', 'Hora:') !!}
    {!! Form::text('horario', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la hora de Aplicación']) !!} 

    @error('horario')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>




<div class="form-group">
    {!! Form::label('sugerencia', 'Suegerencia No Farmacológica:') !!}
    {!! Form::text('sugerencia', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la sugerencia no Framacológica de la Receta']) !!} 

    @error('sugerencia')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>