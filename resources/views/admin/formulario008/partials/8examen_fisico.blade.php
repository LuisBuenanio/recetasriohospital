<div class="form-group">
    <h3>8. EXÁMEN FÍSICO     
        <h6>R = REGIONAL  S = SISTÉMICO</h6>
        <h6> CP = CON EVIDENCIA DE PATOLOGÍA: MARCAR Y DESCRIBIR ABAJO ANOTANDO EL NÚMERO Y LETRA CORRESPONDIENTE</h6><h6> SP = SIN EVIDENCIA DE PATOLOGÍA: MARCAR Y NO DESCRIBIR</h6>
    </h3>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
          <tr>
            <th></th>
            <th colspan="">CP</th>
            <th colspan="">SP</th>
            <th></th>
            <th colspan="">CP</th>
            <th colspan="">SP</th>
            <th></th>
            <th colspan="">CP</th>
            <th colspan="">SP</th>
            <th></th>
            <th colspan="">CP</th>
            <th colspan="">SP</th>
            <th></th>
            <th colspan="">CP</th>
            <th colspan="">SP</th>
          </tr>
          <tr>

          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td><label for="r_piel_faneras">1-R Piel y Faneras</label></td>
            <td><input type="checkbox" id="r_piel_faneras" name="r_piel_faneras" value="CP" onclick="checkboxrpiel_faneras(this)" /></td>
            <td><input type="checkbox" id="r_piel_faneras1" name="r_piel_faneras" value="SP" onclick="checkboxrpiel_faneras(this)"/></td> 
            
            <script>
                function checkboxrpiel_faneras(checkbox) {
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

            <td><label for="boca_cp">6-R Boca (CP/SP)</label></td>
            <td><input type="checkbox" id="r_boca" name="r_boca" value="CP" onclick="checkboxr_boca(this)"/></td>
            <td><input type="checkbox" id="r_boca1" name="r_boca" value="SP" onclick="checkboxr_boca(this)"/></td>

            <script>
                function checkboxr_boca(checkbox) {
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

            <td><label for="r_abdomen">11-R Abdomen </label></td>
            <td><input type="checkbox" id="r_abdomen" name="r_abdomen" value="CP" onclick="checkboxr_abdomen(this)"/></td>
            <td><input type="checkbox" id="r_abdomen1" name="r_abdomen" value="SP" onclick="checkboxr_abdomen(this)"/></td>
            <script>
                function checkboxr_abdomen(checkbox) {
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

            <td><label for="s_organos_sentidos">1-S Organos de los Sentidos </label></td>
            <td><input type="checkbox" id="s_organos_sentidos" name="s_organos_sentidos" value="CP" onclick="checkboxsorganos_sentidos(this)"/></td>
            <td> <input type="checkbox" id="s_organos_sentidos1" name="s_organos_sentidos" value="SP" onclick="checkboxsorganos_sentidos(this)"/></td>
            <script>
                function checkboxsorganos_sentidos(checkbox) {
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

            <td><label for="s_urinario">6-S Urinario (CP/SP)</label></td>
            <td><input type="checkbox" id="s_urinario" name="s_urinario" value="CP" onclick="checkboxs_urinario(this)"/></td>
            <td> <input type="checkbox" id="s_urinario1" name="s_urinario" value="SP" onclick="checkboxs_urinario(this)"/></td>
            <script>
                function checkboxs_urinario(checkbox) {
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
          <!-- Región 2: Cabeza -->
          <tr>
            <td><label for="cabeza">2-R Cabeza</label></td>
            <td><input type="checkbox" id="r_cabeza" name="r_cabeza" value="CP" onclick="checkboxr_cabeza(this)"/></td>
            <td> <input type="checkbox" id="r_cabeza1" name="r_cabeza" value="SP" onclick="checkboxr_cabeza(this)"/></td>
            <script>
                function checkboxr_cabeza(checkbox) {
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

            <td><label for="r_oro_faringe">7-R Oro Faringe </label></td>
            <td><input type="checkbox" id="r_oro_faringe" name="r_oro_faringe" value="CP" onclick="checkboxroro_faringe(this)"/></td>
            <td> <input type="checkbox" id="r_oro_faringe1" name="r_oro_faringe" value="SP" onclick="checkboxroro_faringe(this)"/></td>
            <script>
                function checkboxroro_faringe(checkbox) {
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

            <td><label for="r_columna_vertebral">12-R Columna Vertebral</label></td>
            <td><input type="checkbox" id="r_columna_vertebral" name="r_columna_vertebral" value="CP" onclick="checkboxrcolumna_vertebral(this)"/></td>
            <td> <input type="checkbox" id="r_columna_vertebral" name="r_columna_vertebral" value="SP" onclick="checkboxrcolumna_vertebral(this)"/></td>
            <script>
                function checkboxrcolumna_vertebral(checkbox) {
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

            <td><label for="s_respiratorio">2-S Respiratorio (CP/SP)</label></td>
            <td><input type="checkbox" id="s_respiratorio" name="s_respiratorio" value="CP" onclick="checkboxs_respiratorio(this)"/></td>
            <td> <input type="checkbox" id="s_respiratorio1" name="s_respiratorio" value="SP" onclick="checkboxs_respiratorio(this)"/></td>
            <script>
                function checkboxs_respiratorio(checkbox) {
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

            <td><label for="s_musculo_esqueletico">7-S Musculoesquelético </label></td>
            <td><input type="checkbox" id="s_musculo_esqueletico" name="s_musculo_esqueletico" value="CP" onclick="checkboxsmusculo_esqueleto(this)"/></td>
            <td> <input type="checkbox" id="s_musculo_esqueletico1" name="s_musculo_esqueletico" value="SP" onclick="checkboxsmusculo_esqueleto(this)"/></td>
            <script>
                function checkboxsmusculo_esqueleto(checkbox) {
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
          <tr>
            <td><label for="r_ojos">3-R Ojos </label></td>
            <td><input type="checkbox" id="r_ojos" name="r_ojos" value="CP" onclick="checkboxr_ojos(this)"/></td>
            <td> <input type="checkbox" id="r_ojos1" name="r_ojos" value="SP" onclick="checkboxr_ojos(this)"/></td>
            <script>
                function checkboxr_ojos(checkbox) {
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

            <td><label for="r_cuello">8-R Cuello </label></td>
            <td><input type="checkbox" id="r_cuello" name="r_cuello" value="CP" onclick="checkboxr_cuello(this)"/></td>
            <td> <input type="checkbox" id="r_cuello1" name="r_cuello" value="SP" onclick="checkboxr_cuello(this)"/></td>
            <script>
                function checkboxr_cuello(checkbox) {
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

            <td> <label for="r_ingle_perine">13-R Ingle-Perine </label></td>
            <td><input type="checkbox" id="r_ingle_perine" name="r_ingle_perine" value="CP" onclick="checkboxringle_perine(this)"/></td>
            <td> <input type="checkbox" id="r_ingle_perine1" name="r_ingle_perine" value="SP" onclick="checkboxringle_perine(this)"/></td>
            <script>
                function checkboxringle_perine(checkbox) {
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

            <td><label for="r_cardiovascular">3-S Cardiovascular (CP/SP)</label></td>
            <td><input type="checkbox" id="r_cardiovascular" name="r_cardiovascular" value="CP" onclick="checkboxr_cardiovascular(this)"/></td>
            <td> <input type="checkbox" id="r_cardiovascular1" name="r_cardiovascular" value="SP" onclick="checkboxr_cardiovascular(this)"/></td>
            <script>
                function checkboxr_cardiovascular(checkbox) {
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

            <td><label for="s_endocrino">8-S Endocrino (CP/SP)</label></td>
            <td><input type="checkbox" id="s_endocrino" name="s_endocrino" value="CP" onclick="checkboxs_endocrino(this)"/></td>
            <td> <input type="checkbox" id="s_endocrino1" name="s_endocrino" value="SP" onclick="checkboxs_endocrino(this)"/></td>
            <script>
                function checkboxs_endocrino(checkbox) {
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

          <tr>
            <td><label for="r_oidos">4-R Oídos </label></td>
            <td><input type="checkbox" id="r_oidos" name="r_oidos" value="CP" onclick="checkboxr_oidos(this)"/></td>
            <td> <input type="checkbox" id="r_oidos1" name="r_oidos" value="SP" onclick="checkboxr_oidos(this)"/></td>
            <script>
                function checkboxr_oidos(checkbox) {
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

            <td> <label for="r_axilas_mamas">9-R Axilas-Mamas </label></td>
            <td><input type="checkbox" id="r_axilas_mamas" name="r_axilas_mamas" value="CP" onclick="checkboxraxilas_mamas(this)"/></td>
            <td> <input type="checkbox" id="r_axilas_mamas1" name="r_axilas_mamas" value="SP" onclick="checkboxraxilas_mamas(this)"/></td>
            <script>
                function checkboxraxilas_mamas(checkbox) {
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

            <td><label for="r_miembros_superiores">14-R Miembros Superiores </label></td>
            <td><input type="checkbox" id="r_miembros_superiores" name="r_miembros_superiores" value="CP" onclick="checkboxrmiembros_superiores(this)"/></td>
            <td> <input type="checkbox" id="r_miembros_superiores1" name="r_miembros_superiores" value="SP" onclick="checkboxrmiembros_superiores(this)"/></td>
            <script>
                function checkboxrmiembros_superiores(checkbox) {
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



            <td><label for="s_digestivo">4-S Digestivo </label></td>
            <td><input type="checkbox" id="s_digestivo" name="s_digestivo" value="CP" onclick="checkboxs_digestivo(this)"/></td>
            <td> <input type="checkbox" id="s_digestivo1" name="s_digestivo" value="SP" onclick="checkboxs_digestivo(this)"/></td>
            <script>
                function checkboxs_digestivo(checkbox) {
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

            <td><label for="s_hemolinfatico">9-S Hemolinfático (CP/SP)</label></td>
            <td><input type="checkbox" id="s_hemolinfatico" name="s_hemolinfatico" value="CP" onclick="checkboxr_hemolinfatico(this)"/></td>
            <td> <input type="checkbox" id="s_hemolinfatico1" name="s_hemolinfatico" value="SP" onclick="checkboxr_hemolinfatico(this)"/></td>
            <script>
                function checkboxr_hemolinfatico(checkbox) {
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

          <tr>
            <td><label for="r_nariz">5-R Nariz </label></td>
            <td><input type="checkbox" id="r_nariz" name="r_nariz" value="CP" onclick="checkboxr_nariz(this)"/></td>
            <td> <input type="checkbox" id="r_nariz1" name="r_nariz" value="SP" onclick="checkboxr_nariz(this)"/></td>
            <script>
                function checkboxr_nariz(checkbox) {
                    // Obtener todos los checkboxes con el mismo nombre
                    var checkboxes = document.querySelectorAll('input[name="' + checkbox.name + '"]');
                    
                    // Desmarcar todos los checkboxes excepto el que ha sido sr_narizeleccionado
                    checkboxes.forEach(function(cb) {
                        if (cb !== checkbox) {
                            cb.checked = false;
                        }
                    });
                }
            </script>

            <td><label for="r_torax">10-R Tórax </label></td>
            <td><input type="checkbox" id="r_torax" name="r_torax" value="CP" onclick="checkboxr_torax(this)"/></td>
            <td> <input type="checkbox" id="r_torax1" name="r_torax" value="SP" onclick="checkboxr_torax(this)"/></td>
            <script>
                function checkboxr_torax(checkbox) {
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

            <td> <label for="r_miembros_inferiores">15-R Miembros Inferiores </label></td>
            <td><input type="checkbox" id="r_miembros_inferiores" name="r_miembros_inferiores" value="CP" onclick="checkboxrmiembros_inferiores(this)"/></td>
            <td> <input type="checkbox" id="r_miembros_inferiores1" name="r_miembros_inferiores" value="SP" onclick="checkboxrmiembros_inferiores(this)"/></td>
            <script>
                function checkboxrmiembros_inferiores(checkbox) {
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

            <td><label for="s_genital">5-S Genital (CP/SP)</label></td>
            <td><input type="checkbox" id="s_genital" name="s_genital" value="CP" onclick="checkboxs_genital(this)"/></td>
            <td> <input type="checkbox" id="s_genital1" name="s_genital" value="SP" onclick="checkboxs_genital(this)"/></td>
            <script>
                function checkboxs_genital(checkbox) {
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

            <td><label for="s_neurologico">10-S Neurológico (CP/SP)</label></td>
            <td><input type="checkbox" id="s_neurologico" name="s_neurologico" value="CP" onclick="checkboxs_neurologico(this)"/></td>
            <td> <input type="checkbox" id="s_neurologico1" name="s_neurologico" value="SP" onclick="checkboxs_neurologico(this)"/></td>
            <script>
                function checkboxs_neurologico(checkbox) {
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

      </table>

      <table>

        <tbody border="1" cellspacing="-5" cellpadding="3" width="100%">
          <tr>
            <td colspan="5"><textarea class="form-control" name="obser_examen_fisico" id="obser_examen_fisico" cols="175" rows="5"></textarea>
          </tr>
        </tbody>
      </table>   
</div>