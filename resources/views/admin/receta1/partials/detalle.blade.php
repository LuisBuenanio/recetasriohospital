<table class="table table-striped">
    <h3 class="center">Datos Generales</h3>
        <thead>
            <tr>
                <th>Número de Receta</th>
                <th>Ciudad</th>
                <th>Fecha</th>                
            </tr>

            <tbody>
                    <tr>
                        <td>{{$recetum->id}}</td>
                        <td>{{$recetum->ciudad}}</td>
                        <td>{{$recetum->fecha}}</td>
                        <th colspan="2"></th>               
                    </tr>  
            </tbody>

        </thead>
</table>

<table class="table table-striped">
    <h2 class="center">Datos del Paciente</h2>
    <thead>
        <tr>
            
            <th>Cédula</th>
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
            <th colspan="2"></th>                     
                </tr>  
        </tbody>

    </thead>

</table>
<div class="card-body">
    <table class="table table-striped">
        <h2 class="center">Medicamento</h2>
            <thead>
                <tr>
                    <th>Medicamento</th>
                    <th>Concentración</th>
                    <th>Tipo Medicamento </th>
                    <th>Dósis</th>
                    <th>Horario </th>

                    <th colspan="2"></th>
                </tr>
                
                <tbody>
                    @foreach ($recetum->medicamentos as $medicamento)
                        <tr>                                
                            <td>{!!$medicamento->nombre!!}</td>  
                            <td>{!!$medicamento->concentracion!!}</td>
                            <td>{!!$medicamento->tipo!!}</td>  
                            <td>{!!$recetum->dosis!!}</td> 
                            <td>{!!$recetum->horario!!}</td>  
                            <th colspan="2"></th>  
                        </tr>                    
                    @endforeach
                </tbody>             
            </thead>
        </table>
    </div>

<table class="table table-striped">
    <h3 class="center">Sugerencia No Farmacológica</h3>
    <thead>
        <tr>
                     
            <th colspan="2"></th>
        </tr>

        <tbody>
                <tr>
                    
                    <td>{!!$recetum->sugerencia!!}</td> 
                    <th colspan="2"></th>
                </tr>  
        </tbody>

    </thead>

</table>

<table class="table table-striped">
    <h3 class="center">DATOS DEL MÉDICO</h3>
    <thead>
        <tr>
            <td>Administrado por:</td>         
            <th colspan="2"></th>
        </tr>

        <tbody>
                <tr>
                    
                                     
                    <td>{!!$recetum->users->name!!}</td>  
                    <th colspan="2"></th>
                </tr>  
        </tbody>

    </thead>

</table>




