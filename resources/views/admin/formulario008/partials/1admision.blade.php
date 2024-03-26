<div class="form-group">
    <h3>1. REGISTRO DE ADMISIÓN</h3>

    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
            <tr>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRES</th>
                <th>NACIONALIDAD</th>
                <th>N° CÉDULA DE CIUDADANIA </th>               

            </tr>
        </thead>

        <tbody>
            <tr>
                <td><input type="text" class="form-control"  id="apellido_paterno" name="apellido_paterno"readonly /></td>

                <td><input type="text" class="form-control"   id="apellido_materno" name="apellido_materno" readonly /></td>
                <td>
                    <input type="text" class="form-control" id="nombre" name="nombre" readonly />
                </td>
                <td><input type="text" class="form-control" id="nacionalidad" name="nacionalidad" readonly></td>
            
                <td style="height: 20px; padding: 3px;  align-items: center; ">        
                       
                     {!! Form::select('paciente_id', ['' => 'Seleccione un paciente'] + $pacientes->pluck('nombrecompletocedula', 'id')->all(),
                    null, ['class' => 'form-control select2', 'id' => 'select-paciente', 'data-placeholder' => 'Seleccione un paciente','margin-right' => '10px'],) !!} 
                    <button style="height: 20px; padding: 3px; display: flex; align-items: center; " type="button" class="btn btn-secondary mt-2 ;" data-toggle="modal" data-target="#modalAgregarPaciente">Crear Paciente</button>
                    
                </td>               
                
                
            </tr>
        </tbody>
    </table>

    <table style="border-collapse: collapse; border-spacing: 0;" >
        <thead>
            <tr>
                <th style="padding: 0px;" >DIRECCIÓN DE RESIDENCIA HABITUAL</th>
                <th style="padding: 3px;" >CANTÓN</th>
                <th style="padding: 3px;" >PROVINCIA</th>
                <th style="padding: 3px;">N° TELÉFONO</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                
                <td> <input type="text" style="padding: 3px;" class="form-control" id="direccion" name="direccion" readonly /></td>
                <td> <input type="text" class="form-control" id="ciudad" name="ciudad" readonly /></td>
                <td> <input type="text" class="form-control" id="provincia1" name="provincia1" readonly /></td>
                <td> <input type="text" class="form-control" id="telefono" name="telefono"  readonly/></td>
            </tr>
        </tbody>
    </table>

    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
          <tr>
            <th>FECHA DE ATENCIÓN</th>
            <th>HORA</th>
            <th>EDAD</th>
            <th>SEXO</th>
            <th>ESTADO CIVIL</th>
            <th>INSTRUCCIÓN</th>
            <th>OCUPACIÓN</th>
            <th>SEGURO DE SALUD</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            {{-- <td><input type="date" class="form-control" id="fecha_atencion" name="fecha_atencion" /></td> --}}
            
            <td style="padding: 3px;">{!! Form::date('fecha_atencion', \Carbon\Carbon::now(), ['class' => 'form-control', 'id'=> 'fecha_atencion', ]) !!}</td>
            <td><input type="time" class="form-control" id="hora_atencion" name="hora_atencion"/></td>

            {{-- <td>{!! Form::time('hora_atencion', \Carbon\Carbon::now(), ['class' => 'form-control', 'id'=> 'hora_atencion', ]) !!}</td> --}}
            <td><input type="text" class="form-control" id="edad" name="edad" readonly /></td>
            <td><input type="text" class="form-control" id="sexo" name="sexo" readonly /></td>
            <td><input type="text" class="form-control" id="estado_civil" name="estado_civil" readonly /></td>    
            <td><input type="text" class="form-control"id="instruccion" name="instruccion" readonly /></td>   
            <td><input type="text" class="form-control" id="ocupacion" name="ocupacion" readonly /></td>    
          <td>
            <select class="form-control" id="seguro_salud" name="seguro_salud">
                <option value="NINGUNO">NINGUNO</option>                     
                <option value="IESS">IESS</option>
                <option value="BMI">BMI</option>
                <option value="PANAMERICAN">PANAMERICAN</option>
                <option value="ECUASANITAS">ECUASANITAS</option>
                <option value="SALUDSA">SALUDSA</option>
                <option value="BUPA">BUPA</option>
                <option value="CONFIAMED">CONFIAMED</option>
                <option value="OTROS">OTROS</option> 
            </select>
          </td>
            
              
          </tr>
        </tbody>
    </table>
    {{-- PERSONA  DE NOTIFICACION --}}
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
          <tr>
            <th>NOMBRE DE LA PERSONA PARA NOTIFICACIÓN </th>
            <th>PARENTESCO AFINIDAD </th>
            <th>DIRECCIÓN</th>
            <th>N° TELÉFONO</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><input class="form-control" type="text" id="per_notific_nombre" name="per_notific_nombre" /></td>
            <td><input class="form-control" type="text" id="per_notific_parentesco" name="per_notific_parentesco" /> </td>
            <td><input class="form-control" type="text" id="per_notific_direccion" name="per_notific_direccion" /></td>
            <td><input class="form-control" type="text" id="per_notific_telefono" name="per_notific_telefono" /> </td>
            
          </tr>
        </tbody>

    </table>
    {{-- PERSONA  ACOMPAÑANTE --}}
    <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
          <tr>
                <th>NOMBRE DEL ACOMPAÑANTE </th>
                <th>N° DE IDENTIDAD </th>
                <th>DIRECCIÓN</th>
                <th>N° TELÉFONO</th>
          </tr>
        </thead>

        <tbody>
          <tr>
                <td><input class="form-control" type="text" id="acompa_nombre" name="acompa_nombre" /></td>
                <td><input class="form-control" type="text" id="acompa_cedula" name="acompa_cedula" /> </td>
                <td><input class="form-control" type="text" id="acompa_direccion" name="acompa_direccion" /></td>
                <td><input class="form-control" type="text" id="acompa_telefono" name="acompa_telefono" /> </td>
          </tr>
        </tbody>
      </table>
      {{-- FORMA DE LLEGADA --}}
      <table border="1" cellspacing="-5" cellpadding="3" width="100%">
        <thead>
          <tr>
                <th>FORMA DE LLEGADA </th>
                <th>FUENTE DE INFORMACIÓN</th>
                <th>INSTITUCIÓN O PERSONA QUE ENTREGA AL PACIENTE </th>
                <th>N° TELÉFONO</th>
          </tr>
        </thead>

        <tbody>
          <tr>
                <td> <select class="form-control" id="forma_llegada" name="forma_llegada">
                    <option value="">...</option anable>
                    <option value="Ambulatorio">AMBULATORIO</option>
                    <option value="Silla de Ruedas">SILLA DE RUEDAS</option>
                    <option value="Camilla">CAMILLA</option>
                </select></td>
                <td>
                    <select class="form-control" id="fuente_informacion" name="fuente_informacion">
                        <option value="">...</option anable>
                        <option value="Directa">DIRECTA</option>
                        <option value="Indirecta">INDIRECTA</option>
                    </select>
                </td>

                <td><input class="form-control" type="text" id="institucion_pers_entrega" name="institucion_pers_entrega" /></td>
                <td><input class="form-control" type="text" id="telefono_pers_entrega" name="telefono_pers_entrega" /> </td>
          </tr>
        </tbody>
      </table>

</div>  
<div>
    <div class="modal fade" id="modalAgregarPaciente" tabindex="-1" role="dialog"
                                aria-labelledby="modalAgregarPacienteLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalAgregarPacienteLabel">Crear Nuevo Paciente</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div>

                                            <div class="form-group">
                                                <label for="nacionalidad">Nacionalidad:</label>
                                                <select name="nacionalidad_p" id="nacionalidad_p" class="form-control">
                                                    <option value="otro" @if (isset($paciente) && $paciente->nacionalidad === 'otro') selected @endif>SELECCIONE UNA NACIONALIDAD</option>
                                                    <option value="ecuatoriano" @if (isset($paciente) && $paciente->nacionalidad === 'ecuatoriano') selected @endif>ECUATORIANO</option>
                                                    <option value="extranjero" @if (isset($paciente) && $paciente->nacionalidad === 'extranjero') selected @endif>EXTRANJERO</option>
                                                    </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                        <p class="font-weight-bold">Dispone de Cédula</p>
                                            
                                                        <label class="mr-2" id="si">
                                                            {!! Form::radio('ced', 1, true) !!}
                                                            SI
                                                        </label>
                                                        <label class="mr-2" id="no">
                                                            {!! Form::radio('ced', 2) !!}
                                                            NO
                                                        </label id="cedula">
                                                        {!! Form::text('cedula', null, [
                                                            'class ' => 'form-control',
                                                            'id' => 'cedula',
                                                            'placeholder' => 'Ingrese la Cédula del Paciente',
                                                        ]) !!}
                                                        {!! Form::label('', '', ['id' => 'lbcedula', 'class' => 'text-danger']) !!} 

                                            {!! Form::label('', '', ['id' => 'lbcedula']) !!} 
                                                        @error('cedula')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                        <small class="text-danger" id="error-cedula"></small>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="form-group">
                                                {!! Form::label('apellido_paterno_p', 'Apellido Paterno:') !!}
                                                {!! Form::text('apellido_paterno_p', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Apellido Paterno del Paciente']) !!} 
                                                
                                                {!! Form::label('', '', ['id' => 'lbapellido_paterno']) !!}                                                
                                                @error('apellido_paterno')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                {!! Form::label('apellido_materno_p', 'Apellido Materno:') !!}
                                                {!! Form::text('apellido_materno_p', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Apellido Materno del Paciente']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbapellido_materno']) !!} 
                                                @error('apellido_materno')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="nombre_p">Nombre:</label>
                                                <input type="text" id="nombre_p" name="nombre_p" class="form-control">
                                            </div> --}}
                                            
                                            <div class="form-group">
                                                {!! Form::label('nombre_p', 'Nombres Completos:') !!}
                                                {!! Form::text('nombre_p', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los nombres del Paciente']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbnombre']) !!} 
                                                @error('nombre')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento:') !!}
                                                {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbfecha_nacimiento']) !!} 
                                                @error('fecha_nacimiento')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                            {{-- <div class="form-group">
                                                {!! Form::label('direccion', 'Dirección de Residencia:') !!}
                                                {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección de residencia del Paciente']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbdireccion']) !!} 
                                                @error('direccion')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>
                                                
                                                <div class="form-group">
                                                    {!! Form::label('provincia_id', 'Provincia') !!}
                                                    {!! Form::select('provincia_id', $provincias->pluck('descripcion', 'id'), null, ['class' => 'form-control', 'id' => 'provincia_id']) !!}
                                                    {!! Form::label('', '', ['id' => 'lbprovincia_id']) !!} 
                                                </div>
                                                
                                                <div class="form-group">
                                                    {!! Form::label('ciudad_id', 'Ciudad') !!}
                                                    {!! Form::select('ciudad_id', [], null, ['class' => 'form-control', 'id' => 'ciudad_id']) !!}
                                                    {!! Form::label('', '', ['id' => 'lbciudad_id']) !!} 
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group">
                                                    {!! Form::label('estado_civil', 'Estado Civil:') !!}
                                                    {!! Form::select('estado_civil', ['soltero/a' => 'Soltero/a', 'casado/a' => 'Casado/a', 'divorciado/a' => 'Divorciado/a', 'viudo/a' => 'Viudo/a', 'union libre' => 'Unión Libre'], null, ['class' => 'form-control']) !!} 
                                                    {!! Form::label('', '', ['id' => 'lbestado_civil']) !!} 
                                                    @error('estado_civil')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                
                                                </div>
                                                
                                                <div class="form-group">
                                                    {!! Form::label('instruccion', 'Instrucción:') !!}
                                                    {!! Form::select('instruccion', ['sin instrucción basica' => 'Sin Instrucción Básica', 'basica' => 'Básica', 'bachiller' => 'Bachiller', 'superior' => 'Superior', 'especialidad' => 'Especialidad'], null, ['class' => 'form-control']) !!} 
                                                    {!! Form::label('', '', ['id' => 'lbinstruccion']) !!} 
                                                    @error('instruccion')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    {!! Form::label('ocupacion', 'Ocupación:') !!}
                                                    {!! Form::text('ocupacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la ocupación del Paciente']) !!} 
                                                    {!! Form::label('', '', ['id' => 'lbocupacion']) !!} 
                                                    @error('ocupacion')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                
                                                </div>
                                            
                                            
                                            
                                                <div class="form-group">
                                                {!! Form::label('telefono', 'Teléfono:') !!}
                                                {!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono del Paciente', 'maxlength' => 10]) !!} 
                                                {!! Form::label('', '', ['id' => 'lbtelefono']) !!} 
                                                @error('telefono')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div> --}}
                                            
                                            <div class="form-group">
                                                {!! Form::label('sexo_id', 'Sexo:') !!}
                                                {!! Form::select('sexo_id', $sexo, null, ['class' => 'form-control']) !!} 
                                                {!! Form::label('', '', ['id' => 'lbsexo_id']) !!} 
                                                @error('sexo_id')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            
                                            </div>

                                            <div id="mensaje-exito" class="alert alert-success" style="display: none;"></div>

                                            <div id="mensaje-error" class="alert alert-danger" style="display: none;"></div>
                
                                            
                                            <!-- Otros campos del paciente según tus necesidades -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="btnGuardarPaciente">Guardar
                                                Paciente</button>
                                            <button type="button" class="btn btn-success ml-auto"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="mensaje-exito" class="alert alert-success" style="display: none;"></div>

                            <div id="mensaje-error" class="alert alert-danger" style="display: none;"></div>

</div>