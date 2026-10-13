<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidodetalleController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index']);
Route::get('/empleados', [App\Http\Controllers\EmpleadoController::class, 'index']);
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index']);
Route::get('/materiales', [App\Http\Controllers\MaterialController::class, 'index']);
Route::get('/pedidos', [App\Http\Controllers\PedidoController::class, 'index']);
Route::get('/pedidodetalles', [App\Http\Controllers\PedidodetalleController::class, 'index']);
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index']);
Route::get('/proveedores', [App\Http\Controllers\ProveedorController::class, 'index']);
