<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCita - Panel Paciente</title>

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        @yield('css')

</head>
<body>

    <aside class="sidebar">

        <div class="logo">
            <img src="{{ asset('imagenes/logo medicita.png') }}" alt="logo medicita">
            <h2>MediCita</h2>
        </div>

        <ul>
            <li>
                <a href="/dashboard_paciente">
                <i class="fa-solid fa-house"></i>
                <span>Inicio</span>
                </a>
            </li>

            <li>
                <a href="/citas_paciente">
                <i class="fa-regular fa-calendar"></i>
                <span>Mis Citas</span>
                </a>
            </li>

            <li>
                <a href="/buscar_especialista">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span>Buscar Especialista</span>
                </a>
            </li>

            <li>
                <a href="/historia_clinica_paciente">
                <i class="fa-solid fa-file-medical"></i>
                <span>Historia clínica</span>
                </a>
            </li>

            <li>
                <a href="/perfil_paciente">
                <i class="fa-solid fa-user"></i>
                <span>Mi Perfil</span>
                </a>
            </li>

            <li>
                <a href="/configuracion_paciente">
                <i class="fa-solid fa-gear"></i>
                <span>Configuración</span>
                </a>
            </li>
        </ul>

        <div class="cerrar-sesion">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Cerrar sesión</span>
        </div>

    </aside>

    <main class="contenido">

        @yield('content')

    </main>
   
    @yield('js')
    
</body>
</html>