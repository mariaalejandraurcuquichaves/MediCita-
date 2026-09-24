<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AuthController;

Route::get('/roles', [RolController::class, 'index']);

Route::post('/roles', [RolController::class, 'store']);

Route::put('/roles/{id}', [RolController::class, 'update']);

Route::delete('/roles/{id}', [RolController::class, 'destroy']);

Route::get('/especialidades', [EspecialidadController::class, 'index']);

Route::post('/especialidades', [EspecialidadController::class, 'store']);

Route::get('/medicos', [MedicoController::class, 'index']);

Route::post('/medicos', [MedicoController::class, 'store']);

Route::middleware('auth:sanctum')->get('/citas', [CitaController::class, 'index']);

Route::post('/citas', [CitaController::class, 'store']);

Route::post('/pacientes', [PacienteController::class, 'store']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
