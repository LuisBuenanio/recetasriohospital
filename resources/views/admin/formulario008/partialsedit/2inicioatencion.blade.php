<div class="form-group">
  <h3>2. INICIO DE ATENCIÓN</h3>
  <table border="1" cellspacing="-5" cellpadding="3" width="100%">
      <thead>
          <tr>
              <th>HORA DE LLEGADA</th>
              <th>VÍA AÉREA LIBRE</th>
              <th>VÍA AÉREA OBSTRUIDA</th>
              <th>GRUPO-RH</th>
              <th>CONDICIONES DE LLEGADA</th>
          </tr>
      </thead>
      <style>
          input[type="checkbox"] {
              transform: scale(1.6);
              /* Ajusta el valor para cambiar el tamaño según sea necesario */
          }
      </style>
      <tbody>
          <tr>
              <td><input class="form-control" type="time" id="hora_llegada" name="hora_llegada" value="{{ $formulario008->hora_llegada ?? '' }}" /></td>
              <td>
                <input style="margin-left: 10px" type="checkbox" id="via_aerea_libre" name="via_aerea_libre" value="Si" {{ $formulario008->via_aerea_libre == 'Si' ? 'checked' : '' }}/>
              </td>
              <td>
                <input style="margin-left: 10px" type="checkbox" id="via_aerea_obstruida" name="via_aerea_obstruida" value="Si" {{ $formulario008->via_aerea_obstruida == 'Si' ? 'checked' : '' }}/></td>
              <td><input class="form-control" type="text" id="grupo_rh" name="grupo_rh" value="{{ $formulario008->grupo_rh ?? '' }}" /></td>
              <td>
                  <select class="form-control" id="condicion_llegada" name="condicion_llegada">
                      <option value="Estable" {{ $formulario008->condicion_llegada == 'Estable' ? 'selected' : '' }}>ESTABLE</option>
                      <option value="Inestable" {{ $formulario008->condicion_llegada == 'Inestable' ? 'selected' : '' }}>INESTABLE</option>
                      <option value="Otro" {{ $formulario008->condicion_llegada == 'Otro' ? 'selected' : '' }}>OTRO</option>
                  </select>
              </td>
          </tr>
      </tbody>
      <tbody>
          <tr>
              <th>MOTIVO DE LLEGADA</th>
              <td colspan="4"><input class="form-control" type="text" id="motivo_llegada" name="motivo_llegada" value="{{ $formulario008->motivo_llegada ?? '' }}" /></td>
          </tr>
      </tbody>
  </table>
</div>
