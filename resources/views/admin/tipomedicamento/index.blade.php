@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital')

@section('content_header')
    @can('admin.tipomedicamento.create') 
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tipomedicamento.create')}}">Nuevo Tipo de Medicamento</a>
    @endcan
        <h1>Listado Tipo de Medicamentos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        
        @if ($tipo_medicamentos->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th colspan="2"></th>
                        </tr>
    
                        <tbody>
                            @foreach ($tipo_medicamentos as $tipo_medicamento)
                                <tr>
                                    <td>{{$tipo_medicamento->id}}</td>
                                    <td>{{$tipo_medicamento->descripcion}}</td>
                                    <td with="10px">
                                        @can('admin.tipomedicamento.edit')
                                            <a class="btn btn-primary btn-sm " href="{{route('admin.tipomedicamento.edit', $tipo_medicamento)}}">Editar</a>
                                        @endcan
                                      </td with="10px">
                                    <td>
                                        @can('admin.tipomedicamento.destroy')
                                            <form action="{{route('admin.tipomedicamento.destroy', $tipo_medicamento)}}" method="POST" class="form-eliminar">
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
                'El tipo de medicamento se eliminó correctamente.',
                'success'
        )
    </script>
    
@endif

<script> 
    $('.form-eliminar').submit(function(e){
        e.preventDefault();      

        Swal.fire({
        title: '¿Estás Seguro?',
        text: "Este tipo de medicamento se eliminará definitivamente",
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