<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Receta médica</title>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/ficha08.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/ficha.css') }}" />
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
                max-width: none;
            }
    
            .img-1 {
                display: flex;
                justify-content: center;
                margin-left: 180px;
                margin-right: 100px;
                height: 85px;
                text-align: center;
                max-width: none;
    
    
            }
    
            .img-2 {
    
                margin-left: 100px;
                height: 45px;
                max-width: none;
    
    
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-size: 9px; color: black;">RIO HOSPITAL</td>
                        <td style="font-size: 9px; color: black;">PRIVADO</td>
                        <td style="font-size: 9px; color: black;">{{ $formulario008->codigo }}</td>
                    </tr>
                </tbody>

            </table>
        </header>
        <div class="form-group">
            <h3>1. REGISTRO DE ADMISIÓN</h3>
        
            <table border="1" cellspacing="-5" cellpadding="3" width="100%">
                <thead>
                    <tr>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>NOMBRES</th>
                        <th>NACIONALIDAD</th>
                        <th>N CEDULA DE CIUDADANIA </th>               
        
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <td style="font-size: 9px">{{ $formulario008->paciente->apellido_paterno }}</td>
                        <td style="font-size: 9px">{{ $formulario008->paciente->apellido_materno }}</td>
                        <td style="font-size: 9px">{{ $formulario008->paciente->nombre }}</td>
                        <td style="font-size: 9px">{{ $formulario008->paciente->nacionalidad }}</td>                        
                        <td style="font-size: 9px">{{ $formulario008->paciente->cedula }}</td>        
                    </tr>
                </tbody>
            </table>
    </body>
</html>