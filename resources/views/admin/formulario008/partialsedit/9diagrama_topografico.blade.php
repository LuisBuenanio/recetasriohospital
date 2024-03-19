<div class="form-group">
    <h3>9. DIAGRAMA TOPOGRÁFICA
        <label for="aplica_diagrama_topografico" style="margin-left: 810px;">NO APLICA</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_diagrama_topografico"; />
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
            <div id="numeros-container">
                @foreach ($formulario008->lesiones as $lesion)
                    @if ($lesion->pivot->posicion_x !== null && $lesion->pivot->posicion_y !== null)
                        <div class="numero-ingresado" style="position: absolute; top: {{ $lesion->pivot->posicion_y }}px; left: {{ $lesion->pivot->posicion_x }}px;">
                            {{ $lesion->id }}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- <div class="contenedor" id="contenedor-imagen" style="flex: 1;">
            <img id="movable-image" style="width: 600px;" src="{{ asset('img/008/diagrama.jpeg') }}" alt="Imagen">
            <div id="numeros-container">
                @foreach ($formulario008->lesiones as $lesion)
                    @if ($lesion->pivot->posicion_x !== null && $lesion->pivot->posicion_y !== null)
                        <div class="numero-ingresado coordenada" data-id-lesion="{{ $lesion->id }}" data-posicion-x="{{ $lesion->pivot->posicion_x }}" data-posicion-y="{{ $lesion->pivot->posicion_y }}" style="position: absolute; top: {{ $lesion->pivot->posicion_y }}px; left: {{ $lesion->pivot->posicion_x }}px;">
                            {{ $lesion->id }}
                        </div>
                    @endif
                @endforeach
            </div>
        </div> --}}

        
    
        <div id="table-container" style="flex: 2;">
            <table border="1" cellspacing="-5" cellpadding="3" width="100%">
               {{--  <thead>
                    <tr>
                        <th>#</th>
                        <th>Lesiones</th>
                        <th>Coordenada X</th>
                        <th>Coordenada Y</th>
                    </tr>
                </thead>
                <tbody>   
                    @foreach ($formulario008->lesiones as $lesion)
                        <tr>
                            <td>{{ $lesion->id }}</td>
                            <td>{{ $lesion->nombre }}</td>
                            <td>
                                <input type="text" name="lesiones[{{ $lesion->id }}][coordenadas][posicion_x]" value="{{ $lesion->pivot->posicion_x ?? '' }}">
                            </td>
                            <td>
                                <input type="text" name="lesiones[{{ $lesion->id }}][coordenadas][posicion_y]" value="{{ $lesion->pivot->posicion_y ?? '' }}">
                            </td>
                        </tr>
                    @endforeach
                </tbody>  --}}
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
                           {{--  <td>
                                <label class="form-check-label" for="lesion{{ $lesion->id }}">{{ $lesion->nombre }}</label>
                                <input type="checkbox" id="lesion_checkbox" id="lesion{{ $lesion->id }}" name="lesiones[{{ $lesion->id }}][id]" value="{{ $lesion->id }}">
                            </td> --}}
                            <td >
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
