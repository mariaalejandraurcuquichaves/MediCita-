@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')


<!-- Encabezado -->
        <header>


            <div class="titulo">
                <h1>¡Bienvenido, Administrador!</h1>
                <p>Aqui tienes un resumen general de MediCita</p>
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


        <!-- Tarjetas -->
        <section class="tarjetas">


            <div class="card">
                <i class="fa-regular fa-calendar"></i>
                <h2>125</h2>
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

@endsection