@extends('layouts.medico')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<!-- Encabezado -->
<header>
    <div class="titulo">
        <h1>Mis Pacientes</h1>
        <p>Pacientes que has atendido</p>
    </div>
</header>

<!-- Tabla de Pacientes -->
<section class="tabla-citas" style="margin-top: 30px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">

    @if(count($pacientes) > 0)
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #eee; background-color: #f8f9fa;">
                    <th style="padding: 12px;">Nombre</th>
                    <th style="padding: 12px;">Documento</th>
                    <th style="padding: 12px;">Edad</th>
                    <th style="padding: 12px;">Última cita</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 12px;">{{ $paciente['nombre'] }}</td>
                        <td style="padding: 12px;">{{ $paciente['documento'] }}</td>
                        <td style="padding: 12px;">{{ $paciente['edad'] }}</td>
                        <td style="padding: 12px;">{{ $paciente['ultima_cita'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="color: #666; padding: 10px 0;">No tienes pacientes registrados.</p>
    @endif

</section>

@endsection