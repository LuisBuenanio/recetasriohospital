<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Ingrese la clave del Diagnóstico CIE-10">

    </div>
        
    @if ($diagnosticoscie10s->count())
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
                        @foreach ($diagnosticoscie10s as $diagnosticoscie10)
                            <tr>
                                <td>{{$diagnosticoscie10->id}}</td>
                                <td>{{$diagnosticoscie10->clave}}</td>
                                <td>{{$diagnosticoscie10->descripcion}}</td>
                                <td with="10px">
                                    @can('admin.diagnosticoscie10.edit')
                                    <a class="btn btn-primary btn-sm " href="{{route('admin.diagnosticoscie10.edit', $diagnosticoscie10)}}">Editar</a>
                                    @endcan 
                                    
                                </td with="10px">  
                                <td>
                                    @can('admin.diagnosticoscie10.destroy')
                                        <form action="{{route('admin.diagnosticoscie10.destroy', $diagnosticoscie10)}}" method="POST" class="form-eliminar">
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
            {{$diagnosticoscie10s->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 