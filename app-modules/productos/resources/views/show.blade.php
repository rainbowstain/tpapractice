@extends('Productos::layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>

    <div class="mb-3">
        <label for="id" class="form-label">ID del Producto</label>
        <input type="text" id="id" class="form-control" value="{{ $producto->id }}" readonly>
    </div>

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Producto</label>
        <input type="text" id="nombre" class="form-control" value="{{ $producto->nombre }}" readonly>
    </div>

    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>

    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
@endsection
