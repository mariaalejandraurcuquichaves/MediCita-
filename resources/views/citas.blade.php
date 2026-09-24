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

    <form>

    <div class="contenedor-campos">

        <div class="campo">
            <label>Paciente<span>*</span></label>

            <div class="input-icono">
                <i class="fa-regular fa-user"></i>

            <select>
                <option selected disabled>Seleccionar paciente</option>
                <option>Juan Pérez</option>
                <option>María Gómez</option>
                <option>Ana Rodríguez</option>
                <option>Carlos Sánchez</option>
                <option>Laura Martínez</option>
            </select>
            </div>

        </div>


        <div class="campo">
            <label>Especialista<span>*</span></label>

            <div class="input-icono">
                <i class="fa-regular fa-user"></i>

            <select>
                <option selected disabled>Seleccionar especialista</option>
                <option>Dr. Andrés Ruiz</option>
                <option>Dra. Laura Torres</option>
                <option>Dr. Carlos López</option>
                <option>Dra. Camila Pérez</option>
                <option>Dr. Felipe González</option>
            </select>
            </div>

        </div>


        <div class="campo">
            <label>Fecha<span>*</span></label>

            <div class="input-icono">
                <i class="fa-regular fa-calendar"></i>

                <input type="date">
            </div>

        </div>


        <div class="campo">
            <label>Hora<span>*</span></label>

            <div class="input-icono">
                <i class="fa-regular fa-clock"></i>

                <input type="time">
            </div>

        </div>


        <div class="campo ancho-completo">
            <label>Especialidad<span>*</span></label>

            <div class="input-icono">
                <i class="fa-solid fa-table-cells-large"></i>

                <select>
                <option selected disabled>Seleccionar especialidad</option>
                <option>Medicina General</option>
                <option>Pediatría</option>
                <option>Cardiología</option>
                <option>Dermatología</option>
                <option>Neurología</option>
                <option>Ginecología</option>
                <option>Oftalmología</option>
                <option>Ortopedia</option>
            </select>
            </div>

        </div>


        <div class="campo ancho-completo">

            <label>Motivo de la consulta<span>*</span></label>

            <textarea
            id="motivo"
            placeholder="Escribe el motivo de la consulta..."
            maxlength="200"></textarea>

            <small id="contador">0/200</small>

        </div>

    </div>


    <div class="botones">

        <button class="btn-cancelar">
            Cancelar
        </button>

        <button class="btn-agendar">
            Agendar cita
        </button>

    </div>

    </form>

        <script>

        const motivo = document.getElementById("motivo");
        const contador = document.getElementById("contador");

        motivo.addEventListener("input", function(){

        let cantidad = motivo.value.length;

        contador.textContent = cantidad + "/200";

});

</script>

</section>

@endsection