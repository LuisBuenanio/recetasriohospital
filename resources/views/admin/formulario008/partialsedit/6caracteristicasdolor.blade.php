<div class="form-group">
    <h3>6. CARACTERÍSTICAS DEL DOLOR        
        <label for="aplica_caracteristicas_dolor" style="margin-left: 770px;">NO APLICA</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_caracteristicas_dolor" name="aplica_caracteristicas_dolor" value="Si"  {{ $formulario008->aplica_caracteristicas_dolor == 'Si' ? 'checked' : '' }}/>
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
                    <td colspan="3"><input  class="form-control" type="text" id="region_anatomica_1" name="region_anatomica_1" value=" {{ $formulario008->region_anatomica_1 }}"/></td>
                    <td colspan="3"><input class="form-control" type="text" id="punto_doloroso_1" name="punto_doloroso_1" value=" {{ $formulario008->punto_doloroso_1 }}"/></td>              
                    <td colspan="3">                  
                        <select id="evolucion_1" name="evolucion_1">
                            <option value="">...</option anable>
                            <option value="agudo" {{ $formulario008->evolucion_1 == 'agudo' ? 'selected' : '' }}>AGUDO</option>
                            <option value="sub agudo" {{ $formulario008->evolucion_1 == 'sub agudo' ? 'selected' : '' }}>SUB AGUDO</option>
                            <option value="cronico" {{ $formulario008->evolucion_1 == 'cronico' ? 'selected' : '' }}>CRÓNICO</option>
                        </select>
                    </td>
                    </td>
                    <td colspan="3">
                    <select id="tipo_1" name="tipo_1">
                        <option value="">...</option anable>
                        <option value="episodico" {{ $formulario008->tipo_1 == 'episodico' ? 'selected' : '' }}>EPISÓDICO</option>
                        <option value="continuo" {{ $formulario008->tipo_1 == 'continuo' ? 'selected' : '' }} >CONTINUO</option>
                        <option value="colico"{{ $formulario008->tipo_1 == 'colico' ? 'selected' : '' }} >CÓLICO</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="modificaciones_1" name="modificaciones_1">
                        <option value="">...</option anable>
                        <option value="posicion" {{ $formulario008->modificaciones_1 == 'posicion' ? 'selected' : '' }}>POSICIÓN</option>
                        <option value="ingesta" {{ $formulario008->modificaciones_1 == 'ingesta' ? 'selected' : '' }}>INGESTA</option>
                        <option value="esfuerzo" {{ $formulario008->modificaciones_1 == 'esfuerzo' ? 'selected' : '' }}>ESFUERZO</option>
                        <option value="digito presion" {{ $formulario008->modificaciones_1 == 'digito presion' ? 'selected' : '' }}>DIGITO PRESIÓN</option>
                        <option value="se irradia" {{ $formulario008->modificaciones_1 == 'se irradia' ? 'selected' : '' }}>SE IRRADIA</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="alivia_con_1" name="alivia_con_1">
                        <option value="">...</option anable>
                        <option value="antiespasmodico"  {{ $formulario008->alivia_con_1 == 'antiespasmodico' ? 'selected' : '' }} >ANTIESPASMÓDICO</option>
                        <option value="modico" {{ $formulario008->alivia_con_1 == 'modico' ? 'selected' : '' }} >OPIÁCEO</option>
                        <option value="aine" {{ $formulario008->alivia_con_1 == 'aine' ? 'selected' : '' }} >AINE</option>
                        <option value="no alivia" {{ $formulario008->alivia_con_1 == 'no alivia' ? 'selected' : '' }} >NO ALIVIA</option>
                    </select>
                    <td colspan="3">
                    <select id="intensidad_1" name="intensidad_1">
                        <option value="">...</option anable>
                        <option value="leve" {{ $formulario008->intensidad_1 == 'leve' ? 'selected' : '' }}>LEVE</option>
                        <option value="moderado" {{ $formulario008->intensidad_1 == 'moderado' ? 'selected' : '' }}>MODERADO</option>
                        <option value="grave" {{ $formulario008->intensidad_1 == 'grave' ? 'selected' : '' }}>GRAVE</option>
                    </select>
                    </td>
                </tr>
                 {{-- caracteristicas dolor 2 --}}
                 <tr>
                    <td colspan="3"><input  class="form-control" type="text" id="region_anatomica_2" name="region_anatomica_2" value=" {{ $formulario008->region_anatomica_2 }}"/></td>
                    <td colspan="3"><input class="form-control" type="text" id="punto_doloroso_2" name="punto_doloroso_2" value=" {{ $formulario008->punto_doloroso_2 }}"/></td>              
                    <td colspan="3">                  
                        <select id="evolucion_2" name="evolucion_2">
                            <option value="">...</option anable>
                            <option value="agudo" {{ $formulario008->evolucion_2 == 'agudo' ? 'selected' : '' }}>AGUDO</option>
                            <option value="sub agudo" {{ $formulario008->evolucion_2 == 'sub agudo' ? 'selected' : '' }}>SUB AGUDO</option>
                            <option value="cronico" {{ $formulario008->evolucion_2 == 'cronico' ? 'selected' : '' }}>CRÓNICO</option>
                        </select>
                    </td>
                    </td>
                    <td colspan="3">
                    <select id="tipo_2" name="tipo_2">
                        <option value="">...</option anable>
                        <option value="episodico" {{ $formulario008->tipo_2 == 'episodico' ? 'selected' : '' }}>EPISÓDICO</option>
                        <option value="continuo" {{ $formulario008->tipo_2 == 'continuo' ? 'selected' : '' }} >CONTINUO</option>
                        <option value="colico"{{ $formulario008->tipo_2 == 'colico' ? 'selected' : '' }} >CÓLICO</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="modificaciones_2" name="modificaciones_2">
                        <option value="">...</option anable>
                        <option value="posicion" {{ $formulario008->modificaciones_2 == 'posicion' ? 'selected' : '' }}>POSICIÓN</option>
                        <option value="ingesta" {{ $formulario008->modificaciones_2 == 'ingesta' ? 'selected' : '' }}>INGESTA</option>
                        <option value="esfuerzo" {{ $formulario008->modificaciones_2 == 'esfuerzo' ? 'selected' : '' }}>ESFUERZO</option>
                        <option value="digito presion" {{ $formulario008->modificaciones_2 == 'digito presion' ? 'selected' : '' }}>DIGITO PRESIÓN</option>
                        <option value="se irradia" {{ $formulario008->modificaciones_2 == 'se irradia' ? 'selected' : '' }}>SE IRRADIA</option>
                    </select>
                    </td>
                    <td colspan="3">
                    <select id="alivia_con_2" name="alivia_con_2">
                        <option value="">...</option anable>
                        <option value="antiespasmodico"  {{ $formulario008->alivia_con_2 == 'antiespasmodico' ? 'selected' : '' }} >ANTIESPASMÓDICO</option>
                        <option value="modico" {{ $formulario008->alivia_con_2 == 'modico' ? 'selected' : '' }} >OPIÁCEO</option>
                        <option value="aine" {{ $formulario008->alivia_con_2 == 'aine' ? 'selected' : '' }} >AINE</option>
                        <option value="no alivia" {{ $formulario008->alivia_con_2 == 'no alivia' ? 'selected' : '' }} >NO ALIVIA</option>
                    </select>
                    <td colspan="3">
                    <select id="intensidad_2" name="intensidad_2">
                        <option value="">...</option anable>
                        <option value="leve" {{ $formulario008->intensidad_2 == 'leve' ? 'selected' : '' }}>LEVE</option>
                        <option value="moderado" {{ $formulario008->intensidad_2 == 'moderado' ? 'selected' : '' }}>MODERADO</option>
                        <option value="grave" {{ $formulario008->intensidad_2 == 'grave' ? 'selected' : '' }}>GRAVE</option>
                    </select>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>