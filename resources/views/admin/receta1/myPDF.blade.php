<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Create PDF File using DomPDF Tutorial - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Historia Clínica</th>
                <th>Ciudad</th>
                <th>Fecha</th>
                <th>Médico</th>
                <th>CIE -10 </th>
                <th>Paciente</th>
                <th colspan="2"></th>
            </tr>

            <tbody>
                @foreach ($recetas as $receta)
                    <tr>
                        <td>{{$receta->id}}</td>
                        <td>{{$receta->historia}}</td>
                        <td>{{$receta->ciudad}}</td>
                        <td>{{$receta->fecha}}</td>
                        <td>{!!$receta->users->name!!}</td> 
                        <td>{!!$receta->diagnosticoscie10->clave!!}</td> 
                        <td>{!!$receta->paciente->nombre!!}</td>                           
                        <td with="10px">
                            
                        </td with="10px">  
                        
                    </tr>  
                @endforeach
            </tbody>

        </thead>

    </table>
</body>
</html>