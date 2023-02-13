<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Ingrese la clave del Grupo CIE-10">

    </div>
        
    @if ($gruposcie10s->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Clave</th>
                        <th>Descripcion</th>
                        <th colspan="2"></th>
                    </tr>

                    <tbody>
                        @foreach ($gruposcie10s as $gruposcie10)
                            <tr>
                                <td>{{$gruposcie10->id}}</td>
                                <td>{{$gruposcie10->clave}}</td>
                                <td>{{$gruposcie10->descripcion}}</td>
                                <td with="10px">
                                    @can('admin.gruposcie10.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.gruposcie10.edit', $gruposcie10)}}">Editar</a>
                                    @endcan
                                    
                                </td with="10px">  
                                <td>
                                    @can('admin.gruposcie10.destroy')
                                        <form action="{{route('admin.gruposcie10.destroy', $gruposcie10)}}" method="POST" class="form-eliminar">
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
            {{$gruposcie10s->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 