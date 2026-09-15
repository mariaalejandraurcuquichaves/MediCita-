@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<!-- Encabezado -->
<header>
    <div class="titulo">
        <h1>¡Bienvenido, Administrador!</h1>
        <p>Aquí tienes un resumen general de MediCita</p>
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
            <span class="logo-icon">👤</span>
            <div>
                <h4>Administrador</h4>
                <p>Admin</p>
            </div>
        </div>
    </div>
</header>

<!-- Alerta de éxito al guardar cita -->
@if (session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 12px 20px; border-radius: 8px; margin: 20px 0; border: 1px solid #c3e6cb;">
        <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
    </div>
@endif

<!-- Tarjetas -->
<section class="tarjetas">

    <div class="card">
        <i class="fa-regular fa-calendar"></i>
        <h2>{{ isset($citas) ? $citas->count() : 0 }}</h2>
        <p>Citas programadas</p>
    </div>

    <div class="card">
        <i class="fa-solid fa-users"></i>
        <h2>450</h2>
        <p>Pacientes registrados</p>
    </div>

    <div class="card">
        <i class="fa-solid fa-user-doctor"></i>
        <h2>35</h2>
        <p>Especialistas</p>
    </div>

    <div class="card">
        <i class="fa-solid fa-stethoscope"></i>
        <h2>18</h2>
        <p>Especialidades</p>
    </div>

</section>

<!-- Tabla de Citas Agendadas -->
<section class="tabla-citas" style="margin-top: 30px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
    <h3 style="margin-bottom: 15px; color: #333;">Últimas Citas Agendadas</h3>

    @if(isset($citas) && $citas->count() > 0)
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #eee; background-color: #f8f9fa;">
                    <th style="padding: 12px;">ID</th>
                    <th style="padding: 12px;">Fecha</th>
                    <th style="padding: 12px;">Hora</th>
                    <th style="padding: 12px;">Estado</th>
                    <th style="padding: 12px;">ID Paciente</th>
                    <th style="padding: 12px;">ID Especialista</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 12px;">{{ $cita->id_cita ?? $cita->id }}</td>
                        <td style="padding: 12px;">{{ $cita->fecha }}</td>
                        <td style="padding: 12px;">{{ $cita->hora }}</td>
                        <td style="padding: 12px;">
                            <span style="background: #e0f2fe; color: #0369a1; padding: 4px 8px; border-radius: 4px; font-size: 0.85rem;">
                                {{ ucfirst($cita->estado) }}
                            </span>
                        </td>
                        <td style="padding: 12px;">{{ $cita->id_paciente }}</td>
                        <td style="padding: 12px;">{{ $cita->id_especialista }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="color: #666; padding: 10px 0;">No hay citas registradas en el sistema.</p>
    @endif
</section>

@endsection