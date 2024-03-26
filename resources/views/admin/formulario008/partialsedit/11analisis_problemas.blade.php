<div class="form-group">
    <h3>11. ANÁLISIS DE PROBLEMAS        
        <label for="aplica_analisis_problemas" style="margin-left: 800px;">No Aplica</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_analisis_problemas" name="aplica_analisis_problemas" value="Si"  {{ $formulario008->aplica_analisis_problemas == 'Si' ? 'checked' : '' }}/>
    </h3>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">        
        <tbody>
            <tr>
                <td colspan="8">
                    <textarea class="form-control" name="analisis_problemas" id="analisis_problemas" cols="175" rows="4">{{ $formulario008->analisis_problemas ?? '' }}</textarea>
                </td>
            </tr>            
        </tbody>
    </table>   

</div>