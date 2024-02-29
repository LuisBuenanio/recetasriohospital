<div class="form-group">
    <h3>2. INICIO DE ATENCIÓN</h3>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
          <tr>
            <th>Hora de Llegada</th>
            <th>Vía Aérea Libre</th>
            <th>Vía Aérea Obstruida</th>
            <th>Grupo de RH</th>
            <th>Condiciones de Llegada</th>
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
            <td><input class="form-control" type="time" id="hora_llegada" name="hora_llegada" /></td>
            <td><input type="checkbox" id="via_aerea_libre" name="via_aerea_libre" value="Si"/></td>
            <td><input  type="checkbox" id="via_aerea_obstruida" name="via_aerea_obstruida" value="Si"/></td>
        
            <td><input class="form-control" type="text" id="grupo_rh" name="grupo_rh" /></td>
            <td>
              <select class="form-control" id="condicion_llegada" name="condicion_llegada">
                <option value="Estable">Estable</option>
                <option value="Inestable">Inestable</option>
                <option value="Otro">Otro</option>
              </select>
            </td>
           
          </tr>
        </tbody>
        <tbody>
            <tr>
                <th>Motivo de Llegada</th>
                
                    <td colspan="4" ><input class="form-control" type="text" id="motivo_llegada" name="motivo_llegada" /></td>
                
            </tr>
        </tbody>
      </table>  

</div>