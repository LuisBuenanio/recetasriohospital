<!DOCTYPE html>
  <html lang="es">

      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        
        <link rel="stylesheet" href="{{ asset('css/ficha08.css') }}" />

        
        <img src="{{ asset('img/logos/logo.png') }}" alt="Tu Imagen">

        <!-- <style>
              body {
                  background-color: #f8f9fa; /* Añadido para dar un color de fondo claro */
              }

              .header {
                  background-color: #795548; /* Color café para el encabezado */
                  padding: 10px;
              }

              h3 {
                  background-color: #795548; /* Color café para los títulos de sección */
                  padding: 5px;
                  color: #fff; /* Color de texto blanco */
              }

              table {
                  border-collapse: collapse;
                  width: 100%;
                  margin-top: 10px;
              }

              th, td {
                  border: 1px solid #795548; /* Color café para los bordes de la tabla */
                  padding: 8px;
                  text-align: left;
              }

              th {
                  background-color: #a1887f; /* Color más claro para el fondo de los encabezados de la tabla */
                  color: #fff; /* Color de texto blanco */
              }

              /* Cambios en los estilos para los recuadros específicos */
            <style>
              #content-container {
                  text-align: right;
                  margin-right: 20px;
              }

              #numberInput {
                  padding: 8px;
                  border: 1px solid #ced4da;
                  border-radius: 4px;
                  font-size: 14px;
              }

              #result {
                  margin-top: 8px;
                  font-size: 25px;
              }

              #numberContainer {
                  color: brown; /* Color café para la letra N° */
                  display: inline-block;
              }

              #numbers {
                  color: red; /* Color rojo para los números */
              }

              #editButton {
                  display: none;
                  margin-top: 8px;
                  background-color: #007bff;
                  color: #fff;
                  padding: 4px 8px;
                  border: none;
                  border-radius: 4px;
                  cursor: pointer;
              }
          </style> -->
      <style>
            body {
              color: #663300; /* Color café oscuro para todas las letras */
            }

            .container, fieldset {
              border-color: #663300; /* Color café oscuro para los bordes */
            }

            input[type="number"] {
              border: 1px solid #663300;
            }

            button[type="submit"] {
              background-color: #663300;
              color: #FFFFFF;
              border: none;
              cursor: pointer;
            }

            #salida {
              color: red;
            }

            table {
              border-collapse: collapse;
              width: 100%;
            }

            th, td {
              border: 1px solid black;
              padding: 3px;
            }

            .header {
              text-align: center;
            }

            .header img {
              width: 200px; /* Ajusta el tamaño de la imagen según tus necesidades */
              height: auto;
            }

          th,
          td {
            border: 1px solid #6b3e0e;
            /* Color café para los bordes de la tabla */
            padding: 8px;
            text-align: left;
          }

          h3 {
            background-color: #6b3e0e;
            /* Color más claro para el fondo de los encabezados de la tabla */
            color: #fff;
            /* Color de texto blanco */
          }

          th {
            background-color: #b08025;
            /* Color más claro para el fondo de los encabezados de la tabla */
            color: #fff;
            /* Color de texto blanco */
          }

          #content-container {
            text-align: right;
            margin-right: 20px;
          }

          #numberInput {
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
          }

          #result {
            margin-top: 8px;
            font-size: 25px;
          }

          #numberContainer {
            color: brown;
            /* Color café para la letra N° */
            display: inline-block;
          }

          #numbers {
            color: red;
            /* Color rojo para los números */
          }

          #editButton {
            display: none;
            margin-top: 8px;
            background-color: #007bff;
            color: #fff;
            padding: 4px 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
          }
      </style>

      </head>
      <div id="content-container">
        <header>

            <div id="result">
            <span id="numberContainer">N° </span> {{$nextId}} <span id="numbers"></span>
          </div>  
          {!! Form::hidden('users_id', auth()->user()->id) !!}
        </header>
      </div>
      <!-- <body>
          <div id="content-container">
              <header>
                  <input type="text" id="numberInput" placeholder="Ingrese N° Ficha08 " onkeydown="handleKeyPress(event)">
                  <div id="result">
                      <span id="numberContainer">N° </span><span id="numbers"></span>
                  </div>
                  <button id="editButton" onclick="editNumber()">Editar</button>
              </header>
          </div>
          <script>
              function handleKeyPress(event) {
                  if (event.key === 'Tab' || event.key === 'Enter') {
                      event.preventDefault();
                      formatAndDisplayNumber();

                      // Ocultar el campo después de dos segundos y mostrar el botón de editar
                      setTimeout(() => {
                          const inputElement = document.getElementById('numberInput');
                          const editButton = document.getElementById('editButton');

                          inputElement.style.display = 'none';
                          editButton.style.display = 'inline-block';

                          // Ocultar el botón de editar después de 3 segundos
                          setTimeout(() => {
                              editButton.style.display = 'none';
                          }, 3000);
                      }, 2000);
                  }
              }

              function formatAndDisplayNumber() {
                  const inputElement = document.getElementById('numberInput');
                  const numbersElement = document.getElementById('numbers');
                  const resultElement = document.getElementById('result');
                  const editButton = document.getElementById('editButton');

                  let inputValue = inputElement.value.trim();

                  if (!isNaN(inputValue)) {
                      inputValue = String(Number(inputValue)).padStart(9, '0');
                      numbersElement.textContent = inputValue;
                      resultElement.style.display = 'block';
                      editButton.style.display = 'block';
                  } else {
                      resultElement.textContent = 'Ingrese un número válido';
                  }
              }

              function editNumber() {
                  const inputElement = document.getElementById('numberInput');
                  const resultElement = document.getElementById('result');
                  const editButton = document.getElementById('editButton');

                  inputElement.style.display = 'inline-block'; // Mostrar el campo de entrada
                  editButton.style.display = 'none'; // Ocultar el botón de editar
                  inputElement.value = ''; // Limpiar el contenido del campo
                  inputElement.focus(); // Colocar el foco en el campo de entrada
                  resultElement.style.display = 'none'; // Ocultar el resultado
              }
          </script> -->
      </body>
      </div>

      <!-- Inicio de Codigo 0  -->

      <br>

      <!-- Sección : 1 Institucion Registro -->
      <section>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>INSTITUCIÓN DEL SISTEMA</th>
              <th>UNIDAD OPERATIVA</th>
              <th>CÓDIGO</th>
              <th>LOCALIZACIÓN</th>
              <th>NÚMERO HISTORIA CLÍNICA</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><input type="text" id="n_institucion" name="n_institucion" value="RIOHOSPITAL" disabled /></td>
              <td><input type="text" id="n_unidad_ope" name="n_unidad_ope" value="PRIVADO" disabled /></td>
              <td><input type="text" id="codigo" name="codigo" /></td>
              <td>
                <label for="provincia">PROVINCIA:</label>
                <input type="text" id="provincia" name="provincia" value="CHIMBORAZO" disabled /><br>

                <label for="canton">CANTÓN:</label>
                <input type="text" id="canton" name="canton" value="RIOBAMBA" disabled /><br>

                <label for="parroquia">PARROQUIA:</label>
                <input type="text" id="parroquia" name="parroquia" value="LIZARZABURU" disabled />
              </td>
              <td><input type="text" id="historia_clinica" name="historia_clinica" /></td>
            </tr>
          </tbody>
        </table>
        <br>
      </section>


      <!-- <section>
              
                <table border="1" cellspacing="-5" cellpadding="3" width="100%">
                  <thead>
                    <tr>
                      <th>Institución del Sistema</th>
                      <th>Unidad Operativa</th>
                      <th>Código</th>
                      <th>Localización</th>
                      <th>Número Historia Clínica</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><input type="text" id="institucion" name="institucion" value="RIOHOSPITAL" disabled/></td>
                      <td><input type="text" id="unidad_operativa" name="unidad_operativa" value="PRIVADO" disabled/></td>
                      <td><input type="text" id="codigo" name="codigo" /></td>
                      <td>
                        <label for="provincia">Provincia:</label>
                        <select id="provincia">
                          <option value="Chimborazo">Chimborazo</option>
                        </select>
                
                        
                          <label for="canton">Cantón:</label>
                          <select id="canton">
                            <option value="Riobamba">Riobamba</option>
                            <option value="Penipe">Penipe</option>
                            <option value="Alausi">Alausi</option>
                            <option value="Colta">Colta</option>
                            <option value="Chunchi">Chunchi</option>
                            <option value="Guamote">Guamote</option>
                            <option value="Guano">Guano</option>
                            <option value="Pallatanga">Pallatanga</option>
              
                          </select>
                
                        <label for="parroquia">Parroquia:</label>
                        <select id="parroquia">
                          <!-- Opciones dependerán del cantón seleccionado 
                        </select>
                      </td>
                      <td><input type="text" id="numero_historia_clinica" name="numero_historia_clinica" /></td>
                    </tr>
                  </tbody>
                </table> 
                <br>
                
                  <script>
                    const provincias = {
                      'Chimborazo': {
                        'Riobamba': ['San Felipe de Riobamba', 'Cacha', 'Yaruquíes', 'Punín'],
                        'Penipe': ['Penipe (cabecera cantonal)', 'El Altar', 'Matus', 'Puela'],
                        'Alausi': ['Alausi(cabecera cantonal)','Achupallas','Guasuntos','Huigra','Multitud','Pumallacta','Tixan'],
                        'Colta': ['Villa la Union (cabecera cantonal)','Cajabamba','Cañi','Columbe','Juzhucullu','Licán','Pallanchacra','Palmira','San Juan','Sicalpa'],
                        'Chunchi': ['Chunchi (cabecera cantonal)','Capelo','Gualaquiza','Llagos','Mercedes Molina','Pan de Azúcar','San Juan'],
                        'Guamote': ['Guamote (cabecera cantonal)', 'Cebadas', 'Palmira', 'Lliquino','Simiatug'],
                        'Guano': ['Guano(cabecera cantonal)', 'El Rosario', 'La Matriz', 'La Providencia'],
                        'Pallatanga': ['Pallatanga(cabecera cantonal)', 'Riobamba de Pallatanga', 'Matus', 'Pumallacta']

                        
                        
                        
                        
                        <!-- Agrega mas Parroquias

                      }
                    };
                
                    const canton = document.getElementById('canton');
                    const parroquia = document.getElementById('parroquia');
                
                    document.getElementById('provincia').addEventListener('change', function(event) {
                      const provincia = event.target.value;
                      const cantones = Object.keys(provincias[provincia]);
                      const opciones = cantones.map(canton => `<option value="${canton}">${canton}</option>`).join('');
                      canton.innerHTML = opciones;
                      parroquia.innerHTML = '';
                    });
                
                    canton.addEventListener('change', function(event) {
                      const provincia = document.getElementById('provincia').value;
                      const cantonSeleccionado = event.target.value;
                      const parroquias = provincias[provincia][cantonSeleccionado];
                      const opciones = parroquias.map(parroquia => `<option value="${parroquia}">${parroquia}</option>`).join('');
                      parroquia.innerHTML = opciones;
                    });
                  </script>
            
          </section> -->

      <!-- Fin de Codigo 0  -->



      <!-- Inicio codigo 1:Registro de admision -->


      <section id="registro-admision">
        <h3>1. REGISTRO DE ADMISIÓN</h3>

        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>APELLIDO PATERNO</th>
              <th>APELLIDO MATERNO</th>
              <th>NOMBRES</th>
              <th>NACIONALIDAD</th>
              <th>N CEDULA DE CIUDADANIA</th>

            </tr>
          </thead>

          <tbody>
            <tr>
              <td><input type="text" id="apellido-paterno" name="apellido_paterno"readonly /></td>
              
              <td><input type="text" id="apellido-materno" name="apellido_materno" readonly /></td>

              
                          
              <td>   <input type="text" class="form-control" id="nombre" name="nombre" readonly /></td>          

              <td><input type="text" id="nacionalidad" name="nacionalidad" readonly></td>                 
              <td> 
                  <select id ="cedula"  name = "cedula" style="width: 100%;">
                      <option value=""></option>
                  </select>

             
                </td>
              
                         
                  

            </tr>
          </tbody>

          <!-- ... (otros encabezados y filas) ... -->
        </table>

        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>DIRECCION DE RESIDENCIA HABITUAL</th>
              <th>CANTÓN</th>
              <th>PROVINCIA</th>
              <th>N° TELÉFONO</th>

            </tr>
          </thead>


          <tbody>
            <tr>

              <td> <input type="text" id="direccion_residencia" name="direccion_residencia" /></td>
              <td> <input type="text" id="canton_direccion_residencia" name="canton_direccion_residencia" /></td>
              <td> <input type="text" id="provincia" name="provincia" /></td>
              <td> <input type="text" id="telefono" name="telefono" /></td>

            </tr>
          </tbody>

        </table>

        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>FECHA DE ATENCION</th>
              <th>HORA</th>
              <th>EDAD</th>
              <th>SEXO</th>
              <th>ESTADO CIVIL</th>
              <th>INSTRUCCION</th>
              <th>OCUPACION</th>
              <th>SEGURIDAD DE SALUD</th>

            </tr>
          </thead>


          <tbody>
            <tr>

              <td><input type="date" id="fecha_atencion" name="fecha_atencion" /></td>
              <td> <input type="time" id="hora" name="hora" /></td>
              <td> <input type="number" id="edad" name="edad" min="1" max="99" oninput="validarEdad(this)" />
                <script>
                  function validarEdad(input) {
                    // Obtener el valor actual del input
                    var valor = input.value;

                    // Limitar la longitud del valor a 2 dígitos
                    if (valor.length > 2) {
                      input.value = valor.slice(0, 2);
                    }

                    // Eliminar caracteres no numéricos
                    input.value = input.value.replace(/\D/g, '');
                  }
                </script>
              </td>

              <td>

                <select id="sexo" name="sexo">
                  <option value="masculino">MASCULINO</option>
                  <option value="femenino">FEMENINO</option>
                  <option value="otro" selected>OTRO</option>
                </select>
              </td>
              <td><select id="estado_civil" name="estado_civil">
                  <option value="soltero">SOLTER@</option>
                  <option value="casado">CASAD@</option>
                  <option value="divorciado">DIVORCIAD@</option>
                  <option value="viudo">VIUD@</option>
                  <option value="viudo">UNION LIBRE</option>
                </select></td>

              <td> <select id="nivel_instruccion" name="nivel_instruccion">
                  <option value="sin_basica">SIN INTRUCCIÓN BÁSICA</option>
                  <option value="sin_basica">BÁSICA</option>
                  <option value="bachiller">BACHILLER</option>
                  <option value="superior">SUPERIOR</option>
                  <option value="especialidad">ESPECIALIDAD</option>
                </select></td>

              <td><input type="text" id="ocupacion" name="ocupacion" /></td>
              <!-- <td> <select id="seguro_salud" name="seguro_salud">
                      <option value="iess">IESS</option>
                      <option value="otro">Otro</option>
                      <input type="text" id="OBSERVACIONS_SA" name="OBSERVACIONS_SA" />
                    </select> -->

              <td>
                <select id="seguro_salud" name="seguro_salud" onchange="habilitarInput()">
                  <option value="">...</option anable>
                  <option value="iess">IESS</option>
                  <option value="otro">Otro</option>
                </select>
                <input type="text" id="OBSERVACIONS_SA" name="OBSERVACIONS_SA" disabled />
              </td>

              <script>
                function habilitarInput() {
                  var seguroSaludSelect = document.getElementById("seguro_salud");
                  var observacionesInput = document.getElementById("OBSERVACIONS_SA");

                  if (seguroSaludSelect.value === "iess") {
                    // Bloquear el cuadro de texto si selecciona "IESS"
                    observacionesInput.disabled = true;
                    observacionesInput.value = "";// Limpiar el valor si estaba escrito anteriormente
                    observacionesInput.value = "IESS";
                  } else {
                    // Habilitar el cuadro de texto para cualquier otra opción
                    observacionesInput.disabled = false;
                    observacionesInput.value = "";
                  }
                } 
              </script>
              </td>

            </tr>
          </tbody>
        </table>

        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>NOMBRE DE LA PERSONA PARA NOTIFICACION </th>
              <th>PARENTESCO AFINIDAD </th>
              <th>DIRECCION</th>
              <th>N TELEFONO</th>

            </tr>
          </thead>


          <tbody>
            <tr>

              <td> <input type="text" id="nombre_de_la_persona_notificar" name="nombre_de_la_persona_notificar" /></td>
              <td><input type="text" id="parentesco_afinidad" name="parentesco_afinidad" /> </td>
              <td> <input type="text" id="direccion_persona_notificacion" name="direccion_persona_notificacion" /></td>
              <td> <input type="text" id="telefono_persona_notificacion" name="telefono_persona_notificacion" /> </td>





            </tr>
          </tbody>

        </table>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>NOMBRE DEL ACOMPAÑANTE </th>
              <th>N° DE IDENTIDAD </th>
              <th>DIRECCION</th>
              <th>N° TELEFONO</th>

            </tr>
          </thead>


          <tbody>
            <tr>

              <td> <input type="text" id="nombre_acompanante" name="nombre_acompanante" /></td>
              <td><input type="text" id="identidad" name="identidad" /> </td>
              <td> <input type="text" id="direccion_acompanante" name="direccion_acompanante" /></td>
              <td> <input type="text" id="telefono_acompanante" name="telefono_acompanante" /> </td>





            </tr>
          </tbody>

        </table>


        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>FORMA DE LLEGADA </th>
              <th>FUENTE DE INFORMACION</th>
              <th>INSITUTCION O PERSONA QUE ENTREGA AL PACIENTE </th>
              <th>N° TELÉFONO</th>

            </tr>
          </thead>


          <tbody>
            <tr>

              <td> <select id="forma_llegada" name="forma_llegada">
                  <option value="ambulatorio">Ambulatorio</option>
                  <option value="silla_ruedas">Silla de Ruedas</option>
                  <option value="camilla">Camilla</option>
                </select></td>
              <td><input type="text" id="fuente_informacion" name="fuente_informacion" /> </td>
              <td> <input type="text" id="institucion_entrega" name="institucion_entrega" /></td>
              <td> <input type="text" id="telefono_institucion" name="telefono_institucion" /> </td>

            </tr>
          </tbody>

        </table>


        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <!-- ... (encabezados y filas) ... -->
        </table>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <!-- ... (encabezados y filas) ... -->
        </table>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <!-- ... (encabezados y filas) ... -->
        </table>
      </section>


      <!-- Fin de codigo 1:Registro de admision -->


      <!-- Inicio de codigo 2:INICIO DE ATENCION -->
      <section>
        <h3>2. INICIO DE ATENCIÓN</h3>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>Hora de Llegada</th>
              <th>Vía Aérea Libre</th>
              <th>Vía Aérea Obstruida</th>
              <th>Grupo de RH</th>
              <th>Condiciones de Llegada</th>
              <th>Motivo de Llegada</th>
            </tr>
          </thead>
          <style>
            input[type="checkbox"] {
              transform: scale(1.4);
              /* Ajusta el valor para cambiar el tamaño según sea necesario */
            }
          </style>
          <tbody>
            <tr>
              <td><input type="time" id="hora_llegada" name="hora_llegada" /></td>
              <td><input type="checkbox" id="via_aerea_libre" name="via_aerea_libre" /></td>
              <td><input type="checkbox" id="via_aerea_obstruida" name="via_aerea_obstruida" /></td>
              <td><input type="text" id="grupo_rh" name="grupo_rh" /></td>
              <td>
                <select id="condiciones_llegada" name="condiciones_llegada">
                  <option value="estable">Estable</option>
                  <option value="inestable">Inestable</option>
                  <option value="otro">Otro</option>
                </select>
              </td>
              <td><input type="text" id="mllegada" name="mllegada" /></td>
            </tr>
          </tbody>
        </table>

      </section>

      <!-- Fin de codigo 2:INICIO DE ATENCION -->

      <!-- Inicio de codigo 3:accidente, violencia, intoxicacion-->

      <section>

        <h3>3. Accidente, violencia, intoxicación
          <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />
          <label for="aplica_seccion">No Aplica</label>
        </h3>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>Lugar del Evento</th>
              <th>Dirección del Evento</th>
              <th>Fecha del Evento</th>
              <th>Hora del Evento</th>
              <th>Vehículo o Arma</th>

            </tr>
          </thead>

          <tbody>
            <tr>
              <td><input type="text" id="direccion_evento" name="direccion_evento" /></td>
              <td><input type="text" id="direccion_evento" name="direccion_evento" /></td>
              <td><input type="date" id="fecha_evento" name="fecha_evento" /></td>
              <td><input type="time" id="hora_evento" name="hora_evento" /></td>
              <td><input type="text" id="vehiculo_arma" name="vehiculo_arma" /></td>



          </tbody>
        </table>



        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>Tipo de Evento</th>
              <th>Autoridad Competente</th>
              <th>Hora de Denuncia</th>
              <th>Custodia Policial</th>
              <th>Observaciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <label><input type="checkbox" id="accidente" name="tipo_evento" value="accidente" />Accidente</label>
                <label><input type="checkbox" id="envenenamiento" name="tipo_evento"
                    value="envenenamiento" />Envenenamiento</label>
                <label><input type="checkbox" id="violencia" name="tipo_evento" value="violencia" />Violencia</label>
                <label><input type="checkbox" id="otro_evento" name="tipo_evento" value="otro" />Otro</label>
              </td>
              <td><input type="text" id="autoridad" name="autoridad" /></td>
              <td><input type="time" id="hora_denuncia" name="hora_denuncia" /></td>
              <td><input type="checkbox" id="custodia_policial" name="custodia_policial" /></td>
              <td><textarea id="observaciones" name="observaciones" rows="5" cols="50"></textarea></td>
            </tr>
          </tbody>
        </table>

        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>
            <tr>
              <th>INTOXICACION</th>
              <th>VIOLENCIA</th>
              <th>OBSERVACION</th>



            </tr>
          </thead>

          <tbody>
            <tr>
              <td> <label for="aliento_etilico">Aliento Etilico</label>
                <input type="checkbox" id="aliento_etilico" name="aliento_etilico" />

                <label for="valor_alcochek">Valor Alcochek</label>
                <input type="checkbox" id="valor_alcochek" name="valor_alcochek" />

                <label for="hora_examen_alcoholemia">Hora de Examen de Alcoholemia</label>
                <input type="checkbox" id="hora_examen_alcoholemia" name="hora_examen_alcoholemia" />

                <label for="otras_sustancias">Otras Sustancias</label>
                <input type="checkbox" id="otras_sustancias" name="otras_sustancias" />


                <label for="observaciones">Observaciones</label>
                <textarea id="observaciones" name="observaciones"></textarea>
              </td>

              <td><label for="abuso_fisico">Sospecha</label>
                <input type="checkbox" id="abuso_fisico" name="abuso_fisico" />
                <label for="abuso_fisico">Abuso Fisico</label>
                <input type="checkbox" id="abuso_fisico" name="abuso_fisico" />

                <label for="abuso_psicologico">Abuso Psicológico</label>
                <input type="checkbox" id="abuso_psicologico" name="abuso_psicologico" />

                <label for="abuso_sexual">Abuso Sexual</label>
                <input type="checkbox" id="abuso_sexual" name="abuso_sexual" />
              </td>

              <td> <textarea id="observaciones" name="observaciones"></textarea></td>



            </tr>

          </tbody>
        </table>


        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <!-- ... (encabezados y filas) ... -->
        </table>
        <!-- Aquí deberías añadir otra tabla o el contenido necesario para los eventos de intoxicación, violencia, etc. -->

        <script>
          function mostrarOcultarSeccion() {
            var checkbox = document.getElementById('aplica_seccion');
            var seccion = document.querySelector('.seccion-oculta');

            if (checkbox.checked) {
              seccion.style.display = 'block';
            } else {
              seccion.style.display = 'none';
            }
          }
        </script>

      </section>
      <!-- Fin de codigo 3:accidente, violencia, intoxicacion -->


      <!-- Inicio de codigo 4:Antencendentes personales y familiares relevantes-->
      <section>


        <table border="1" cellspacing="-5" cellpadding="3">
          <thead>
            <tr>
              <th>QUEMADURAS</th>
              <th>PICADURA</th>
              <th>MORDEDURA</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>
                <div class="cuadro-izquierdo"></div>
                <label for="grado_1">Grado 1</label>
                <input type="checkbox" id="grado_1" name="grado_quemadura" value="grado_1" />
                <label for="grado_2">Grado 2</label>
                <input type="checkbox" id="grado_2" name="grado_quemadura" value="grado_2" />
                <label for="grado_3">Grado 3</label>
                <input type="checkbox" id="grado_3" name="grado_quemadura" value="grado_3" />
                <label for="porcentaje_superficie">Porcentaje de Superficie</label>
                <textarea id="observaciones" name="observaciones"></textarea>
                <div class="cuadro-derecho"></div>
              </td>

              <td>
                <div class="cuadro-izquierdo"></div>
                <textarea id="picadura" name="picadura"></textarea>
                <div class="cuadro-derecho"></div>
              </td>

              <td>
                <div class="cuadro-izquierdo"></div>
                <textarea id="mordedura" name="mordedura"></textarea>
                <div class="cuadro-derecho"></div>
              </td>
            </tr>
          </tbody>
        </table>

        <h3>4. ANTECEDENTES PERSONALES Y FAMILIARES RELEVANTES

          <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />
          <label for="aplica_seccion">No Aplica</label>
        </h3>
        <fieldset>

          <label for="alergicos">1.Alergicos</label>
          <input type="checkbox" id="alergicos" name="antecedentes_medicos" value="alergicos" />

          <label for="clinicos">2.Clínicos</label>
          <input type="checkbox" id="clinicos" name="antecedentes_medicos" value="clinicos" />

          <label for="ginecologicos">3.Ginecológicos</label>
          <input type="checkbox" id="ginecologicos" name="antecedentes_medicos" value="ginecologicos" />

          <label for="ginecologicos">4.Traumatologicos</label>
          <input type="checkbox" id="Traumatologicos" name="Traumatologicos" value="Traumatologicos" />

          <label for="pediatricos">5.Pediátricos</label>
          <input type="checkbox" id="pediatricos" name="antecedentes_medicos" value="pediatricos" />

          <label for="quirurgicos">6.Quirúrgicos</label>
          <input type="checkbox" id="quirurgicos" name="antecedentes_medicos" value="quirurgicos" />

          <label for="farmacologicos">7.Farmacológicos</label>
          <input type="checkbox" id="farmacologicos" name="antecedentes_medicos" value="farmacologicos" />

          <label for="otros">8.Otros</label>
          <input type="checkbox" id="otros" name="antecedentes_medicos" value="otros" />
          <br>

          <label for="observaciones"></label>
          <textarea name="observaciones" id="observaciones" cols="175" rows="5"></textarea>

        </fieldset>
      </section>
      <!-- Fin de codigo 5:ENFERMEDAD ACTUAL Y REVISION DE SISTEMA -->




      <!-- Inicio de codigo 5:ENFERMEDAD ACTUAL Y REVISION DE SISTEMAS-->
      <section>
        <h3>5. ENFERMEDAD ACTUAL Y REVISION DE SISTEMA
          <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />
          <label for="aplica_seccion">No Aplica</label>
        </h3>
        <fieldset>


          <label for="observaciones"></label>
          <textarea name="observaciones" id="observaciones" cols="175" rows="5"></textarea>

        </fieldset>
      </section>
      <script>
        function mostrarOcultarSeccion() {
          var checkbox = document.getElementById('aplica_seccion');
          var seccion = document.querySelector('.seccion-oculta');

          if (checkbox.checked) {
            seccion.style.display = 'block';
          } else {
            seccion.style.display = 'none';
          }
        }
      </script>
      <script>
        function mostrarOcultarSeccion() {
          var checkbox = document.getElementById('aplica_seccion');
          var seccion = document.querySelector('.seccion-oculta');

          if (checkbox.checked) {
            seccion.style.display = 'block';
          } else {
            seccion.style.display = 'none';
          }
        }
      </script>
      <!-- Fin de codigo 5:ENFERMEDAD ACTUAL Y REVISION DE SISTEMA -->

      <br><br>
      <!-- Inicio de codigo 6:CARACTERISTICAS DEL DOLOR-->
      <h3>6. CARACTERISTICAS DEL DOLOR
        <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />
        <label for="aplica_seccion">NO APLICA</label>
      </h3>
      <section>
        <fieldset>
          <table>

            <tbody>
              <tr>
              <tr>
                <td colspan="3"><label for="region_anatomica">REGIÓN ANATÓMICA:</label></td>
                <td colspan="3"><label for="punto_doloroso">PUNTO DOLOROSO:</label></td>
                <td colspan="3"><label for="evolucion">EVOLUCIÓN:</label></td>
                <td colspan="3"><label for="Tipo">TIPO:</label></td>
                <td colspan="3"><label for="Modificaciones">MODIFICACIONES:</label></td>
                <td colspan="3"><label for="alivia">ALIVIA CON:</label></td>
                <td colspan="3"><label for="intensidad">INTENSIDAD:</label></td>
            <tbody class="seccion-oculta">
              <!-- Primero -->
              <tr>
                <td colspan="3"><input type="text" id="region_anatomica" name="region_anatomica" /></td>
                <td colspan="3"><input type="text" id="punto_doloroso" name="punto_doloroso" /></td>

                <!-- Segundo -->
                <td colspan="3">
                  <select id="evolucion1" name="evolucion">
                    <option value="agudo">AGUDO</option>
                    <option value="subagudo">SUB AGUDO</option>
                    <option value="cronico">CRÓNICO</option>
                  </select>
                </td>
                <td colspan="3">
                  <select id="tipo1" name="tipo">
                    <option value="Episodico">EPISÓDICO</option>
                    <option value="Continuo">CONTINUO</option>
                    <option value="Colico">CÓLICO</option>
                  </select>
                </td>
                <td colspan="3">
                  <select id="modificaciones1" name="modificaciones">
                    <option value="posicion">POSICIÓN</option>
                    <option value="ingesta">INGESTA</option>
                    <option value="esfuerzo">ESFUERZO</option>
                    <option value="digito presion">DIGITO PRESIÓN</option>
                    <option value="se irradia">SE IRRADIA</option>
                  </select>
                </td>

                <!-- Tercero -->


                <td colspan="3">
                  <select id="alivia_con1" name="alivia_con">
                    <option value="antiespas_modico">ANTIESPASMODICO</option>
                    <option value="modico">OPIACEO</option>
                    <option value="aine">AINE</option>
                    <option value="no_aviliva">NO ALIVIA</option>
                  </select>


                  <!-- Cuarto -->


                <td colspan="3">
                  <select id="intensidad1" name="intensidad">
                    <option value="leve">LEVE</option>
                    <option value="moderado">MODERADO</option>
                    <option value="grave">GRAVE</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td colspan="3"><input type="text" id="region_anatomica2" name="region_anatomica2" /></td>
                <td colspan="3"><input type="text" id="punto_doloroso2" name="punto_doloroso2" /></td>

                <td colspan="3">
                  <select id="evolucion2" name="evolucion">
                    <option value="agudo">AGUDO</option>
                    <option value="subagudo">SUB AGUDO</option>
                    <option value="cronico">CRÓNICO</option>
                  </select>
                </td>
                <td colspan="3">
                  <select id="tipo2" name="tipo">
                    <option value="Episodico">EPISÓDICO</option>
                    <option value="Continuo">CONTINUO</option>
                    <option value="Colico">CÓLICO</option>
                  </select>
                </td>
                <td colspan="3">
                  <select id="modificaciones2" name="modificaciones">
                    <option value="posicion">POSICIÓN</option>
                    <option value="ingesta">INGESTA</option>
                    <option value="esfuerzo">ESFUERZO</option>
                    <option value="digito presion">DIGITO PRESIÓN</option>
                    <option value="se irradia">SE IRRADIA</option>
                  </select>
                </td>

                <!-- Tercero -->


                <td colspan="3">
                  <select id="alivia_con2" name="alivia_con">
                    <option value="antiespas_modico">ANTIESPASMODICO</option>
                    <option value="modico">OPIACEO</option>
                    <option value="aine">AINE</option>
                    <option value="no_aviliva">NO ALIVIA</option>
                  </select>


                  <!-- Cuarto -->


                <td colspan="3">
                  <select id="intensidad2" name="intensidad">
                    <option value="leve">LEVE</option>
                    <option value="moderado">MODERADO</option>
                    <option value="grave">GRAVE</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>

          <script>
            function mostrarOcultarSeccion() {
              var checkbox = document.getElementById('aplica_seccion');
              var seccion = document.querySelector('.seccion-oculta');

              if (checkbox.checked) {
                seccion.style.display = 'table-row-group';
              } else {
                seccion.style.display = 'none';
              }
            }
          </script>
      </section>
      <!-- Fin de codigo 6:CARACTERISTICAS DEL DOLOR -->
      <br>
      <!-- Inicio de codigo 7:SIGNOS VITALES, MEDICIONES Y VALORES-->

      <section>
        <h3>7. SIGNOS VITALES, MEDICIONES Y VALORES
          <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />
          <label for="aplica_seccion">NO APLICA</label>
        </h3>
        <thead>
        </thead>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <tbody>
            <tr>
              <td> <label for="presion_arterial">PRESIÓN ARTERIAL</label></td>
              <td><input type="text" id="presion_arterial" name="presion_arterial" /></td>
              <td> <label for="frecuencia_cardiaca">FRECUENCIA CARDIACA (min)</label></td>
              <td><input type="text" id="frecuencia_cardiaca" name="frecuencia_cardiaca" /></td>
              <td> <label for="frecuencia_respiratoria">FRECUENCIA RESPIRATORIA (min)</label></td>
              <td><input type="text" id="frecuencia_respiratoria" name="frecuencia_respiratoria" /></td>
            </tr>
          </tbody>
        </table>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <tbody>
            <tr>
              <td> <label for="temperatura_bucal">TEMPERATURA BUCAL (°C)</label></td>
              <td><input type="text" id="temperatura_bucal" name="temperatura_bucal" step="0.1" /></td>
              <td><label for="temperatura_axilar">TEMPERATURA AXILAR (°C)</label></td>
              <td> <input type="text" id="temperatura_axilar" name="temperatura_axilar" step="0.1" /></td>
              <td><label for="peso">PESO (kg)</label></td>
              <td> <input type="text" id="peso" name="peso" step="0.01" /></td>
              <td><label for="talla">TALLA (metros)</label></td>
              <td><input type="text" id="talla" name="talla" step="0.01" /></td>

            </tr>
          </tbody>
        </table>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <tbody>
            <tr>
              <td><label for="glasgow">GLASGOW</label></td>
              <td><input type="text" id="glasgow" name="glasgow" /></td>
              <td><label for="glasgow_ocular">GLASGOW OCULAR</label></td>
              <td><input type="text" id="glasgow_ocular" name="glasgow_ocular" /></td>
              <td><label for="glasgow_verbal">GLASGOW VERBAL</label></td>
              <td><input type="text" id="glasgow_verbal" name="glasgow_verbal" /></td>
              <td><label for="glasgow_motora">GLASGOW MOTORA</label></td>
              <td><input type="text" id="glasgow_motora" name="glasgow_motora" /></td>
            </tr>
          </tbody>
        </table>
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <tbody>
            <tr>
              <td><label for="glasgow_total">Glasgow Total</label></td>
              <td><input type="text" id="glasgow_total" name="glasgow_total" /></td>
              <td><label for="reaccion_pupila_derecha">Reacción Pupila Derecha</label></td>
              <td><input type="text" id="reaccion_pupila_derecha" name="reaccion_pupila_derecha" /></td>
              <td><label for="reaccion_pupila_izquierda">Reacción Pupila Izquierda</label></td>
              <td><input type="text" id="reaccion_pupila_izquierda" name="reaccion_pupila_izquierda" /></td>
              <td><label for="tejido_llenado_capilar">Tejido Llenado Capilar</label></td>
              <td><input type="text" id="tejido_llenado_capilar" name="tejido_llenado_capilar" /></td>
              <td><label for="perimetro_cefalico">Perímetro Cefálico (cm)</label></td>
              <td><input type="text" id="perimetro_cefalico" name="perimetro_cefalico" step="0.1" /></td>
            </tr>
          </tbody>
        </table>
      </section>
      <!-- Fin de codigo 7:SIGNOS VITALES, MEDICIONES Y VALORES -->

      <br><br>

      <!-- Inicio de codigo 8:EXAMEN FISICO -->
      <section>
        <h3>8.EXAMEN FISICO </h3>


        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
          <thead>

          </thead>
        </table>
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
            <!-- Región 1: Piel y Faneras -->
            <tr>
              <td><label for="piel_faneras">1-R Piel y Faneras</label></td>
              <td><input type="checkbox" id="piel_faneras_cp" name="piel_faneras_cp" /></td>
              <td><input type="checkbox" id="piel_faneras_sp" name="piel_faneras_sp" /></td>

              <td><label for="boca_cp">6-R Boca (CP/SP)</label></td>
              <td><input type="checkbox" id="boca_cp" name="boca_cp" /></td>
              <td><input type="checkbox" id="boca_sp" name="boca_sp" /></td>

              <td><label for="abdomen_cp">11-R Abdomen </label></td>
              <td><input type="checkbox" id="abdomen_cp" name="abdomen_cp" /></td>
              <td><input type="checkbox" id="abdomen_sp" name="abdomen_sp" /></td>

              <td><label for="organos_sentidos_cp">1-S Organos de los Sentidos </label></td>
              <td><input type="checkbox" id="organos_sentidos_cp" name="organos_sentidos_cp" /></td>
              <td> <input type="checkbox" id="organos_sentidos_sp" name="organos_sentidos_sp" /></td>

              <td><label for="urinario_cp">6-S Urinario (CP/SP)</label></td>
              <td><input type="checkbox" id="urinario_cp" name="urinario_cp" /></td>
              <td><input type="checkbox" id="urinario_sp" name="urinario_sp" /></td>

            </tr>
            <!-- Región 2: Cabeza -->
            <tr>
              <td><label for="cabeza">2-R Cabeza</label></td>
              <td><input type="checkbox" id="cabeza_cp" name="cabeza_cp" /></td>
              <td><input type="checkbox" id="cabeza_sp" name="cabeza_sp" /></td>

              <td><label for="musculoesqueletico_cp">7-S Musculoesquelético </label></td>
              <td> <input type="checkbox" id="musculoesqueletico_cp" name="musculoesqueletico_cp" /></td>
              <td> <input type="checkbox" id="musculoesqueletico_sp" name="musculoesqueletico_sp" /> </td>

              <td><label for="columna_vertebral_cp">12-R Columna Vertebral</label></td>
              <td><input type="checkbox" id="columna_vertebral_cp" name="columna_vertebral_cp" /></td>
              <td><input type="checkbox" id="columna_vertebral_sp" name="columna_vertebral_sp" /></td>

              <td><label for="respiratorio_cp">2-S Respiratorio (CP/SP)</label></td>
              <td> <input type="checkbox" id="respiratorio_cp" name="respiratorio_cp" /></td>
              <td> <input type="checkbox" id="respiratorio_sp" name="respiratorio_sp" /></td>

              <td><label for="musculoesqueletico_cp">7-S Musculoesquelético (CP/SP)</label></td>
              <td><input type="checkbox" id="musculoesqueletico_cp" name="musculoesqueletico_cp" /></td>
              <td><input type="checkbox" id="musculoesqueletico_sp" name="musculoesqueletico_sp" /></td>




            </tr>
            <tr>
              <td><label for="ojos_cp">3-R Ojos </label></td>
              <td><input type="checkbox" id="ojos_cp" name="ojos_cp" /></td>
              <td><input type="checkbox" id="ojos_sp" name="ojos_sp" /></td>

              <td><label for="cuello_cp">8-R Cuello </label></td>
              <td><input type="checkbox" id="cuello_cp" name="cuello_cp" /></td>
              <td> <input type="checkbox" id="cuello_sp" name="cuello_sp" /></td>

              <td> <label for="ingle_perine_cp">13-R Ingle-Perine </label></td>
              <td><input type="checkbox" id="ingle_perine_cp" name="ingle_perine_cp" /></td>
              <td> <input type="checkbox" id="ingle_perine_sp" name="ingle_perine_sp" /></td>

              <td><label for="cardiovascular_cp">3-S Cardiovascular (CP/SP)</label></td>
              <td><input type="checkbox" id="cardiovascular_cp" name="cardiovascular_cp" /></td>
              <td><input type="checkbox" id="cardiovascular_sp" name="cardiovascular_sp" /></td>

              <td><label for="endocrino_cp">8-S Endocrino (CP/SP)</label></td>
              <td><input type="checkbox" id="endocrino_cp" name="endocrino_cp" /></td>
              <td><input type="checkbox" id="endocrino_sp" name="endocrino_sp" /></td>

            </tr>

            <tr>
              <td><label for="oidos_cp">4-R Oídos </label></td>
              <td><input type="checkbox" id="oidos_cp" name="oidos_cp" /></td>
              <td><input type="checkbox" id="oidos_sp" name="oidos_sp" /> </td>

              <td> <label for="axilas_mamas_cp">9-R Axilas-Mamas </label></td>
              <td><input type="checkbox" id="axilas_mamas_cp" name="axilas_mamas_cp" /></td>
              <td><input type="checkbox" id="axilas_mamas_sp" name="axilas_mamas_sp" /> </td>

              <td><label for="miembros_superiores_cp">14-R Miembros Superiores </label></td>
              <td><input type="checkbox" id="miembros_superiores_cp" name="miembros_superiores_cp" /></td>
              <td><input type="checkbox" id="miembros_superiores_sp" name="miembros_superiores_sp" /></td>



              <td><label for="digestivo_cp">4-S Digestivo </label></td>
              <td><input type="checkbox" id="digestivo_cp" name="digestivo_cp" /></td>
              <td><input type="checkbox" id="digestivo_sp" name="digestivo_sp" /></td>

              <td><label for="hemolinfatico_cp">9-S Hemolinfático (CP/SP)</label></td>
              <td><input type="checkbox" id="hemolinfatico_cp" name="hemolinfatico_cp" /></td>
              <td><input type="checkbox" id="hemolinfatico_sp" name="hemolinfatico_sp" /></td>

            </tr>

            <tr>
              <td><label for="nariz_cp">5-R Nariz </label></td>
              <td><input type="checkbox" id="nariz_cp" name="nariz_cp" /></td>
              <td><input type="checkbox" id="nariz_sp" name="nariz_sp" /><br></td>

              <td><label for="torax_cp">10-R Tórax </label></td>
              <td><input type="checkbox" id="torax_cp" name="torax_cp" /></td>
              <td><input type="checkbox" id="torax_sp" name="torax_sp" /></td>

              <td> <label for="miembros_inferiores_cp">15-R Miembros Inferiores </label></td>
              <td><input type="checkbox" id="miembros_inferiores_cp" name="miembros_inferiores_cp" /></td>
              <td><input type="checkbox" id="miembros_inferiores_sp" name="miembros_inferiores_sp" /><br></td>

              <td><label for="genital_cp">5-S Genital (CP/SP)</label></td>
              <td><input type="checkbox" id="genital_cp" name="genital_cp" /></td>
              <td><input type="checkbox" id="genital_sp" name="genital_sp" /></td>

              <td><label for="neurologico_cp">10-S Neurológico (CP/SP)</label></td>
              <td><input type="checkbox" id="neurologico_cp" name="neurologico_cp" /></td>
              <td><input type="checkbox" id="neurologico_sp" name="neurologico_sp" /><br></td>

            </tr>


            <!-- ... (resto de las regiones) ... -->







            <!-- Observaciones -->

          </tbody>

        </table>

        <table>

          <tbody>
            <tr>
              <td colspan="5"><textarea name="observaciones" id="observaciones" cols="175" rows="5"></textarea>
            </tr>
          </tbody>
        </table>




      </section>
      <!-- Fin de codigo 8:EXAMEN FISICO  -->



      <!-- Inicio de codigo 9:DIAGRAMA TOPOGRAFICA -->
      <section>
        <h3>9. DIAGRAMA TOPOGRAFICA

          <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />
          <label for="aplica_seccion">No Aplica</label>
        </h3>

        <script>
          function mostrarOcultarSeccion() {
            var checkbox = document.getElementById('aplica_seccion');
            var seccion = document.querySelector('.seccion-oculta');

            if (checkbox.checked) {
              seccion.style.display = 'block';
            } else {
              seccion.style.display = 'none';
            }
          }
          document.addEventListener("DOMContentLoaded", function () {
            let contenedor = document.getElementById("contenedor-imagen");
            let numerosContainer = document.getElementById("numeros-container");
            let isSelecting = false;

            contenedor.addEventListener("dblclick", function (event) {
              let x = event.pageX - contenedor.offsetLeft;
              let y = event.pageY - contenedor.offsetTop;

              let numero = prompt("Ingrese el numero:");
              if (numero !== null) {
                let numeroDiv = document.createElement("div");
                numeroDiv.textContent = numero;
                numeroDiv.classList.add("numero-ingresado");
                numeroDiv.style.left = x + "px";
                numeroDiv.style.top = y + "px";
                numerosContainer.appendChild(numeroDiv);

                // Hacer el número arrastrable
                makeDraggable(numeroDiv);

                // Agregar la opción de eliminar al hacer clic derecho
                numeroDiv.addEventListener("contextmenu", function (e) {
                  e.preventDefault();
                  numerosContainer.removeChild(numeroDiv);
                });
              }
            });

            function makeDraggable(element) {
              let isDragging = false;
              let offsetX, offsetY;

              element.addEventListener("mousedown", function (e) {
                isDragging = true;
                offsetX = e.clientX - parseFloat(element.style.left);
                offsetY = e.clientY - parseFloat(element.style.top);

                // Evitar que se solicite ingresar un nuevo número durante el arrastre
                isSelecting = true;
              });

              document.addEventListener("mousemove", function (e) {
                if (isDragging) {
                  element.style.left = e.clientX - offsetX + "px";
                  element.style.top = e.clientY - offsetY + "px";
                }
              });

              document.addEventListener("mouseup", function () {
                isDragging = false;

                // Permitir ingresar un nuevo número después de soltar el arrastre
                isSelecting = false;
              });
            }
          });
        </script>
      </section>
      <fieldset>


        <title>RIOHOSPITAL</title>
        </head>

        <body>

          <div id="container">
            <!-- O CSS interno -->
            <style>
              .contenedor {
                position: relative;
                width: 300px;
                /* Ancho de la imagen */
              }

              .numero-ingresado {
                position: absolute;
                cursor: move;
                user-select: none;
                border: 1px solid #000;
                padding: 5px;
                background-color: transparent;
                border-radius: 5px;
              }

              #container {
                display: flex;
                align-items: flex-start;
                /* Alinear arriba */
              }

              #image-container {
                margin-right: 20px;
                /* Espacio entre la imagen y la tabla, puedes ajustar según sea necesario */
              }

              #movable-image {
                width: 300px;
                height: 600px;
              }

              #table-container {
                flex-grow: 1;
                /* Ocupa el espacio restante */
              }

              table {
                width: 100%;
              }
            </style>

            <div class="contenedor" id="contenedor-imagen">
              <img id="movable-image" src="{{ asset('img/008/persona.png') }}" alt="Imagen">

              <div id="numeros-container"></div>
            </div>

            <div id="table-container">
              <table border="1" cellspacing="-5" cellpadding="3">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Lesiones</th>
                    <th>Aplica</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Herida Penetrante</td>
                    <td><input type="checkbox" id="herida_penetrante" name="herida_penetrante" /></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Herida No Penetrante</td>
                    <td><input type="checkbox" id="herida_no_penetrante" name="herida_no_penetrante" /></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Fractura Expuesta</td>
                    <td><input type="checkbox" id="fractura_expuesta" name="fractura_expuesta" /></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Fractura Cerrada</td>
                    <td><input type="checkbox" id="fractura_cerrada" name="fractura_cerrada" /></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Amputación</td>
                    <td><input type="checkbox" id="amputacion" name="amputacion" /></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Hemorragia</td>
                    <td><input type="checkbox" id="hemorragia" name="hemorragia" /></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Mordedura</td>
                    <td><input type="checkbox" id="mordedura" name="mordedura" /></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Picadura</td>
                    <td><input type="checkbox" id="picadura" name="picadura" /></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Excoriación</td>
                    <td><input type="checkbox" id="excoriacion" name="excoriacion" /></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Deformidad o Masa</td>
                    <td><input type="checkbox" id="deformidad_masa" name="deformidad_masa" /></td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Hematoma</td>
                    <td><input type="checkbox" id="hematoma" name="hematoma" /></td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Quemadura Grado 1</td>
                    <td><input type="checkbox" id="quemadura_grado_1" name="quemadura_grado_1" /></td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Quemadura Grado 2</td>
                    <td><input type="checkbox" id="quemadura_grado_2" name="quemadura_grado_2" /></td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Quemadura Grado 3</td>
                    <td><input type="checkbox" id="quemadura_grado_3" name="quemadura_grado_3" /></td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>

      </fieldset>

      <!-- Fin de codigo 9:DIAGRAMA TOPOGRAFICA -->


      <br><br><br><br>

      <!-- Inicio de codigo 10.ENBARAZO - PARTO -->
      <section>



        <h3>10.EMBARAZO - PARTO
          <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />
          <label for="aplica_seccion">No Aplica</label>
        </h3>
        <fieldset class="seccion-oculta">
          <table>
            <tbody>
              <tr>
                <td><label for="gestas">Gestas</label></td>
                <td><input type="text" id="gestas" name="gestas" /></td>
                <td><label for="partos">Partos</label></td>
                <td><input type="text" id="partos" name="partos" /></td>
                <td><label for="abortos">Abortos</label></td>
                <td><input type="text" id="abortos" name="abortos" /></td>
                <td><label for="cesareas">Cesáreas</label></td>
                <td><input type="text" id="cesareas" name="cesareas" /></td>

              </tr>
            </tbody>
          </table>

          <table>
            <tbody>

              <tr>
                <td><label for="fecha_ultima_menstruacion">Fecha Última Menstruación:</label></td>
                <td><input type="date" id="fecha_ultima_menstruacion" name="fecha_ultima_menstruacion" /></td>
                <td><label for="semanas_gestacion">Semanas de Gestación:</label></td>
                <td><input type="text" id="semanas_gestacion" name="semanas_gestacion" /></td>

                <td> <label for="movimiento_fetal">Movimiento Fetal:</label></td>
                <td><input type="text" id="movimiento_fetal" name="movimiento_fetal" /></td>

              </tr>

              <tr>
                <td><label for="frecuencia_cardiaca_fetal">Frecuencia Cardiaca Fetal:</label></td>
                <td><input type="text" id="frecuencia_cardiaca_fetal" name="frecuencia_cardiaca_fetal" /></td>

                <td><label for="membranas_rotas">Membranas Rota:</label></td>
                <td><input type="text" id="membranas_rotas" name="membranas_rotas" /></td>

                <td><label for="tiempo_membranas_rotas">Tiempo con Membranas Rota:</label></td>
                <td><input type="text" id="tiempo_membranas_rotas" name="tiempo_membranas_rotas" /></td>

              </tr>
              <tr>
                <td><label for="altura_uterina">Altura Uterina:</label></td>
                <td><input type="text" id="altura_uterina" name="altura_uterinas" /></td>

                <td><label for="presentacion">Presentacion:</label></td>
                <td colspan="3"><input type="text" id="presentacion" name="presentacion" /></td>
              </tr>
              <tr>
                <td><label for="dilatacion">Dilatacion:</label></td>
                <td><input type="text" id="dilatacion" name="dilatacion" /></td>

                <td><label for="borramiento">Borramiento:</label></td>
                <td><input type="text" id="borramiento" name="borramiento" /></td>

                <td> <label for="plano">Plano:</label></td>
                <td><input type="text" id="plano" name="plano" /></td>
              </tr>

              <tr>
                <td><label for="pelvis_util">Pelvis Util</label></td>
                <td><input type="text" id="pelvis_util" name="pelvis_util" /></td>

                <td><label for="sangrado_vaginal">Sangrado vaginal</label></td>
                <td><input type="text" id="sangrado_vaginal" name="sangrado_vaginal" /></td>

                <td><label for="contracciones">Contracciones</label></td>
                <td><input type="text" id="contracciones" name="contracciones" /></td>

            </tbody>
          </table>
          <textarea name="observaciones_plan_diagnostico" id="observaciones_plan_diagnostico" cols="175" rows="4"></textarea>

        </fieldset>
        <script>
          function mostrarOcultarSeccion() {
            var checkbox = document.getElementById('aplica_seccion');
            var seccion = document.querySelector('.seccion-oculta');

            if (checkbox.checked) {
              seccion.style.display = 'block';
            } else {
              seccion.style.display = 'none';
            }
          }
        </script>
      </section>
      <!-- Fin de codigo 10.ENBARAZO - PARTO  -->

      <!-- Inicio de codigo 11:-->
      <section>
        <h3>11. ANALISIS DE PROBLEMAS
          <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />
          <label for="aplica_seccion">No Aplica</label>

        </h3>
        <fieldset>
          <table>
            <tbody>
              <textarea name="analisis_problemas" id="analisis_problemas" cols="175" rows="5"></textarea>

            </tbody>


          </table>
        </fieldset>
        <script>


          function mostrarOcultarSeccion() {
            var checkbox = document.getElementById('aplica_seccion');
            var seccion = document.querySelector('.seccion-oculta');

            if (checkbox.checked) {
              seccion.style.display = 'block';
            } else {
              seccion.style.display = 'none';
            }
          }
        </script>
      </section>
      <!-- Fin de codigo 11: -->





      <!-- Inicio de codigo 12:-->
      <section>
        <h3>12. PLAN DIAGNOSTICO
          <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />


        </h3>
        <fieldset>

          <table>
            <tbody>
              <tr>
                <td><label for="biometria">Biometría</label></td>
                <td><input type="checkbox" id="biometria" name="plan_diagnostico" value="Biometría" /></td>
                <td> <label for="quimica_sanguinea">Química Sanguínea</label></td>
                <td><input type="checkbox" id="quimica_sanguinea" name="plan_diagnostico" value="Química Sanguínea" /></td>
                <td> <label for="gasometria">Gasometría</label></td>
                <td> <input type="checkbox" id="gasometria" name="plan_diagnostico" value="Gasometría" /></td>
                <td> <label for="endoscopia">Endoscopia</label></td>
                <td> <input type="checkbox" id="endoscopia" name="plan_diagnostico" value="Endoscopia" /></td>

                <td><label for="r-x_abdomen">Radiografía de Abdomen</label></td>
                <td> <input type="checkbox" id="r-x_abdomen" name="plan_diagnostico" value="Radiografía de Abdomen" /></td>
                <td> <label for="tomografia">Tomografía</label></td>
                <td> <input type="checkbox" id="tomografia" name="plan_diagnostico" value="Tomografía" /></td>

                <td><label for="ecografia_pelvica">Ecografía Pélvica</label></td>
                <td> <input type="checkbox" id="ecografia_pelvica" name="plan_diagnostico" value="Ecografía Pélvica" /></td>

                <td><label for="interconsulta">Interconsulta Especializada</label></td>
                <td><input type="checkbox" id="interconsulta" name="plan_diagnostico" value="Interconsulta Especializada" />
                </td>


              </tr>
            </tbody>



            <tbody>
              <tr>



                <td> <label for="uroanalisis">Uroanálisis</label></td>
                <td> <input type="checkbox" id="uroanalisis" name="plan_diagnostico" value="Uroanálisis" /></td>


                <td><label for="electrolitos">Electrolitos</label></td>
                <td><input type="checkbox" id="electrolitos" name="plan_diagnostico" value="Electrolitos" /></td>

                <td><label for="electro_cardiograma">Electrocardiograma</label></td>
                <td><input type="checkbox" id="electro_cardiograma" name="plan_diagnostico" value="Electrocardiograma" /></td>

                <td> <label for="r-x_torax">R-X TORAX</label></td>
                <td> <input type="checkbox" id="r-x_torax" name="plan_diagnostico" value="Radiografía de Tórax" /></td>

                <td> <label for="r-x_torax">R-X OSEA</label></td>
                <td> <input type="checkbox" id="r-x_torax" name="plan_diagnostico" value="Radiografía de Tórax" /></td>

                <td> <label for="r-x_torax">RESONANCIA</label></td>
                <td> <input type="checkbox" id="r-x_torax" name="plan_diagnostico" value="Radiografía de Tórax" /></td>



                <td> <label for="ecografia_abdomen">Ecografía Abdominal</label></td>
                <td> <input type="checkbox" id="ecografia_abdomen" name="plan_diagnostico" value="Ecografía Abdominal" /></td>

                <td><label for="otros_diagnosticos">Otros</label></td>
                <td> <input type="checkbox" id="otros_diagnosticos" name="plan_diagnostico" value="Otros" /></td>


              </tr>
              </tr>
            </tbody>
          </table>
          <textarea name="plan_diagnostico" id="plan_diagnostico" cols="175" rows="5"></textarea>


        </fieldset>
      </section>
      <section style="display: flex;">
        <div style="flex: 1;">
          <h3>13. DIAGNOSTICO PRESUNTIVOS</h3>
          <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <thead>
              <tr>
                <th>#</th>
                <th>DIAGNOSTICOS</th>
                <th>CIE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><input type="text" name="medicamento2"></td>
                <td><input type="text" name="via2" disabled></td>
              </tr>
              <tr>
                <td>2</td>
                <td><input type="text" name="medicamento3"></td>
                <td><input type="text" name="via3" disabled></td>
              </tr>
              <tr>
                <td>3</td>
                <td><input type="text" name="medicamento4"></td>
                <td><input type="text" name="via4" disabled></td>
              </tr>
              <tr>
                <td>4</td>
                <td><input type="text" name="medicamento5"></td>
                <td><input type="text" name="via5" disabled></td>
              </tr>

            </tbody>
          </table>
        </div>

        <div style="flex: 1; margin-left: 20px;"> <!-- Puedes ajustar el margen según tus preferencias -->
          <h3>14. DIAGNOSTICOS DEFINITIVOS</h3>
          <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <thead>
              <tr>
                <th>#</th>
                <th>DIAGNOSTICOS</th>
                <th>CIE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><input type="text" name="medicamento6"></td>
                <td><input type="text" name="via6" disabled></td>
              </tr>
              <tr>
                <td>2</td>
                <td><input type="text" name="medicamento7"></td>
                <td><input type="text" name="via7" disabled></td>
              </tr>
              <tr>
                <td>3</td>
                <td><input type="text" name="medicamento8"></td>
                <td><input type="text" name="via8" disabled></td>
              </tr>
              <tr>
                <td>4</td>
                <td><input type="text" name="medicamento9"></td>
                <td><input type="text" name="via9" disabled></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>



      <!-- Inicio de codigo 0:-->
      <section>
        <h3>15. PLAN DE TRATAMIENTO </h3>

        <table border="1" cellspacing="0" cellpadding="5" width="100%">
          <thead>
            <tr>
              <th></th>
              <th>Medicamento Genérico</th>
              <th>Via</th>
              <th>Dosis</th>
              <th>Posologia</th>
              <th>Dias</th>

            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td><input type="text" name="medicamento1"></td>
              <td>
                <select name="via1">
                  <option value="intravenoso">INTRAVENOSO</option>
                  <option value="oral">VIA ORAL</option>
                  <option value="intramuscular">INTRAMUSCULAR</option>
                  <option value="via_rectal">VÍA RECTAL</option>
                  <option value="subcutanea">SUBCUTÁNEA</option>
                  <option value="sublingual">SUBLINGUAL</option>
                  <option value="via_topica">VÍA TÓPICA</option>
                  <option value="via_vaginal">VÍA VAGINAL</option>
                  <option value="via_oftalmica">VÍA OFTÁLMICA</option>
                  <option value="via_otica">VÍA ÓTICA</option>
                  <!-- Agrega más opciones según sea necesario -->
                </select>
              </td>
              <td><input type="text" name="dosis1"></td>
              <td><input type="text" name="posologia1"></td>
              <td><input type="text" name="dias1"></td>

            </tr>
            <tr>
              <td>2</td>
              <td><input type="text" name="medicamento2"></td>
              <td>
                <select name="via2">
                  <option value="intravenoso">INTRAVENOSO</option>
                  <option value="oral">VIA ORAL</option>
                  <option value="intramuscular">INTRAMUSCULAR</option>
                  <option value="via_rectal">VÍA RECTAL</option>
                  <option value="subcutanea">SUBCUTÁNEA</option>
                  <option value="sublingual">SUBLINGUAL</option>
                  <option value="via_topica">VÍA TÓPICA</option>
                  <option value="via_vaginal">VÍA VAGINAL</option>
                  <option value="via_oftalmica">VÍA OFTÁLMICA</option>
                  <option value="via_otica">VÍA ÓTICA</option>
                  <!-- Agrega más opciones según sea necesario -->
                </select>
              </td>
              <td><input type="text" name="dosis2"></td>
              <td><input type="text" name="posologia2"></td>
              <td><input type="text" name="dias2"></td>

            </tr>
            <tr>
              <td>3</td>
              <td><input type="text" name="medicamento3"></td>
              <td>
                <select name="via3">
                  <option value="intravenoso">INTRAVENOSO</option>
                  <option value="oral">VIA ORAL</option>
                  <option value="intramuscular">INTRAMUSCULAR</option>
                  <option value="via_rectal">VÍA RECTAL</option>
                  <option value="subcutanea">SUBCUTÁNEA</option>
                  <option value="sublingual">SUBLINGUAL</option>
                  <option value="via_topica">VÍA TÓPICA</option>
                  <option value="via_vaginal">VÍA VAGINAL</option>
                  <option value="via_oftalmica">VÍA OFTÁLMICA</option>
                  <option value="via_otica">VÍA ÓTICA</option>
                  <!-- Agrega más opciones según sea necesario -->
                </select>
              </td>
              <td><input type="text" name="dosis3"></td>
              <td><input type="text" name="posologia3"></td>
              <td><input type="text" name="dias3"></td>

            </tr>
            <tr>
              <td>4</td>
              <td><input type="text" name="medicamento4"></td>
              <td>
                <select name="via4">
                  <option value="intravenoso">INTRAVENOSO</option>
                  <option value="oral">VIA ORAL</option>
                  <option value="intramuscular">INTRAMUSCULAR</option>
                  <option value="via_rectal">VÍA RECTAL</option>
                  <option value="subcutanea">SUBCUTÁNEA</option>
                  <option value="sublingual">SUBLINGUAL</option>
                  <option value="via_topica">VÍA TÓPICA</option>
                  <option value="via_vaginal">VÍA VAGINAL</option>
                  <option value="via_oftalmica">VÍA OFTÁLMICA</option>
                  <option value="via_otica">VÍA ÓTICA</option>
                  <!-- Agrega más opciones según sea necesario -->
                </select>
              </td>
              <td><input type="text" name="dosis4"></td>
              <td><input type="text" name="posologia4"></td>
              <td><input type="text" name="dias4"></td>

            </tr>
          </tbody>
        </table>
        </head>

        <body>
          <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
              <th>1. INDICACIONES GENERALES</th>
              <th>2. PROCEDIMIENOS</th>
              <th>3. CONSENTIMIENTO INFORMADO</th>
              <th>4. OTROS</th>
            </tr>
            <tr>
              <td><input type="checkbox" name="indicaciones_generales" id="indicaciones_generales"></td>
              <td><input type="checkbox" name="procedimientos" id="procedimientos"></td>
              <td><input type="checkbox" name="procedimientos" id="procedimientos"></td>
              <td><input type="checkbox" name="otros" id></td>
            </tr>
          </table>

          </fieldset>
          <textarea name="plan_tratamiento" id="plan_tratamiento" cols="179" rows="5"></textarea>



        </body>
      </section>
      <!-- Fin codigo 15-->


      <!-- Inicio de codigo 16:-->
      <!-- Inicio de codigo 16:-->
      <section>
        <h3>16. SALIDA
          <input type="checkbox" id="aplica_seccion" onchange="mostrarOcultarSeccion()" />
          <label for="aplica_seccion">No Aplica</label>
        </h3>
        <fieldset>
          <table>
            <tbody>
              <tr>
                <td><label for="domicilio">Domicilio:</label></td>
                <td><input type="checkbox" id="domicilio" name="domicilio"></td>

                <td><label for="consulta_externa">Consulta Externa:</label></td>
                <td><input type="checkbox" id="consulta_externa" name="consulta_externa"></td>

                <td><label for="observacion">Observación:</label></td>
                <td><input type="checkbox" id="observacion2.1" name="observacion2.1"></td>

                <td><label for="internacion">Internación:</label></td>
                <td><input type="checkbox" id="internacion" name="internacion"></td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td><label for="referencia">Referencia:</label></td>
                <td><input type="checkbox" id="referencia" name="referencia"></td>
                <td><label for="vivo">Vivo:</label></td>
                <td><input type="checkbox" id="vivo" name="vivo"></td>

                <td><label for="estable">Estable:</label></td>
                <td><input type="checkbox" id="estable" name="estable"></td>

                <td><label for="inestable">Inestable:</label></td>
                <td><input type="checkbox" id="inestable" name="inestable"></td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td><label for="dias_incapacidad">Días de Incapacidad:</label></td>
                <td><input type="text" id="dias_incapacidad" name="dias_incapacidad"></td>
                <td><label for="servicio">Servicio:</label></td>
                <td><input type="text" id="servicio" name="servicio"></td>
                <td><label for="establecimiento">Establecimiento:</label></td>
                <td><input type="text" id="establecimiento" name="establecimiento"></td>

                <td><label for="muerto_emergencia">Muerto en Emergencia:</label></td>
                <td><input type="checkbox" id="muerto_emergencia" name="muerto_emergencia"></td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td><label for="causa">Causa:</label></td>
                <td><textarea type="text" id="causa" name="causa" rows="5" cols="50"></textarea></td>

              </tr>
            </tbody>
            <tbody>
              <tr>

              </tr>
            </tbody>
          </table>
        </fieldset>
        <fieldset>
          <tbody>
            <tr>
              <td><label for="fecha_salida">Fecha de Salida:</label></td>
              <td><input type="date" id="fecha_salida" name="fecha_salida"></td>

              <td><label for="hora_salida">Hora de Salida:</label></td>
              <td><input type="time" id="hora_salida" name="hora_salida"></td>
              <td><label for="medico">Médico:</label></td>
              <td colspan="2"><input type="text" id="medico" name="medico"></td>
              <td><label for="codigo">Código:</label></td>
              <td><input type="text" id="codigo" name="codigo"></td>
            </tr>
          </tbody>
        </fieldset>
      </section>

      <script>
        // Agrega aquí tu código JavaScript para manejar la firma electrónica en el canvas
      </script>

      <!-- Fin de codigo 16: -->


      <button onclick="imprimirFicha()">Visualizar en Documento pdf</button>
      </div>

      <script>
        function imprimirFicha() {
          window.print();
        }
      </script>
      </body>

  </html>