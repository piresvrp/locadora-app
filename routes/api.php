
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloVeiculoController;

Route::get('/modelos-veiculos', [ModeloVeiculoController::class, 'index']);
Route::get('/modelos-veiculos/all', [ModeloVeiculoController::class, 'getAll']);
Route::get('/modelos-veiculos/{id}', [ModeloVeiculoController::class, 'findById']);
Route::post('/modelos-veiculos', [ModeloVeiculoController::class, 'store']);
Route::put('/modelos-veiculos/{id}', [ModeloVeiculoController::class, 'update']);
Route::delete('/modelos-veiculos/{id}', [ModeloVeiculoController::class, 'destroy']);

Route::get('/marcas', [MarcaController::class, 'index']);
Route::get('/marcas/all', [MarcaController::class, 'getAll']);
Route::get('/marcas/{id}', [MarcaController::class, 'findById']);
Route::post('/marcas', [MarcaController::class, 'store']);
Route::put('/marcas/{id}', [MarcaController::class, 'update']);
Route::delete('/marcas/{id}', [MarcaController::class, 'destroy']);

Route::get('/veiculos', [VeiculoController::class, 'index']);
Route::get('/veiculos/all', [VeiculoController::class, 'getAll']);
Route::get('/veiculos/{id}', [VeiculoController::class, 'findById']);
Route::post('/veiculos', [VeiculoController::class, 'store']);
Route::put('/veiculos/{id}', [VeiculoController::class, 'update']);
Route::delete('/veiculos/{id}', [VeiculoController::class, 'destroy']);