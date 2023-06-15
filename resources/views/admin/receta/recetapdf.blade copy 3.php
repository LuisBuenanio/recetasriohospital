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
			/* 
			display: flex;
			flex-direction: column;
			min-height: 100%; */
			margin: 0;
  			margin-bottom: 40px;

		}
    .container1 {
      display: flex;
      flex-direction: column;
    }

    .row {
      display: flex;
    }

    
    .container {
  text-align: center;
}

.div1, .div2, .div3, .div4 {
  display: inline-block;
  margin: 5px;
  border: 1px solid black;
  padding: 10px;
}

    .div1 {
      margin-right: 5px;
      background-color: #FFCCCC;
    }

    .div2 {
      margin-left: 5px;
      background-color: #CCFFCC;
    }

    .div3 {
      margin-right: 5px;
      background-color: #CCCCFF;
    }

    .div4 {
      margin-left: 5px;
      background-color: #FFFFCC;
    }

    .container1 {
      display: flex;
      flex-direction: column;
    }

    .izquierdo_enc {
      
      float: left;
      background-color: #f36b11;
    }

    .derecho_enc {
      background-color: #f31195;
      float: right;
    }
    .izquierdo_nom {
      margin-bottom: 20px;
      float: left;
      background-color: #f36b11;
    }

    .derecho_nom {
      margin-bottom: 20px;
      background-color: #f31195;
      float: right;
      
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
			color: #3e2001;/* 
			text-align: center; */
			/* margin: 150;
			margin-top: auto;
			 */
			position: absolute;
			bottom: 0;
			width: 150%;
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
 

	</style>
</head>
<body>

  
    
    {{-- IMAGENES DE ENCABEZADO --}}
      <table>
        <thead>
          <th>
            <th colspan="0"></th>
          </th>
  
        </thead>
        <tbody>
          <td class="imagenes">
            <img class="img-1" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logos/logo.png'))) }}"   >
          
          
            <img class="img-2" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logos/logo.png'))) }}"  >
        
          </td>   
  
        </tbody>
        
  
      </table>

	  

  {{-- DATOS DE LA CIUDAD Y FECHA --}}
    <div class=" izquierdo_enc">
      <table>
        <thead>
          <tr>
            <th colspan="1">CIUDAD</th>
                    <th colspan="1">DÍA</th>
                    <th colspan="1">MES</th>
                    <th colspan="1">AÑO</th>
                    <th colspan="1">Edad</th>
                    <th colspan="1">Sexo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="1">{{$receta->ciudad}}</td>
            <td colspan="1">{{ \Carbon\Carbon::parse($receta->fecha)->format('d')}}</td>
            <td colspan="1">{{ \Carbon\Carbon::parse($receta->fecha)->format('m')}}</td>
            <td colspan="1">{{ \Carbon\Carbon::parse($receta->fecha)->format('Y')}}</td>				
            <td colspan="1">{{$receta->paciente->edad}}</td>
            <td colspan="1">{{$receta->paciente->sexo->descripcion}}</td>
          </tr>		
        </tbody>
      </table>
    </div>
    {{-- DATOS DE LA CIUDAD Y FECHA --}}
    <div class="derecho_enc">
      <table>
        <thead>
          <tr>
                    <th colspan="2">CIUDAD</th>
                    <th colspan="2">DÍA</th>
                    <th colspan="2">MES</th>
                    <th colspan="2">AÑO</th>
                    <th colspan="2">RECETA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2">{{$receta->ciudad}}</td>
            <td colspan="2">{{ \Carbon\Carbon::parse($receta->fecha)->format('d')}}</td>
            <td colspan="2">{{ \Carbon\Carbon::parse($receta->fecha)->format('m')}}</td>
            <td colspan="2">{{ \Carbon\Carbon::parse($receta->fecha)->format('Y')}}</td>				
            <td colspan="2">{{$receta->id}}</td>
          </tr>		
        </tbody>
      </table>
    </div>
	
<div class="nombres">
  <div class=" izquierdo_nomb"> 
    <table>
      <thead>
        <tr>
            <th colspan="2">NOMBRES Y APELLIDOS</th>
            <th colspan="2">C.I</th>
            <th colspan="2">H.C</th>                 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="2">{{$receta->paciente->nombre}}</td>
          <td colspan="2">{{$receta->paciente->cedula}}</td>
          <td colspan="2">{{$receta->historia}}</td>
          <td></td>
                  
        </tr>			
        
      </tbody>
    </table>
  </div>
  <div class=" derecho_nom"> 
  <table>
    <thead>
      <tr>
        <th colspan="2">NOMBRES Y APELLIDOS</th>                
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2">{{$receta->paciente->nombre}}</td>
        <td></td>               
      </tr>	      
    </tbody>
  </table>
  </div>
</div>

<div>
  <table>
		<thead>
			<tr>
				<th colspan="2">DIAGNÓSTICO</th>
              	<th colspan="2">CIE-10</th>
              	<th colspan="2">ALERGIAS</th>
              	<th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
              	<th colspan="2">INDICACIONES</th>
              	
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="2" width="30px">{{$receta->diagnosticoscie10->descripcion}}</td>
				<td colspan="2">{{$receta->diagnosticoscie10->clave}}</td>
              	<td colspan="2" width="5px">{{$receta->alergia}}</td>
              	<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>				
				<td colspan="2"></td>              	
			</tr>			
			
		</tbody>
	</table>

</div>  
	
  	
	<table class="tabla_medicamentos">
		<thead>
			<tr>
				<th colspan="2">MEDICAMENTO</th>
              	<th colspan="2">N COMERCIAL</th>
              	<th colspan="2">CONCENTRACIÓN</th>
				  <th colspan="6"></th>		
				<th colspan="6">Cantidad</th>				
				<th colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </th>
				<th colspan="4" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th colspan="4">MEDICAMENTO</th>
              	<th colspan="4">Cantidad</th>
              	<th  colspan="4">ADMINISTRACIÓN</th>
              	
			</tr>
			
		</thead>
		<tbody>
			@foreach ($receta->medicamentos as $medicamento)
			<tr>
				<td colspan="2">{{$medicamento->nombre}}</td>
				<td colspan="2">{{$medicamento->comercial}}</td>
				<td colspan="2">{{$medicamento->concentracion}}</td>
				<td colspan="6">{{$medicamento->pivot->cantidad}}</td>				
				<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </td>
				<td colspan="4" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td colspan="4">{{$medicamento->nombre}}</td>
				<td colspan="4">{{$medicamento->concentracion}}</td>
              	<td font-size="15px" colspan="6" width="5px">{{$medicamento->pivot->indicacion}}</td>              	
			</tr>	
			@endforeach		
			
		</tbody>
		
	</table>

	

	<footer>

		<p>Esta receta médica ha sido emitida por el Dr(a). {{$receta->medico}} el día {{$receta->fecha}}.</p>   
		<h3 width="10px" style="text-align: center;">Sugerencia No Farmacológica</h3>
		
		<p style="text-align: center;">{{$receta->sugerencia}}</p> 		
		
      <p>___________________________</p>
      <p>Firma y Sello</p> 
	<table class="tabla_footer">
		<thead class="tabla_footer">
			<tr class="tabla_footer">	
				<th></th>					
				<th > <i class=" fa fa-map-marker"></i> Los Álamos 1 - Rosero y Jijón - Riobamba </th>
				<th> (03) 2 607 100 - 2 607 177</th>	
				<th></th>									
				<th></th>
				<th></th>				
				<th></th>
				<th>Los Álamos 1 - Rosero y Jijón - Riobamba </th>
				<th>(03) 2 607 100 - 2 607 177</th>
				<th> &nbsp; </th>
              	
			</tr>
			<tr>
				<th></th>	
				<th>HOSPITALIZACIÓN</th>
				<th>CALL CENTER</th>
				<th>RECEPCIÓN</th>
				<th></th>
				<th></th>				
				<th>HOSPITALIZACIÓN</th>
				<th>CALL CENTER</th>
				<th>RECEPCIÓN</th>
				<th> &nbsp; </th>
				
              	
			</tr>
			<tr>
				<th class="correo">riohospital.ec@gmail.com</th>
				<th>099 526 9409</th>
				<th>1 700 746 (RIO RIO)</th>
				<th>099 539 3548</th>
				<th></th>
				<th>riohospital.ec@gmail.com</th>
				<th>099 526 9409</th>
				<th>1 700 746 (RIO RIO)</th>
				<th>099 539 3548</th>
				<th> &nbsp; </th>
              	
			</tr>
			<tr>
				<th class="correo">contabilidad.riohospital.ec@gmail.com</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th>contabilidad.riohospital.ec@gmail.com</th>
				<th></th>
				<th></th>
				<th></th>
				<th> &nbsp; </th>
              	
			</tr>
		</thead>
		
	</table>
	

	</footer>
</body>
</html>