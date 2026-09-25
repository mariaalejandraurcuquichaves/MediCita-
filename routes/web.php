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

    $citasHoy = 6;
    $atendidosHoy = 3;
    $pendientesHoy = 3;
    $misPacientes = 42;

    return view('dashboard_medico', [
        'citasHoy' => $citasHoy,
        'atendidosHoy' => $atendidosHoy,
        'pendientesHoy' => $pendientesHoy,
        'misPacientes' => $misPacientes,
    ]);
});
Route::get('/citas_medico', function () {

    $citas = [
        [
            'id' => 1,
            'paciente' => 'Juan Pérez',
            'motivo' => 'Control de presión arterial',
            'fecha' => '2026-09-25',
            'hora' => '09:00',
            'estado' => 'confirmada',
        ],
        [
            'id' => 2,
            'paciente' => 'María Fernanda López',
            'motivo' => 'Dolor en el pecho',
            'fecha' => '2026-09-25',
            'hora' => '10:30',
            'estado' => 'pendiente',
        ],
        [
            'id' => 3,
            'paciente' => 'Carlos Andrés Ruiz',
            'motivo' => 'Chequeo general',
            'fecha' => '2026-09-24',
            'hora' => '15:00',
            'estado' => 'realizada',
        ],
    ];

    return view('citas_medico', ['citas' => $citas]);
});

Route::get('/pacientes_medico', function () {

    $pacientes = [
        [
            'id' => 1,
            'nombre' => 'Juan Pérez',
            'documento' => '1098765432',
            'edad' => 34,
            'ultima_cita' => '2026-09-25',
        ],
        [
            'id' => 2,
            'nombre' => 'María Fernanda López',
            'documento' => '1045678901',
            'edad' => 27,
            'ultima_cita' => '2026-09-25',
        ],
        [
            'id' => 3,
            'nombre' => 'Carlos Andrés Ruiz',
            'documento' => '1032145698',
            'edad' => 52,
            'ultima_cita' => '2026-09-24',
        ],
    ];

    return view('pacientes_medico', ['pacientes' => $pacientes]);
});

Route::get('/historia_clinica_medico', function () {

    $historial = [
        [
            'id' => 1,
            'paciente' => 'Juan Pérez',
            'fecha' => '2026-08-14',
            'diagnostico' => 'Hipertensión arterial leve',
            'tratamiento' => 'Control de presión mensual y dieta baja en sodio',
        ],
        [
            'id' => 2,
            'paciente' => 'María Fernanda López',
            'fecha' => '2026-06-02',
            'diagnostico' => 'Dermatitis atópica',
            'tratamiento' => 'Crema tópica con corticoide por 10 días',
        ],
        [
            'id' => 3,
            'paciente' => 'Carlos Andrés Ruiz',
            'fecha' => '2026-03-20',
            'diagnostico' => 'Chequeo general sin hallazgos relevantes',
            'tratamiento' => 'Control anual de rutina',
        ],
    ];

    return view('historia_clinica_medico', ['historial' => $historial]);
});

Route::get('/configuracion_medico', function () {

    $preferencias = [
        'notificaciones_email' => true,
        'notificaciones_sms' => false,
        'recordatorio_citas' => true,
    ];

    return view('configuracion_medico', ['preferencias' => $preferencias]);
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

