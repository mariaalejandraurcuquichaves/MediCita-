@extends('layouts.paciente')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<!-- Encabezado -->
<header>
    <div class="titulo">
        <h1>Buscar Especialista</h1>
        <p>Encuentra al especialista que necesitas</p>
    </div>
</header>

<!-- Buscador por especialidad -->
<section style="margin-top: 20px;">
    <div class="busqueda" style="max-width: 400px;">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" id="filtroEspecialidad" placeholder="Buscar por especialidad..." onkeyup="filtrarEspecialistas()">
    </div>
</section>

<!-- Listado de especialistas -->
<section class="tarjetas" id="listaEspecialistas" style="margin-top: 30px;">

    @foreach ($especialistas as $especialista)
        <div class="card especialista-card" data-especialidad="{{ strtolower($especialista['especialidad']) }}">
            <i class="fa-solid fa-user-doctor"></i>
            <h2 style="font-size: 20px;">{{ $especialista['nombre'] }}</h2>
            <p style="font-weight: bold; color: #2563ff;">{{ $especialista['especialidad'] }}</p>
            <p style="margin-top: 10px; font-size: 14px;">{{ $especialista['horario'] }}</p>
        </div>
    @endforeach

</section>

<p id="sinResultados" style="display:none; color:#666; margin-top: 20px;">
    No se encontraron especialistas con esa especialidad.
</p>

@endsection

@section('js')
<script>
    function filtrarEspecialistas() {
        const texto = document.getElementById('filtroEspecialidad').value.toLowerCase();
        const tarjetas = document.querySelectorAll('.especialista-card');
        let encontrados = 0;

        tarjetas.forEach(function (tarjeta) {
            const especialidad = tarjeta.getAttribute('data-especialidad');
            if (especialidad.includes(texto)) {
                tarjeta.style.display = 'block';
                encontrados++;
            } else {
                tarjeta.style.display = 'none';
            }
        });

        document.getElementById('sinResultados').style.display = encontrados === 0 ? 'block' : 'none';
    }
</script>
@endsection