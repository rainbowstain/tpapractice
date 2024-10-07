<?php

namespace Modules\Productos\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Productos\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct()
{
    // Registrar el namespace de las vistas
    view()->addNamespace('Productos', base_path('app-modules/productos/resources/views'));
}

    public function index() {
        $productos = Producto::all();
        return view('Productos::index', compact('productos'));
    }

    public function create() {
        return view('Productos::create');
    }

    public function store(Request $request) {
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    public function edit(Producto $producto) {
        return view('Productos::edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto) {
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto) {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
