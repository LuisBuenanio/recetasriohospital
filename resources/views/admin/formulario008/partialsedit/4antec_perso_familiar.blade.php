<div class="form-group">
    <h3>4. ANTECEDENTES PERSONALES Y FAMILIARES RELEVANTES
        <label for="aplica_antecedentes" style="margin-left: 620px;">NO APLICA</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_antecedentes";/>
        <h6>PARA DESCRIBIR SEÑALE EL NÚMERO Y LA LETRA CORRESPONDIENTE</h6>
        <h6> P = PERSONAL F = FAMILIAR</h6>
      </h3>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%" >
        <thead>
            <th>
                <label for="alergicos" style="margin-right: 10px;">1. ALÉRGICOS<input style=" margin-right: 10px; margin-left: 10px;"  type="checkbox" id="alergicos" name="alergicos" value="Sí" {{ $formulario008->alergicos == 'Si' ? 'checked' : '' }}/></label>
                <label for="clinicos" style="margin-right: 10px;">2. CLÍNICOS<input style=" margin-right: 10px; margin-left: 10px;"  type="checkbox" id="clinicos" name="clinicos" value="Sí" {{ $formulario008->clinicos == 'Si' ? 'checked' : '' }}/></label>
                <label for="ginecologicos" style="margin-right: 10px;">3. GINECOLÓGICOS<input style=" margin-right: 10px; margin-left: 10px;"  type="checkbox" id="ginecologicos" name="ginecologicos" value="Sí" {{ $formulario008->ginecologicos == 'Si' ? 'checked' : '' }}/></label>
                <label for="traumatologicos" style="margin-right: 10px;">4.TRAUMATOLÓGICOS<input style=" margin-right: 10px; margin-left: 10px;"  type="checkbox" id="traumatologicos" name="traumatologicos" value="Sí" {{ $formulario008->traumatologicos == 'Si' ? 'checked' : '' }}/></label>
                <label for="pediatricos" style="margin-right: 10px;">5. PEDIÁTRICOS<input style=" margin-right: 10px; margin-left: 10px;"  type="checkbox" id="pediatricos" name="pediatricos" value="Sí" {{ $formulario008->pediatricos == 'Si' ? 'checked' : '' }}/></label>
                <label for="quirurgicos" style="margin-right: 10px;">6. QUIRÚRGICOS<input style=" margin-right: 10px; margin-left: 10px;"  type="checkbox" id="quirurgicos" name="quirurgicos" value="Sí" {{ $formulario008->quirurgicos == 'Si' ? 'checked' : '' }}/></label>
                <label for="farmacologicos" style="margin-right: 10px;">7. FARMACOLÓGICOS<input style=" margin-right: 10px; margin-left: 10px;"  type="checkbox" id="farmacologicos" name="farmacologicos" value="Sí" {{ $formulario008->farmacologicos == 'Si' ? 'checked' : '' }}/></label>
                <label for="otros" style="margin-right: 10px;">8. OTROS<input style=" margin-right: 10px; margin-left: 10px;"  type="checkbox" id="otros" name="otros" value="Sí" {{ $formulario008->otros == 'Si' ? 'checked' : '' }}/></label>
                
            </th>

        </thead>
        <tbody>
            <td>
                <label for="obser_antec_personales"></label>
                <textarea class="form-control" name="obser_antec_personales" id="obser_antec_personales" cols="175" rows="5">{{ $formulario008->obser_antec_personales }}</textarea>
             </td>   
        </tbody>
    </table>
      


</div>