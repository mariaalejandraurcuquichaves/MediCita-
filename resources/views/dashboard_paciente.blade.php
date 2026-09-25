@extends('layouts.paciente')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<!-- Encabezado -->
<header>
    <div class="titulo">
        <h1>¡Bienvenido, {{ auth()->user()->name ?? 'Paciente' }}!</h1>
        <p>Aquí tienes un resumen de tus citas en MediCita</p>
    </div>

    <div class="derecha">
        <div class="busqueda">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Buscar especialista...">
        </div>

        <div class="notificaciones">
            <i class="fa-regular fa-bell"></i>
        </div>

        <div class="perfil">
            <i class="fa-solid fa-circle-user"></i>
            <div>
                <h4>{{ auth()->user()->name ?? 'Paciente' }}</h4>
                <p>Paciente</p>
            </div>
        </div>
    </div>
</header>

<!-- Alerta de éxito (por ejemplo, al agendar una cita) -->
@if (session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 12px 20px; border-radius: 8px; margin: 20px 0; border: 1px solid #c3e6cb;">
        <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
    </div>
@endif

<!-- Tarjetas -->
<section class="tarjetas">

    <div class="card">
        <i class="fa-regular fa-calendar"></i>
        <h2>{{ isset($proximasCitas) ? $proximasCitas->count() : 0 }}</h2>
        <p>Próximas citas</p>
    </div>

    <div class="card">
        <i class="fa-solid fa-clock-rotate-left"></i>
        <h2>{{ isset($citasAnteriores) ? $citasAnteriores->count() : 0 }}</h2>
        <p>Citas anteriores</p>
    </div>

    <div class="card">
        <i class="fa-solid fa-stethoscope"></i>
        <h2>5</h2>
        <p>Especialidades disponibles</p>
    </div>

    <div class="card">
        <i class="fa-regular fa-bell"></i>
        <h2>1</h2>
        <p>Recordatorio pendiente</p>
    </div>

</section>

@endsection