<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

    Route::prefixed('/categorias')->group(function () { // agrupando as rotas em '/categorias'
        Route::post('/', [CategoriaController::class, 'store']); // chamando a função dentro do controller
        Route::get('/', [CategoriaController::class, 'index']);
        Route::patch('/{id}', [CategoriaController::class, 'update']);
        Route::delete('/{id}', [CategoriaController::class, 'destroy']);
        Route::get('/{id}', [CategoriaController::class, 'show']);
    });
?>
