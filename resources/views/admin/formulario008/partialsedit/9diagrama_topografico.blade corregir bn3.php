<div class="form-group">
    <h3>9. DIAGRAMA TOPOGRÁFICA
        <label for="aplica_diagrama_topografico" style="margin-left: 810px;">NO APLICA</label>
        <input style="margin-left: 10px" type="checkbox" id="aplica_diagrama_topografico"; />
    </h3>

    <div id="table-container">
        <table border="1" cellspacing="-5" cellpadding="3" width="100%">
            <thead>
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
                            {{ $lesion->pivot->posicion_x }}
                            
                        </td>
                                
                        <td>
                            {{ $lesion->pivot->posicion_y }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
</div>
