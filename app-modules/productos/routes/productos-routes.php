<?php

use Illuminate\Support\Facades\Route;
use Modules\Productos\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);
