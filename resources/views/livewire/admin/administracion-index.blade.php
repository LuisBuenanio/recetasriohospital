<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Ingrese la dosis a buscar">

    </div>
        
    @if ($administraciones->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Dósis</th>
                        <th>Horario</th>
                        <th>Hora</th>
                        <th colspan="2"></th>
                    </tr>

                    <tbody>
                        @foreach ($administraciones as $administracion)
                            <tr>
                                <td>{{$administracion->id}}</td>
                                <td>{{$administracion->dosis}}</td>
                                <td>{{$administracion->hora}}</td>
                                <td>{!!$administracion->horario!!}</td>
                                <td with="10px">
                                    @can('admin.administracion.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.administracion.edit', $administracion)}}">Editar</a>
                               
                                    @endcan
                                     </td with="10px">  
                                <td>
                                    @can('admin.administracion.destroy')
                                        <form action="{{route('admin.administracion.destroy', $administracion)}}" method="POST" class="form-eliminar">
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
            {{$administraciones->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 