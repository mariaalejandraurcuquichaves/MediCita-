<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;

Route::get('/citas', [CitaController::class, 'create'])->name('citas.create');
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/citas', function () {
    return view('citas');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/pacientes', function () {
    return view('pacientes');
});

Route::get('/especialistas', function () {
    return view('especialistas');
});

Route::get('/especialidades', function () {
    return view('especialidades');
});

Route::get('/historia_clinica', function () {
    return view('historia_clinica');
});

Route::get('/configuracion', function () {
    return view('configuracion');
});