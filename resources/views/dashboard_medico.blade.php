@extends('layouts.medico')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        /* Ajustes específicos para arreglar la maquetación */
        .main-wrapper {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            width: 100%;
        }

        .tarjetas {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            width: 100%;
        }

        .tarjetas .card {
            background-color: #e8eef9;
            padding: 20px;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 140px;
            height: auto;
            width: auto;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .tarjetas .card i {
            font-size: 28px;
            color: #2563eb;
            margin-bottom: 8px;
        }

        .tarjetas .card h2 {
            font-size: 32px;
            margin: 5px 0;
            color: #1e293b;
        }

        .tarjetas .card p {
            font-size: 14px;
            color: #64748b;
            white-space: nowrap;
        }
    </style>
@endsection

@section('content')
<div class="main-wrapper">

    <!-- Encabezado para Médico -->
    <header>
        <div class="titulo">
            <h1>¡Bienvenido, Médico!</h1>
            <p>Aquí tienes un resumen general de tus citas en MediCita</p>
        </div>

        <div class="derecha">
            <div class="busqueda">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar...">
            </div>

            <div class="notificaciones">
                <i class="fa-regular fa-bell"></i>
            </div>

            <div class="logo">
                <span class="logo-icon">🩺</span>
                <div>
                    <h4>Médico</h4>
                    <p>Especialista</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Tarjetas específicas para el Médico, ahora con datos reales -->
    <section class="tarjetas">

        <div class="card">
            <i class="fa-regular fa-calendar"></i>
            <h2>{{ $citasHoy }}</h2>
            <p>Citas de hoy</p>
        </div>

        <div class="card">
            <i class="fa-solid fa-circle-check"></i>
            <h2>{{ $atendidosHoy }}</h2>
            <p>Atendidos hoy</p>
        </div>

        <div class="card">
            <i class="fa-solid fa-clock"></i>
            <h2>{{ $pendientesHoy }}</h2>
            <p>Pendientes hoy</p>
        </div>

        <div class="card">
            <i class="fa-solid fa-users"></i>
            <h2>{{ $misPacientes }}</h2>
            <p>Mis Pacientes</p>
        </div>

    </section>

</div>
@endsection
