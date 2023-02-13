<table class="table table-striped">
    <h3 class="center">Datos Generales</h3>
        <thead>
            <tr>
                <th>Código</th>
                <th>Ciudad</th>
                <th>Fecha</th>                
            </tr>

            <tbody>
                    <tr>
                        <td>{{$recetum->codigo}}</td>
                        <td>{{$recetum->ciudad}}</td>
                        <td>{{$recetum->fecha}}</td>
                                       
                    </tr>  
            </tbody>

        </thead>
</table>

<table class="table table-striped">
    <h2 class="center">Datos del Paciente</h2>
    <thead>
        <tr>
            
            <th>Cedula</th>
            <th>Nombres y Apellidos</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            <th>Dirección</th>
            <th>Sexo</th>
            <th colspan="2"></th>
        </tr>

        <tbody>
                <tr>
                    <td>{!!$recetum->paciente->cedula!!}</td>
                    <td>{!!$recetum->paciente->nombre!!}</td>
                    <td>{!!$recetum->paciente->edad!!}</td>
                    <td>{!!$recetum->paciente->telefono!!}</td>
                    <td>{!!$recetum->paciente->email!!}</td> 
                    <td>{!!$recetum->paciente->direccion!!}</td>   
                    <td>{!!$recetum->paciente->sexo->descripcion!!}</td>                       
                </tr>  
        </tbody>

    </thead>

</table>

<table class="table table-striped">
    <h2 class="center">Medicamento</h2>
    <thead>
        <tr>
            
            <th>Medicamento</th>
            <th>Laboratorio</th>
            <th>Concentración</th>
            <th>Tipo Medicamento </th>
            <th>Dosis</th>
            <th>Frecuencia</th>
            <th>Cada Hora</th>
            <th>Via de Adminstración </th>

            <th colspan="2"></th>
        </tr>

        <tbody>
                <tr>
                    
                    <td>{!!$recetum->medicamento->nombre!!}</td>
                    <td>{!!$recetum->medicamento->fabricante!!}</td>
                    <td>{!!$recetum->medicamento->gramos!!}</td>  
                    <td>{!!$recetum->medicamento->tipo_medicamento->descripcion!!}</td>  
                    <td>{!!$recetum->administracion->dosis!!}</td> 
                    <td>{!!$recetum->administracion->hora!!}</td> 
                    <td>{!!$recetum->administracion->horario!!}</td> 
                    <td>{!!$recetum->administracion->tipo_administracion->descripcion!!}</td>                      
                </tr>  
        </tbody>

    </thead>

</table>

<table class="table table-striped">
    <h3 class="center">Indicaciones Generales</h3>
    <thead>
        <tr>
            <th>Observaciones</th>
            <th>Correo Electrónico</th>
            <th colspan="2"></th>
        </tr>

        <tbody>
                <tr>
                    
                    <td>{!!$recetum->observaciones!!}</td> 
                    <td>{!!$recetum->users->name!!}</td> 
                </tr>  
        </tbody>

    </thead>

</table>



