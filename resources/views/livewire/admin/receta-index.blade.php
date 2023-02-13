<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Ingrese el codigo de la Receta">

    </div>
        
    @if ($recetas->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
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
                                <td>{{$receta->codigo}}</td>
                                <td>{{$receta->ciudad}}</td>
                                <td>{{$receta->fecha}}</td>
                                <td>{!!$receta->users->name!!}</td> 
                                <td>{!!$receta->diagnosticoscie10->descripcion!!}</td> 
                                <td>{!!$receta->paciente->nombre!!}</td>                           
                                <td with="10px">
                                    @can('admin.receta.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.receta.show', $receta)}}">Detalle</a>
                                    @endcan
                                </td with="10px">  
                                <td with="10px">
                                    @can('admin.receta.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.receta.edit', $receta)}}">Editar</a>
                                    @endcan
                                </td with="10px">  
                                <td>
                                    @can('admin.receta.destroy')
                                        <form action="{{route('admin.receta.destroy', $receta)}}" method="POST" class="form-eliminar">
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
            {{$recetas->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 