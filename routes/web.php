<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'index']);

Route::get('/clientes/create', [ClienteController::class, 'create']);

Route::post('/clientes/store', [ClienteController::class, 'store']);

Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit']);

Route::post('/clientes/{id}/update', [ClienteController::class, 'update']);

Route::get('/clientes/{id}/delete', [ClienteController::class, 'destroy']);