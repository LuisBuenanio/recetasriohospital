<!-- lista.blade.php -->

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Comercial</th>
            <th>Concentración</th>
            <th>Presentación</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($medicamentos as $medicamento)
            <tr>
                <td>{{ $medicamento->nombre }}</td>
                <td>{{ $medicamento->comercial }}</td>
                <td>{{ $medicamento->concentracion }}</td>
                <td>{{ $medicamento->presentacion }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
