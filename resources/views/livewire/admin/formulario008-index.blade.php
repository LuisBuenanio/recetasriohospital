<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder ="Buscar formulario008 por: (Código, Cédula o Nombre del Paciente )">

    </div>
        
    @if ($formulario008s->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Médico</th>
                        <th>Código</th>
                        <th>Médico Salida</th>
                        <th>Paciente</th>
                        <th>CI:</th>
                        <th colspan="2"></th>
                    </tr>

                    <tbody>
                       @foreach ($formulario008s as $formulario008)
                            <tr>
                                <td>{{$formulario008->id}}</td>
                                <td>{!!$formulario008->users->name!!}</td> 
                                <td>{{$formulario008->codigo}}</td>
                                <td>{!!$formulario008->medico_salida!!}</td> 
                                <td>{!!$formulario008->paciente->NombreCompleto!!}</td> 
                                <td>{!!$formulario008->paciente->cedula!!}</td>                                   
                                                   
                                <td with="10px">
                                    <a class="btn btn-primary btn-sm " href="{{route('admin.formulario008.imprimirpdf', $formulario008->id)}}">Descargar Formularo</a>
                                  
                                    {{-- @can('admin.formulario008.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.formulario008.imprimirpdf', $formulario008->id)}}">Descargar Formularo</a>
                                    @endcan --}}
                                </td with="10px">  
                                <td with="10px">
                                    <a class="btn btn-primary btn-sm " href="{{route('admin.formulario008.edit', $formulario008->id)}}">Editar</a>
                                   
                                    {{-- @can('admin.formulario008.edit')
                                        <a class="btn btn-primary btn-sm " href="{{route('admin.formulario008.edit', $formulario008->id)}}">Editar</a>
                                    @endcan --}}
                                </td with="10px">  
                                <td>

                                    
                                    @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                       
                                        {{-- @can('admin.formulario008.destroy')
                                        <form action="{{route('admin.formulario008.destroy', $formulario008->id)}}" method="POST" class="form-eliminar">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                        </form>
                                    @endcan --}}

                                </td>
                            </tr>  
                        @endforeach
                    </tbody>

                </thead>

            </table>

        </div>
        <div class="card-footer">
            {{$formulario008s->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existen registros ......</strong>
        </div>
    @endif

</div> 