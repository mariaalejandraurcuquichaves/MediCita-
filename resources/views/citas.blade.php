@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/citas.css') }}">
@endsection

@section('content')

<!-- Encabezado -->
<header>
    <div class="titulo">
        <h1>Nueva Cita</h1>
        <p>Completa la información para agendar una nueva cita médica</p>
    </div>

    <div class="derecha">
        <div class="busqueda">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Buscar...">
        </div>

        <div class="notificaciones">
            <i class="fa-regular fa-bell"></i>
        </div>

        <div class="perfil">
            <span class="logo-icon">👤</span>
            <div>
                <h4>Administrador</h4>
                <p>Admin</p>
            </div>
        </div>
    </div>
</header>

<section class="formulario-cita">

    <div class="encabezado-cita">
        <i class="fa-regular fa-calendar"></i>
        <h2>Información de la Cita</h2>
        <div class="linea"></div>
    </div>

    <!-- Mensajes de feedback -->
    @if(session('success'))
        <div class="alerta-exito" style="color: green; font-weight: bold; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf <!-- Token de seguridad obligatorio en Laravel -->

        <!-- Estado por defecto que requiere la base de datos -->
        <input type="hidden" name="estado" value="pendiente">

        <div class="contenedor-campos">

            <div class="campo">
                <label for="id_paciente">Paciente<span>*</span></label>
                <div class="input-icono">
                    <i class="fa-regular fa-user"></i>
                    <select name="id_paciente" id="id_paciente" required>
                        <option selected disabled value="">Seleccionar paciente</option>
                        <!-- Ajusta los atributos value con los IDs reales de la tabla paciente -->
                        <option value="1">Juan Pérez (ID: 1)</option>
                        <option value="2">María Gómez (ID: 2)</option>
                        <option value="3">Ana Rodríguez (ID: 3)</option>
                        <option value="7">Carlos Sánchez (ID: 7)</option>
                    </select>
                </div>
            </div>

            <div class="campo">
                <label for="id_especialista">Especialista<span>*</span></label>
                <div class="input-icono">
                    <i class="fa-regular fa-user"></i>
                    <select name="id_especialista" id="id_especialista" required>
                        <option selected disabled value="">Seleccionar especialista</option>
                        <!-- Ajusta los atributos value con los IDs reales de la tabla especialista -->
                        <option value="1">Dr. Andrés Ruiz (ID: 1)</option>
                        <option value="2">Dra. Laura Torres (ID: 2)</option>
                        <option value="3">Dr. Carlos López (ID: 3)</option>
                    </select>
                </div>
            </div>

            <div class="campo">
                <label for="fecha">Fecha<span>*</span></label>
                <div class="input-icono">
                    <i class="fa-regular fa-calendar"></i>
                    <input type="date" name="fecha" id="fecha" required>
                </div>
            </div>

            <div class="campo">
                <label for="hora">Hora<span>*</span></label>
                <div class="input-icono">
                    <i class="fa-regular fa-clock"></i>
                    <input type="time" name="hora" id="hora" required>
                </div>
            </div>

            <div class="campo ancho-completo">
                <label for="especialidad">Especialidad<span>*</span></label>
                <div class="input-icono">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <select name="especialidad" id="especialidad">
                        <option selected disabled value="">Seleccionar especialidad</option>
                        <option value="1">Medicina General</option>
                        <option value="2">Pediatría</option>
                        <option value="3">Cardiología</option>
                        <option value="4">Dermatología</option>
                    </select>
                </div>
            </div>

            <div class="campo ancho-completo">
                <label for="motivo">Motivo de la consulta</label>
                <textarea
                    name="motivo"
                    id="motivo"
                    placeholder="Escribe el motivo de la consulta..."
                    maxlength="200"></textarea>
                <small id="contador">0/200</small>
            </div>

        </div>

        <div class="botones">
            <button type="reset" class="btn-cancelar">Cancelar</button>
            <button type="submit" class="btn-agendar">Agendar cita</button>
        </div>

    </form>

    <script>
        const motivo = document.getElementById("motivo");
        const contador = document.getElementById("contador");

        if (motivo) {
            motivo.addEventListener("input", function() {
                let cantidad = motivo.value.length;
                contador.textContent = cantidad + "/200";
            });
        }
    </script>

</section>

@endsection