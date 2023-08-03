@extends('adminlte::page')

@section('title', 'Recetas')

@section('content_header')

    {{-- <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.pdf.index')}}">REPORTE</a>
     --}}
    @can('admin.receta.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.receta.create') }}">Nueva Receta</a>
    @endcan
    <h1>Listado de Recetas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    @livewire('admin.receta-index')

@stop


@section('js')
    <script>
        console.log('Hi!');
    </script>
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
        $('.form-eliminar').submit(function(e) {
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
