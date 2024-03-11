<div class="form-group">
    <h3>16. SALIDA        
    </h3> 

    <table style="width: 100%;">
      <tr>
          <td style="width: 50%;">
              <!-- Contenido de la primera parte -->
              <table>                  
                  <tbody>
                      <tr>
                        <th style="font-size: 12px">DOMICILIO </th> <td><input type="checkbox" name="salida" id="domicilio" value="domicilio" {{ $formulario008->salida == 'domicilio' ? 'checked' : '' }} onclick="checkboxsalida(this)"> </td>
                        <th style="font-size: 12px">CONSULTA EXTERNA </th> <td><input type="checkbox" name="salida" id="consulta_externa" value="consulta_externa" {{ $formulario008->salida == 'consulta_externa' ? 'checked' : '' }} onclick="checkboxsalida(this)"> </td>
                        <th style="font-size: 12px">REFERENCIA</th> <td><input type="checkbox" name="salida" id="observacion" value="observacion" {{ $formulario008->salida == 'observacion' ? 'checked' : '' }} onclick="checkboxtipoeventos(this)"> </td>
                        <th style="font-size: 12px">OBSERVACIÓN </th> <td><input type="checkbox" name="salida" id="internacion" value="internacion" {{ $formulario008->salida == 'internacion' ? 'checked' : '' }} onclick="checkboxsalida(this)"> </td>
                        <th style="font-size: 12px">INTERNACIÓN </th> <td><input type="checkbox" name="salida" id="referencia" value="referencia" {{ $formulario008->salida == 'referencia' ? 'checked' : '' }} onclick="checkboxsalida(this)" > </td>
                        <script>
                            function checkboxsalida(checkbox) {
                                // Obtener todos los checkboxes con el mismo nombre
                                var checkboxes = document.querySelectorAll('input[name="' + checkbox.name + '"]');
                                
                                // Desmarcar todos los checkboxes excepto el que ha sido seleccionado
                                checkboxes.forEach(function(cb) {
                                    if (cb !== checkbox) {
                                        cb.checked = false;
                                    }
                                });
                            }
                        </script>
                      </tr>
                      <tr>
                        <th style="font-size: 12px">SERVICIO</th>
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="servicio" value=" {{ $formulario008->servicio ?? '' }}"></td>
                        <th style="font-size: 12px">ESTABLECIMIENTO</th>      
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="establecimiento" value=" {{ $formulario008->establecimiento ?? '' }}"></td>
                         
                      </tr>                    
                     
                  </tbody>
              </table>
          </td>
          <td style="width: 50%;">
              <!-- Contenido de la segunda parte -->
              <table>
                <tbody>
                    <tr>
                      <th style="font-size: 12px">VIVO </th> <td><input type="checkbox" name="estado_salida" id="vivo" value="vivo" {{ $formulario008->estado_salida == 'vivo' ? 'checked' : '' }} onclick="checkboxestado_salida(this)" > </td>
                      <th style="font-size: 12px">ESTABLE</th> <td><input type="checkbox" name="estado_salida" id="estable" value="estable" {{ $formulario008->estado_salida == 'estable' ? 'checked' : '' }} onclick="checkboxestado_salida(this)" > </td>
                      <th style="font-size: 12px">INESTABLE </th> <td><input type="checkbox" name="estado_salida" id="inestable" value="inestable" {{ $formulario008->estado_salida == 'inestable' ? 'checked' : '' }} onclick="checkboxestado_salida(this)" > </td>
                      <script>
                        function checkboxestado_salida(checkbox) {
                            // Obtener todos los checkboxes con el mismo nombre
                            var checkboxes = document.querySelectorAll('input[name="' + checkbox.name + '"]');
                            
                            // Desmarcar todos los checkboxes excepto el que ha sido seleccionado
                            checkboxes.forEach(function(cb) {
                                if (cb !== checkbox) {
                                    cb.checked = false;
                                }
                            });
                        }
                    </script>
                      <th style="font-size: 12px">DÍAS DE INCAPACIDAD </th> <td><input class="form-control" type="text" name="dias_incapacidad" id="dias_incapacidad" value=" {{ $formulario008->dias_incapacidad ?? '' }}"> </td>
                    </tr>
                    <tr>
                        <th style="font-size: 12px">MUERTO EN EMERGENCIA</th> <td><input type="checkbox" name="muerto_emergencia" id="muerto_emergencia" value="Si" {{ $formulario008->muerto_emergencia == 'Si' ? 'checked' : '' }}> </td>
                        <th style="font-size: 12px">CAUSA</th>      
                        <td colspan="5" style="font-size: 12px"><input class="form-control" type="text" name="causa_muerte" id="causa_muerte" value=" {{ $formulario008->causa_muerte ?? '' }}" disabled></td>
                        <script>
                            // Accedemos al checkbox
                            
                            var muerteEmergencia = document.getElementById('muerto_emergencia');
                            var causaMuerte = document.getElementById('causa_muerte');
                        
                            // Evento para el checkbox de "SI"
                            muerteEmergencia.addEventListener('change', function() {
                                if (this.checked) {
                                    causaMuerte.disabled = false; // Habilitar el campo de alergia
                                } else {
                                    causaMuerte.disabled = true; // Deshabilitar el campo de alergia
                                }
                            }); 
                              // Inicialmente, si "SI" está marcado, habilita el campo de alergia
                            if (muerteEmergencia.checked) {
                                causaMuerte.disabled = false;
                            }
                        </script>
                    </tr>                    
                   
                </tbody>
                  
                 
              </table>
          </td>
      </tr>
    </table>
</div>

<div class="form-group">
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <tbody>
            <tr>
              <td><label for="fecha_salida">FECHA DE SALIDA:</label></td>
              <td><input class="form-control" type="date" id="fecha_salida" name="fecha_salida" value="{{ $formulario008->fecha_salida ?? '' }}" ></td>

              <td><label for="hora_salida">HORA DE SALIDA:</label></td>
              <td><input class="form-control" type="time" id="hora_salida" name="hora_salida"  value="{{ $formulario008->hora_salida ?? '' }}" ></td>
              <td><label for="medico_salida">MÉDICO:</label></td>
              <td colspan="2"><input class="form-control" type="text" id="medico_salida" name="medico_salida" value=" {{ $formulario008->medico_salida ?? '' }}" ></td>
              <td><label for="codigo_salida">CÓDIGO:</label></td>
              <td><input class="form-control" type="text" id="codigo_salida" name="codigo_salida" value=" {{ $formulario008->codigo_salida ?? '' }}" ></td>
            </tr>
          </tbody>
    </table>
</div>