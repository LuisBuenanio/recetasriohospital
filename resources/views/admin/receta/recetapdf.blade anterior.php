<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Receta médica</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


    <style>
        @page {
            margin-left: 0.5cm;
            margin-right: 0.5cm;
            margin-top: 0.3cm;
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
            text-align: left;
            border-bottom: 1px solid #0f0904;
            border: 1px solid #333;
            font-size: 13px;

        }

        table th {
            background-color: #c07223;
            color: #ffff;
            font-size: 11px;
        }

        footer {
            font-size: 9px;
            color: #3e2001;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 125;
            margin-top: 0%;
        }

        .imagenes {
            display: flex;
            justify-content: center;
            margin-top: 13px;
        }

        .img-1 {
            display: flex;
            justify-content: center;
            margin-left: 150px;
            margin-right: 200px;
            height: 45px;
            text-align: center;


        }

        .img-2 {

            margin-left: 100px;
            height: 45px;


        }

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
    </style>
</head>

<body>
    {{-- IMAGENES DE ENCABEZADO --}}
    <table style="width: 100%;">
        <thead>
            <tr>
                <th colspan="0"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="imagenes">
                    <img class="img-1"
                        src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logos/logo.png'))) }}">

                    <img class="img-2"
                        src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logos/logo.png'))) }}">

                </td>
            </tr>

        </tbody>
    </table>
    {{-- 	DATOS DE CIUDAD Y FECHA --}}

    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <!-- Contenido de la primera parte -->
                <table>
                    <thead>
                        <tr>
                            <th>CIUDAD</th>
                            <th>DÍA</th>
                            <th>MES</th>
                            <th>AÑO</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $receta->ciudad }}</td>
                            <td>{{ \Carbon\Carbon::parse($receta->fecha)->format('d') }}</td>
                            <td>{{ \Carbon\Carbon::parse($receta->fecha)->format('m') }}</td>
                            <td>{{ \Carbon\Carbon::parse($receta->fecha)->format('Y') }}</td>
                            <td>{{ $receta->paciente->edad }}</td>
                            <td>{{ $receta->paciente->sexo->descripcion }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td style="width: 50%;">
                <!-- Contenido de la segunda parte -->
                <table>
                    <thead>
                        <tr>
                            <th>CIUDAD</th>
                            <th>DÍA</th>
                            <th>MES</th>
                            <th>AÑO</th>
                            <th colspan="2">RECETA N°</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $receta->ciudad }}</td>
                            <td>{{ \Carbon\Carbon::parse($receta->fecha)->format('d') }}</td>
                            <td>{{ \Carbon\Carbon::parse($receta->fecha)->format('m') }}</td>
                            <td>{{ \Carbon\Carbon::parse($receta->fecha)->format('Y') }}</td>
                            <td colspan="2" style="color: red; text-align: center">{{ $receta->id }}</td>

                        </tr>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    {{-- 	DATOS DEL PACIENTE --}}

    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <!-- Contenido de la primera parte -->
                <table>
                    <thead>
                        <tr>
                            <th>NOMBRES Y APELLIDOS</th>
                            <th>C.I</th>
                            <th>H.I</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $receta->paciente->nombre }}</td>
                            <td>{{ $receta->paciente->cedula }}</td>
                            <td>{{ $receta->historia }}</td>

                        </tr>
                    </tbody>
                </table>
            </td>
            <td style="width: 50%;">
                <!-- Contenido de la segunda parte -->
                <table>
                    <thead>
                        <tr>
                            <th style="text-align: center">NOMBRES Y APELLIDOS</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center">{{ $receta->paciente->nombre }}</td>
                        </tr>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    {{-- 	DATOS DE DIAGNOSTICO --}}

    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <!-- Contenido de la primera parte -->
                <table>
                    <thead>
                        <tr>
                            <th>DIAGNÓSTICO</th>
                            <th>CIE-10</th>
                            <th>ALERGÍAS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $receta->diagnosticoscie10->descripcion }}</td>
                            <td>{{ $receta->diagnosticoscie10->clave }}</td>
                            {{-- <td>{{ $receta->alergia }}</td> --}}
                            <td>
                                @if ($receta->alergia)
                                    {{ $receta->alergia }}
                                @else
                                    NINGUNA
                                @endif
                            </td>


                        </tr>
                    </tbody>
                </table>
            </td>
            <td style="width: 50%;">
                <!-- Contenido de la segunda parte -->
                <table>
                    <thead>
                        <tr>
                            <th style="text-align: center"></th>

                        </tr>
                        <td style="font-size: 20px; font-style: italic; font-weight: bold; border-color: white;">INDICACIONES</td>

                    </thead>
                    <tbody>
                        <tr style=" border-color: white;">

                        </tr>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>

    {{-- 	MEDICAMANETOS --}}

    <table class="tabla_medicamentos" style="width: 100%;">
         <td style="border-color: white; font-weight: bold; font-size: 20px; font-style: italic; padding-left: 15px;">RP.</td>


        <tr>
            <td style="width: 50%; border-collapse: collapse;
				border-top: none; border-color: white; padding-left: 15px;">
                <!-- Contenido de la primera parte -->
                <table>
                    @foreach ($receta->medicamentos as $medicamento)
                        <tr style=" border-color: white; margin-bottom: 10px;">
                            
                            <td style=" border-color: white; padding-bottom: 2px;"> <strong> {{ $loop->iteration }}.-<strong>
                                &nbsp;{{ $medicamento->nombre }}&nbsp;({{ $medicamento->comercial }})&nbsp;{{ $medicamento->concentracion }}
                            </td>
                        </tr>
                        <tr style=" border-color: white; margin-bottom: 8px; ">
                            
                            <td style=" border-color: white; padding: 1px; padding-bottom: 10px; padding-left: 25px;">
                                @php
                                $cantidad = (int)$medicamento->pivot->cantidad;
                                $formatter = new \NumberFormatter('es', \NumberFormatter::SPELLOUT);
                                $cantidadTexto = $formatter->format($cantidad);
                                $cantidadTextoM = strtoupper($cantidadTexto);
                                @endphp
                                 {{ $medicamento->presentacion }}  # {{ $medicamento->pivot->cantidad }}  ({{ $cantidadTextoM }})
                            </td>
                        </tr>
                        
                    @endforeach

                </table>
            </td>
            <td style="width: 50%; border-color: white; padding-left: 15px; ">
                <!-- Contenido de la segunda parte -->
                <table>

                    @foreach ($receta->medicamentos as $medicamento)
                        <tr style=" border-color: white; margin: 0; padding-bottom: 10px; padding-left: 25px;">
                            
                            <td style=" border-color: white;"> <strong> {{ $loop->iteration }}.-<strong>
                                &nbsp;({{ $medicamento->comercial }})&nbsp;
                            </td>
                        </tr>                        
                        <tr>
                            <td style="font-size: 12px; padding-bottom: 10px; padding-left: 25px; border-color: white;">{{ $medicamento->pivot->indicacion }}</td>


                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>
    </table>



    <footer>
        {{-- 	DATOS DEL PACIENTE --}}

    <table style="width: 100%;">
        <tr>
            <td style="width: 50%; border-collapse: collapse;
            border-top: none; border-color: white;">
                <!-- Contenido de la primera parte -->
                <table>
                    
                    <tbody>
                        <tr>
                            <p style="font-size: 9px; text-align: center;">Esta receta médica ha sido emitida por
                                el Dr(a). {{ $receta->medico }} el día
                                {{ $receta->fecha }}.</p>  
                                <br>
                                <br>
                                <p style="margin: 6; padding: 0; font-size: 9px; text-align: center;">___________________________</p>
                                <p style="font-size: 9px; text-align: center;">Firma y Sello</p>

                        </tr>
                    </tbody>
                </table>
            </td>
            <td style="width: 50%; border-collapse: collapse;
            border-top: none; border-color: white;">
                <!-- Contenido de la segunda parte -->
                <table>                                    
                        
                            @if ($receta->sugerencia)
                                <div style="padding: 0; font-size: 9px; text-align: left;">
                                    <p style="margin: 6; padding: 0; font-size: 13px;"><strong style="font-size: 13px;">Signos de Alarma: </strong>{{ $receta->signos }}</p>
                                    <p style="margin: 6; padding: 0; font-size: 13px; line-height: 1;"><strong>Sugerencia No Farmacológica:</strong> <ol style="margin: 5; padding: 3; font-size: 13px; list-style-type: none; columns: 2; line-height: 1;">
                                        @foreach (explode("\n", $receta->sugerencia) as $index => $sugerencia)
                                            {{ $index + 1 }}. {{ $sugerencia }}
                                        @endforeach
                                    </ol>
                                </p>
                                    
                                </div>
                            @endif
                    
                </table>
                
                
                
            </td>
        </tr>
    </table>


        <table style="width: 100%;">
            <tr>
                <td style="width: 50%;">
                    <!-- Contenido de la primera parte -->
                    <table class="tabla_footer">
                        <thead>
                            <tr>

                                <th colspan="6">Los Álamos 1 - Rosero y Jijón - Riobamba</th>
                                <th>(03) 2 607 100 - 2 607 177</th>

                            </tr>
                            <tr>
                                <th colspan="5">HOSPITALIZACIÓN</th>
                                <th>CALL CENTER</th>
                                <th>RECEPCIÓN</th>
                            </tr>
                            <tr>
                                <th>riohospital.ec@gmail.com / </th>
                                <th colspan="3">contabilidad.riohospital.ec@gmail.com</th>
                                <th>099 526 9409</th>
                                <th>1 700 746 (RIO RIO)</th>
                                <th>099 539 3548</th>
                            </tr>
                        </thead>
                    </table>
                </td>
                <td style="width: 50%;">
                    <!-- Contenido de la segunda parte -->
                    <table class="tabla_footer">
                        <thead>
                            <tr>

                                <th th colspan="6">Los Álamos 1 - Rosero y Jijón - Riobamba</th>
                                <th>(03) 2 607 100 - 2 607 177</th>

                            </tr>
                            <tr>
                                <th colspan="5">HOSPITALIZACIÓN</th>
                                <th>CALL CENTER</th>
                                <th>RECEPCIÓN</th>
                            </tr>
                            <tr>
                                <th>riohospital.ec@gmail.com / </th>
                                <th colspan="3">contabilidad.riohospital.ec@gmail.com</th>
                                <th>099 526 9409</th>
                                <th>1 700 746 (RIO RIO)</th>
                                <th>099 539 3548</th>
                            </tr>
                        </thead>

                    </table>
                </td>
            </tr>
        </table>

    </footer>
</body>

</html>
