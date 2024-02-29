<div class="form-group">
    <h3 >3. Accidente, violencia, intoxicación
        <label for="aplica_intoxicacion" style="margin-left: 500px;">No Aplica</label>
        <input type="checkbox" id="aplica_intoxicacion";/>
    </h3>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
            <tr>
                <th>Lugar del Evento</th>
                <th>Dirección del Evento</th>
                <th>Fecha del Evento</th>
                <th>Hora del Evento</th>
                <th>Vehículo o Arma</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><input class="form-control" type="text" id="lugar_evento" name="lugar_evento" /></td>
                <td><input class="form-control" type="text" id="direccion_evento" name="direccion_evento" /></td>
                <td><input class="form-control" type="date" id="fecha_evento" name="fecha_evento" /></td>
                <td><input class="form-control" type="time" id="hora_evento" name="hora_evento" /></td>
                <td><input class="form-control"type="text" id="vehiculo_arma" name="vehiculo_arma" /></td>
            </tr>
        </tbody>
    </table>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
            <tr>
                <th>Tipo de Evento</th>
                <th>Autoridad Competente</th>
                <th>Hora de Denuncia</th>
                <th>Custodia Policial</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="tipo_evento" name="tipo_evento" value="accidente" onclick="checkboxtipoeventos(this)"/>Accidente</label>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="tipo_evento1" name="tipo_evento" value="envenenamiento" onclick="checkboxtipoeventos(this)"/>Envenenamiento</label>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="tipo_evento2" name="tipo_evento" value="violencia" onclick="checkboxtipoeventos(this)"/>Violencia</label>
                    <label><input style=" margin-right: 10px;"  type="checkbox" id="tipo_evento3" name="tipo_evento" value="otro" onclick="checkboxtipoeventos(this)"/>Otro</label>
                </td>
            
                <td><input class="form-control" type="text" id="autoridad_competente" name="autoridad_competente" /></td>
                <td><input class="form-control" type="time" id="hora_denuncia" name="hora_denuncia" /></td>
                <td><input style="margin-left: 60px;" type="checkbox" id="custodia_policial" name="custodia_policial" value="Si"/></td>
        

                <script>
                    function checkboxtipoeventos(checkbox) {
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
        </tbody>

        <tbody>
            <tr>
                
                <td colspan="4" >Observaciones<input class="form-control" type="textarea" id="observaciones" name="observaciones" /></td>
                    
            </tr>
        </tbody> 
    </table>

    {{-- aRREGLAR U VERIFICAR CON DATOS DE LA DOCTORA  --}}
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
              <tr>
                <th>INTOXICACION</th>
                <th>VIOLENCIA</th>  
              </tr>
        </thead>
  
        <tbody>
              <tr>
                <td> <label for="aliento_etilico">Aliento Etilico</label>
                    <input type="checkbox" id="aliento_etilico" name="aliento_etilico" value="Si" /> 
  
                    <label for="valor_alcochekc">Valor Alcochek</label>
                    <input  type="text" id="valor_alcochekc" name="valor_alcochekc" />
    
                    <label for="hora_examen">Hora de Examen </label>
                    <input type="time" id="hora_examen" name="hora_examen" />

                    
                    <label for="alcoholemia">Alcoholemia </label>
                    <input type="checkbox" id="alcoholemia" name="alcoholemia" value="Si"/>
    
                    <label for="otras_sustancias1">Otras Sustancias</label>
                    <input type="checkbox" id="otras_sustancias1" name="otras_sustancias1" value="Si" /> 
                    
                    <label for="otras_sustancias2">Otras Sustancias</label>
                    <input type="checkbox" id="otras_sustancias2" name="otras_sustancias2" value="Si"/> 
                </td>
  
                <td>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="v_sospecha" name="v_sospecha" value="Si"/>Sospecha</label>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="v_abuso_fisico" name="v_abuso_fisico" value="Si"/>Abuso Físico</label>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="v_abuso_psicologico" name="v_abuso_psicologico" value="Si"/>Abuso Psicológico</label>
                    <label><input style=" margin-right: 10px;"  type="checkbox" id="v_abuso_sexual" name="v_abuso_sexual" value="Si"/>Abuso Sexual</label>
                </td>
              </tr>
  
        </tbody>
        <tbody>
               
                <td colspan="2" >Observaciones: <input class="form-control" type="textarea" id="obser_intoxi_violen" name="obser_intoxi_violen" /></td>
                
        </tbody>
    </table>

    {{-- CONTINUAMOS FALTA VERIFICAR TABLE ANTERIOR --}}
    <table border="1" cellspacing="-5" cellpadding="3">
        <thead>
          <tr>
            <th>QUEMADURAS</th>
            <th>Porcentaje Superficie </th>
            <th>PICADURA</th>
            <th>MORDEDURA</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
                
                <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="quemaduras" name="quemaduras" value="grado i" onclick="checkboxquemaduras(this)"/>GRADO I</label>
                <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="quemaduras1" name="quemaduras" value="grado ii" onclick="checkboxquemaduras(this)"/>GRADO II</label>
                <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="quemaduras2" name="quemaduras" value="grado iii" onclick="checkboxquemaduras(this)"/>GRADO III</label>
                
                <td><input class="form-control" type="textarea" id="porcent_superficie" name="porcent_superficie" />
                </td> 
            </td>
            <script>
                function checkboxquemaduras(checkbox) {
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
            <td ><input class="form-control" type="textarea" id="picadura" name="picadura" /></td>
            <td ><input class="form-control" type="textarea" id="mordedura" name="mordedura" /></td>            
          </tr>
        </tbody>
    </table>
    
</div>
