<?php

use App\Http\Controllers\Api\EmpresaController;
use App\Http\Controllers\Api\FuncionarioController;
use App\Http\Controllers\Api\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('empresas', EmpresaController::class)->except([
    'create', 'show', 'edit'
]);

Route::apiResource('clientes', ClienteController::class)->except([
    'create', 'show', 'edit'
]);

Route::apiResource('funcionarios', FuncionarioController::class)->except([
    'create', 'show', 'edit'
]);