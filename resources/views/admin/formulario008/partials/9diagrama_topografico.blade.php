<div class="form-group">
    <h3>9. DIAGRAMA TOPOGRÁFICA
        <label for="aplica_diagrama_topografico" style="margin-left: 810px;">NO APLICA</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_diagrama_topografico" name="aplica_diagrama_topografico" value="Si" />
    </h3>

    <div style="display: flex;">
        <style>
            .contenedor {
                position: relative;
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lesiones as $lesion)
                        <tr>
                            <td>{{ $lesion->id }}</td>
                            <td>
                                <label class="form-check-label" for="lesion{{ $lesion->id }}">{{ $lesion->nombre }}</label>
                                 </td>
                            <td>
                                <input type="checkbox" id="lesion_checkbox_{{ $lesion->id }}" name="lesiones[{{ $lesion->id }}][id]" value="{{ $lesion->id }}">
                           
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
