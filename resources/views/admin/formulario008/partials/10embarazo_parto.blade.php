<div class="form-group">
    <h3>10. EMBARAZO - PARTO        
        <label for="aplica_embarazo_parto" style="margin-left: 830px;">NO APLICA</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_embarazo_parto" name="aplica_embarazo_parto" value="Si" />
    </h3>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <tbody>
            <tr>
                <th id="gestas1">GESTAS</th>
                <td><input class="form-control" type="text" id="gestas" name="gestas"/></td>
                <th id="partos1">PARTOS</th>
                <td><input class="form-control" type="text" id="partos" name="partos" /></td>
                <th id="abortos1">ABORTOS</th>
                <td><input class="form-control" type="text" id="abortos" name="abortos" /></td>
                <th id="cesarias1">CESÁREAS</th>
                <td><input class="form-control" type="text" id="cesareas" name="cesareas" /></td>
            </tr>

            <tr id="oculto11">
                <th colspan="2">FECHA ÚLTIMA MESTRUACIÓN</th>
                <td ><input class="form-control" type="date" id="fecha_ult_menstruacion" name="fecha_ult_menstruacion" /></td>
                <th >SEMANAS DE GESTACIÓN</th>
                <td><input class="form-control" type="text" id="semanas_gestacion" name="semanas_gestacion" /></td>

                <th>MOVIMIENTO FETAL</th>
                <td colspan="2">
                    <select class="form-control" id="movimiento_fetal" name="movimiento_fetal">
                        <option value="">...</option anable>
                        <option value="Presentes">PRESENTES</option>
                        <option value="Ausentes">AUSENTES</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>FRECUENCIA CARDIACA FETAL</th>
                <td><input class="form-control"  type="text" id="frecuencia_card_fetal" name="frecuencia_card_fetal" /></td>
               
                <th>MEMBRANAS ROTAS</th>
                <td><input class="form-control"  type="text" id="membranas_rota" name="membranas_rota" /></td>

                <th>TIEMPO CON MEMBRANAS ROTAS</th>
                <td colspan="3"><input class="form-control" type="text" id="tiempo_membranas_rota" name="tiempo_membranas_rota" /></td>
            </tr>

            <tr>
                
                <th>ALTURA UTERINA</th>
                <td colspan="1"><input class="form-control"  type="text" id="altura_uterina" name="altura_uterina" /></td>
                <th>PRESENTACIÓN</th>
                <td colspan="5"><input class="form-control"  type="text" id="presentacion" name="presentacion" /></td>
            </tr>

            <tr>
                <th>DILATACIÓN</th>
                <td><input class="form-control"  type="text" id="dilatacion" name="dilatacion" /></td>
                <th>BORRAMIENTO</th>
                <td><input class="form-control"  type="text" id="borramiento" name="borramiento" /></td>
                <th>PLANO</th>
                <td colspan="3"><input class="form-control"  type="text" id="plano" name="plano" /></td>
            </tr>

            <tr>
                
                <th>PELVIS ÚTIL</th>
                <td><input class="form-control" type="text" id="pelvis_util" name="pelvis_util" /></td>
                <th>SANGRADO VAGINAL</th>
                <td><input class="form-control" type="text" id="sangrado_vaginal" name="sangrado_vaginal" /></td>
                <th>CONTRACCIONES</th>
                <td colspan="3"><input class="form-control" type="text" id="contracciones" name="contracciones" /></td>
            </tr>

        </tbody>
        <tbody>
            <tr>
                <td colspan="8">
                    <textarea class="form-control" name="obser_embarazo_parto" id="obser_embarazo_parto" cols="175" rows="4"></textarea>
                </td>
            </tr>            
        </tbody>
    </table>   

</div>