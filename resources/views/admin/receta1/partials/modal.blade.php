{{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Añadir Medicamentos</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Medicamentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre del Medicamento:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Dósis:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Horario:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Horario:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
        <button type="button" class="btn btn-primary">Añadir</button>
      </div>
    </div>
  </div>
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