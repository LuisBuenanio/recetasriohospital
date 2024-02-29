<div class="form-group">
    <h3>9. DIAGRAMA TOPOGRÁFICA
        <label for="aplica_diagrama_topografica" style="margin-left: 580px;">No Aplica</label>
        <input type="checkbox" id="aplica_diagrama_topografica"; />
    </h3>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let contenedor = document.getElementById("contenedor-imagen");
            let numerosContainer = document.getElementById("numeros-container");
            let isSelecting = false;

            contenedor.addEventListener("dblclick", function(event) {
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
                    numeroDiv.addEventListener("contextmenu", function(e) {
                        e.preventDefault();
                        numerosContainer.removeChild(numeroDiv);
                    });
                }
            });

            function makeDraggable(element) {
                let isDragging = false;
                let offsetX, offsetY;

                element.addEventListener("mousedown", function(e) {
                    isDragging = true;
                    offsetX = e.clientX - parseFloat(element.style.left);
                    offsetY = e.clientY - parseFloat(element.style.top);

                    // Evitar que se solicite ingresar un nuevo número durante el arrastre
                    isSelecting = true;
                });

                document.addEventListener("mousemove", function(e) {
                    if (isDragging) {
                        element.style.left = e.clientX - offsetX + "px";
                        element.style.top = e.clientY - offsetY + "px";
                    }
                });

                document.addEventListener("mouseup", function() {
                    isDragging = false;

                    // Permitir ingresar un nuevo número después de soltar el arrastre
                    isSelecting = false;
                });
            }
        });
    </script>
  <div style="display: flex;">    
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

        <div style="flex: 1;" class="contenedor" id="contenedor-imagen">
            <img id="movable-image" src="{{ asset('img/008/diagrama.jpeg') }}" alt="Imagen">

            <div id="numeros-container"></div>
        </div>

        <div id="table-container" style="flex: 2;">
            <table border="1" cellspacing="-5" cellpadding="3">
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
                            <td>{{ $lesion->id }}</td>
                            <td>{{ $lesion->nombre }}</td>
                            <td><input type="checkbox" id="herida_penetrante_{{ $lesion->id }}"
                                    name="herida_penetrante_{{ $lesion->id }}" /></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>
