<div class="form-group">
    <h3 >3. ACCIDENTE, VIOLENCIA, INTOXICACIÓN
        <label for="aplica_intoxicacion" style="margin-left: 720px;">NO APLICA</label>
        <input style="margin-left: 10px;" type="checkbox" id="aplica_intoxicacion" name="aplica_intoxicacion" value="Si"/>
    </h3>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
            <tr>
                <th>LUGAR DEL EVENTO</th>
                <th>DIRECCIÓN DEL EVENTO</th>
                <th>FECHA DEL EVENTO</th>
                <th>HORA DEL EVENTO</th>
                <th>VEHÍCULO O ARMA</th>
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
                <th>TIPO DE EVENTO</th>
                <th>AUTORIDAD COMPETENTE</th>
                <th>HORA DE CUSTODIA</th>
                <th>CUSTODIA POLICIAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <label style="margin-right: 10px;"><input style=" margin-left: 10px; margin-right: 10px;"  type="checkbox" id="tipo_evento" name="tipo_evento" value="accidente" onclick="checkboxtipoeventos(this)"/>ACCIDENTE</label>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="tipo_evento1" name="tipo_evento" value="envenenamiento" onclick="checkboxtipoeventos(this)"/>ENVENENAMIENTO</label>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="tipo_evento2" name="tipo_evento" value="violencia" onclick="checkboxtipoeventos(this)"/>VIOLENCIA</label>
                    <label><input style=" margin-right: 10px;"  type="checkbox" id="tipo_evento3" name="tipo_evento" value="otro" onclick="checkboxtipoeventos(this)"/>OTRO</label>
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
                
                <td colspan="4" >OBSERVACIONES<input class="form-control" type="textarea" id="observaciones" name="observaciones" /></td>
                    
            </tr>
        </tbody> 
    </table>

    {{-- aRREGLAR U VERIFICAR CON DATOS DE LA DOCTORA  --}}
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
              <tr>
                <th>INTOXICACIÓN</th>
                <th>VIOLENCIA</th>  
              </tr>
        </thead>
  
        <tbody>
              <tr>
                <br>
                <td> <label for="aliento_etilico">ALIENTO ETÍLICO</label>
                    <input style="margin-left: 10px" type="checkbox" id="aliento_etilico" name="aliento_etilico" value="Si" /> 
  
                    <label style="margin-left: 10px" for="valor_alcochekc">VALOR ALCOCHEK</label>
                    <input style="margin-left: 10px" type="text" id="valor_alcochekc" name="valor_alcochekc" />
    
                    <label style="margin-left: 10px" for="hora_examen">HORA DE EXÁMEN</label>
                    <input style="margin-left: 10px" type="time" id="hora_examen" name="hora_examen" />

                    
                    <label style="margin-left: 10px" for="alcoholemia">ALCOHOLEMIA </label>
                    <input style="margin-left: 10px" type="checkbox" id="alcoholemia" name="alcoholemia" value="Si"/>
    
                    <label style="margin-left: 10px" for="otras_sustancias1">OTRAS SUSTANCIAS</label>
                    <input style="margin-left: 10px" type="checkbox" id="otras_sustancias1" name="otras_sustancias1" value="Si" /> 
                    
                    <label for="otras_sustancias2">OTRAS SUSTANCIAS</label>
                    <input style="margin-left: 10px" type="checkbox" id="otras_sustancias2" name="otras_sustancias2" value="Si"/> 
                </td>
  
                <td>
                    <label style="margin-right: 10px;"><input style=" margin-left: 10px; margin-right: 10px;"  type="checkbox" id="v_sospecha" name="v_sospecha" value="Si"/>SOSPECHA</label>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="v_abuso_fisico" name="v_abuso_fisico" value="Si"/>ABUSO FÍSICO</label>
                    <label style="margin-right: 10px;"><input style=" margin-right: 10px;"  type="checkbox" id="v_abuso_psicologico" name="v_abuso_psicologico" value="Si"/>ABUSO PSICOLÓGICO</label>
                    <label><input style=" margin-left: 10px; margin-right: 10px;"  type="checkbox" id="v_abuso_sexual" name="v_abuso_sexual" value="Si"/>ABUSO SEXUAL</label>
                </td>
              </tr>
  
        </tbody>
        <tbody>
               
                <td colspan="2" >OBSERVACIONES: <input class="form-control" type="textarea" id="obser_intoxi_violen" name="obser_intoxi_violen" /></td>
                
        </tbody>
    </table>

    {{-- CONTINUAMOS FALTA VERIFICAR TABLE ANTERIOR --}}
    <table border="1" cellspacing="-5" cellpadding="3">
        <thead>
          <tr>
            <th>QUEMADURAS</th>
            <th>PORCENTAJE SUPERFICIE</th>
            <th>PICADURA</th>
            <th>MORDEDURA</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
                
                <label style="margin-right: 10px;"><input style=" margin-left: 10px; margin-right: 10px;"  type="checkbox" id="quemaduras" name="quemaduras" value="grado i" onclick="checkboxquemaduras(this)"/>GRADO I</label>
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
