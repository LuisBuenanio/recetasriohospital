<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Ingrese la clave del Sub Grupo CIE-10">

    </div>
        
    @if ($subgruposcie10s->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Clave</th>
                        <th>Descripcion</th>
                        <th>Grupo</th>
                        <th colspan="2"></th>
                    </tr>

                    <tbody>
                        @foreach ($subgruposcie10s as $subgruposcie10)
                            <tr>
                                <td>{{$subgruposcie10->id}}</td>
                                <td>{{$subgruposcie10->clave}}</td>
                                <td>{{$subgruposcie10->descripcion}}</td>
                                <td>{!!$subgruposcie10->gruposcie10->clave!!}</td>
                                <td with="10px">
                                    @can('admin.subgruposcie10.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.subgruposcie10.edit', $subgruposcie10)}}">Editar</a>
                                    @endcan
                                </td with="10px">  
                                <td>
                                    @can('admin.subgruposcie10.destroy')
                                        <form action="{{route('admin.subgruposcie10.destroy', $subgruposcie10)}}" method="POST" class="form-eliminar">
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
            {{$subgruposcie10s->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 