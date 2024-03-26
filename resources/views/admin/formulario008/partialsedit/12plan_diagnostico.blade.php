<div class="form-group">
    <h3>12. PLAN DE DIAGNÓSTICO       
        <label for="aplica_plan_diagnostico" style="margin-left: 800px;">NO APLICA</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_plan_diagnostico" name="aplica_plan_diagnostico" value="Si"  {{ $formulario008->aplica_plan_diagnostico == 'Si' ? 'checked' : '' }} />
    </h3>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <tbody>
            <tr>                    
                <td><label for="biometria">BIOMETRÍA</label></td>
                <td><input type="checkbox" id="biometria" name="biometria" value="Si" {{ $formulario008->biometria == 'Si' ? 'checked' : '' }}/> </td>
                <td> <label for="quimica_sanguinea">QUÍMICA SANGUÍNEA</label></td>
                <td><input type="checkbox" id="quimica_sanguinea" name="quimica_sanguinea" value="Si" {{ $formulario008->quimica_sanguinea == 'Si' ? 'checked' : '' }} /></td>
                <td> <label for="gasometria">GASOMETRÍA</label></td>
                <td> <input type="checkbox" id="gasometria" name="gasometria" value="Si" {{ $formulario008->gasometria == 'Si' ? 'checked' : '' }} /></td>
                <td> <label for="endoscopia">ENDOSCOPIA</label></td>
                <td> <input type="checkbox" id="endoscopia" name="endoscopia" value="Si" {{ $formulario008->endoscopia == 'Si' ? 'checked' : '' }} /></td>

                <td><label for="radiografia_abdomen">RADIOGRAFÍA DE ABDOMEN</label></td>
                <td> <input type="checkbox" id="radiografia_abdomen" name="radiografia_abdomen" value="Si" {{ $formulario008->radiografia_abdomen == 'Si' ? 'checked' : '' }} /></td>

                <td> <label for="tomografia">TOMOGRAFÍA</label></td>
                <td> <input type="checkbox" id="tomografia" name="tomografia" value="Si" {{ $formulario008->tomografia == 'Si' ? 'checked' : '' }} /></td>

                <td><label for="ecografia_pelvica">ECOGRAFÍA PÉLVICA</label></td>
                <td> <input type="checkbox" id="ecografia_pelvica" name="ecografia_pelvica" value="Si" {{ $formulario008->ecografia_pelvica == 'Si' ? 'checked' : '' }} /></td>

                <td><label for="interconsulta_especializada">INTERCONSULTA ESPECIALIZADA</label></td>
                <td><input type="checkbox" id="interconsulta_especializada" name="interconsulta_especializada" value="Si" {{ $formulario008->interconsulta_especializada == 'Si' ? 'checked' : '' }} />
                </td>
            </tr>
        </tbody>

        <tbody>
            <tr>
                <td> <label for="uroanalisis">UROANÁLISIS</label></td>
                <td> <input type="checkbox" id="uroanalisis" name="uroanalisis" value="Si" {{ $formulario008->uroanalisis == 'Si' ? 'checked' : '' }} /></td>


                <td><label for="electrolitos">ELECTRÓLITOS</label></td>
                <td><input type="checkbox" id="electrolitos" name="electrolitos" value="Si" {{ $formulario008->electrolitos == 'Si' ? 'checked' : '' }} /></td>

                <td><label for="electrocardiograma">ELECTROCARDIOGRAMA</td>
                <td><input type="checkbox" id="electrocardiograma" name="electrocardiograma" value="Si" {{ $formulario008->electrocardiograma == 'Si' ? 'checked' : '' }} /></td>

                <td> <label for="r_x_torax">R-X TÓRAX</label></td>
                <td> <input type="checkbox" id="r_x_torax" name="r_x_torax" value="Si" {{ $formulario008->r_x_torax == 'Si' ? 'checked' : '' }} /></td>

                <td> <label for="r_x_osea">R-X OSEA</label></td>
                <td> <input type="checkbox" id="r_x_osea" name="r_x_osea" value="Si" {{ $formulario008->r_x_osea == 'Si' ? 'checked' : '' }} /></td>

                <td> <label for="resonancia">RESONANCIA</label></td>
                <td> <input type="checkbox" id="resonancia" name="resonancia" value="Si" {{ $formulario008->resonancia == 'Si' ? 'checked' : '' }} /></td>


                <td> <label for="ecografia_abdominal">ECOGRAFÍA ABDOMINAL</label></td>
                <td> <input type="checkbox" id="ecografia_abdominal" name="ecografia_abdominal" value="Si" {{ $formulario008->ecografia_abdominal == 'Si' ? 'checked' : '' }} /></td>

                <td><label for="pd_otros">OTROS</label></td>
                <td> <input type="checkbox" id="pd_otros" name="pd_otros" value="Si" {{ $formulario008->pd_otros == 'Si' ? 'checked' : '' }} /></td>
            </tr>
        </tbody>
      </table>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">        
        <tbody>
            <tr>
                <td colspan="8">
                    <textarea class="form-control" name="obser_plan_diagnostico" id="obser_plan_diagnostico" cols="175" rows="4">{{ $formulario008->obser_plan_diagnostico}}</textarea>
                </td>
            </tr>            
        </tbody>
    </table>   

</div>