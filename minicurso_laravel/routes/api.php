<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\VeiculoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/categorias')->group(function () { // agrupando as rotas em '/categorias'
    Route::post('/', [CategoriaController::class, 'store']); // chamando a função dentro do controller
    Route::get('/', [CategoriaController::class, 'index']);
    Route::patch('/{id}', [CategoriaController::class, 'update']);
    Route::delete('/{id}', [CategoriaController::class, 'destroy']);
    Route::get('/{id}', [CategoriaController::class, 'show']);
});

Route::prefix('/veiculos')->group(function () { // agrupando as rotas em '/veiculos'
    Route::post('/', [VeiculoController::class, 'store']); // chamando a função dentro do controller
    Route::get('/', [VeiculoController::class, 'index']);
    Route::patch('/{id}', [VeiculoController::class, 'update']);
    Route::delete('/{id}', [VeiculoController::class, 'destroy']);
    Route::get('/{id}', [VeiculoController::class, 'show']);
});

?>
