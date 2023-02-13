<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Ingrese la clave de la Categoría CIE-10">

    </div>
        
    @if ($categoriascie10s->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Clave</th>
                        <th>Descripcion</th>
                        <th>Sub Grupo</th>
                        <th colspan="2"></th>
                    </tr>

                    <tbody>
                        @foreach ($categoriascie10s as $categoriascie10)
                            <tr>
                                <td>{{$categoriascie10->id}}</td>
                                <td>{{$categoriascie10->clave}}</td>
                                <td>{{$categoriascie10->descripcion}}</td>
                                <td>{!!$categoriascie10->subgruposcie10->clave!!}</td>
                                <td with="10px">
                                    @can('admin.categoriascie10.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.categoriascie10.edit', $categoriascie10)}}">Editar</a>
                                    @endcan
                                    
                                </td with="10px">  
                                <td>
                                    @can('admin.categoriascie10.destroy')
                                        <form action="{{route('admin.categoriascie10.destroy', $categoriascie10)}}" method="POST" class="form-eliminar">
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
            {{$categoriascie10s->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 