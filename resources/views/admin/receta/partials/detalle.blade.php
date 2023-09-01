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
            <td>{{ $receta->id }}</td>
            <td>{{ $receta->ciudad }}</td>
            <td>{{ $receta->fecha }}</td>
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
            <th>Sexo</th>
            <th colspan="2"></th>
        </tr>

    <tbody>
        <tr>
            <td>{!! $receta->paciente->cedula !!}</td>
            <td>{!! $receta->paciente->nombre !!}</td>
            <td>{!! $receta->paciente->edad !!}</td>
            <td>{!! $receta->paciente->telefono !!}</td>
            <td>{!! $receta->paciente->sexo->descripcion !!}</td>
            <th colspan="2"></th>
        </tr>
    </tbody>

    </thead>

</table>
<table class="table table-striped">
    <h2 class="center">Diagnóstico del Paciente</h2>
    <thead>
        <tr>

            <th>CIE-10</th>
            <th>DESCRIPCIÓN</th>
            <th colspan="2"></th>
        </tr>

    <tbody>
        <tr>
            <td>{!! $receta->diagnosticoscie10->clave !!}</td>
            <td>{!! $receta->diagnosticoscie10->descripcion !!}</td>
            <th colspan="2"></th>
        </tr>
    </tbody>

    </thead>

</table>


    <table class="table table-striped">
        <h2 class="center">Medicamento</h2>
        <thead>
            <tr>
                <th>Nombre Genérico </th>
                <th>Nombre Comercial</th>
                <th>Concentración </th>
                <th>Presentación </th>
                <th>Cantidad</th>
                <th>Indicaciones </th>

                <th colspan="2"></th>
            </tr>

        <tbody>
            @foreach ($receta->medicamentos as $medicamento)
                <tr>
                    <td>{!! $medicamento->nombre !!}</td>
                    <td>{!! $medicamento->comercial !!}</td>
                    <td>{!! $medicamento->concentracion !!}</td>
                    <td>{!! $medicamento->presentacion !!}</td>
                    <td> # {!! $medicamento->pivot->cantidad !!}</td>
                    <td>{!! $medicamento->pivot->indicacion !!}</td>
                    <th colspan="2"></th>
                </tr>
            @endforeach
        </tbody>
        </thead>
    </table>

    <table class="table table-striped">
        <h2 class="center">Signos de Alarma</h2>
        <thead>
            <tr>   
                <th>Signos de Alarma</th>
                <th colspan="2"></th>
            </tr>
    
        <tbody>
            <tr>
                <td>{!! $receta->signos !!}</td>                
                <th colspan="2"></th>
            </tr>
        </tbody>
    
        </thead>
    
    </table>
    
<table class="table table-striped">
    
    <h3 class="center">Sugerencia No Farmacológica</h3>
    <thead>
        <tr>

            <th colspan="2"></th>
        </tr>

    <tbody>        
        <tr>
            @if ($receta->sugerencia)
            
            <ol>
                @foreach (explode("\n", $receta->sugerencia) as $sugerencia)
                    <li>{{ $sugerencia }}</li>
                @endforeach
            </ol>
        @endif
        </tr>
    </tbody>

    </thead>

</table>

<table class="table table-striped">
    <h3 class="center">DATOS DEL MÉDICO TRATANTE</h3>
    <thead>
        <tr>
            <td>Receta Administrada por:</td>
            <th colspan="2"></th>
        </tr>

    <tbody>
        <tr>


            <td>{!! $receta->medico !!}</td>
            <th colspan="2"></th>
        </tr>
    </tbody>

    </thead>

</table>
