<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/dashboard_medico', function () {
    return view('dashboard_medico');
});

Route::get('/dashboard_paciente', function () {
    return view('dashboard_paciente');
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

