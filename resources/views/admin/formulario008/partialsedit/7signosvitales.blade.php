<div class="form-group">
    <h3>7. SIGNOS VITALES, MEDICIONES Y VALORES     
        {{-- <label for="aplica_signos_vitales" style="margin-left: 410px;">No Aplica</label>
        <input type="checkbox" id="aplica_signos_vitales";/> --}}
    </h3>
    <table border="1" cellspacing="-5" cellpadding="4" width="100%">
        <tbody>
            <tr>
                <th>PRESIÓN ARTERIAL</th> 
                <td><input class="form-control" type="text" id="presion_arterial" name="presion_arterial" value="{{ $formulario008->presion_arterial ?? '' }}"  /></td> 
                <th> FRECUENCIA CARDIACA (min)</th>
                <td><input class="form-control" type="text" id="frecuencia_cardiaca" name="frecuencia_cardiaca" value="{{ $formulario008->frecuencia_cardiaca ?? '' }}"  /></td>
                <th>FRECUENCIA RESPIRATORIA (min)</th>
                <td><input class="form-control" type="text" id="frecuencia_respiratoria" name="frecuencia_respiratoria" value="{{ $formulario008->frecuencia_respiratoria ?? '' }}"  /></td>
                <th>TEMPERATURA BUCAL (°C)</th>
                <td><input class="form-control" type="text" id="temperatura_bucal" name="temperatura_bucal" step="0.1" value="{{ $formulario008->temperatura_bucal ?? '' }}"  /></td>
                <th>TEMPERATURA AXILAR (°C)</th>
                <td><input class="form-control" type="text" id="temperatura_axilar" name="temperatura_axilar" step="0.1" value="{{ $formulario008->temperatura_axilar ?? '' }}"  /></td>            
            </tr>
            <tr>
                <th>PESO (kg)</th>
                <td><input class="form-control" type="text" id="peso" name="peso" step="0.01" value="{{ $formulario008->peso ?? '' }}"  /></td>
                <th>TALLA (metros)</th>        
                <td><input class="form-control" type="text" id="talla" name="talla" step="0.01" value="{{ $formulario008->talla ?? '' }}"  /></td>        
            </tr>
            <tr>
                <th colspan="2" >GLASGOW</th>   
                <th>OCULAR</th>
                <td><input class="form-control" type="text" id="glasgow_ocular" name="glasgow_ocular" value="{{ $formulario008->glasgow_ocular ?? '' }}"  /></td>
                <th>VERBAL</th>
                <td><input class="form-control" type="text" id="glasgow_verbal" name="glasgow_verbal" value="{{ $formulario008->glasgow_verbal ?? '' }}"  /></td>
                <th>MOTORA</th>
                <td><input class="form-control" type="text" id="glasgow_motora" name="glasgow_motora" value="{{ $formulario008->glasgow_motora ?? '' }}"  /></td>
                <th>Total</th>
                <td><input class="form-control" type="text" id="glasgow_total" name="glasgow_total" value="{{ $formulario008->glasgow_total ?? '' }}"  /></td>
            </tr>
            <tr>
                <th>REACCIÓN PUPILA DER</th>
                <td><input class="form-control"  type="text" id="rec_pupila_derecha" name="rec_pupila_derecha" value="{{ $formulario008->rec_pupila_derecha ?? '' }}"  /></td>
                <th>REACCIÓN PUPILA IZQ</th>
                <td><input class="form-control"  type="text" id="rec_pupila_izquierda" name="rec_pupila_izquierda" value="{{ $formulario008->rec_pupila_izquierda ?? '' }}"  /></td>
                <th>T. LLENADO CAPILAR</th>
                <td><input class="form-control"  type="text" id="tej_llenado_capilar" name="tej_llenado_capilar" value="{{ $formulario008->tej_llenado_capilar ?? '' }}"  /></td>
                <th>PERÍMETRO CEFÁLICO (cm)</th>
                <td colspan="3"><input class="form-control"  type="text" id="perimetro_cefalico" name="perimetro_cefalico" step="0.1" value="{{ $formulario008->perimetro_cefalico ?? '' }}"  /></td>       
            </tr>     
        </tbody>
    </table>   
</div>