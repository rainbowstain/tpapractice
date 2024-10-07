@extends('Productos::layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Producto</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $producto->nombre }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>
@endsection
