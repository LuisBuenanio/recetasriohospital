
<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ciudad']) !!}

    @error('ciudad')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', \Carbon\Carbon::now(), [
        'class' => 'form-control',
        'placeholder' => 'Ingrese la fecha de la Receta',
    ]) !!}


    @error('fecha')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('diagnosticoscie10_id', 'Diagnóstico:') !!}
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

<div class="form-group">
    {!! Form::label('historia', 'Historia Clínica:') !!}
    {!! Form::text('historia', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese la Historia Clínica del Paciente',
    ]) !!}

    @error('historia')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Alergia</p>

    <label class="mr-2" id="si">
        {!! Form::radio('aler', 1, true) !!}
        SI
    </label>
    <label class="mr-2" id="no">
        {!! Form::radio('aler', 2) !!}
        NO
    </label id="alergia">
    {!! Form::text('alergia', null, [
        'class ' => 'form-control',
        'id' => 'alergia',
        'placeholder' => 'Ingrese Alergia del Paciente',
    ]) !!}

    @error('alergia')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

        <div class="form-group">
            <div class="card">
                <div class="card-header">
                    {!! Form::label('', 'LISTADO DE MEDICAMENTOS AGREGADOS:') !!}
                </div>
                <table class="table table-bordered" id="medicamentos-table">
                    <thead>
                        <tr>
                            <th>Medicamento</th>
                            <th>Cantidad</th>
                            <th>Indicaciones</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recetum->medicamentos as $medicamento)
                            <tr>
                                <td>{!! Form::select('medicamentos[]', $medicamentos, $medicamento->id, ['class' => 'form-control select2']) !!}</td>
                                <td>{!! Form::text('cantidades[]', $medicamento->pivot->cantidad, ['class' => 'form-control']) !!}</td>
                                <td>{!! Form::text('indicaciones[]', $medicamento->pivot->indicacion, ['class' => 'form-control']) !!}</td>
                                                    
                                <td><button type="button" class="btn btn-danger btn-remove-medicamento">Eliminar</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="card-body">
        
        
        
                    <table class="table table-bordered mt-3" id="medicamento_table">
                        <thead>
                            <tr>
                                <th>Medicamento</th>
                                <th>Cantidad</th>
                                <th>Indicaciones</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="medicamento0">
                                
                                <td>{!! Form::select('medicamentos[]', $medicamentos, $medicamento->id, ['class' => 'form-control select2']) !!}</td>
                               
                                <td>
                                    <input type="text" name="cantidades[]" class="form-control" placeholder="Ingrese la Cantidad " value="" />
                                </td>
                                <td>
                                    <input type="text" name="indicaciones[]" class="form-control" placeholder="Ingrese las Indicaciones " value="" />
                                </td>
                                
                            <td><button type="button" class="btn btn-danger btn-remove-medicamento">Eliminar</button></td>  
                            </tr>
                            <tr id="medicamento1"></tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" id="btn-add-medicamento">Agregar medicamento</button>
                          
                </div>
            </div>
        </div>
   
<div class="form-group">
    {!! Form::label('sugerencia', 'Sugerencia No Farmacológica:') !!}
    {!! Form::text('sugerencia', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese la sugerencia no Framacológica de la Receta',
    ]) !!}

    @error('sugerencia')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>


