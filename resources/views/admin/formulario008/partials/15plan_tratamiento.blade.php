<div class="form-group">
    <h3>15. PLAN DE TRATAMIENTO        
    </h3> 
    {{-- 	DATOS DEL PACIENTE --}}

    <table style="width: 100%;">
      <tr>
          <td style="width: 50%;">
              <!-- Contenido de la primera parte -->
              <table>
                  <thead>
                      <tr>
                          <th></th>
                          <th style="font-size: 14px">MEDICAMENTO GENÉRICO</th>
                          <th style="font-size: 14px">VIA</th>
                          <th style="font-size: 14px">DOSIS</th>
                          <th style="font-size: 14px">POSOLOGIA</th>
                          <th style="font-size: 14px">DÍAS</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td style="font-size: 12px"><input class="form-control" type="text" name="medicamento_generico_1"></td>
                          
                          <td style="font-size: 12px">
                            <select name="via_1">
                              <option value="intravenoso">INTRAVENOSO</option>
                              <option value="via_oral">VIA ORAL</option>
                              <option value="intramuscular">INTRAMUSCULAR</option>
                              <option value="via_rectal">VÍA RECTAL</option>
                              <option value="subcutanea">SUBCUTÁNEA</option>
                              <option value="sublingual">SUBLINGUAL</option>
                              <option value="via topica">VÍA TÓPICA</option>
                              <option value="via_vaginal">VÍA VAGINAL</option>
                              <option value="via oftalmica">VÍA OFTÁLMICA</option>
                              <option value="via optica">VÍA ÓPTICA</option>
                            </select>
                          </td>

                          <td style="font-size: 12px"><input class="form-control" type="text" name="dosis_1"></td>
                          <td style="font-size: 12px"><input class="form-control" type="text" name="posologia_1"></td>
                          <td style="font-size: 12px"><input class="form-control" type="text" name="dias_1"></td>                             

                      </tr>
                      <tr>
                        <td>2</td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="medicamento_generico_2"></td>
                        
                        <td style="font-size: 12px">
                          <select name="via_2">
                            <option value="intravenoso">INTRAVENOSO</option>
                            <option value="via_oral">VIA ORAL</option>
                            <option value="intramuscular">INTRAMUSCULAR</option>
                            <option value="via_rectal">VÍA RECTAL</option>
                            <option value="subcutanea">SUBCUTÁNEA</option>
                            <option value="sublingual">SUBLINGUAL</option>
                            <option value="via topica">VÍA TÓPICA</option>
                            <option value="via_vaginal">VÍA VAGINAL</option>
                            <option value="via oftalmica">VÍA OFTÁLMICA</option>
                            <option value="via optica">VÍA ÓPTICA</option>
                          </select>
                        </td>

                        <td style="font-size: 12px"><input class="form-control" type="text" name="dosis_2"></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="posologia_2"></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="dias_2"></td>                             

                      </tr>
                      <tr>
                        <td>3</td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="medicamento_generico_3"></td>
                        
                        <td style="font-size: 12px">
                          <select name="via_3">
                            <option value="intravenoso">INTRAVENOSO</option>
                            <option value="via_oral">VIA ORAL</option>
                            <option value="intramuscular">INTRAMUSCULAR</option>
                            <option value="via_rectal">VÍA RECTAL</option>
                            <option value="subcutanea">SUBCUTÁNEA</option>
                            <option value="sublingual">SUBLINGUAL</option>
                            <option value="via topica">VÍA TÓPICA</option>
                            <option value="via_vaginal">VÍA VAGINAL</option>
                            <option value="via oftalmica">VÍA OFTÁLMICA</option>
                            <option value="via optica">VÍA ÓPTICA</option>
                          </select>
                        </td>

                        <td style="font-size: 12px"><input class="form-control" type="text" name="dosis_3"></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="posologia_3"></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="dias_3"></td>                             

                      </tr>
                      <tr>
                        <td>4</td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="medicamento_generico_4"></td>
                        
                        <td style="font-size: 12px">
                          <select name="via_4">
                            <option value="intravenoso">INTRAVENOSO</option>
                            <option value="via_oral">VIA ORAL</option>
                            <option value="intramuscular">INTRAMUSCULAR</option>
                            <option value="via_rectal">VÍA RECTAL</option>
                            <option value="subcutanea">SUBCUTÁNEA</option>
                            <option value="sublingual">SUBLINGUAL</option>
                            <option value="via topica">VÍA TÓPICA</option>
                            <option value="via_vaginal">VÍA VAGINAL</option>
                            <option value="via oftalmica">VÍA OFTÁLMICA</option>
                            <option value="via optica">VÍA ÓPTICA</option>
                          </select>
                        </td>

                        <td style="font-size: 12px"><input class="form-control" type="text" name="dosis_4"></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="posologia_4"></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="dias_4"></td>                             

                      </tr>
                  </tbody>
              </table>
          </td>
          <td style="width: 50%;">
              <!-- Contenido de la segunda parte -->
              <table>
                  <thead>
                      <tr>
                          <th style="font-size: 12px">1. INDICACIONES GENERALES   <input type="checkbox" name="pt_plan_tratamiento" id="pt_indicaciones_generales" value="Si"></th>
                          <th style="font-size: 12px">2. PROCEDIMIENOS <input type="checkbox" name="pt_plan_tratamiento" id="pt_procedimientos" value="Si"></th>
                          <th style="font-size: 12px">3. CONSENTIMIENTO INFORMADO <input type="checkbox" name="pt_consentimiento_informado" id="pt_consentimiento_informado" value="Si"></th>
                          <th style="font-size: 12px">4. OTROS  <input type="checkbox" name="pt_otros" id="pt_otros" value="Si"></th>

                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="obser_plan_tratamiento_1"></td>                       
                         
                      </tr> 
                      <tr>
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="obser_plan_tratamiento_2"></td>                       
                         
                      </tr>
                      <tr>
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="obser_plan_tratamiento_3"></td>                       
                         
                      </tr>
                      <tr>
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="obser_plan_tratamiento_4"></td>                       
                         
                      </tr>

                  </tbody>
              </table>
          </td>
      </tr>
    </table>
</div>