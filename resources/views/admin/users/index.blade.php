@extends('adminlte::page')

@section('title', 'Médicos')

@section('content_header')
    @can('admin.receta.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.users.create')}}">Crear Nuevo Médico</a>
    @endcan
    <h1>Lista de Médicos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.users-index')

@stop


@section('js')
    <script> console.log('Hi!'); </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
                    '¡Eliminado!',
                    'El médico se eliminó correctamente.',
                    'success'
            )
        </script>
        
    @endif
    
    <script> 
        $('.form-eliminar').submit(function(e){
            e.preventDefault();      
    
            Swal.fire({
            title: '¿Estás Seguro?',
            text: "Este médico se eliminará definitivamente",
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