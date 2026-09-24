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

    //-- Roles
    Route::get('/roles', [RolController::class, 'index']);
    Route::post('/roles', [RolController::class, 'store']);
    Route::put('/roles/{id}', [RolController::class, 'update']);
    Route::delete('/roles/{id}', [RolController::class, 'destroy']);

    //-- Especialidades

    Route::get('/especialidades', [EspecialidadController::class, 'index']);

    Route::post('/especialidades', [EspecialidadController::class, 'store']);

    //-- Medicos

    Route::get('/medicos', [MedicoController::class, 'index']);

    Route::post('/medicos', [MedicoController::class, 'store']);   
    
    
    //-- Citas

    Route::get('/citas', [CitaController::class, 'index']);

    Route::post('/citas', [CitaController::class, 'store']);



});
























