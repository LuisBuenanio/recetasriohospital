<div class="form-group">
    <h3>8. EXÁMEN FÍSICO     
        <h6>R = REGIONAL  S = SISTÉMICO</h6>
        <h6> CP = CON EVIDENCIA DE PATOLOGÍA: MARCAR Y DESCRIBIR ABAJO ANOTANDO EL NÚMERO Y LETRA CORRESPONDIENTE</h6><h6> SP = SIN EVIDENCIA DE PATOLOGÍA: MARCAR Y NO DESCRIBIR</h6>
    </h3>
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
          <tr>
            <th></th>
            <th colspan="">CP <input style="margin-left: 10px;" type="checkbox" id="select_all_1" name="select_all_1" onchange="selectAllCheckboxes1(this, 1)"/>
            </th>
            <th colspan="">SP <input style="margin-left: 10px;" type="checkbox" id="select_all_2" name="select_all_2" onchange="selectAllCheckboxes1(this, 2)" />
            </th>
            <th></th>
            <th colspan="">CP <input style="margin-left: 10px;" type="checkbox" id="select_all_3" name="select_all_3" onchange="selectAllCheckboxes2(this, 3)"/>
            </th>
            <th colspan="">SP <input style="margin-left: 10px;" type="checkbox" id="select_all_4" name="select_all_4" onchange="selectAllCheckboxes2(this, 4)" />
            </th>            
            <th></th>
            <th colspan="">CP <input style="margin-left: 10px;" type="checkbox" id="select_all_5" name="select_all_5" onchange="selectAllCheckboxes3(this, 5)"/>
            </th>
            <th colspan="">SP <input style="margin-left: 10px;" type="checkbox" id="select_all_6" name="select_all_6" onchange="selectAllCheckboxes3(this, 6)" />
            </th>             
            <th></th>
            <th colspan="">CP <input style="margin-left: 10px;" type="checkbox" id="select_all_7" name="select_all_7" onchange="selectAllCheckboxes4(this, 7)"/>
            </th>
            <th colspan="">SP <input style="margin-left: 10px;" type="checkbox" id="select_all_8" name="select_all_8" onchange="selectAllCheckboxes4(this, 8)" />
            </th> 
            <th></th>
            <th colspan="">CP <input style="margin-left: 10px;" type="checkbox" id="select_all_9" name="select_all_9" onchange="selectAllCheckboxes5(this, 9)"/>
            </th>
            <th colspan="">SP <input style="margin-left: 10px;" type="checkbox" id="select_all_10" name="select_all_10" onchange="selectAllCheckboxes5(this, 10)" />
            </th> 
          </tr>
          <tr>

          </tr>

          <script>
            function selectAllCheckboxes1(checkbox, group) {
                var checkboxes = document.querySelectorAll('input[type="checkbox"][data-select-all="' + group + '"]');
                checkboxes.forEach(function(cb) {
                    cb.checked = checkbox.checked;
                });
        
                // Disable the other select_all checkbox
                var otherGroup = group === 1 ? 2 : 1;
                var otherCheckbox = document.getElementById('select_all_' + otherGroup);
                otherCheckbox.disabled = checkbox.checked;
            }

            function selectAllCheckboxes2(checkbox, group) {
                var checkboxes = document.querySelectorAll('input[type="checkbox"][data-select-all="' + group + '"]');
                checkboxes.forEach(function(cb) {
                    cb.checked = checkbox.checked;
                });
        
                // Disable the other select_all checkbox
                var otherGroup = group === 3 ? 4 : 3;
                var otherCheckbox = document.getElementById('select_all_' + otherGroup);
                otherCheckbox.disabled = checkbox.checked;
            }

            function selectAllCheckboxes3(checkbox, group) {
                var checkboxes = document.querySelectorAll('input[type="checkbox"][data-select-all="' + group + '"]');
                checkboxes.forEach(function(cb) {
                    cb.checked = checkbox.checked;
                });
        
                // Disable the other select_all checkbox
                var otherGroup = group === 5 ? 6 : 5;
                var otherCheckbox = document.getElementById('select_all_' + otherGroup);
                otherCheckbox.disabled = checkbox.checked;
            }
            function selectAllCheckboxes4(checkbox, group) {
                var checkboxes = document.querySelectorAll('input[type="checkbox"][data-select-all="' + group + '"]');
                checkboxes.forEach(function(cb) {
                    cb.checked = checkbox.checked;
                });
        
                // Disable the other select_all checkbox
                var otherGroup = group === 7 ? 8 : 7;
                var otherCheckbox = document.getElementById('select_all_' + otherGroup);
                otherCheckbox.disabled = checkbox.checked;
            }
            function selectAllCheckboxes5(checkbox, group) {
                var checkboxes = document.querySelectorAll('input[type="checkbox"][data-select-all="' + group + '"]');
                checkboxes.forEach(function(cb) {
                    cb.checked = checkbox.checked;
                });
        
                // Disable the other select_all checkbox
                var otherGroup = group === 9 ? 10 : 9;
                var otherCheckbox = document.getElementById('select_all_' + otherGroup);
                otherCheckbox.disabled = checkbox.checked;
            }
        </script>
          
        </thead>
        <tbody>            
          <tr>
            
              
            <td><label for="r_piel_faneras">1-R PIEL Y FANERAS</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_piel_faneras" name="r_piel_faneras" value="CP" {{ $formulario008->r_piel_faneras === 'CP' ? 'checked' : '' }} data-select-all="1" onclick="checkboxrpiel_faneras(this)" /></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_piel_faneras1" name="r_piel_faneras" value="SP" {{ $formulario008->r_piel_faneras === 'SP' ? 'checked' : '' }} data-select-all="2" onclick="checkboxrpiel_faneras(this)"/></td> 
            
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

            <td><label for="boca_cp">6-R BOCA</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_boca" name="r_boca" value="CP" {{ $formulario008->r_boca === 'CP' ? 'checked' : '' }} data-select-all="3" onclick="checkboxr_boca(this)"/></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_boca1" name="r_boca" value="SP" {{ $formulario008->r_boca === 'SP' ? 'checked' : '' }} data-select-all="4" onclick="checkboxr_boca(this)"/></td>

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

            <td><label for="r_abdomen">11-R ABDOMEN </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_abdomen" name="r_abdomen" value="CP" {{ $formulario008->r_abdomen === 'CP' ? 'checked' : '' }} data-select-all="5" onclick="checkboxr_abdomen(this)"/></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_abdomen1" name="r_abdomen" value="SP" {{ $formulario008->r_abdomen === 'SP' ? 'checked' : '' }} data-select-all="6" onclick="checkboxr_abdomen(this)"/></td>
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

            <td><label for="s_organos_sentidos">1-S ÓRGANOS DE LOS SENTIDOS </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_organos_sentidos" name="s_organos_sentidos" value="CP" {{ $formulario008->s_organos_sentidos === 'CP' ? 'checked' : '' }} data-select-all="7" onclick="checkboxsorganos_sentidos(this)"/></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_organos_sentidos1" name="s_organos_sentidos" value="SP" {{ $formulario008->s_organos_sentidos === 'SP' ? 'checked' : '' }} data-select-all="8" onclick="checkboxsorganos_sentidos(this)"/></td>
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

            <td><label for="s_urinario">6-S URINARIO</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_urinario" name="s_urinario" value="CP" {{ $formulario008->s_urinario === 'CP' ? 'checked' : '' }} data-select-all="9" onclick="checkboxs_urinario(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="s_urinario1" name="s_urinario" value="SP" {{ $formulario008->s_urinario === 'SP' ? 'checked' : '' }} data-select-all="10" onclick="checkboxs_urinario(this)"/></td>
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
            <td><label for="cabeza">2-R CABEZA</label></td>
            <td><input style="margin-left: 10px;"  type="checkbox" id="r_cabeza" name="r_cabeza" value="CP" {{ $formulario008->r_cabeza === 'CP' ? 'checked' : '' }} data-select-all="1" onclick="checkboxr_cabeza(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_cabeza1" name="r_cabeza" value="SP" {{ $formulario008->r_cabeza === 'SP' ? 'checked' : '' }} data-select-all="2" onclick="checkboxr_cabeza(this)"/></td>
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

            <td><label for="r_oro_faringe">7-R ORO FARINGE </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_oro_faringe" name="r_oro_faringe" value="CP" {{ $formulario008->r_oro_faringe === 'CP' ? 'checked' : '' }} data-select-all="3" onclick="checkboxroro_faringe(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_oro_faringe1" name="r_oro_faringe" value="SP" {{ $formulario008->r_oro_faringe === 'SP' ? 'checked' : '' }} data-select-all="4" onclick="checkboxroro_faringe(this)"/></td>
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

            <td><label for="r_columna_vertebral">12-R COLUMNA VERTEBRAL</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_columna_vertebral" name="r_columna_vertebral" value="CP" {{ $formulario008->r_columna_vertebral === 'CP' ? 'checked' : '' }} data-select-all="5" onclick="checkboxrcolumna_vertebral(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_columna_vertebral" name="r_columna_vertebral" value="SP" {{ $formulario008->r_columna_vertebral === 'SP' ? 'checked' : '' }} data-select-all="6" onclick="checkboxrcolumna_vertebral(this)"/></td>
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

            <td><label for="s_respiratorio">2-S RESPIRATORIO</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_respiratorio" name="s_respiratorio" value="CP" {{ $formulario008->s_respiratorio === 'CP' ? 'checked' : '' }} data-select-all="7"  onclick="checkboxs_respiratorio(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="s_respiratorio1" name="s_respiratorio" value="SP" {{ $formulario008->s_respiratorio === 'SP' ? 'checked' : '' }} data-select-all="8"  onclick="checkboxs_respiratorio(this)"/></td>
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

            <td><label for="s_musculo_esqueletico">7-S MÚSCULO ESQUELÉTICO </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_musculo_esqueletico" name="s_musculo_esqueletico" value="CP" {{ $formulario008->s_musculo_esqueletico === 'CP' ? 'checked' : '' }} data-select-all="9"  onclick="checkboxsmusculo_esqueleto(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="s_musculo_esqueletico1" name="s_musculo_esqueletico" value="SP" {{ $formulario008->s_musculo_esqueletico === 'SP' ? 'checked' : '' }} data-select-all="10"  onclick="checkboxsmusculo_esqueleto(this)"/></td>
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
            <td><label for="r_ojos">3-R OJOS </label></td>
            <td><input style="margin-left: 10px;"  type="checkbox" id="r_ojos" name="r_ojos" value="CP" {{ $formulario008->r_ojos === 'CP' ? 'checked' : '' }} data-select-all="1" onclick="checkboxr_ojos(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_ojos1" name="r_ojos" value="SP" {{ $formulario008->r_ojos === 'SP' ? 'checked' : '' }} data-select-all="2" onclick="checkboxr_ojos(this)"/></td>
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

            <td><label for="r_cuello">8-R CUELLO </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_cuello" name="r_cuello" value="CP" {{ $formulario008->r_cuello === 'CP' ? 'checked' : '' }} data-select-all="3" onclick="checkboxr_cuello(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_cuello1" name="r_cuello" value="SP" {{ $formulario008->r_cuello === 'SP' ? 'checked' : '' }} data-select-all="4" onclick="checkboxr_cuello(this)"/></td>
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

            <td> <label for="r_ingle_perine">13-R INGLE-PERINÉ </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_ingle_perine" name="r_ingle_perine" value="CP" {{ $formulario008->r_ingle_perine === 'CP' ? 'checked' : '' }} data-select-all="5" onclick="checkboxringle_perine(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_ingle_perine1" name="r_ingle_perine" value="SP" {{ $formulario008->r_ingle_perine === 'SP' ? 'checked' : '' }} data-select-all="6" onclick="checkboxringle_perine(this)"/></td>
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

            <td><label for="s_cardiovascular">3-S CARDIOVASCULAR</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_cardiovascular" name="s_cardiovascular" value="CP" {{ $formulario008->s_cardiovascular === 'CP' ? 'checked' : '' }} data-select-all="7"  onclick="checkboxr_cardiovascular(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="s_cardiovascular1" name="s_cardiovascular" value="SP" {{ $formulario008->s_cardiovascular === 'SP' ? 'checked' : '' }} data-select-all="8"  onclick="checkboxr_cardiovascular(this)"/></td>
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

            <td><label for="s_endocrino">8-S ENDÓCRINO</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_endocrino" name="s_endocrino" value="CP" {{ $formulario008->s_endocrino === 'CP' ? 'checked' : '' }} data-select-all="9"  onclick="checkboxs_endocrino(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="s_endocrino1" name="s_endocrino" value="SP" {{ $formulario008->s_endocrino === 'SP' ? 'checked' : '' }} data-select-all="10"  onclick="checkboxs_endocrino(this)"/></td>
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
            <td><label for="r_oidos">4-R OÍDOS </label></td>
            <td><input style="margin-left: 10px;"  type="checkbox" id="r_oidos" name="r_oidos" value="CP" {{ $formulario008->r_oidos === 'CP' ? 'checked' : '' }} data-select-all="1" onclick="checkboxr_oidos(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_oidos1" name="r_oidos" value="SP" {{ $formulario008->r_oidos === 'SP' ? 'checked' : '' }} data-select-all="2" onclick="checkboxr_oidos(this)"/></td>
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

            <td> <label for="r_axilas_mamas">9-R AXILAS-MAMAS </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_axilas_mamas" name="r_axilas_mamas" value="CP" {{ $formulario008->r_axilas_mamas === 'CP' ? 'checked' : '' }} data-select-all="3" onclick="checkboxraxilas_mamas(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_axilas_mamas1" name="r_axilas_mamas" value="SP" {{ $formulario008->r_axilas_mamas === 'SP' ? 'checked' : '' }} data-select-all="4" onclick="checkboxraxilas_mamas(this)"/></td>
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

            <td><label for="r_miembros_superiores">14-R MIEMBROS SUPERIORES </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_miembros_superiores" name="r_miembros_superiores" value="CP" {{ $formulario008->r_miembros_superiores === 'CP' ? 'checked' : '' }} data-select-all="5" onclick="checkboxrmiembros_superiores(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_miembros_superiores1" name="r_miembros_superiores" value="SP" {{ $formulario008->r_miembros_superiores === 'SP' ? 'checked' : '' }} data-select-all="6" onclick="checkboxrmiembros_superiores(this)"/></td>
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

            <td><label for="s_digestivo">4-S DIGESTIVO </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_digestivo" name="s_digestivo" value="CP" {{ $formulario008->s_digestivo === 'CP' ? 'checked' : '' }} data-select-all="7"  onclick="checkboxs_digestivo(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="s_digestivo1" name="s_digestivo" value="SP" {{ $formulario008->s_digestivo === 'SP' ? 'checked' : '' }} data-select-all="8"  onclick="checkboxs_digestivo(this)"/></td>
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

            <td><label for="s_hemolinfatico">9-S HEMOLINFÁTICO</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_hemolinfatico" name="s_hemolinfatico" value="CP" {{ $formulario008->s_hemolinfatico === 'CP' ? 'checked' : '' }} data-select-all="9"  onclick="checkboxr_hemolinfatico(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="s_hemolinfatico1" name="s_hemolinfatico" value="SP" {{ $formulario008->s_hemolinfatico === 'SP' ? 'checked' : '' }} data-select-all="10"  onclick="checkboxr_hemolinfatico(this)"/></td>
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
            <td><label for="r_nariz">5-R NARÍZ </label></td>
            <td><input style="margin-left: 10px;"  type="checkbox" id="r_nariz" name="r_nariz" value="CP" {{ $formulario008->r_nariz === 'CP' ? 'checked' : '' }} data-select-all="1" onclick="checkboxr_nariz(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_nariz1" name="r_nariz" value="SP" {{ $formulario008->r_nariz === 'SP' ? 'checked' : '' }} data-select-all="2" onclick="checkboxr_nariz(this)"/></td>
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

            <td><label for="r_torax">10-R TÓRAX </label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_torax" name="r_torax" value="CP" {{ $formulario008->r_torax === 'CP' ? 'checked' : '' }} data-select-all="3" onclick="checkboxr_torax(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_torax1" name="r_torax" value="SP" {{ $formulario008->r_torax === 'SP' ? 'checked' : '' }} data-select-all="4" onclick="checkboxr_torax(this)"/></td>
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

            <td> <label for="r_miembros_inferiores">15-R MIEMBROS INFERIORES</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="r_miembros_inferiores" name="r_miembros_inferiores" value="CP" {{ $formulario008->r_miembros_inferiores === 'CP' ? 'checked' : '' }} data-select-all="5" onclick="checkboxrmiembros_inferiores(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="r_miembros_inferiores1" name="r_miembros_inferiores" value="SP" {{ $formulario008->r_miembros_inferiores === 'SP' ? 'checked' : '' }} data-select-all="6" onclick="checkboxrmiembros_inferiores(this)"/></td>
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

            <td><label for="s_genital">5-S GENIRAL</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_genital" name="s_genital" value="CP" {{ $formulario008->s_genital === 'CP' ? 'checked' : '' }} data-select-all="7"  onclick="checkboxs_genital(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="s_genital1" name="s_genital" value="SP" {{ $formulario008->s_genital === 'SP' ? 'checked' : '' }} data-select-all="8"  onclick="checkboxs_genital(this)"/></td>
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

            <td><label for="s_neurologico">10-S NEUROLÓGICO</label></td>
            <td><input style="margin-left: 10px;" type="checkbox" id="s_neurologico" name="s_neurologico" value="CP" {{ $formulario008->s_neurologico === 'CP' ? 'checked' : '' }} data-select-all="9"  onclick="checkboxs_neurologico(this)"/></td>
            <td> <input style="margin-left: 10px;" type="checkbox" id="s_neurologico1" name="s_neurologico" value="SP" {{ $formulario008->s_neurologico === 'SP' ? 'checked' : '' }} data-select-all="10"  onclick="checkboxs_neurologico(this)"/></td>
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
            <td colspan="5"><textarea class="form-control" name="obser_examen_fisico" id="obser_examen_fisico" cols="175" rows="5">{{ $formulario008->obser_examen_fisico }}</textarea>
          </tr>
        </tbody>
      </table>   
</div>