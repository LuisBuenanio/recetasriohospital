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
                border: 1px solid #000;
                padding: 5px;
                background-color: transparent;
                border-radius: 5px;
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
                    {{-- @foreach ($lesiones as $lesion)
                        <tr>
                            <td>{{ $lesion->id }}</td>
                            <td> <label class="form-check-label" for="lesion{{ $lesion->id }}">{{ $lesion->nombre }}</label> </td>                           
                            <td><input class="form-check-input" type="checkbox" id="lesion{{ $lesion->id }}"
                                name="lesiones[]" value="{{ $lesion->id }}" /></td>
                         
                        </tr>
                    @endforeach --}}
                    @foreach ($lesiones as $lesion)
                    <tr>
                        <div class="form-check">
                            <td>{{ $lesion->id }}</td>
                            <td><label class="form-check-label" for="lesion{{ $lesion->id }}">{{ $lesion->nombre }}</label></td>
                            <td> <input class="form-check-input" style="margin-left: 40px" type="checkbox" id="lesion{{ $lesion->id }}"
                                name="lesiones[{{ $lesion->id }}][id]" value="{{ $lesion->id }}" />
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

        contenedor.addEventListener("dblclick", function (event) {
            let x = event.pageX - contenedor.offsetLeft;
            let y = event.pageY - contenedor.offsetTop;

            let numero = prompt("Ingrese el Número de lesión correspondiente:");
            if (numero !== null) {
                let numeroDiv = document.createElement("div");
                numeroDiv.textContent = numero;
                numeroDiv.classList.add("numero-ingresado");
                numeroDiv.style.left = x + "px";
                numeroDiv.style.top = y + "px";
                numeroDiv.setAttribute('data-posicion-x', x);
                numeroDiv.setAttribute('data-posicion-y', y);
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

                    // Obtener la posición x e y relativa al contenedor de la imagen
                    let x = e.clientX - contenedor.offsetLeft;
                    let y = e.clientY - contenedor.offsetTop;

                    // Actualizar los campos ocultos con la posición x e y
                    element.setAttribute('data-posicion-x', x);
                    element.setAttribute('data-posicion-y', y);
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
</div>
