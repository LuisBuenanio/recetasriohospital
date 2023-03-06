@extends('adminlte::page')

@section('title', 'Recetas Rio Hospital')

@section('content_header')
    </td with="10px">
    <a class="btn btn-primary btn-sm float-right" href="{{route('admin.imprimirpdf', $receta->id)}}">IMPRIMIR RECETA</a>
   
    </td with="10px"> 
    
    <h1>Detalle de Receta</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @include('admin.receta.partials.detalle')
    
    {{-- <table class="table table-striped">
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
                    <tr>
                        <td>{{$recetum->fecha}}</td>-- 
                        <td>{{$recetum->codigo}}</td>
                        <td>{{$recetum->ciudad}}</td>
                        <td>{{$recetum->fecha}}</td>
                        <td>{!!$recetum->users->name!!}</td> 
                        <td>{!!$recetum->diagnosticoscie10->descripcion!!}</td> 
                        <td>{!!$recetum->paciente->nombre!!}</td>  
                        
                        <td>{!!$recetum->users->email!!}</td> 
                        <td>{!!$recetum->diagnosticoscie10->categoriascie10->descripcion!!}</td> 
                        <td>{!!$recetum->paciente->edad!!}</td>                      
                    </tr>  
            </tbody>

        </thead>

    </table> --}}
    
@stop


@section('js')
<script> console.log('Hi!'); </script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('eliminar') == 'ok')
    <script>
        Swal.fire(
                '¡Eliminado!',
                'La Receta se eliminó correctamente.',
                'success'
        )
    </script>
    
@endif

<script> 
    $('.form-eliminar').submit(function(e){
        e.preventDefault();      

        Swal.fire({
        title: '¿Estás Seguro?',
        text: "Esta Receta se eliminará definitivamente",
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