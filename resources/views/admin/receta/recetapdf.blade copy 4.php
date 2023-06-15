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
		.img-1{
			display: flex;
			justify-content: center;
			margin-left: 150px;
			margin-right: 200px;
			height: 45px;
			text-align: center;
			
			
		}
		.img-2{

			margin-left: 100px;
			height: 45px;


		}
		.tabla_footer{
					
			padding: 3px;
			width: auto;
			background-color: #3e2001;
			margin-top: 0;
		}
		.tabla_footer th {
			background-color: #c07223;
			color: #3e2001;
			font-size: 11px;
		}
		.tabla_footer th,
		.tabla_footer td {
			padding: 1px;
			text-align: right;
			border-bottom: 0px solid #c07223;
			border: 0px solid #333;
			font-size: 9.2px;
		
		}
		.tabla_medicamentos{				
			
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
				<img class="img-1" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logos/logo.png'))) }}"   >
				
				<img class="img-2" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logos/logo.png'))) }}"  >
            
				</td>
			</tr>					
			
		</tbody>
	</table>
{{-- 	DATOS DE CIUDAD Y FECHA--}}
	
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
				<td >{{$receta->ciudad}}</td>			  
				<td>{{ \Carbon\Carbon::parse($receta->fecha)->format('d')}}</td>
				<td>{{ \Carbon\Carbon::parse($receta->fecha)->format('m')}}</td>
				<td>{{ \Carbon\Carbon::parse($receta->fecha)->format('Y')}}</td>				
				<td>{{$receta->paciente->edad}}</td>
				<td>{{$receta->paciente->sexo->descripcion}}</td>			
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
			  <th colspan="2">RECETA</th>
			  
			</tr>
		  </thead>
		  <tbody>
			<tr>			  
			  	<td>{{$receta->ciudad}}</td>
				<td>{{ \Carbon\Carbon::parse($receta->fecha)->format('d')}}</td>
				<td>{{ \Carbon\Carbon::parse($receta->fecha)->format('m')}}</td>
				<td>{{ \Carbon\Carbon::parse($receta->fecha)->format('Y')}}</td>				
				<td colspan="2">{{$receta->id}}</td>
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
				<td>{{$receta->paciente->nombre}}</td>
				<td>{{$receta->paciente->cedula}}</td>
              	<td>{{$receta->historia}}</td>
			
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
				<td style="text-align: center">{{$receta->paciente->nombre}}</td>
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
				<td>{{$receta->diagnosticoscie10->descripcion}}</td>
				<td>{{$receta->diagnosticoscie10->clave}}</td>
              	<td>{{$receta->alergia}}</td>
              	
			
			</tr>			
		  </tbody>
		</table>
	  </td>
	  <td style="width: 50%;">
		<!-- Contenido de la segunda parte -->
		<table>
		  <thead>
			<tr>
			  <th style="text-align: center">INDICACIONES</th>
			  
			</tr>
		  </thead>
		  <tbody>
			<tr>			  
				
			</tr>
			
		  </tbody>
		</table>
	  </td>
	</tr>
</table>

{{-- 	MEDICAMANETOS --}}
	
<table class="tabla_medicamentos" style="width: 100%;">
	<tr>
	  <td style="width: 50%;">
		<!-- Contenido de la primera parte -->
		<table>	  
			@foreach ($receta->medicamentos as $medicamento)
			<tr>
				<td style="text-align: center"> {{$loop->iteration}}: </td>
				<td style="text-align: center">{{$medicamento->nombre}}{{$medicamento->comercial}}{{$medicamento->concentracion}}</td>
			</tr>	
			<tr>
				<td></td>
				<td style="text-align: center">{{$medicamento->pivot->cantidad}}</td>	
			</tr>
			@endforeach				
		  
		</table>
	  </td>
	  <td style="width: 50%;">
		<!-- Contenido de la segunda parte -->
		<table>		  
		  
			@foreach ($receta->medicamentos as $medicamento)
			<tr><td style="text-align: center"> {{$loop->iteration}}: </td>
					</tr>
			<tr><td style="text-align: center">{{$medicamento->pivot->indicacion}}</td> 
		
				
			</tr>	
			
			@endforeach	
		</table>
	  </td>
	</tr>
</table>
	
	

	<footer>
		<table style="width: 100%;  font-size: 11px; border-spacing: 0;">
			<tr>
				<td style="width: 50%; padding: 1px;
				text-align: right;
				border-bottom: 0px solid #c07223;
				border: 0px solid #333;
				font-size: 9.2px; ">
				  <!-- Contenido de la primera parte -->
				  <table>	  
					  <tr>
						<p style="font-size: 9px;">Esta receta médica ha sido emitida por el Dr(a). {{$receta->medico}} el día {{$receta->fecha}}.</p>   
						<p>___________________________</p>
						<p style="font-size: 9px;">Firma y Sello</p> 
						</tr>			
					
				  </table>
				</td>
				<td style="width: 50%; padding: 1px;
				text-align: right;
				border-bottom: 0px solid #c07223;
				border: 0px solid #333;
				font-size: 9.2px; ">
				  <!-- Contenido de la segunda parte -->
				  <table style="border: none;">		  
					
					  <tr>
						
							<h3 width="10px" style="text-align: center; font-size: 9px;">Sugerencia No Farmacológica</h3>
		
							<p style="text-align: center; font-size: 9px;">{{$receta->sugerencia}}</p> 	
						
					</tr>	
				  </table>
				</td>
			  </tr>

		</table>	

		{{-- tabla de pie de pagina de contactos --}}
		<table style="width: 100%; border: none; font-size: 11px; border-spacing: 0;">
			<tr style=" border: none;">
				<td style="width: 50%;">
				  <!-- Contenido de la primera parte -->
				  <table style="padding: 3px;
				  width: auto;
				  background-color: #3e2001;
				  margin-top: 0;">	  
					  <tr class="tabla_footer">
						<th style=" background-color: #c07223;
						color: #3e2001;
						font-size: 11px;" > <i class=" fa fa-map-marker"></i> Los Álamos 1 - Rosero y Jijón - Riobamba </th>
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;" > (03) 2 607 100 - 2 607 177</th>	
					</tr>	
					<tr>
						<th tyle=" background-color: #c07223;
						color: #3e2001;
						font-size: 11px;" >HOSPITALIZACIÓN</th>
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;" >CALL CENTER</th>
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;" >RECEPCIÓN</th>
				</tr>	
				<tr class="tabla_footer">
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;"  class="correo">contabilidad.riohospital.ec@gmail.com</th> <th class="correo">riohospital.ec@gmail.com</th>
				<th tyle=" background-color: #c07223;
				color: #3e2001;
				font-size: 11px;"  >099 526 9409</th>
				<th tyle=" background-color: #c07223;
				color: #3e2001;
				font-size: 11px;" >1 700 746 (RIO RIO)</th>
				<th tyle=" background-color: #c07223;
				color: #3e2001;
				font-size: 11px;" >099 539 3548</th></tr>			
					
				  </table style="padding: 3px;
				  width: auto;
				  background-color: #3e2001;
				  margin-top: 0;">
				</td>
				<td style="width: 50%;">
				  <!-- Contenido de la segunda parte -->
				  <table style="padding: 3px;
				  width: auto;
				  background-color: #3e2001;
				  margin-top: 0;">		  
					
					  <tr class="tabla_footer">
						
						<th tyle=" background-color: #c07223;
						color: #3e2001;
						font-size: 11px;" >Los Álamos 1 - Rosero y Jijón - Riobamba </th>
						<th tyle=" background-color: #c07223;
						color: #3e2001;
						font-size: 11px;" >(03) 2 607 100 - 2 607 177</th>
							
						
					</tr>	
					<tr class="tabla_footer">
						
						<th tyle=" background-color: #c07223;
						color: #3e2001;
						font-size: 11px;" >HOSPITALIZACIÓN</th>
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;" >CALL CENTER</th>
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;" >RECEPCIÓN</th>
							
						
					</tr>	
					<tr class="tabla_footer">					
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;" class="correo">contabilidad.riohospital.ec@gmail.com</th> <th>riohospital.ec@gmail.com</th>
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;" >099 526 9409</th>
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;" >1 700 746 (RIO RIO)</th>
					<th tyle=" background-color: #c07223;
					color: #3e2001;
					font-size: 11px;" >099 539 3548</th>
									
						
					</tr>	
				  </table>
				</td>
			  </tr>

		</table>

	</footer>
</body>
</html>