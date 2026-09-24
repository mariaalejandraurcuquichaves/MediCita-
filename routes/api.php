<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AuthController;

//-- publicas

Route::post('/login', [AuthController::class, 'login']);

Route::post('/pacientes', [PacienteController::class, 'store']);

//-- Protegida

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
    return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);

// Solo Administrador (rol 1)

Route::middleware('rol:1')->group(function () {
    Route::post('/roles', [RolController::class, 'store']);
    Route::put('/roles/{id}', [RolController::class, 'update']);
    Route::delete('/roles/{id}', [RolController::class, 'destroy']);
    Route::post('/especialidades', [EspecialidadController::class, 'store']);
    Route::post('/medicos', [MedicoController::class, 'store']);
    });

    // Cualquier usuario con token (leer)
    Route::get('/roles', [RolController::class, 'index']);
    Route::get('/especialidades', [EspecialidadController::class, 'index']);
    Route::get('/medicos', [MedicoController::class, 'index']); 
    
    
    //-- Citas

    Route::get('/citas', [CitaController::class, 'index']);

    Route::post('/citas', [CitaController::class, 'store']);



});
























