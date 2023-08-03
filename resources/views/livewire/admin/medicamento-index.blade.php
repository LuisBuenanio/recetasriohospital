<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Ingrese el nombre del medicamento">

    </div>
        
    @if ($medicamentos->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Genérico</th>
                        <th>Nombre Comercial</th>
                        <th>Concentración</th>
                        <th>Presentación</th>
                        <th colspan="2"></th>
                    </tr>

                    <tbody>
                        @foreach ($medicamentos as $medicamento)
                            <tr>
                                <td>{{$medicamento->id}}</td>
                                <td>{{$medicamento->nombre}}</td>
                                <td>{!!$medicamento->comercial!!}</td>
                                <td>{!!$medicamento->concentracion!!}</td>
                                <td>{!!$medicamento->presentacion!!}</td>
                               <td with="10px">
                                    @can('admin.medicamento.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.medicamento.edit', $medicamento->id)}}">Editar</a>
                                    @endcan
                                </td with="10px">  
                                <td>
                                    @can('admin.medicamento.destroy')
                                        <form action="{{route('admin.medicamento.destroy', $medicamento->id)}}" method="POST" class="form-eliminar">
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
            {{$medicamentos->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 