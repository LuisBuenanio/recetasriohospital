<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Buscar Receta por: (Cédula, Nombre, N° historia del paciente )">

    </div>
        
    @if ($recetas->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>N° Receta</th>
                        <th>Médico</th>
                        <th>Fecha</th>
                        <th>Médico Tratante</th>
                        <th>Dianóstico </th>
                        <th>Paciente</th>
                        <th>CI:</th>
                        <th>Historia</th>
                        <th colspan="2"></th>
                    </tr>

                    <tbody>
                        @foreach ($recetas as $receta)
                            <tr>
                                <td>{{$receta->id}}</td>
                                <td>{!!$receta->users->name!!}</td> 
                                <td>{{$receta->fecha}}</td>
                                <td>{!!$receta->medico!!}</td> 
                                <td>{!!$receta->diagnosticoscie10->descripcion!!}</td> 
                                <td>{!!$receta->paciente->nombre!!}</td> 
                                <td>{!!$receta->paciente->cedula!!}</td>                                     
                                <td>{{$receta->historia}}</td> 
                                <!-- Agrega una columna con el botón "Copiar y Crear Nuevo" -->
                                {{-- <td>
                                    <form action="{{ route('admin.receta.crearNuevaReceta') }}" method="POST">
                                        @csrf
                                        <!-- Campos de datos ocultos para copiar -->
                                        <input type="hidden" name="ciudad" value="{{ $receta->ciudad }}">
                                        <input type="hidden" name="historia" value="{{ $receta->historia }}">

                                        <!-- Botón "Copiar y Crear Nuevo" -->
                                        <button type="submit" class="btn btn-primary">Copiar y Crear Nuevo</button>
                                    </form>
                                </td>   --}}  
                                <td>
                                    <a href="{{ route('admin.receta.crearnuevaReceta', $receta->id) }}" class="btn btn-primary">Copiar</a>
                                </td>                     
                                <td with="10px">
                                    @can('admin.receta.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.receta.show', $receta->id)}}">Detalle</a>
                                    @endcan
                                </td with="10px">  
                                <td with="10px">
                                    @can('admin.receta.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.receta.edit', $receta->id)}}">Editar</a>
                                    @endcan
                                </td with="10px">  
                                <td>
                                    @can('admin.receta.destroy')
                                        <form action="{{route('admin.receta.destroy', $receta->id)}}" method="POST" class="form-eliminar">
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