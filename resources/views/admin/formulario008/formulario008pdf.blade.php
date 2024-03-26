<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario 008</title>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        {{-- <link rel="stylesheet" href="{{ asset('css/ficha08.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/ficha.css') }}" /> --}}
        <style>
            @page {
                margin-left: 0.5cm;
                margin-right: 0.5cm;
                margin-top: 0.2cm;
                margin-bottom: 0.3cm;
            }
    
            html {
                height: 100%;
                position: relative;
            }
    
            body {
                background-color: #F7F7F7;
                font-family: Arial, sans-serif;
                color: #333;
                margin: 0;
                margin-bottom: 40px;
    
            }
    
            h1 {
                font-size: 28px;
                color: #3498db;
                margin-bottom: 0px;
            }
    
            table {
                border-collapse: collapse;
                margin: 0;
                padding: 0px;
                width: 100%;
                background-color: #fff;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    
                margin-top: auto;
            }
    
            table th,
            table td {
                padding: 3px;
                text-align: center;
                border-bottom: 1px solid #0f0904;
                border: 1px solid #333;
                font-size: 7px;  
    
            }
    
            table th {
                background-color: #b3a386;
                color: #240c0c;
                font-size: 9px;
                text-align: center;
            }
    
            footer {
                font-size: 9px;
                color: #756657;
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 125;
                margin-top: 0%;
            }
    
            .imagenes {
                display: flex;
                justify-content: center;
                max-width: none;
            }
    
            .img-1 {
                display: flex;
                justify-content: center;
                margin-left: 280px;
                margin-right: 120px;
                height: 45px;
                text-align: center;
                max-width: none;
    
    
            }
    
           /*  .img-2 {
    
                display: flex;
                justify-content: center;
                height: 220px;
                text-align: center;
                max-width: none;
    
    
            } */
    
            footer {
                font-size: 9px;
                color: #3e2001;
                /*
            text-align: center; */
                        /* margin: 150;
            margin-top: auto;
            */
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 125;
                margin-top: 0%;
            }
    
            .tabla_footer {
    
                padding: 3px;
                width: auto;
                background-color: #3e2001;
                margin-top: 0;
            }
    
            .tabla_footer th {
                background-color: #c07223;
                color: #3e2001;
                font-size: 7px;
            }
    
            .tabla_footer th,
            .tabla_footer td {
                padding: 1px;
                text-align: right;
                border-bottom: 0px solid #c07223;
                border: 0px solid #333;
                font-size: 8.7px;
    
            }
    
            .tabla_medicamentos {
    
                border-collapse: collapse;
                margin: 0;
                padding: 1px;
                width: 100%;
                background-color: #fff;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                margin-top: auto;
            }
    
            .tabla_medicamentos th {
                background-color: #9776079c;
                color: #753f05;
                font-size: 11px;
            }
    
            .tabla_medicamentos th,
            .tabla_medicamentos td {
                padding: 0px;
                text-align: left;
                border-bottom: 1px solid #494847;
                border: 1px solid #333;
                font-size: 10px;
    
            }
    
            .datos_iniciales_1 {
    
                float: left;
                background-color: #f36b11;
            }
    
            .datos_iniciales_2 {
                background-color: #f31195;
                float: right;
            }
            input[type="checkbox"] {
            width: 10px; /* Ancho del checkbox */
            height: 20px; /* Altura del checkbox */
            }
                        
        </style>
    </head>
    <body>
        <header>
            {{-- IMAGENES DE ENCABEZADO --}}
            <img class="img-1"
            src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logos/logo.png'))) }}"/>
            N° <colspan="2" style="color: red; text-align: center; font-size: 18px">{{ $formulario008->id }}
            <table>
                <thead>
                    <tr>
                        <th>INSTITUCIÓN DEL SISTEMA</th>
                        <th>UNIDAD OPERATIVA</th>
                        <th>CÓDIGO</th>
                        <th>LOCALIZACIÓN</th>
                        <th>NÚMERO <br> HISTORIA CLÍNICA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-size: 9px; color: black;">RIO HOSPITAL</td>
                        <td style="font-size: 9px; color: black;">PRIVADO</td>
                        <td style="font-size: 9px; color: black;">{{ $formulario008->codigo }}</td>
                        <td style="font-size: 9px">
                            <table>
                                <thead>
                                        <th>PROVINCIA</th>
                                        <th>CIUDAD</th>
                                        <th>PARROQUIA</th>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 9px; color: black;">CHIMBORAZO </td>
                                        <td style="font-size: 9px; color: black;">RIOBAMBA </td>
                                        <td style="font-size: 9px; color: black;">LIZARZABURU</td>

                                    </tr>

                                </tbody>
                            </table>
                            </td>
                            
                            <td style="font-size: 9px; color: black;">{{ $formulario008->historia_clinica }}</td>
                          
                    </tr>
                </tbody>

            </table>
        </header>
        <br>
        {{--  1 REGISTRO DE ADMISION --}}
        <div class="form-group">
            <table border="1" cellspacing="-5" cellpadding="3" width="100%">
                <thead>
                    <tr> 
                        <th style="text-align: left; font-size: 11px; color: #270000;  background-color: #723c07;" colspan="9"> 1. REGISTRO DE ADMISIÓN </th>
                    </tr>
                    <tr>
                        <th colspan="2">APELLIDO PATERNO</th>
                        <th colspan="2">APELLIDO MATERNO</th>
                        <th colspan="3" >NOMBRES</th>
                        <th>NACIONALIDAD</th>
                        <th>N CEDULA DE CIUDADANIA </th>               
        
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <td colspan="2" style="font-size: 9px">{{ $formulario008->paciente->apellido_paterno }}</td>
                        <td colspan="2" style="font-size: 9px">{{ $formulario008->paciente->apellido_materno }}</td>
                        <td colspan="3" style="font-size: 9px">{{ $formulario008->paciente->nombre }}</td>
                        <td style="font-size: 9px">{{ strtoupper ($formulario008->paciente->nacionalidad )}}</td>                        
                        <td style="font-size: 9px">{{ $formulario008->paciente->cedula }}</td>        
                    </tr>
                </tbody>
                <thead>
                    
                    <tr>
                        <th colspan="6">DIRECCIÓN DE RESIDENCIA HABITUAL</th>
                        <th >CANTÓN</th>
                        <th >PROVINCIA</th>
                        <th >N° TELÉFONO</th>
                    </tr>

                </thead>
                <tbody>
                    <td colspan="6"> {{ $formulario008->paciente->direccion ?? '' }} </td>
                    <td> {{ mb_strtoupper($formulario008->paciente->ciudad->descripcion ?? '' )}} </td>
                    <td> {{ mb_strtoupper($formulario008->paciente->ciudad->provincia->descripcion ?? '' )}} </td>
                    <td style="font-size: 9px"> {{ mb_strtoupper ($formulario008->paciente->telefono ?? '')}}</td>      
                    
                </tbody>
                
                <thead>
                    
                    <tr>
                        <th>FECHA DE ATENCIÓN</th>
                        <th>HORA</th>
                        <th>EDAD</th>
                        <th>SEXO</th>
                        <th>ESTADO CIVIL</th>
                        <th>INSTRUCCION</th>
                        <th colspan="2">OCUPACIÓN</th>
                        <th>SEGURO DE SALUD</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td> {{ $formulario008->fecha_atencion ?? '' }} </td>
                        <td>{{ substr($formulario008->hora_atencion, 0, 5) }}</td>
                        <td> {{ $formulario008->paciente->edad ?? '' }} </td>
                        <td> {{ $formulario008->paciente->sexo->descripcion ?? '' }} </td>
                        <td> {{ mb_strtoupper ($formulario008->paciente->estado_civil ?? '' )}}</td> 
                        <td> {{ mb_strtoupper ($formulario008->paciente->instruccion ?? '' )}} </td>
                        <td colspan="2"> {{ mb_strtoupper ($formulario008->paciente->ocupacion ?? '' )}}</td>   
                        <td> {{ mb_strtoupper ($formulario008->seguro_salud ?? '') }}</td> 
                        
                    </tr>
                         
                    
                </tbody>
                <thead>
                    <tr>
                        <tr>
                            <th colspan="4">NOMBRE DE LA PERSONA PARA NOTIFICACIÓN </th>
                            <th colspan="2">PARENTESCO AFINIDAD </th>
                            <th colspan="2">DIRECCIÓN</th>
                            <th>N° TELÉFONO</th>
                        </tr>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td colspan="4"> {{ mb_strtoupper ($formulario008->per_notific_nombre ?? '' )}} </td>
                        <td colspan="2"> {{ mb_strtoupper ($formulario008->per_notific_parentesco ?? '' )}} </td>
                        <td colspan="2"> {{ mb_strtoupper ($formulario008->per_notific_direccion ?? '' )}} </td>
                        <td> {{ mb_strtoupper ($formulario008->per_notific_telefono ?? '' )}} </td> 

                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <tr>
                            <th colspan="4">NOMBRE DEL ACOMPAÑANTE </th>
                            <th colspan="2">N° DE CÉDULA DE IDENTIDAD </th>
                            <th colspan="2">DIRECCIÓN</th>
                            <th>N° TELÉFONO</th>
                        </tr>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td colspan="4"> {{ mb_strtoupper ($formulario008->acompa_nombre ?? '' )}} </td>
                        <td colspan="2"> {{ mb_strtoupper ($formulario008->acompa_cedula ?? '' )}} </td>
                        <td colspan="2"> {{ mb_strtoupper ($formulario008->acompa_direccion ?? '') }} </td>
                        <td> {{ mb_strtoupper ($formulario008->acompa_telefono ?? '' )}} </td> 

                    </tr>
                </tbody>
                
                <thead>
                    <tr>
                        <tr>
                            <th colspan="6">FORMA DE LLEGADA </th>
                            <th> FUENTE DE INFORMACIÓN </th>
                            <th >INSTITUCION O PERSONA QUE ENTREGA AL PACIENTE</th>
                            <th>N° TELÉFONO</th>
                        </tr>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                            
                            
                            <th>AMBULATORIO</th>
                            <td>
                                <input style="display: inline-block; transform: scale(1.5);"  type="checkbox" {{ $formulario008->forma_llegada == 'Ambulatorio' ? 'checked' : '' }}/>
                       
                            </td>
                            
                            <th>SILLA DE RUEDAS</th>
                            <td>
                                <input style="display: inline-block; transform: scale(1.5);" type="checkbox"  {{ $formulario008->forma_llegada == 'Silla de Ruedas' ? 'checked' : '' }}/>
                            </td>
                            
                            <th>CAMILLA</th>
                            <td>
                                <input style="  transform: scale(1.5); display: inline-block;"  type="checkbox" {{ $formulario008->forma_llegada == 'Camilla' ? 'checked' : '' }}/>
                            </td> 
                            
                        <td > {{ mb_strtoupper ($formulario008->fuente_informacion ?? '') }} </td>
                        <td > {{ mb_strtoupper ($formulario008->institucion_pers_entrega ?? '') }} </td>
                        <td > {{ mb_strtoupper ($formulario008->telefono_pers_entrega ?? '' )}} </td> 

                    </tr>
                </tbody>
            </table>
        </div>
        {{--  2 INICIO DE ATENCIÓN --}}
        <div class= "form-group">
            <br>
            <table border="1" cellspacing="-5" cellpadding="3" width="100%">
                <thead>
                    <tr> 
                        <th colspan="15" style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 2. INICIO DE ATENCIÓN </th>
                    </tr>
                    <tr>
                        <th style="font-size: 7px">HORA</th>
                        <td>{{ substr($formulario008->hora_llegada, 0, 5) }}</td>
                        
                        
                        <th style="font-size: 7px">VIA AÉREA LIBRE</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->via_aerea_libre == 'Si' ? 'checked' : '' }}/>
                        </td> 

                        <th style="font-size: 7px">VIA AÉREA OBSTRUIDA</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->via_aerea_obstruida == 'Si' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 7px">GRUPO RH</th>
                        <td style="font-size: 9px">{{ mb_strtoupper($formulario008->grupo_rh)}}</td> 
                                               
                        

                        <th style="font-size:  7px">CONDICIONES DE LLEGADA </th>
                        <th style="font-size:  7px" >ESTABLE</th>
                            <td>
                                <input style="display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->condicion_llegada == 'Estable' ? 'checked' : '' }}/>
                       
                            </td>
                            
                            <th style="font-size:  7px">INESTABLE</th>
                            <td>
                                <input style="display: inline-block; transform: scale(1.3);" type="checkbox"  {{ $formulario008->condicion_llegada == 'Inestable' ? 'checked' : '' }}/>
                            </td>
                            
                            <th style="font-size:  7px">OTRO</th>
                            <td>
                                <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->condicion_llegada == 'Otro' ? 'checked' : '' }}/>
                            </td>                         
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <th>MOTIVO DE LLEGADA</th>
                        <td colspan="14" style="font-size: 9px">{{ mb_strtoupper($formulario008->motivo_llegada )}}</td>          
                    </tr>
                </tbody>                

            </table border="1" cellspacing="-5" cellpadding="3" width="100%">
        </div>
        {{--  3 ACCIDENTE VIOLENCIA E INTOXICACIÓN --}}
        <div class= "form-group">
            <br>
            <table>
                <thead>
                    <tr> 
                        <th colspan="18" style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 3 ACCIDENTE, VIOLENCIA, INTOXICACIÓN </th>
                        <th>NO APLICA</th>
                        <td>
                            <input style="transform: scale(1.3); display: inline-block; color: {{ $formulario008->aplica_intoxicacion == 'Si' ? 'red' : 'inherit' }};" type="checkbox" {{ $formulario008->aplica_intoxicacion == 'Si' ? 'checked' : '' }} />
                       
                        </td>
                    </tr>
                    <tr>
                        <th colspan="6">LUGAR DEL EVENTO</th>
                        <th colspan="7">DIRECCIÓN DEL EVENTO</th>
                        <th colspan="3">FECHA</th>
                        <th colspan="2">HORA</th>
                        <th colspan="2">VEHICULO O ARMA</th>                                          
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        
                        <td colspan="6">{{ mb_strtoupper($formulario008->lugar_evento )}}</td>  
                        <td colspan="7">{{ mb_strtoupper($formulario008->direccion_evento )}}</td> 
                        <td colspan="3">{{ $formulario008->fecha_evento }}</td> 
                        <td colspan="2">{{ $formulario008->hora_evento }}</td>         
                        <td colspan="2">{{ mb_strtoupper($formulario008->vehiculo_arma )}}</td>         
                    </tr>
                </tbody>   
                <thead>
                    
                    <tr>
                        <th colspan="4">TIPO DE EVENTO</th> 
                        <th colspan="16">AUTORIDAD COMPETENTE</th>                                        
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <th style="font-size:  7px" >ACCIDENTE</th>
                            <td colspan="2">
                                <input style="display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->tipo_evento == 'Accidente' ? 'checked' : '' }}/>
                       
                            </td>
                            <th style="font-size:  7px">ENVENENAMIENTO</th>
                            <td colspan="2">
                                <input style="display: inline-block; transform: scale(1.3);" type="checkbox"  {{ $formulario008->tipo_evento == 'Envenenamiento' ? 'checked' : '' }}/>
                            </td>
                            
                            <th style="font-size:  7px">VIOLENCIA</th>
                            <td colspan="2">
                                <input style="display: inline-block; transform: scale(1.3);" type="checkbox"  {{ $formulario008->tipo_evento == 'Violencia' ? 'checked' : '' }}/>
                            </td>
                            
                            <th style="font-size:  7px">OTRO</th>
                            <td colspan="2">
                                <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->tipo_evento == 'Otro' ? 'checked' : '' }}/>
                            </td>   
                        <td colspan="4">{{ mb_strtoupper($formulario008->autoridad_competente )}}</td>
                        <th>HORA DENUNCIA</th>                           
                        <td>{{ substr($formulario008->hora_denuncia, 0, 5) }}</td>  

                        <th>CUSTODIA POLICIAL</th>  
                        
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->custodia_policial == 'Si' ? 'checked' : '' }}/>
                        </td>         
                    </tr>
                </tbody> 
                  
                <thead>
                    
                    <tr>
                        <th colspan="12">INTOXICACIÓN</th> 
                        <th colspan="8">VIOLENCIA</th>                                        
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        {{-- OCUPA 12 ESPACIOS --}}
                        <th style="font-size:  6px" >ALIENTO ETÍLICO</th>
                            <td >
                                <input style="display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->aliento_etilico == 'SI' ? 'checked' : '' }}/>
                       
                            </td>
                            <th style="font-size:  6px">VALOR ALCHOTECK</th>
                            <td>{{ mb_strtoupper($formulario008->valor_alcochekc )}}</td> 
                            
                            <th style="font-size:  6px">HORA EXAMÉN</th>
                            <td>{{ substr($formulario008->hora_examen, 0, 5) }}</td>
                            
                            <th style="font-size:  6px">SE HACE ALCOHOLEMIA</th>
                            <td >
                                <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->alcoholemia == 'Si' ? 'checked' : '' }}/>
                            </td>   
                            <th style="font-size:  6px">OTRAS SUSTANCIAS</th>
                            <td >
                                <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->otras_sustancias1 == 'Si' ? 'checked' : '' }}/>
                            </td> 
                            <th style="font-size:  6px">OTRAS SUSTANCIAS</th>

                            
                            <td >
                                <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->otras_sustancias2 == 'Si' ? 'checked' : '' }}/>
                            </td>   
                            {{-- OCUPA 8 ESPACIOS  --}}
                            <th style="font-size:  6px" >SOSPECHA</th>
                            <td >
                                <input style="display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->v_sospecha == 'SI' ? 'checked' : '' }}/>
                       
                            </td>
                            <th style="font-size:  6px" >ABUSO FÍSICO</th>
                            <td >
                                <input style="display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->v_abuso_fisico == 'SI' ? 'checked' : '' }}/>
                       
                            </td>
                            <th style="font-size:  6px" >ABUSO PSICOLÓGICO</th>
                            <td >
                                <input style="display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->v_abuso_psicologico == 'SI' ? 'checked' : '' }}/>
                       
                            </td>
                            <th style="font-size:  6px" >ABUSO SEXUAL</th>
                            <td >
                                <input style="display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->v_abuso_sexual == 'SI' ? 'checked' : '' }}/>
                       
                            </td>                    
                                   
                    </tr>
                </tbody>    
                
                <thead>
                    
                    <tr>
                        <th colspan="9">QUEMADURAS</th> 
                        <th colspan="5">PICADURA</th>  
                        <th colspan="6">MORDEDURAS</th>                                       
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        {{-- OCUPA 12 ESPACIOS --}}
                        <th style="font-size:  6px" >GRADO I</th>
                            <td >
                                <input style=" margin-left: 10px; margin-right: 10px; display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->quemaduras == 'grado i' ? 'checked' : '' }}/>
                       
                            </td>
                        <th style="font-size:  6px">GRADO II</th>
                        <td >
                            <input style="margin-left: 10px; margin-right: 10px; display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->quemaduras == 'grado ii' ? 'checked' : '' }}/>
                   
                        </td>
                        
                        <th style="font-size:  6px">GRADO III</th>
                        <td >
                            <input style=" margin-left: 10px; margin-right: 10px; display: inline-block; transform: scale(1.3);"  type="checkbox" {{ $formulario008->quemaduras == 'grado iii' ? 'checked' : '' }}/>
                   
                        </td>

                        <th style="font-size:  6px">PORCENTAJE SUPERFICIE</th>
                            <td colspan="2">{{ mb_strtoupper($formulario008->porcent_superficie )}}</td> 
                            
                            
                            <td colspan="5">{{ mb_strtoupper($formulario008->picadura )}}</td> 
                            <td colspan="6">{{ mb_strtoupper($formulario008->mordedura )}}</td> 
                                       
                                   
                    </tr>
                    <td colspan="20"></td>
                </tbody>   

            </table>
        </div>
        {{--  4 ANTECEDENTES PERSONALES Y FAMILIARES RELEVANTES --}}
        <div class= "form-group">
            <br>
            <table border="1" cellspacing="-5" cellpadding="3" width="100%">
                <thead>
                    <tr> 
                        <th colspan="14" style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 4. ANTECEDENTES PERSONALES Y FAMILIARES RELEVANTES </th>
                        <th>NO APLICA</th>
                        <td>
                            <input style="transform: scale(1.3); display: inline-block; color: {{ $formulario008->aplica_antecedentes == 'Si' ? 'red' : 'inherit' }};" type="checkbox" {{ $formulario008->aplica_antecedentes == 'Si' ? 'checked' : '' }} />
                             
                        </td>
                    </tr>
                    <tr>
                        <th style="font-size: 7px">1. ALÉRGICOS</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->alergicos == 'Si' ? 'checked' : '' }}/>
                        </td> 

                        <th style="font-size: 7px">2. CLÍNICOS</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->clinicos == 'Si' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 7px">3. GINECOLÓGICOS</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->ginecologicos == 'Si' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 7px">4. TRAUMATOLÓGICOS</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->traumatologicos == 'Si' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 7px">5. PEDIÁTRICOS</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->pediatricos == 'Si' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 7px">7. QUIRÚRGICOS</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->quirurgicos == 'Si' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 7px">8. FARMACOLÓGICOS</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->farmacologicos == 'Si' ? 'checked' : '' }}/>
                        </td> 
                        
                        <th style="font-size: 7px">9. OTROS</th>
                        <td>
                            <input style="  transform: scale(1.3); display: inline-block;"  type="checkbox" {{ $formulario008->otros == 'Si' ? 'checked' : '' }}/>
                        </td>                                            
                    </tr>
                      
                </thead>
        
                <tbody>
                    <tr>
                        {{-- <td colspan="16">
                            <textarea style="font-size: 7px; text-align: justify; height: 25px; font-family: Arial, sans-serif;" readonly>{{ mb_strtoupper($formulario008->obser_antec_personales) }}</textarea>

                        </td>  --}}    
                        <td colspan="16">
                            <?php
                            // Obtener el texto de la observación desde tu variable $formulario008
                            $observacion_ant = mb_strtoupper($formulario008->obser_antec_personales);
                
                            // Contar la cantidad de palabras en el texto
                            $palabras = str_word_count($observacion_ant);
                
                            // Determinar el tamaño de la fuente según la cantidad de palabras
                            $tamañoFuente = '12px'; // Tamaño de fuente por defecto
                
                            if ($palabras <= 10) {
                                $tamañoFuente = '9px'; // Si hay 10 palabras o menos
                            } elseif ($palabras > 10 && $palabras <= 50) {
                                $tamañoFuente = '6px'; // Si hay entre 11 y 100 palabras
                            } else {
                                $tamañoFuente = '5px'; // Si hay más de 100 palabras
                            }
                            ?>
                
                            <textarea style="font-size: <?= $tamañoFuente ?>; text-align: justify; height: 35px; font-family: Arial, sans-serif;" readonly><?= $observacion_ant ?></textarea>
                        </td>                     
                         
                    </tr>
                </tbody>                

            </table border="1" cellspacing="-5" cellpadding="3" width="100%">
        </div>

        {{--  5 ENFERMEDAD ACTUAL Y REVISIÓN DE SISTEMAS --}}
        <div class= "form-group">
            <br>
            <table border="1" cellspacing="-5" cellpadding="3" width="100%">
                <thead>
                    <tr> 
                        <th style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 5. ENFERMEDAD ACTUAL Y REVISIÓN DE SISTEMAS</th>
                        <th>NO APLICA</th>
                        <td>
                            <input style="transform: scale(1.3); display: inline-block; color: {{ $formulario008->aplica_actual_sistemas == 'Si' ? 'red' : 'inherit' }};" type="checkbox" {{ $formulario008->aplica_actual_sistemas == 'Si' ? 'checked' : '' }} />
                                  
          
                        </td>
                    </tr>                   
                      
                </thead>
        
                <tbody>
                    <tr>
                        {{-- <td colspan="3">
                            <textarea style="font-size: 7px; text-align: justify; height: 25px; font-family: Arial, sans-serif;" readonly>{{ mb_strtoupper($formulario008->enf_actual_sistemas) }}</textarea>

                        </td> --}}  
                        <td colspan="3">
                            <?php
                            // Obtener el texto de la observación desde tu variable $formulario008
                            $obser_enf_actual = mb_strtoupper($formulario008->enf_actual_sistemas);
                
                            // Contar la cantidad de palabras en el texto
                            $palabras = str_word_count($obser_enf_actual);
                
                            // Determinar el tamaño de la fuente según la cantidad de palabras
                            $tamañoFuente = '12px'; // Tamaño de fuente por defecto
                
                            if ($palabras <= 10) {
                                $tamañoFuente = '9px'; // Si hay 10 palabras o menos
                            } elseif ($palabras > 10 && $palabras <= 50) {
                                $tamañoFuente = '6px'; // Si hay entre 11 y 100 palabras
                            } else {
                                $tamañoFuente = '5px'; // Si hay más de 100 palabras
                            }
                            ?>
                
                            <textarea style="font-size: <?= $tamañoFuente ?>; text-align: justify; height: 25px; font-family: Arial, sans-serif;" readonly><?= $obser_enf_actual ?></textarea>
                        </td>                     
                         
                    </tr>
                </tbody>                

            </table border="1" cellspacing="-5" cellpadding="3" width="100%">
        </div>

        {{--  6 CARACTERÍSTICAS DEL DOLOR --}}
        <div class= "form-group">
            <br>
            
            <table border="1" cellspacing="-5" cellpadding="3" width="100%">
                <thead>
                    <tr> 
                        <th colspan="5" style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 6. CARACTERÍSTICAS DEL DOLOR</th>
                        <th>NO APLICA</th>
                        
                        <td>
                            <input style="transform: scale(1.3); display: inline-block; color: {{ $formulario008->aplica_caracteristicas_dolor == 'Si' ? 'red' : 'inherit' }};" type="checkbox" {{ $formulario008->aplica_caracteristicas_dolor == 'Si' ? 'checked' : '' }} />
                             
                        </td>
                    </tr>
                    <tr>
                        <th >REGIÓN ANATÓMICA</th>
                        <th >PUNTO DOLOROSO</th>
                        <th >EVOLUCIÓN</th>
                        <th >TIPO</th>
                        <th >MODIFICACIONES</th>
                        <th >ALIVIA CON</th>
                        <th >INTENSIDAD</th>

                    </tr>
                      
                </thead>        
                
                <tbody>
                    <tr>
                        <td >{{ mb_strtoupper($formulario008->region_anatomica_1 )}}</td>                         
                        <td >{{ mb_strtoupper($formulario008->punto_doloroso_1 )}}</td> 
                        <td >{{ mb_strtoupper($formulario008->evolucion_1 )}}</td>                         
                        <td >{{ mb_strtoupper($formulario008->tipo_1 )}}</td> 
                        <td >{{ mb_strtoupper($formulario008->modificaciones_1 )}}</td>                         
                        <td >{{ mb_strtoupper($formulario008->alivia_con_1 )}}</td>                        
                        <td >{{ mb_strtoupper($formulario008->intensidad_1 )}}</td>
                         
                    </tr>
                    
                    <tr>
                        <td >{{ mb_strtoupper($formulario008->region_anatomica_2 )}}</td>                         
                        <td >{{ mb_strtoupper($formulario008->punto_doloroso_2 )}}</td> 
                        <td >{{ mb_strtoupper($formulario008->evolucion_2 )}}</td>                         
                        <td >{{ mb_strtoupper($formulario008->tipo_2 )}}</td> 
                        <td >{{ mb_strtoupper($formulario008->modificaciones_2 )}}</td>                         
                        <td >{{ mb_strtoupper($formulario008->alivia_con_2 )}}</td>                        
                        <td >{{ mb_strtoupper($formulario008->intensidad_2 )}}</td>
                         
                    </tr>
                </tbody>  
                
            </table border="1" cellspacing="-5" cellpadding="3" width="100%">
             <h1 style="text-align: right ; font-size: 9px; color: #270000">EMERGENCIA (1)</h1>

        </div>   
        
       {{--  PAGINA DOS --}} 

        {{-- 7 SIGNOS VITALES, MEDICIONES Y VALORES --}}              
        <div class= "form-group">
           
           <table border="0" cellspacing="-5" cellpadding="3" width="100%">
            <br>
               <thead>
                   <tr> 
                       <th colspan="18" style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 7. SIGNOS VITALES, MEDICIONES Y VALORES </th>
                       
                   </tr>
                   <tr>
                        <th  style="font-size: 5px; padding: 2px; vertical-align: middle;" >PRESIÓN <br> ARTERIAL</th>                     
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;"  >{{ mb_strtoupper($formulario008->presion_arterial )}}</td>

                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >F. CARDIACA <br> min</th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;"  >{{ mb_strtoupper($formulario008->frecuencia_cardiaca )}}</td>

                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" colspan="3" >F. RESPIRATORIA <br> min</th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;"  >{{ mb_strtoupper($formulario008->frecuencia_respiratoria )}}</td>

                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >TEMP BUCAL <br> °C </th>                     
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;"  >{{ mb_strtoupper($formulario008->temperatura_bucal )}}</td>

                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >TEMP AXILAR <br> °C </th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;"  >{{ mb_strtoupper($formulario008->temperatura_axilar )}}</td>

                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >PESO <br> Kg. </th>                     
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;"  colspan="2" >{{ mb_strtoupper($formulario008->peso )}}</td>

                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;"  >TALLA <br> m</th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;"  colspan="2" >{{ mb_strtoupper($formulario008->talla )}}</td>
                                                                                        
                   </tr>
                     
               </thead>
       
               <tbody>
                    <tr>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >GLASGOW</th>                     
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >OCULAR </th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;" >{{ mb_strtoupper($formulario008->glasgow_ocular )}}</td>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >VERBAL</th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;" >{{ mb_strtoupper($formulario008->glasgow_verbal )}}</td>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >MOTORA</th>                     
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;" >{{ mb_strtoupper($formulario008->glasgow_motora )}}</td>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >TOTAL</th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;" >{{ mb_strtoupper($formulario008->glasgow_total )}}</td>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >REACCIÓN PUPILA <br> DER. </th>                     
                            <td  style="font-size: 7px; padding: 2px; vertical-align: middle;">{{ mb_strtoupper($formulario008->rec_pupila_derecha )}}</td>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >REACCIÓN PUPILA <br> IZQ. </th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;" >{{ mb_strtoupper($formulario008->rec_pupila_izquierda )}}</td>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >T. LLENADO <br> CAPILAR </th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;" >{{ mb_strtoupper($formulario008->tej_llenado_capilar )}}</td>
                                
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >PERI. CEFAL <br> cm </th>                         
                            <td style="font-size: 7px; padding: 2px; vertical-align: middle;" colspan="2">{{ mb_strtoupper($formulario008->perimetro_cefalico )}}</td>
                                                                                        
                </tr>
               </tbody>                

           </table border="1" cellspacing="-5" cellpadding="3" width="100%">
        </div>

        {{-- 8 EXÁMEN FÍSICO --}}     
        <div class= "form-group">
           
            <table border="0" width="100%" style="border-spacing: 0px 0px;" >
                <br>
                <thead>
                    <tr> 
                        <th colspan="15" style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 8. EXÁMEN FÍSICO</th>
                        
                    </tr>
                    <tr>
                        <th></th>
                        <th  style="font-size: 7px">CP</th> 
                        <th  style="font-size: 7px">SP</th> 
                        <th></th>  
                        <th  style="font-size: 7px">CP</th>   
                        <th  style="font-size: 7px">SP</th>
                        <th></th>   
                        <th  style="font-size: 7px">CP</th>   
                        <th  style="font-size: 7px">SP</th> 
                        <th></th>                      
                        <th  style="font-size: 7px">CP</th> 
                        <th  style="font-size: 7px">SP</th>  
                        <th></th>                      
                        <th  style="font-size: 7px">CP</th> 
                        <th  style="font-size: 7px">SP</th>                   
                                                                                        
                    </tr>
                    
                </thead>    
                <tbody>
                    <tr>    
                                                
                
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >1-R PIEL Y FANERAS</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->r_piel_faneras == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_piel_faneras == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" > 6-R BOCA</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_boca == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_boca == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" > 11-R ABDOMEN</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_abdomen == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_abdomen == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" > 1-S ÓRGANOS DE <br> LOS SENTIDOS</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->s_organos_sentidos == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->s_organos_sentidos == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" > 6-S URINARIO</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->s_urinario == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->s_urinario == 'SP' ? 'checked' : '' }}/></td>        
                    </tr>

                    <tr>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >2-R CABEZA</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_cabeza == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_cabeza == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >7-R ORO FARINGE</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_oro_faringe == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.5rem;" type="checkbox" {{ $formulario008->r_oro_faringe == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >12-R COLUMNA <br> VERTEBRAL</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_columna_vertebral == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_columna_vertebral == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >2-S RESPIRATORIO</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->s_respiratorio == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->s_respiratorio == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >7-S MÚSCULO <br> ESQUELÉTICO</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->s_musculo_esqueletico == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->s_musculo_esqueletico == 'SP' ? 'checked' : '' }}/></td>        
                    </tr>

                    <tr>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >3-R OJOS</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->r_ojos == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->r_ojos == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >8-R CUELLO</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->r_cuello == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->r_cuello == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >13-INGLE-PERINÉ</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->r_ingle_perine == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->r_ingle_perine == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >3-S CARDIOVASCULAR</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->s_cardiovascular == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->s_cardiovascular == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >8-S ENDÓCRINO</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->s_endocrino == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"  type="checkbox" {{ $formulario008->s_endocrino == 'SP' ? 'checked' : '' }}/></td>        
                    </tr>

                    <tr>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >4-R OIDOS</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_oidos == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_oidos == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >9-R AXILAS-MAMAS</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_axilas_mamas == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_axilas_mamas == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >14-R MIEMBROS <br> SUPERIORES</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_miembros_superiores == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->r_miembros_superiores == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >4-S DIGESTIVO</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->s_digestivo == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->s_digestivo == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >9-S HEMOLENFÁTICO</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->s_hemolinfatico == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;"   type="checkbox" {{ $formulario008->s_hemolinfatico == 'SP' ? 'checked' : '' }}/></td>        
                    </tr>

                    <tr>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >5-R NARIZ</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_nariz == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_nariz == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >10-R TÓRAX</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_torax == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_torax == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >15-R MIEMBROS <br> INFERIORES</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_miembros_inferiores == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->r_miembros_inferiores == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >5-S GENITAL</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->s_genital == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->s_genital == 'SP' ? 'checked' : '' }}/></td>
                        <th style="font-size: 6px ; line-height: 1; white-space: nowrap;" >10-S NEUROLÓGICO</th>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->s_neurologico == 'CP' ? 'checked' : '' }}/></td>
                        <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.75); display: inline-block; height: 0.75rem;" type="checkbox" {{ $formulario008->s_neurologico == 'SP' ? 'checked' : '' }}/></td>        
                    </tr>
                    <tr>
                        {{-- <td colspan="15">
                            <textarea style="font-size: 7px; text-align: justify; height: 40px; font-family: Arial, sans-serif;" readonly>{{ mb_strtoupper($formulario008->obser_examen_fisico) }}</textarea>

                        </td --}}>
                        <td colspan="15">
                            <?php
                            // Obtener el texto de la observación desde tu variable $formulario008
                            $observacion_exam = mb_strtoupper($formulario008->obser_examen_fisico);
                
                            // Contar la cantidad de palabras en el texto
                            $palabras = str_word_count($observacion_exam);
                
                            // Determinar el tamaño de la fuente según la cantidad de palabras
                            $tamañoFuente = '12px'; // Tamaño de fuente por defecto
                
                            if ($palabras <= 10) {
                                $tamañoFuente = '9px'; // Si hay 10 palabras o menos
                            } elseif ($palabras > 10 && $palabras <= 50) {
                                $tamañoFuente = '6px'; // Si hay entre 11 y 100 palabras
                            } else {
                                $tamañoFuente = '5px'; // Si hay más de 100 palabras
                            }
                            ?>
                
                            <textarea style="font-size: <?= $tamañoFuente ?>; text-align: justify; height: 30px; font-family: Arial, sans-serif;" readonly><?= $observacion_exam ?></textarea>
                        </td> 
                    </tr>
                </tbody>               

            </table border="1" cellspacing="-5" cellpadding="3" width="100%">
        </div>  
        {{-- 9 DIAGRÁMA TOPOGRÁFICO 10. EMBARAZO Y  PARTO 11. NALISIS DE PROBLEMAS --}}    
        <div class="form-group">          
            <br>
            <table style="width: 100%;">                
                <tr>
                    <td style="width: 50%;">
                       
                        <!-- Primera tabla izquierda -->
                        <table style="width: 100%;">
                            <tr> 
                                <th  style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 9. DIAGRAMA TOPOGRÁFICO</th>
                                <th>NO APLICA</th>
                                <td>
                                    
                                    <input style="transform: scale(1.3); display: inline-block; color: {{ $formulario008->aplica_diagrama_topografico == 'Si' ? 'red' : 'inherit' }};" type="checkbox" {{ $formulario008->aplica_diagrama_topografico == 'Si' ? 'checked' : '' }} />
                                                    
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                    <!-- Primera subtabla izquierda -->
                                    <table style="width: 100%;">
                                        <tr>
                                            <td>
                                                
                                                <style>
                                                    .contenedor {
                                                        position: relative;
                                                    }
                                        
                                                    .numero-ingresado {
                                                        position: absolute;
                                                        cursor: move;
                                                        user-select: none;
                                                        border: 2px solid #007bff;
                                                        padding: 1px;
                                                        background-color: rgba(0, 123, 255, 0.4);
                                                        border-radius: 50%;
                                                        font-size: 7px;
                                                        color: #007bff;
                                                    }
                                                </style>
                                                <div class="contenedor" id="contenedor-imagen" style="flex: 1;">
                                                    <img id="movable-image" style="width: 220px;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/008/diagrama.jpeg'))) }}" />
                                                    <div id="numeros-container">
                                                        @foreach ($formulario008->lesiones as $lesion)
                                                        @if ($lesion->pivot->posicion_x !== null && $lesion->pivot->posicion_y !== null)
                                                        <?php
                                                        $original_width = 600; // Ancho original de la imagen
                                                        $original_height = 400; // Alto original de la imagen
                                                        $nueva_width = 220; // Nuevo ancho deseado
                                                        $nueva_height = ($original_height / $original_width) * $nueva_width; // Calcula la nueva altura proporcionalmente
                                                        $posicion_x_proporcional = ($lesion->pivot->posicion_x / $original_width) * $nueva_width; // Calcula la nueva posición X proporcionalmente
                                                        $posicion_y_proporcional = ($lesion->pivot->posicion_y / $original_height) * $nueva_height; // Calcula la nueva posición Y proporcionalmente
                                                        ?>
                                                        <div class="numero-ingresado coordenada" data-id-lesion="{{ $lesion->id }}" data-posicion-x="{{ $lesion->pivot->posicion_x }}" data-posicion-y="{{ $lesion->pivot->posicion_y }}" style="position: absolute; top: {{ $posicion_y_proporcional }}px; left: {{ $posicion_x_proporcional }}px;">
                                                            {{ $lesion->id }}
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>                                        
                                               
                                            </td>
                                        </tr>                                        
                                                       
                                    </table>
                                </td>
                                <td colspan="2" style="width: 50%;">
                                    <!-- Segunda subtabla derecha -->
                                    <table style="width: 100%;">
                                        <tbody>    
                                            @foreach ($lesiones as $lesion)
                                                <?php
                                                    $esta_en_imagen = false;
                                                    if ($formulario008->lesiones) {
                                                        foreach ($formulario008->lesiones as $lesion_agregada) {
                                                            if ($lesion_agregada->id === $lesion->id) {
                                                                $esta_en_imagen = true;
                                                                break;
                                                            }
                                                        }
                                                    }
                                                ?>
                                                <tr>
                                                    <td style="font-size: 6px; line-height: 1; white-space: nowrap;" >{{ $lesion->id }}</td>
                                                    <td style="font-size: 6px; line-height: 1; white-space: nowrap;">{{ $lesion->nombre }}</td>
                                                    <td style="padding: 2px; vertical-align: middle;"><input style="transform: scale(0.5); display: inline-block; height: 0.7rem; " type="checkbox" {{ $esta_en_imagen ? 'checked' : '' }} disabled></td>
                                                    
                                                 </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 50%;">
                        
                        <!-- Segunda tabla derecha -->
                        <table style="width: 100%;">
                            
                            <tr>
                                <td style="width: 50%;">
                                    
                                    <!-- Tercera subtabla izquierda -->
                                    <table style="width: 100%;">       
                                        <tbody>
                                            <tr> 
                                                <th colspan="6" style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 10. EMBARAZO - PARTO</th>
                                                <th>NO APLICA</th>
                                                <td>
                                                    
                                                    <input style="transform: scale(1.3); display: inline-block; color: {{ $formulario008->aplica_embarazo_parto == 'Si' ? 'red' : 'inherit' }};" type="checkbox" {{ $formulario008->aplica_embarazo_parto == 'Si' ? 'checked' : '' }} />
                                                    
                                                    
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <th style="  font-size: 6px">GESTAS</th>                                                                     
                                                <td >{{ mb_strtoupper($formulario008->gestas )}}</td>
                                                <th style="font-size: 6px">PARTOS</th>                                                                     
                                                <td >{{ mb_strtoupper($formulario008->partos )}}</td>
                                                <th style="font-size: 6px">ABORTOS</th>                                                                     
                                                <td >{{ mb_strtoupper($formulario008->abortos )}}</td>
                                                <th style="font-size: 6px">CESÁREAS</th>                                                                     
                                                <td >{{ mb_strtoupper($formulario008->cesareas )}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th  colspan="2" style="font-size: 6px">FECHA ULTIMA <br> MENSTRUACIÓN</th>                                                                     
                                                <td colspan="2" >{{ $formulario008->fecha_ult_menstruacion }}</td>
                                                <th style="font-size: 6px">SEMANAS <br> GESTACIÓN</th>                                                                     
                                                <td >{{ mb_strtoupper($formulario008->semanas_gestacion )}}</td>
                                                <th style="font-size: 6px">MOVIMIENTO <br> FETAL</th>                                                                     
                                                <td >{{ mb_strtoupper($formulario008->movimiento_fetal )}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th  style="font-size: 6px">FRECUENCIA <br> C. FETAL</th>                                                                     
                                                <td colspan="2" >{{ mb_strtoupper($formulario008->frecuencia_card_fetal )}}</td>
                                                <th style="font-size: 6px">MEMBRANAS <br> ROTAS</th>                                                                     
                                                <td >{{ mb_strtoupper($formulario008->membrana_rota )}}</td>
                                                <th  style="font-size: 6px">TIEMPO</th>                                                                     
                                                <td colspan="2" >{{ mb_strtoupper($formulario008->tiempo_membranas_rota )}}</td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <th colspan="2" style="font-size: 6px">ALTURA <br> UTERINA</th>                                                                     
                                                <td colspan="2" >{{ mb_strtoupper($formulario008->altura_uterina )}}</td>
                                                <th style="font-size: 6px">PRESEN <br> TACIÓN</th>                                                                     
                                                <td colspan="3">{{ mb_strtoupper($formulario008->presentacion )}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th  style="font-size: 6px">DILATACIÓN</th>                                                                     
                                                <td colspan="2" >{{ mb_strtoupper($formulario008->dilatamiento )}}</td>
                                                <th style="font-size: 6px">BORRAMIENTO</th>                                                                     
                                                <td >{{ mb_strtoupper($formulario008->borramiento )}}</td>
                                                <th  style="font-size: 6px">PLANO</th>                                                                     
                                                <td colspan="2" >{{ mb_strtoupper($formulario008->plano )}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th  style="font-size: 6px">PELVIS ÚTIL</th>                                                                     
                                                <td colspan="2" >{{ mb_strtoupper($formulario008->pelvis_util )}}</td>
                                                <th style="font-size: 6px">SANGRADO <br> VAGINAL</th>                                                                     
                                                <td >{{ mb_strtoupper($formulario008->sangrado_vaginal )}}</td>
                                                <th  style="font-size: 6px">CONTRACCIONES</th>                                                                     
                                                <td colspan="2" >{{ mb_strtoupper($formulario008->contracciones )}}</td>
                                                
                                            </tr>
                                            <tr>
                                                {{-- <td colspan="8">
                                                    <textarea style="font-size: 7px; text-align: justify; height: 30px; font-family: Arial, sans-serif;" readonly>{{ mb_strtoupper($formulario008->obser_embarazo_parto) }}</textarea>
                        
                                                </td>  --}}
                                                <td colspan="8">
                                                    <?php
                                                    // Obtener el texto de la observación desde tu variable $formulario008
                                                    $observacion_embar = mb_strtoupper($formulario008->obser_embarazo_parto);
                                        
                                                    // Contar la cantidad de palabras en el texto
                                                    $palabras = str_word_count($observacion_embar);
                                        
                                                    // Determinar el tamaño de la fuente según la cantidad de palabras
                                                    $tamañoFuente = '12px'; // Tamaño de fuente por defecto
                                        
                                                    if ($palabras <= 10) {
                                                        $tamañoFuente = '9px'; // Si hay 10 palabras o menos
                                                    } elseif ($palabras > 10 && $palabras <= 50) {
                                                        $tamañoFuente = '6px'; // Si hay entre 11 y 100 palabras
                                                    } else {
                                                        $tamañoFuente = '5px'; // Si hay más de 100 palabras
                                                    }
                                                    ?>
                                        
                                                    <textarea style="font-size: <?= $tamañoFuente ?>; text-align: justify; height: 30px; font-family: Arial, sans-serif;" readonly><?= $observacion_embar ?></textarea>
                                                </td> 
                                                
                                            </tr>                                            

                                        </tbody>
                                    </table>
                                    <table style="width: 100%;">       
                                        <tbody>
                                            <tr> 
                                                <th  style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 11. ANÁLISIS DE PROBLEMAS</th>
                                                <th>NO APLICA</th>
                                                <td >
                                                    <input style="transform: scale(1.3); display: inline-block; color: {{ $formulario008->aplica_analisis_sistemas == 'Si' ? 'red' : 'inherit' }};" type="checkbox" {{ $formulario008->aplica_analisis_sistemas == 'Si' ? 'checked' : '' }} />
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                {{-- <td colspan="3">
                                                    <textarea style="font-size: 7px; text-align: justify; height: 30px; font-family: Arial, sans-serif;" readonly>{{ mb_strtoupper($formulario008->analisis_problemas) }}</textarea>

                                                </td>  --}}
                                                {{-- <td colspan="3" style="text-align: justify; font-size: 5px; height: 20px; font-family: Arial, sans-serif;">
                                                    {{ mb_strtoupper($formulario008->analisis_problemas) }}
                                                </td> --}}
                                                

                                                <td colspan="3">
                                                    <?php
                                                    // Obtener el texto de la observación desde tu variable $formulario008
                                                    $observacion_analis = mb_strtoupper($formulario008->analisis_problemas);
                                        
                                                    // Contar la cantidad de palabras en el texto
                                                    $palabras = str_word_count($observacion_analis);
                                        
                                                    // Determinar el tamaño de la fuente según la cantidad de palabras
                                                    $tamañoFuente = '12px'; // Tamaño de fuente por defecto
                                        
                                                    if ($palabras <= 10) {
                                                        $tamañoFuente = '9px'; // Si hay 10 palabras o menos
                                                    } elseif ($palabras > 10 && $palabras <= 50) {
                                                        $tamañoFuente = '6px'; // Si hay entre 11 y 100 palabras
                                                    } else {
                                                        $tamañoFuente = '5px'; // Si hay más de 100 palabras
                                                    }
                                                    ?>
                                        
                                                    <textarea style="font-size: <?= $tamañoFuente ?>; text-align: justify; height: 30px; font-family: Arial, sans-serif;" readonly><?= $observacion_analis ?></textarea>
                                                </td> 
                                            </tr>                                            

                                        </tbody>
                                    </table>
                                </td>
                                
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        {{-- 12 PLAN DE DIAGNÓSTICO --}}
        <div class= "form-group">
           
            <table border="0" cellspacing="-5" cellpadding="3" width="100%">
             <br>
                <thead>
                    <tr> 
                        <th colspan="14" style="text-align:left; font-size: 10px; color: #270000;  background-color: #723c07;" > 12. PLAN DE DIÁGNOSTICO</th>
                        <th>NO APLICA</th>
                        <td >
                            <input style="transform: scale(1.3); display: inline-block; color: {{ $formulario008->aplica_plan_diagnostico == 'Si' ? 'red' : 'inherit' }};" type="checkbox" {{ $formulario008->aplica_plan_diagnostico == 'Si' ? 'checked' : '' }} />
                                  
                        
                        </td>
                    </tr>
                    <tr>
                         <th  style="font-size: 7px">1. BIOMETRIA</th>     
                         <td>
                            <input  type="checkbox" {{ $formulario008->biometria == 'Si' ? 'checked' : '' }}/>
                        </td>                
                             
 
                         <th style="font-size: 7px">3. QUÍMICA <br> SANGUÍNEA</th>                         
                         <td>
                            <input  type="checkbox" {{ $formulario008->quimica_sanguinea == 'Si' ? 'checked' : '' }}/>
                        </td>
 
                         <th style="font-size: 7px">5. GASOMETRÍA</th>                         
                         <td>
                            <input  type="checkbox" {{ $formulario008->gasometria == 'Si' ? 'checked' : '' }}/>
                        </td>
 
                         <th style="font-size: 7px">7. ENDOSCOPÍA</th>                     
                         <td>
                            <input  type="checkbox" {{ $formulario008->endoscopia == 'Si' ? 'checked' : '' }}/>
                        </td>
 
                         <th style="font-size: 7px">9. R-X ABDOMEN </th>                         
                         <td>
                            <input  type="checkbox" {{ $formulario008->radiografia_abdomen == 'Si' ? 'checked' : '' }}/>
                        </td>
 
                         <th style="font-size: 7px">11. TOMOGRAFÍA</th>                     
                         <td>
                            <input  type="checkbox" {{ $formulario008->tomografia == 'Si' ? 'checked' : '' }}/>
                        </td>
 
                         <th  style="font-size: 7px">13. ECOGRAFÍA <br> PELVICA</th>                         
                         <td>
                            <input  type="checkbox" {{ $formulario008->ecografia_pelvica == 'Si' ? 'checked' : '' }}/>
                        </td>
                        
                        <th  style="font-size: 7px">15. INTERCONSULTA</th>                         
                        <td>
                            <input  type="checkbox" {{ $formulario008->interconsulta_especializada == 'Si' ? 'checked' : '' }}/>
                        </td>
                                                                                         
                    </tr>
                      
                </thead>
        
                <tbody>
                    <tr>
                        <th  style="font-size: 7px">2. UROANÁLISIS</th>                     
                        <td>
                            <input type="checkbox" {{ $formulario008->uroanalisis == 'Si' ? 'checked' : '' }}/>
                        </td>

                        <th style="font-size: 7px">4. ELECTROLITOS</th>                         
                            <td >
                                <input type="checkbox" {{ $formulario008->electrolitos == 'Si' ? 'checked' : '' }}/>
                            </td>

                        <th style="font-size: 7px">6. ELECTRO <br> CARDIOGRAMA</th>                         
                        <td>
                            <input type="checkbox" {{ $formulario008->electrocardiograma == 'Si' ? 'checked' : '' }}/>
                        </td>

                        <th style="font-size: 7px">8. R-X TÓRAX</th>                     
                        <td>
                            <input type="checkbox" {{ $formulario008->r_x_torax == 'Si' ? 'checked' : '' }}/>
                        </td>

                        <th style="font-size: 7px">10. R-X ÓSEA </th>                         
                        <td>
                            <input type="checkbox" {{ $formulario008->r_x_osea == 'Si' ? 'checked' : '' }}/>
                        </td>

                        <th style="font-size: 7px">12. RESONANCIA</th>                     
                        <td>
                            <input type="checkbox" {{ $formulario008->resonancia == 'Si' ? 'checked' : '' }}/>
                        </td>

                        <th  style="font-size: 7px">14. ECOGRAFÍA <br> ABDOMEN</th>                         
                        <td>
                            <input type="checkbox" {{ $formulario008->ecografia_abdominal == 'Si' ? 'checked' : '' }}/>
                        </td>
                       
                       <th  style="font-size: 7px">16. OTROS</th>                         
                       <td>
                        <input type="checkbox" {{ $formulario008->pd_otros == 'Si' ? 'checked' : '' }}/>
                    </td>
                                                                                        
                   </tr>
                   <tr>
                    
                    {{-- <td colspan="16" style="text-align: justify; font-size: 7px; height: 20px; font-family: Arial, sans-serif;">
                        {{ mb_strtoupper($formulario008->obser_plan_diagnostico) }}
                    </td> --}}
                    <td colspan="16">
                        <?php
                        // Obtener el texto de la observación desde tu variable $formulario008
                        $observacion_plan_d = mb_strtoupper($formulario008->obser_plan_diagnostico);
            
                        // Contar la cantidad de palabras en el texto
                        $palabras = str_word_count($observacion_plan_d);
            
                        // Determinar el tamaño de la fuente según la cantidad de palabras
                        $tamañoFuente = '8px'; // Tamaño de fuente por defecto
            
                        if ($palabras <= 10) {
                            $tamañoFuente = '7px'; // Si hay 10 palabras o menos
                        } elseif ($palabras > 10 && $palabras <= 50) {
                            $tamañoFuente = '6px'; // Si hay entre 11 y 100 palabras
                        } else {
                            $tamañoFuente = '5px'; // Si hay más de 100 palabras
                        }
                        ?>
            
                        <textarea style="font-size: <?= $tamañoFuente ?>; text-align: justify; height: 20px; font-family: Arial, sans-serif;" readonly><?= $observacion_plan_d ?></textarea>
                    </td>
                    
                   </tr>

                </tbody>                
 
            </table border="1" cellspacing="-5" cellpadding="3" width="100%">
        </div>

        {{-- 13. DIAGNÓSTICOS PRESUNTIVOS Y 14 DIAGNÓSTICOS DEFINITIVOS --}}    
        <div class="form-group">          
            <br>
            <table style="width: 100%;">                
                <tr>
                    <td style="width: 50%;">
                       
                        <!-- Primera tabla izquierda -->
                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <th colspan="4" style="text-align:left; font-size: 10px; color: #270000;  background-color: #723c07;" > 13. DIAGNÓSTICOS PRESUNTIVOS</th>
                                    <th>CIE-10</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($formulario008->diagnosticosPresuntivos as $diagnostico)
                                    <tr>

                                        <td> <strong> {{ $loop->iteration }}</td>
                                        <td colspan="3" style="font-size: 6px">{{ $diagnostico->descripcion }}</td>                                    
                                        <td style="font-size: 6px">{{ $diagnostico->clave }}</td>

                                    </tr>
                                @endforeach                                            
                            </tbody>
                        </table>
                    </td>
                    <td style="width: 50%;">
                        
                        <!-- Segunda tabla derecha -->
                        <table style="width: 100%;">
                           
                            <tr>
                                <td style="width: 50%;">
                                    <!-- Tercera subtabla izquierda -->
                                    
                                    <table style="width: 100%;">       
                                        <thead>
                                            <tr>
                                                <th colspan="4" style="text-align:left; font-size: 10px; color: #270000;  background-color: #723c07;" > 14. DIAGNÓSTICOS DEFINITIVOS</th>
                                                <th>CIE-10</th>
                                            </tr>
            
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($formulario008->diagnosticosDefinitivos as $diagnostico)
                                                <tr>

                                                    <td> <strong> {{ $loop->iteration }}</td>
                                                    <td colspan="3" style="font-size: 6px">{{ $diagnostico->descripcion }}</td>                                    
                                                    <td style="font-size: 6px">{{ $diagnostico->clave }}</td>

                                                </tr>
                                            @endforeach                                            
                                        </tbody>
                                    </table>
                                </td>                                
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>        

         {{-- 15 PLAN DE TRATAMEINTO --}}
         <div class= "form-group">
           
            <table border="0" cellspacing="-5" cellpadding="3" width="100%">
             <br>
                    <tr>
                        <th colspan="14" style="text-align:left; font-size: 10px; color: #270000;  background-color: #723c07;" > 15. PLAN DE TRATAMIENTO</th>
                        
                    </tr>  
                <thead>
                    <tr>
                        <TH></TH>
                        <th style="font-size: 6px; padding: 2px; vertical-align: middle;">MEDICAMENTO GENÉRICO</th>
                        <th style="font-size: 6px; padding: 2px; vertical-align: middle;" >VIA</th>
                        <th style="font-size: 6px;" >DÓSIS</th>
                        <th style="font-size: 6px;" >POSOLOGÍA</th>
                        <th style="font-size: 6px;" >DÍAS</th>                    
                        <th style="font-size: 6px;" >1. INDICACIONES GENERALES</th>                                               
                        <td><input style="display: inline-block; transform: scale(1.0);" type="checkbox"  {{ $formulario008->pt_indicaciones_generales == 'Si' ? 'checked' : '' }}/>
                        </td>                                               

                        </td>
                        <th style="font-size: 6px;">2. PROCEDIMIENTOS</th>
                        <td> <input style="display: inline-block; transform: scale(1.0);" type="checkbox"  {{ $formulario008->pt_procedimientos == 'Si' ? 'checked' : '' }}/>
                        </td>
                        <th style="font-size: 6px;">3. CONSENTIMIENTO INFORMADO</th>
                        <td><input style="display: inline-block; transform: scale(1.0);" type="checkbox"  {{ $formulario008->pt_consentimiento_informado == 'Si' ? 'checked' : '' }}/>
                        </td>                                                
                        <th style="font-size: 6px;">4. OTROS</th>
                        <td><input style="display: inline-block; transform: scale(1.0);" type="checkbox"  {{ $formulario008->pt_otros == 'Si' ? 'checked' : '' }}/>
                        </td>
                    </tr>                  
                      
                </thead>
        
                <tbody>
                       
                    <tr>
                        <td  style="font-size: 6px" >1</td>
                        <td  style="font-size: 6px" >{{ mb_strtoupper($formulario008->medicamento_generico_1 )}}</td>                                                
                        <td  style="font-size: 6px" >{{ mb_strtoupper($formulario008->via_1 )}}</td>
                        <td  style="font-size: 6px" >{{ mb_strtoupper($formulario008->dosis_1 )}}</td>
                        <td  style="font-size: 6px" >{{ mb_strtoupper($formulario008->posologia_1 )}}</td>
                        <td  style="font-size: 6px" >{{ mb_strtoupper($formulario008->dias_1 )}}</td> 
                        <td colspan="8" style="font-size: 6px" >{{ $formulario008->obser_plan_tratamiento_1 }}</td> 
                    </tr>
                    <tr>
                        <td  style="font-size: 6px">2</td>
                        <td  style="font-size: 6px">{{ mb_strtoupper($formulario008->medicamento_generico_2 )}}</td>                                                
                        <td  style="font-size: 6px">{{ mb_strtoupper($formulario008->via_2 )}}</td>
                        <td  style="font-size: 6px">{{ mb_strtoupper($formulario008->dosis_2 )}}</td>
                        <td  style="font-size: 6px">{{ mb_strtoupper($formulario008->posologia_2 )}}</td>
                        <td  style="font-size: 6px">{{ mb_strtoupper($formulario008->dias_2 )}}</td>  
                        <td colspan="8" style="font-size: 6px">{{ $formulario008->obser_plan_tratamiento_2 }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 6px">3</td>
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->medicamento_generico_3 )}}</td>                                                
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->via_3 )}}</td>
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->dosis_3 )}}</td>
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->posologia_3 )}}</td>
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->dias_3 )}}</td>  
                        <td colspan="8"style="font-size: 6px">{{ $formulario008->obser_plan_tratamiento_3 }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 6px">4</td>
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->medicamento_generico_4 )}}</td>                                                
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->via_4 )}}</td>
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->dosis_4 )}}</td>
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->posologia_4 )}}</td>
                        <td style="font-size: 6px">{{ mb_strtoupper($formulario008->dias_4 )}}</td>  
                        <td colspan="8" style="font-size: 6px">{{ $formulario008->obser_plan_tratamiento_4 }}</td>
                    </tr>  
                </tbody>                
 
            </table border="1" cellspacing="-5" cellpadding="3" width="100%">
        </div>

        {{-- 16 SALIDA --}}
        <div class= "form-group">
           
            <table border="0" cellspacing="-5" cellpadding="3" width="100%">
             <br>
                    <tr>
                        <th colspan="18" style="text-align:left; font-size: 11px; color: #270000;  background-color: #723c07;" > 16. SALIDA</th>
                        
                    </tr>  
                <thead>
                    <tr>
                        
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >DOMICILIO</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" ><input type="checkbox"  {{ $formulario008->salida == 'domicilio' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >CONSULTA EXTERNA</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" ><input type="checkbox"  {{ $formulario008->salida == 'consulta_externa' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >OBSERVACIÓN</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" ><input type="checkbox"  {{ $formulario008->salida == 'observacion' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >INTERNACIÓN</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" ><input type="checkbox"  {{ $formulario008->salida == 'internacion' ? 'checked' : '' }}/>
                        </td> 
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >REFERENCIA</th>   
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" ><input type="checkbox"  {{ $formulario008->salida == 'referencia' ? 'checked' : '' }}/>
                        </td>                  
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >VIVO</th>                                               
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" ><input type="checkbox"  {{ $formulario008->estado_salida == 'vivo' ? 'checked' : '' }}/>
                        </td>                                              

                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >ESTABLE</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" > <input type="checkbox"  {{ $formulario008->estado_salida == 'estable' ? 'checked' : '' }}/>
                        </td>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >INESTABLE</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" ><input type="checkbox"  {{ $formulario008->estado_salida == 'inestable' ? 'checked' : '' }}/>
                        </td>                                                
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >DÍAS DE INCAPACIDAD</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" >{{ mb_strtoupper($formulario008->dias_incapacidad )}}</td>   
                       
                    </tr>                  
                      
                </thead>
        
                <tbody>
                       
                    <tr>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >SERVICIO</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;"  colspan="2" >{{ mb_strtoupper($formulario008->servicio )}}</td>   
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;"  colspan="3">ESTABLECIMIENTO</th>                                             
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;"  colspan="4" >{{ mb_strtoupper($formulario008->establecimiento )}}</td>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;"  >MUERTO EN EMERGENCIA</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;"  ><input type="checkbox"  {{ $formulario008->muerto_emergencia == 'Si' ? 'checked' : '' }}/>
                        </td>
                        <th style="font-size: 5px; padding: 2px; vertical-align: middle;"  >CAUSA</th>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;"  colspan="5">{{ mb_strtoupper($formulario008->causa_muerte )}}</td>
                    </tr>  
                    <tr>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;"  colspan="16"></td>
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;" colspan="2">CÓDIGO</td>
                    </tr>
                      
                   <tr>
                       <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >FECHA DE <br> SALIDA</th>
                       <td style="font-size: 5px; padding: 2px; vertical-align: middle;"  colspan="2" >{{ mb_strtoupper($formulario008->fecha_salida )}}</td>   
                       <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >HORA DE <br> SALIDA</th>                                                               
                        <td style="font-size: 5px; padding: 2px; vertical-align: middle;"  colspan="2">{{ substr($formulario008->hora_salida, 0, 5) }}</td>
                       <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >MEDICO</th>
                       <td style="font-size: 5px; padding: 2px; vertical-align: middle;"  style="width: 100px; " colspan="2">{{ mb_strtoupper($formulario008->medico_salida )}}</td>
                       <th style="font-size: 5px; padding: 2px; vertical-align: middle;" >FIRMA</th>
                       <td style="font-size: 5px; padding: 2px; vertical-align: middle;"  style="width: 100px;" colspan="6"></td>
                       <td style="font-size: 5px; padding: 2px; vertical-align: middle;" colspan="2">{{ mb_strtoupper($formulario008->codigo_salida )}}</td>
                   </tr>            
                </tbody>                
 
            </table border="1" cellspacing="-5" cellpadding="3" width="100%">
            <h1 style="text-align: right ; font-size: 9px; color: #270000">EMERGENCIA (2)</h1>
        </div>  
        
    </body>
</html>