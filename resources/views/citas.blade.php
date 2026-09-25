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

            <select id="paciente">
                <option selected disabled>Seleccionar paciente</option>
            </select>
            </div>

        </div>


        <div class="campo">
            <label>Especialista<span>*</span></label>

            <div class="input-icono">
                <i class="fa-regular fa-user"></i>

            <select id="especialista" disabled>
                <option value="" selected disabled>Primero Seleccionar especialidad</option>
               
            </select>
            </div>

        </div>


        <div class="campo">
            <label>Fecha<span>*</span></label>

            <div class="input-icono">
                <i class="fa-regular fa-calendar"></i>

                <input type="date" id="fecha">
            </div>

        </div>


        <div class="campo">
            <label>Hora<span>*</span></label>

            <div class="input-icono">
                <i class="fa-regular fa-clock"></i>

                <input type="time" id="hora">
            </div>

        </div>


        <div class="campo ancho-completo">
            <label>Especialidad<span>*</span></label>

            <div class="input-icono">
                <i class="fa-solid fa-table-cells-large"></i>

                <select id="especialidad">
                <option value="" selected disabled>Seleccionar especialidad</option>
                
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

        <button type="button" class="btn-agendar" id="btnAgendar">
            Agendar cita
        </button>

    </div>

    </form>

    <script>
        const token = localStorage.getItem('token');

        async function pedirJSON(url) {
        const respuesta = await fetch(url, {
        headers: {
            'Accept': 'application/json',
            'Authorization': 'Bearer ' + token
        }
    });
    return respuesta.json();
        }

        //  Cargar pacientes al abrir la página
    async function cargarPacientes() {
        const pacientes = await pedirJSON('/api/pacientes');
        const select = document.getElementById('paciente');

    pacientes.forEach(function (paciente) {
        const opcion = document.createElement('option');
        opcion.value = paciente.id;
        opcion.textContent = paciente.persona.nombre;
        select.appendChild(opcion);
    });
        }

        // 2. Cargar especialidades al abrir la página
    async function cargarEspecialidades() {
        const especialidades = await pedirJSON('/api/especialidades');
        const select = document.getElementById('especialidad');

    especialidades.forEach(function (especialidad) {
        const opcion = document.createElement('option');
        opcion.value = especialidad.id;
        opcion.textContent = especialidad.nombre;
        select.appendChild(opcion);
    });
        }

        //  Cuando cambia la especialidad, cargar solo esos médicos
    document.getElementById('especialidad').addEventListener('change', async function () {
        const idEspecialidad = this.value;
        const selectEspecialista = document.getElementById('especialista');

    selectEspecialista.innerHTML = '<option value="" selected disabled>Cargando...</option>';
    selectEspecialista.disabled = true;

    const medicos = await pedirJSON('/api/medicos?id_especialidad=' + idEspecialidad);

    selectEspecialista.innerHTML = '<option value="" selected disabled>Seleccionar especialista</option>';

    medicos.forEach(function (medico) {
        const opcion = document.createElement('option');
        opcion.value = medico.id;
        opcion.textContent = medico.persona.nombre;
        selectEspecialista.appendChild(opcion);
    });

    selectEspecialista.disabled = false;
        });

    //  Enviar el formulario
    document.getElementById('btnAgendar').addEventListener('click', async function () {
    const datos = {
        id_paciente: document.getElementById('paciente').value,
        id_medico: document.getElementById('especialista').value,
        fecha: document.getElementById('fecha').value,
        hora: document.getElementById('hora').value,
        motivo: document.getElementById('motivo').value
    };

    const respuesta = await fetch('/api/citas', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'Authorization': 'Bearer ' + token
        },
        body: JSON.stringify(datos)
    });

    const resultado = await respuesta.json();

    if (respuesta.ok) {
        alert('Cita agendada correctamente.');
        window.location.reload();
    } else {
        alert(resultado.message || 'Revisa los datos del formulario.');
    }
        });

    // Contador de caracteres
    const motivo = document.getElementById("motivo");
    const contador = document.getElementById("contador");
    motivo.addEventListener("input", function () {
    contador.textContent = motivo.value.length + "/200";
        });

    // Al cargar la página
    cargarPacientes();
    cargarEspecialidades();
</script>



</section>

@endsection