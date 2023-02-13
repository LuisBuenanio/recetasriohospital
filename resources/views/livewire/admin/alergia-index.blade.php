<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Ingrese el nombre de la alergia">

    </div>
        
    @if ($alergias->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th colspan="2"></th>
                    </tr>

                    <tbody>
                        @foreach ($alergias as $alergia)
                            <tr>
                                <td>{{$alergia->id}}</td>
                                <td>{{$alergia->nombre}}</td>
                                <td>{{$alergia->descripcion}}</td>
                                <td with="10px">
                                    @can('admin.alergia.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.alergia.edit', $alergia)}}">Editar</a>
                                    @endcan
                                </td with="10px">  
                                <td>
                                    @can('admin.alergia.destroy')
                                    <form action="{{route('admin.alergia.destroy', $alergia)}}" method="POST" class="form-eliminar">
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
            {{$alergias->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 