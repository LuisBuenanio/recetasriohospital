<div class="form-group">
    <h3>9. DIAGRAMA TOPOGRÁFICA
        <label for="aplica_diagrama_topografico" style="margin-left: 580px;">No Aplica</label>
        <input type="checkbox" id="aplica_diagrama_topografico"; />
    </h3>
    

    <div style="display: flex;">
        <style>
            .contenedor {
                position: relative;
                
                /* Ancho de la imagen */
            }             
            
            .numero-ingresado {
                position: absolute;
                cursor: move;
                user-select: none;
                border: 2px solid #007bff;
                padding: 8px;
                background-color: rgba(0, 123, 255, 0.4);
                border-radius: 50%;
                font-size: 14px;
                color: #007bff;
            }
        </style>

        <div class="contenedor" id="contenedor-imagen" style="flex: 1;">
            <img id="movable-image" style="width: 600px;" src="{{ asset('img/008/diagrama.jpeg') }}" alt="Imagen">
            <div id="numeros-container"></div>
        </div>
       
        <div id="table-container" style="flex: 2;">
            <table border="1" cellspacing="-5" cellpadding="3" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Lesiones</th>
                        <th>Aplica</th>
                    </tr>
                </thead>
                <tbody>   
                    @foreach ($lesiones as $lesion)
                    <tr>
                        <div class="form-check">
                            <td>{{ $lesion->id }}</td>
                            <td><label class="form-check-label" for="lesion{{ $lesion->id }}">{{ $lesion->nombre }}</label></td>
                            <td> <input class="form-check-input" style="margin-left: 40px" type="checkbox" id="lesion{{ $lesion->id }}"
                                name="lesiones[{{ $lesion->id }}][id]" value="{{ $lesion->id }}" />
                                
                            <br>
                            </td>
                                
                            {{-- <input type="hidden" name="lesiones[{{ $lesion->id }}][posicion_x]" placeholder="Posición X" class="form-control">
                            <input type="hidden" name="lesiones[{{ $lesion->id }}][posicion_y]" placeholder="Posición Y" class="form-control"> --}}
                            <input type="hidden" name="lesiones[{{ $lesion->id }}][posicion_x]" value="{{ $lesion->posicion_x }}">
                            <input type="hidden" name="lesiones[{{ $lesion->id }}][posicion_y]" value="{{ $lesion->posicion_y }}">
                        </div>
                    </tr>
                    
                @endforeach

                    
                    

                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let contenedor = document.getElementById("contenedor-imagen");
            let numerosContainer = document.getElementById("numeros-container");
            let isSelecting = false;
            let lesionIdCounter = 1;

            contenedor.addEventListener("dblclick", function (event) {
                let x = event.pageX - contenedor.offsetLeft;
                let y = event.pageY - contenedor.offsetTop;

                let lesionId = prompt("Ingrese el ID de la lesión:");
                if (lesionId !== null && !isNaN(lesionId)) {
                    let numeroDiv = document.createElement("div");
                    numeroDiv.textContent = lesionId;
                    numeroDiv.classList.add("numero-ingresado");
                    numeroDiv.setAttribute("data-lesion", lesionIdCounter++);
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
                } else {
                    alert("Por favor, ingrese un ID de lesión válido (número).");
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

            // Actualizar coordenadas al seleccionar una lesión
            let lesionCheckboxes = document.querySelectorAll('.lesion-checkbox');
            lesionCheckboxes.forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    let coordX = this.getAttribute('data-coord-x');
                    let coordY = this.getAttribute('data-coord-y');
                    if (this.checked) {
                        let lesionId = this.value;
                        let numeroDiv = document.querySelector(`.numero-ingresado[data-lesion="${lesionId}"]`);
                        if (numeroDiv) {
                            numeroDiv.style.left = coordX + 'px';
                            numeroDiv.style.top = coordY + 'px';
                        }
                    } else {
                        // Si no está seleccionado, eliminar el número de la imagen
                        let lesionId = this.value;
                        let numeroDiv = document.querySelector(`.numero-ingresado[data-lesion="${lesionId}"]`);
                        if (numeroDiv) {
                            numerosContainer.removeChild(numeroDiv);
                        }
                    }
                });
            });

            // Botón de Guardar
            let guardarBtn = document.getElementById('guardar-btn');
            guardarBtn.addEventListener('click', function () {
                // Recopilar datos de las lesiones seleccionadas
                let lesionesSeleccionadas = {};
                let numeros = document.querySelectorAll('.numero-ingresado');
                numeros.forEach(function (numero) {
                    let lesionId = numero.getAttribute('data-lesion');
                    let coordX = parseFloat(numero.style.left);
                    let coordY = parseFloat(numero.style.top);
                    lesionesSeleccionadas[lesionId] = { posicion_x: coordX, posicion_y: coordY };
                });

                // Asignar a un campo oculto en el formulario antes de enviar
                let lesionesInput = document.getElementById('lesiones-seleccionadas');
                lesionesInput.value = JSON.stringify(lesionesSeleccionadas);

                // Ahora puedes enviar el formulario
                // document.getElementById('tuFormulario').submit();
            });
        });
    </script>
</div>
