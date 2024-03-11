<div class="form-group">
    <h3>9. DIAGRAMA TOPOGRÁFICA
        <label for="aplica_diagrama_topografico" style="margin-left: 810px;">NO APLICA</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_diagrama_topografico"; />
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
</div>
