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
                          <th style="font-size: 14px">DÓSIS</th>
                          <th style="font-size: 14px">POSOLOGÍA</th>
                          <th style="font-size: 14px">DÍAS</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td style="font-size: 12px"><input class="form-control" type="text" name="medicamento_generico_1" value="{{ $formulario008->medicamento_generico_1 ?? '' }}"></td>
                          
                          <td style="font-size: 12px">
                            <select name="via_1">
                              <option value="intravenoso" {{ $formulario008->via_1 == 'intravenoso' ? 'selected' : '' }}>INTRAVENOSO</option>
                              <option value="via_oral" {{ $formulario008->via_1 == 'via_oral' ? 'selected' : '' }} >VIA ORAL</option>
                              <option value="intramuscular" {{ $formulario008->via_1 == 'intramuscular' ? 'selected' : '' }} >INTRAMUSCULAR</option>
                              <option value="via_rectal" {{ $formulario008->via_1 == 'via_rectal' ? 'selected' : '' }} >VÍA RECTAL</option>
                              <option value="subcutanea" {{ $formulario008->via_1 == 'subcutanea' ? 'selected' : '' }} >SUBCUTÁNEA</option>
                              <option value="sublingual" {{ $formulario008->via_1 == 'sublingual' ? 'selected' : '' }} >SUBLINGUAL</option>
                              <option value="via_topica" {{ $formulario008->via_1 == 'via_topica' ? 'selected' : '' }} >VÍA TÓPICA</option>
                              <option value="via_vaginal" {{ $formulario008->via_1 == 'via_vaginal' ? 'selected' : '' }} >VÍA VAGINAL</option>
                              <option value="via_oftalmica" {{ $formulario008->via_1 == 'via_oftalmica' ? 'selected' : '' }} >VÍA OFTÁLMICA</option>
                              <option value="via_optica" {{ $formulario008->via_1 == 'via_optica' ? 'selected' : '' }} >VÍA ÓPTICA</option>
                            </select>
                          </td>                          

                          <td style="font-size: 12px"><input class="form-control" type="text" name="dosis_1" value=" {{ $formulario008->dosis_1 ?? '' }}"></td>
                          <td style="font-size: 12px"><input class="form-control" type="text" name="posologia_1" value=" {{ $formulario008->posologia_1 ?? '' }}"></td>
                          <td style="font-size: 12px"><input class="form-control" type="text" name="dias_1" value=" {{ $formulario008->dias_1 ?? '' }} "></td>                             

                      </tr>
                      <tr>
                        <td>2</td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="medicamento_generico_2" value=" {{ $formulario008->medicamento_generico_2 ?? '' }}" ></td>
                        
                        <td style="font-size: 12px">
                          <select name="via_2">
                            <option value="intravenoso" {{ $formulario008->via_2 == 'intravenoso' ? 'selected' : '' }}>INTRAVENOSO</option>
                            <option value="via_oral" {{ $formulario008->via_2 == 'via_oral' ? 'selected' : '' }} >VIA ORAL</option>
                            <option value="intramuscular" {{ $formulario008->via_2 == 'intramuscular' ? 'selected' : '' }} >INTRAMUSCULAR</option>
                            <option value="via_rectal" {{ $formulario008->via_2 == 'via_rectal' ? 'selected' : '' }} >VÍA RECTAL</option>
                            <option value="subcutanea" {{ $formulario008->via_2 == 'subcutanea' ? 'selected' : '' }} >SUBCUTÁNEA</option>
                            <option value="sublingual" {{ $formulario008->via_2 == 'sublingual' ? 'selected' : '' }} >SUBLINGUAL</option>
                            <option value="via_topica" {{ $formulario008->via_2 == 'via_topica' ? 'selected' : '' }} >VÍA TÓPICA</option>
                            <option value="via_vaginal" {{ $formulario008->via_2 == 'via_vaginal' ? 'selected' : '' }} >VÍA VAGINAL</option>
                            <option value="via_oftalmica" {{ $formulario008->via_2 == 'via_oftalmica' ? 'selected' : '' }} >VÍA OFTÁLMICA</option>
                            <option value="via_optica" {{ $formulario008->via_2 == 'via_optica' ? 'selected' : '' }} >VÍA ÓPTICA</option>
                          </select>
                        </td>

                        <td style="font-size: 12px"><input class="form-control" type="text" name="dosis_2" value=" {{ $formulario008->dosis_2 ?? '' }}"></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="posologia_2" value=" {{ $formulario008->posologia_2 ?? '' }}"></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="dias_2" value=" {{ $formulario008->dias_2 ?? '' }}"></td>                             

                      </tr>
                      <tr>
                        <td>3</td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="medicamento_generico_3" value=" {{ $formulario008->medicamento_generico_3 ?? '' }}" ></td>
                        
                        <td style="font-size: 12px">
                          <select name="via_3">
                            <option value="intravenoso" {{ $formulario008->via_3 == 'intravenoso' ? 'selected' : '' }}>INTRAVENOSO</option>
                            <option value="via_oral" {{ $formulario008->via_3 == 'via_oral' ? 'selected' : '' }} >VIA ORAL</option>
                            <option value="intramuscular" {{ $formulario008->via_3 == 'intramuscular' ? 'selected' : '' }} >INTRAMUSCULAR</option>
                            <option value="via_rectal" {{ $formulario008->via_3 == 'via_rectal' ? 'selected' : '' }} >VÍA RECTAL</option>
                            <option value="subcutanea" {{ $formulario008->via_3 == 'subcutanea' ? 'selected' : '' }} >SUBCUTÁNEA</option>
                            <option value="sublingual" {{ $formulario008->via_3 == 'sublingual' ? 'selected' : '' }} >SUBLINGUAL</option>
                            <option value="via_topica" {{ $formulario008->via_3 == 'via_topica' ? 'selected' : '' }} >VÍA TÓPICA</option>
                            <option value="via_vaginal" {{ $formulario008->via_3 == 'via_vaginal' ? 'selected' : '' }} >VÍA VAGINAL</option>
                            <option value="via_oftalmica" {{ $formulario008->via_3 == 'via_oftalmica' ? 'selected' : '' }} >VÍA OFTÁLMICA</option>
                            <option value="via_optica" {{ $formulario008->via_3 == 'via_optica' ? 'selected' : '' }} >VÍA ÓPTICA</option>
                          </select>
                        </td>

                        <td style="font-size: 12px"><input class="form-control" type="text" name="dosis_3" value=" {{ $formulario008->dosis_3 ?? '' }}" ></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="posologia_3" value=" {{ $formulario008->posologia_3 ?? '' }}"></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="dias_3" value=" {{ $formulario008->posologia_3 ?? '' }}"></td>                             

                      </tr>
                      <tr>
                        <td>4</td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="medicamento_generico_4" value=" {{ $formulario008->medicamento_generico_4 ?? '' }}" ></td>
                        
                        <td style="font-size: 12px">
                          <select name="via_4">
                            <option value="intravenoso" {{ $formulario008->via_4 == 'intravenoso' ? 'selected' : '' }}>INTRAVENOSO</option>
                            <option value="via_oral" {{ $formulario008->via_4 == 'via_oral' ? 'selected' : '' }} >VIA ORAL</option>
                            <option value="intramuscular" {{ $formulario008->via_4 == 'intramuscular' ? 'selected' : '' }} >INTRAMUSCULAR</option>
                            <option value="via_rectal" {{ $formulario008->via_4 == 'via_rectal' ? 'selected' : '' }} >VÍA RECTAL</option>
                            <option value="subcutanea" {{ $formulario008->via_4 == 'subcutanea' ? 'selected' : '' }} >SUBCUTÁNEA</option>
                            <option value="sublingual" {{ $formulario008->via_4 == 'sublingual' ? 'selected' : '' }} >SUBLINGUAL</option>
                            <option value="via_topica" {{ $formulario008->via_4 == 'via_topica' ? 'selected' : '' }} >VÍA TÓPICA</option>
                            <option value="via_vaginal" {{ $formulario008->via_4 == 'via_vaginal' ? 'selected' : '' }} >VÍA VAGINAL</option>
                            <option value="via_oftalmica" {{ $formulario008->via_4 == 'via_oftalmica' ? 'selected' : '' }} >VÍA OFTÁLMICA</option>
                            <option value="via_optica" {{ $formulario008->via_4 == 'via_optica' ? 'selected' : '' }} >VÍA ÓPTICA</option>
                          </select>
                        </td>

                        <td style="font-size: 12px"><input class="form-control" type="text" name="dosis_4" value=" {{ $formulario008->dosis_4 ?? '' }}" ></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="posologia_4" value=" {{ $formulario008->posologia_4 ?? '' }}" ></td>
                        <td style="font-size: 12px"><input class="form-control" type="text" name="dias_4" value=" {{ $formulario008->dias_4 ?? '' }}" ></td>                             

                      </tr>
                  </tbody>
              </table>
          </td>
          <td style="width: 50%;">
              <!-- Contenido de la segunda parte -->
              <table>
                  <thead>
                      <tr>
                          <th style="font-size: 12px">1. INDICACIONES GENERALES   <input type="checkbox" name="pt_indicaciones_generales" id="pt_indicaciones_generales" value="Si" {{ $formulario008->pt_indicaciones_generales == 'Si' ? 'checked' : '' }}></th>
                          <th style="font-size: 12px">2. PROCEDIMIENTOS <input type="checkbox" name="pt_procedimientos" id="pt_procedimientos" value="Si" {{ $formulario008->pt_procedimientos == 'Si' ? 'checked' : '' }}></th>
                          <th style="font-size: 12px">3. CONSENTIMIENTO INFORMADO <input type="checkbox" name="pt_consentimiento_informado" id="pt_consentimiento_informado" value="Si" {{ $formulario008->pt_consentimiento_informado == 'Si' ? 'checked' : '' }}></th>
                          <th style="font-size: 12px">4. OTROS  <input type="checkbox" name="pt_otros" id="pt_otros" value="Si" {{ $formulario008->pt_otros == 'Si' ? 'checked' : '' }}></th>

                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="obser_plan_tratamiento_1" value=" {{ $formulario008->obser_plan_tratamiento_1 ?? '' }}" ></td>                       
                         
                      </tr> 
                      <tr>
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="obser_plan_tratamiento_2" value=" {{ $formulario008->obser_plan_tratamiento_2 ?? '' }}" ></td>                       
                         
                      </tr>
                      <tr>
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="obser_plan_tratamiento_3" value=" {{ $formulario008->obser_plan_tratamiento_3 ?? '' }}" ></td>                       
                         
                      </tr>
                      <tr>
                        <td colspan="4" style="font-size: 12px"><input class="form-control" type="text" name="obser_plan_tratamiento_4" value=" {{ $formulario008->obser_plan_tratamiento_4 ?? '' }}" ></td>                       
                         
                      </tr>

                  </tbody>
              </table>
          </td>
      </tr>
    </table>
</div>