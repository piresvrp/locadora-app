
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloVeiculoController;
use App\Http\Controllers\CorController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\StatusVeiculoController;

Route::get('/teste-cors', function () {
    return response('OK TESTE CORS', 200, [
        'Access-Control-Allow-Origin' => 'http://localhost:5174',
        'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
        'Access-Control-Allow-Headers' => 'Content-Type, Authorization, X-Requested-With, Accept',
        'Content-Type' => 'application/json',
    ]);
});
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

Route::get('/cores', [CorController::class, 'index']);
Route::get('/cores/all', [CorController::class, 'getAll']);
Route::get('/cores/{id}', [CorController::class, 'findById']);
Route::post('/cores', [CorController::class, 'store']);
Route::put('/cores/{id}', [CorController::class, 'update']);
Route::delete('/cores/{id}', [CorController::class, 'destroy']);


Route::get('/unidades', [UnidadeController::class, 'index']);
Route::get('/unidades/all', [UnidadeController::class, 'getAll']);
Route::get('/unidades/{id}', [UnidadeController::class, 'findById']);
Route::post('/unidades', [UnidadeController::class, 'store']);
Route::put('/unidades/{id}', [UnidadeController::class, 'update']);
Route::delete('/unidades/{id}', [UnidadeController::class, 'destroy']);

Route::get('/status-veiculos', [StatusVeiculoController::class, 'index']);
Route::get('/status-veiculos/all', [StatusVeiculoController::class, 'getAll']);
Route::get('/status-veiculos/{id}', [StatusVeiculoController::class, 'findById']);
Route::post('/status-veiculos', [StatusVeiculoController::class, 'store']);
Route::put('/status-veiculos/{id}', [StatusVeiculoController::class, 'update']);
Route::delete('/status-veiculos/{id}', [StatusVeiculoController::class, 'destroy']);
