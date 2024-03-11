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

    <div class="form-group">
        <div class="card">
            <div class="card-header">
                {!! Form::label('', 'LISTADO DE MEDICAMENTOS AGREGADOS:') !!}
            </div>
            <table class="table table-bordered" id="medicamentos-table">
                <thead>
                    <tr>
                        <th>Medicamento</th>
                        <th>Dosis</th>
                        <th>Horario</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulario008->diagnosticosPresuntivos as $diagnosticoscie10)
                        <tr>
                            <td>{!! Form::select('diagnosticos_presuntivos[]', $diagnosticosPresuntivos, $diagnosticoscie10->id, ['class' => 'form-control select2']) !!}</td>
                                                
                            <td><button type="button" class="btn btn-danger btn-remove-medicamento">Eliminar</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-body">
    
    
    
                <table class="table table-bordered mt-3" id="medicamento_table">
                    <thead>
                        <tr>
                            <th>DIAGNOSTICOS </th>
                            <th>CIE-10</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="medicamento0">
                            
                            <td>{!! Form::select('diagnosticos_presuntivos[]', $diagnosticosPresuntivos, $diagnosticoscie10s->id, ['class' => 'form-control select2']) !!}</td>
                           
                                      
                        <td><button type="button" class="btn btn-danger btn-remove-medicamento">Eliminar</button></td>  
                        </tr>
                        <tr id="medicamento1"></tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" id="btn-add-medicamento">Agregar medicamento</button>
                      
            </div>
        </div>
    </div>

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
                    <tr id="diagnosticocie100">
                        <td>                        
                            <select name="diagnosticos_presuntivos[]" class="form-control select2cie10">
                                <option value="">SELECCIONE UN DIAGNÓSTICO</option>
                                    @foreach ($diagnosticosPresuntivos as $diagnostico)
                                   
                                <li>{{ $diagnostico->descripcion }} ({{ $diagnostico->clave }})</li>
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
                {!! Form::button('AGREGAR DIAGNÓSTICO', ['type' => 'button','class' => 'btn btn-primary', 'id' => 'btn-add-diagnosticocie10',]) !!}
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
                    <tr id="diagnosticocie100">
                        <td>                        
                            <select name="diagnosticos_presuntivos[]" class="form-control select2cie10f">
                                <option value="">SELECCIONE UN DIAGNÓSTICO</option>
                                    @foreach ($diagnosticosDefinitivos  as $diagnosticoscie10)
                                        <option value="{{ $diagnosticoscie10->id }}" 
                                            {{ $formulario008->diagnosticosDefinitivos->contains($diagnosticoscie10->id) ? 'selected' : '' }}>
                                            {{ $diagnosticoscie10->descripcion }}</option>
           
                                        
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
                {!! Form::button('AGREGAR DIAGNÓSTICO', ['type' => 'button','class' => 'btn btn-primary', 'id' => 'btn-add-diagnosticocie10f',]) !!}
          
          </td>
      </tr>
    </table>
    
</div>