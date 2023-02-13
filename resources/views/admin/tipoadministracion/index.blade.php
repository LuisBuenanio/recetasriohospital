@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital')

@section('content_header')
    @can('admin.tipoadministracion.create') 
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tipoadministracion.create')}}">Nuevo Tipo de Administración</a>
    @endcan
        <h1>Listado Tipo de Administración</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        
        @if ($tipo_administraciones->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th colspan="2"></th>
                        </tr>
    
                        <tbody>
                            @foreach ($tipo_administraciones as $tipo_administracion)
                                <tr>
                                    <td>{{$tipo_administracion->id}}</td>
                                    <td>{{$tipo_administracion->descripcion}}</td>
                                    <td with="10px">
                                        @can('admin.tipoadministracion.edit')
                                            <a class="btn btn-primary btn-sm " href="{{route('admin.tipoadministracion.edit', $tipo_administracion)}}">Editar</a>
                                        @endcan
                                          </td with="10px">
                                    <td>
                                        @can('admin.tipoadministracion.destroy')
                                            <form action="{{route('admin.tipoadministracion.destroy', $tipo_administracion)}}" method="POST" class="form-eliminar">
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
            {{-- <div class="card-footer">
                {{$tipo_integrante->links()}}
            </div> --}}
        @else
            <div class="card-body">
                <strong>No existen registros ......</strong>
            </div>
        @endif
    
    </div>
    
    
@stop


@section('js')
<script> console.log('Hi!'); </script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('eliminar') == 'ok')
    <script>
        Swal.fire(
                '¡Eliminado!',
                'El tipo de administración se eliminó correctamente.',
                'success'
        )
    </script>
    
@endif

<script> 
    $('.form-eliminar').submit(function(e){
        e.preventDefault();      

        Swal.fire({
        title: '¿Estás Seguro?',
        text: "Este tipo de administración se eliminará definitivamente",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, Eliminar!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
            
            this.submit();
        }
        })
    });
</script>
@stop