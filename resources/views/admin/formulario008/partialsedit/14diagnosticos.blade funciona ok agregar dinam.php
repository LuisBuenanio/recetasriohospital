<div class="form-group">
    <style>
        .select2-container {
            width: auto !important; /* Ancho automático */
        }
    
        .select2-container .select2-selection--single {
            height: auto;
            padding: 6px 10px; /* Ajusta el padding según sea necesario */
        }
    
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            white-space: normal; /* Permite que el texto se envuelva */
        }
    </style>
    
    {{-- 	DATOS DEL PACIENTE --}}

    <table style="width: 100%;">
      <tr>
          <td style="width: 50%;">
            
              <!-- Contenido de la primera parte -->
            <table class="table table-bordered mt-3" id="diagnosticoscie10_table">
                <h3>13. Diagnósticos Presuntivos</h3>
                <thead>
                    <tr>                        
                        <th style="font-size: 14px">DIAGNÓSTICOS PRESUNTIVOS</th>
                        <th style="font-size: 14px">CIE-10</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="diagnosticocie100">
                        <td>                        
                            <select name="diagnosticoscie10s[]" class="form-control select2cie10">
                                <option value="">Seleccione un Diagnóstico</option>
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
                    <tr id="diagnosticocie101"></tr>
                </tbody>
            </table>
                {!! Form::button('Agregar diagnóstico', ['type' => 'button','class' => 'btn btn-primary', 'id' => 'btn-add-diagnosticocie10',]) !!}
          </td>
          <td style="width: 50%;">
              <!-- Contenido de la segunda parte -->
              <table class="table table-bordered mt-3" id="diagnosticoscie10f_table">
                <h3>14. Diagnósticos Definitivos</h3>
                <thead>
                    <tr>                        
                        <th style="font-size: 14px">DIAGNÓSTICOS DEFINITIVOS</th>
                        <th style="font-size: 14px">CIE-10</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="diagnosticocie100">
                        <td>                        
                            <select name="diagnosticoscie10s[]" class="form-control select2cie10f">
                                <option value="">Seleccione un Diagnóstico</option>
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
                    <tr id="diagnosticocie10f1"></tr>
                </tbody>
            </table>
                {!! Form::button('Agregar diagnóstico', ['type' => 'button','class' => 'btn btn-primary', 'id' => 'btn-add-diagnosticocie10f',]) !!}
          
          </td>
      </tr>
    </table>
    
</div>