<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Ingrese la cedula del Paciente">

    </div>
        
    @if ($pacientes->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th colspan="2"></th>
                    </tr>

                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr>
                                <td>{{$paciente->id}}</td>
                                <td>{{$paciente->cedula}}</td>
                                <td>{{$paciente->nombre}}</td>
                                <td>{{$paciente->telefono}}</td>
                                <td>{{$paciente->edad}}</td>
                                <td>{!!$paciente->sexo->descripcion!!}</td>                           
                                <td with="10px">
                                    @can('admin.paciente.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.paciente.edit', $paciente)}}">Editar</a>
                                    @endcan
                                </td with="10px">  
                                <td>
                                    @can('admin.paciente.destroy')
                                        <form action="{{route('admin.paciente.destroy', $paciente)}}" method="POST" class="form-eliminar">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                        </form>
                                    @endcan

                                </td>
                            </tr>  
                        @endforeach
                    </tbody>

                </thead>

            </table>

        </div>
        <div class="card-footer">
            {{$pacientes->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 
