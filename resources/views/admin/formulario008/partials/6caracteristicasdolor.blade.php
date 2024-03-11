<div class="form-group">
    <h3>6. CARACTERÍSTICAS DEL DOLOR        
        <label for="aplica_caracteristicas_dolor" style="margin-left: 770px;">NO APLICA</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_caracteristicas_dolor";/>
      </h3>
    <div id="aplica__caracteristicas_dolor_ocult" class="form-group">        
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
            <thead>
                <tr>
                    <th colspan="3"><label for="region_anatomica">REGIÓN ANATÓMICA:</label></th>
                    <th colspan="3"><label for="punto_doloroso">PUNTO DOLOROSO:</label></th>
                    <th colspan="3"><label for="evolucion">EVOLUCIÓN:</label></th>
                    <th colspan="3"><label for="Tipo">TIPO:</label></th>
                    <th colspan="3"><label for="Modificaciones">MODIFICACIONES:</label></th>
                    <th colspan="3"><label for="alivia">ALIVIA CON:</label></th>
                    <th colspan="3"><label for="intensidad">INTENSIDAD:</label></th>
                </tr>
            </thead>
            <tbody>
                {{-- caracteristicas dolor 1 --}}
                <tr>
                    <td colspan="3"><input  class="form-control" type="text" id="region_anatomica_1" name="region_anatomica_1" /></td>
                    <td colspan="3"><input class="form-control" type="text" id="punto_doloroso_1" name="punto_doloroso_1" /></td>              
                    <td colspan="3">
                    <select id="evolucion_1" name="evolucion_1">
                        <option value="agudo">AGUDO</option>
                        <option value="sub agudo">SUB AGUDO</option>
                        <option value="cronico">CRÓNICO</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="tipo_1" name="tipo_1">
                        <option value="episodico">EPISÓDICO</option>
                        <option value="continuo">CONTINUO</option>
                        <option value="colico">CÓLICO</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="modificaciones_1" name="modificaciones_1">
                        <option value="posicion">POSICIÓN</option>
                        <option value="ingesta">INGESTA</option>
                        <option value="esfuerzo">ESFUERZO</option>
                        <option value="digito presion">DIGITO PRESIÓN</option>
                        <option value="se irradia">SE IRRADIA</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="alivia_con_1" name="alivia_con_1">
                        <option value="antiespasmodico">ANTIESPASMÓDICO</option>
                        <option value="modico">OPIÁCEO</option>
                        <option value="aine">AINE</option>
                        <option value="no alivia">NO ALIVIA</option>
                    </select>
                    <td colspan="3">
                    <select id="intensidad_1" name="intensidad_1">
                        <option value="leve">LEVE</option>
                        <option value="moderado">MODERADO</option>
                        <option value="grave">GRAVE</option>
                    </select>
                    </td>
                </tr>
                 {{-- caracteristicas dolor 2 --}}
                 <tr>
                    <td colspan="3"><input class="form-control" type="text" id="region_anatomica_2" name="region_anatomica_2" /></td>
                    <td colspan="3"><input class="form-control" type="text" id="punto_doloroso_2" name="punto_doloroso_2" /></td>              
                    <td colspan="3">
                    <select id="evolucion_2" name="evolucion_2">
                        <option value="agudo">AGUDO</option>
                        <option value="sub agudo">SUB AGUDO</option>
                        <option value="cronico">CRÓNICO</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="tipo_2" name="tipo_2">
                        <option value="episodico">EPISÓDICO</option>
                        <option value="continuo">CONTINUO</option>
                        <option value="colico">CÓLICO</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="modificaciones_2" name="modificaciones_2">
                        <option value="posicion">POSICIÓN</option>
                        <option value="ingesta">INGESTA</option>
                        <option value="esfuerzo">ESFUERZO</option>
                        <option value="digito presion">DIGITO PRESIÓN</option>
                        <option value="se irradia">SE IRRADIA</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="alivia_con_2" name="alivia_con_2">
                        <option value="antiespasmodico">ANTIESPASMÓDICO</option>
                        <option value="modico">OPIÁCEO</option>
                        <option value="aine">AINE</option>
                        <option value="no alivia">NO ALIVIA</option>
                    </select>
                    <td colspan="3">
                    <select id="intensidad_2" name="intensidad_2">
                        <option value="leve">LEVE</option>
                        <option value="moderado">MODERADO</option>
                        <option value="grave">GRAVE</option>
                    </select>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>