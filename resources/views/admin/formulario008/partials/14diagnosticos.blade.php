<div class="form-group">
    {{-- DATOS DEL PACIENTE --}}
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <!-- Contenido de la primera parte -->
                <table class="table table-bordered mt-3" id="diagnosticoscie10_table">
                    <h3>13. DIAGNÓSTICOS PRESUNTIVOS</h3>
                    <thead>
                        <tr>                        
                            <th style="font-size: 14px">DIAGNÓSTICOS PRESUNTIVOS</th>
                            <th style="font-size: 14px">CIE-10</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="diagnosticocie10-1">
                            <td>
                                <select name="diagnosticos_presuntivos[]" class="form-control select2cie10">
                                    <option value="">SELECCIONE UN DIAGNÓSTICO</option>
                                    @foreach ($diagnosticoscie10s as $diagnosticoscie10)
                                        <option value="{{ $diagnosticoscie10->id }}">
                                            {{ $diagnosticoscie10->descripcion }} ({{ $diagnosticoscie10->clave }})
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td style="font-size: 12px">
                                <input class="form-control diagnosticocie10-clave" type="text" name="diagnosticocie10_generico_3" readonly>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-remove-diagnosticocie10">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" id="btn-add-diagnosticocie10">AGREGAR DIAGNÓSTICO</button>
            </td>
            <td style="width: 50%;">
                <!-- Contenido de la segunda parte -->
                <table class="table table-bordered mt-3" id="diagnosticoscie10f_table">
                    <h3>14. DIAGNÓSTICOS DEFINITIVOS</h3>
                    <thead>
                        <tr>                        
                            <th style="font-size: 14px">DIAGNÓSTICOS DEFINITIVOS</th>
                            <th style="font-size: 14px">CIE-10</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="diagnosticocie10f-1">
                            <td>
                                <select name="diagnosticos_definitivos[]" class="form-control select2cie10f">
                                    <option value="">SELECCIONE UN DIAGNÓSTICO</option>
                                    @foreach ($diagnosticoscie10s as $diagnosticoscie10)
                                        <option value="{{ $diagnosticoscie10->id }}">
                                            {{ $diagnosticoscie10->descripcion }} ({{ $diagnosticoscie10->clave }})
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td style="font-size: 12px">
                                <input class="form-control diagnosticocie10f-clave" type="text" name="diagnosticocie10f_generico_3" readonly>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-remove-diagnosticocie10f">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" id="btn-add-diagnosticocie10f">AGREGAR DIAGNÓSTICO</button>
            </td>
        </tr>
    </table>
</div>
