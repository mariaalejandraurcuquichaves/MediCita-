@extends('layouts.paciente')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<!-- Encabezado -->
<header>
    <div class="titulo">
        <h1>Mi Historia Clínica</h1>
        <p>Consulta tus diagnósticos y tratamientos anteriores</p>
    </div>
</header>

<!-- Historial -->
<section class="tabla-citas" style="margin-top: 30px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">

    @if(count($historial) > 0)
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #eee; background-color: #f8f9fa;">
                    <th style="padding: 12px;">Fecha</th>
                    <th style="padding: 12px;">Especialista</th>
                    <th style="padding: 12px;">Especialidad</th>
                    <th style="padding: 12px;">Diagnóstico</th>
                    <th style="padding: 12px;">Tratamiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($historial as $registro)
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 12px;">{{ $registro['fecha'] }}</td>
                        <td style="padding: 12px;">{{ $registro['especialista'] }}</td>
                        <td style="padding: 12px;">{{ $registro['especialidad'] }}</td>
                        <td style="padding: 12px;">{{ $registro['diagnostico'] }}</td>
                        <td style="padding: 12px;">{{ $registro['tratamiento'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="color: #666; padding: 10px 0;">No tienes historial clínico registrado.</p>
    @endif

</section>

@endsection