
<div class="form-group">
                {!! Form::label('ciudad', 'Ciudad:') !!}
                {!! Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ciudad']) !!}

                @error('ciudad')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha',[
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
            {!! Form::label('', 'Medicamentos:') !!}
        </div>
        <div class="card-body">



            <table class="table table-bordered mt-3" id="medicamento_table">
                <thead>
                    <tr>
                        <th>Medicamento</th>
                        <th>Dósis</th>
                        <th>Horario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="medicamento0">
                        <td>
                            <select name="medicamentos[]" class="form-control">
                                <option value="">Seleccione un Medicamento</option>
                                @foreach ($medicamentos as $medicamento)
                                    <option value="{{ $medicamento->id }}">
                                        {{ $medicamento->nombre }} ({{ $medicamento->concentracion }})
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="text" name="dosiss[]" class="form-control" placeholder="Ingrese la dósis " value="" />
                        </td>
                        <td>
                            <input type="text" name="horarios[]" class="form-control" placeholder="Ingrese el horario " value="" />
                        </td>
                    </tr>
                    <tr id="medicamento1"></tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-12">
                    <button type="button" id="add_row" class="btn btn-success float-left">+ Agregar
                        medicamento</button>
                    <button type="button" id='delete_row' class="float-right btn btn-danger">- Eliminar
                        medicamento</button>
                </div>
            </div>
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