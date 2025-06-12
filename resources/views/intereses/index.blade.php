@extends('layout.app')
@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">📋 Lugares Registrados</h1>
        <div>
            <a href="{{ route('clientes.create') }}" class="btn btn-success me-2">
                <i class="fas fa-user-plus"></i> Nuevo Cliente
            </a>
            <a href="{{ url('clientes/mapa') }}" class="btn btn-info text-white">
                <i class="fas fa-map-marked-alt"></i> Ver Mapa Global
            </a>
        </div>
    </div>

    <div class="table-responsive shadow rounded">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>CÉDULA</th>
                    <th>DESCRIPCIÓN</th>
                    <th>CATEGORIA</th>
                    <th>IMAGEN</th>
                    <th>LATITUD</th>
                    <th>LONGITUD</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($intereses as $turismoCargo)
                    <tr>
                        <td>{{ $turismoCargo->nombre }}</td>
                        <td>{{ $turismoCargo->descripcion }}</td>
                        <td>{{ $turismoCargo->categoria }}</td>
                        <td>{{ $turismoCargo->imagen }}</td>
                        <td>{{ $turismoCargo->latitud }}</td>
                        <td>{{ $turismoCargo->longitud }}</td>
                        <td>
                            <a href="{{ route('clientes.edit', $clienteTemporal->id) }}" class="btn btn-warning btn-sm me-1">
                                <i class="fas fa-edit"></i> Editar
                            </a>

                            <form action="{{ route('clientes.destroy', $clienteTemporal->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este cliente?')">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

