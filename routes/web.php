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

Route::get('/citas_paciente', function () {

    $citas = [
        [
            'id' => 1,
            'especialista' => 'Dr. Carlos Ramírez',
            'especialidad' => 'Cardiología',
            'fecha' => '2026-10-02',
            'hora' => '09:00',
            'estado' => 'confirmada',
        ],
        [
            'id' => 2,
            'especialista' => 'Dra. Laura Gómez',
            'especialidad' => 'Dermatología',
            'fecha' => '2026-10-15',
            'hora' => '14:30',
            'estado' => 'pendiente',
        ],
        [
            'id' => 3,
            'especialista' => 'Dr. Andrés Torres',
            'especialidad' => 'Odontología',
            'fecha' => '2026-09-10',
            'hora' => '11:00',
            'estado' => 'realizada',
        ],
    ];

    return view('citas_paciente', ['citas' => $citas]);
});

Route::get('/buscar_especialista', function () {

    $especialistas = [
        [
            'id' => 1,
            'nombre' => 'Dr. Carlos Ramírez',
            'especialidad' => 'Cardiología',
            'horario' => 'Lunes a Viernes, 8:00 am - 12:00 pm',
        ],
        [
            'id' => 2,
            'nombre' => 'Dra. Laura Gómez',
            'especialidad' => 'Dermatología',
            'horario' => 'Martes y Jueves, 2:00 pm - 6:00 pm',
        ],
        [
            'id' => 3,
            'nombre' => 'Dr. Andrés Torres',
            'especialidad' => 'Odontología',
            'horario' => 'Lunes a Sábado, 9:00 am - 1:00 pm',
        ],
        [
            'id' => 4,
            'nombre' => 'Dra. Marcela Rojas',
            'especialidad' => 'Pediatría',
            'horario' => 'Lunes, Miércoles y Viernes, 8:00 am - 11:00 am',
        ],
    ];

    return view('buscar_especialista', ['especialistas' => $especialistas]);
});

Route::get('/historia_clinica_paciente', function () {

    $historial = [
        [
            'id' => 1,
            'fecha' => '2026-08-14',
            'especialista' => 'Dr. Carlos Ramírez',
            'especialidad' => 'Cardiología',
            'diagnostico' => 'Hipertensión arterial leve',
            'tratamiento' => 'Control de presión mensual y dieta baja en sodio',
        ],
        [
            'id' => 2,
            'fecha' => '2026-06-02',
            'especialista' => 'Dra. Laura Gómez',
            'especialidad' => 'Dermatología',
            'diagnostico' => 'Dermatitis atópica',
            'tratamiento' => 'Crema tópica con corticoide por 10 días',
        ],
        [
            'id' => 3,
            'fecha' => '2026-03-20',
            'especialista' => 'Dr. Andrés Torres',
            'especialidad' => 'Odontología',
            'diagnostico' => 'Caries dental leve',
            'tratamiento' => 'Resina en pieza dental #14',
        ],
    ];

    return view('historia_clinica_paciente', ['historial' => $historial]);
});

Route::get('/perfil_paciente', function () {

    $paciente = [
        'nombre' => 'María Alejandra Urcuqui',
        'tipo_documento' => 'Cédula de ciudadanía',
        'numero_documento' => '1094567890',
        'correo' => 'maria.urcuqui@example.com',
        'celular' => '3001234567',
        'fecha_nacimiento' => '2001-05-14',
        'genero' => 'Femenino',
        'direccion' => 'Calle 45 #12-30, Cali',
    ];

    return view('perfil_paciente', ['paciente' => $paciente]);
});

Route::get('/configuracion_paciente', function () {

    $preferencias = [
        'notificaciones_email' => true,
        'notificaciones_sms' => false,
        'recordatorio_citas' => true,
    ];

    return view('configuracion_paciente', ['preferencias' => $preferencias]);
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

