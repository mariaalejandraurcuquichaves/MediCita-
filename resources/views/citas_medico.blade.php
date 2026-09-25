@extends('layouts.medico')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<header>
    <div class="titulo">
        <h1>Mis Citas</h1>
        <p>Citas asignadas a ti como especialista</p>
    </div>
</header>

<section class="tabla-citas" style="margin-top: 30px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">

    @if(count($citas) > 0)
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #eee; background-color: #f8f9fa;">
                    <th style="padding: 12px;">Paciente</th>
                    <th style="padding: 12px;">Motivo</th>
                    <th style="padding: 12px;">Fecha</th>
                    <th style="padding: 12px;">Hora</th>
                    <th style="padding: 12px;">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 12px;">{{ $cita['paciente'] }}</td>
                        <td style="padding: 12px;">{{ $cita['motivo'] }}</td>
                        <td style="padding: 12px;">{{ $cita['fecha'] }}</td>
                        <td style="padding: 12px;">{{ $cita['hora'] }}</td>
                        <td style="padding: 12px;">
                            <span style="background: #e0f2fe; color: #0369a1; padding: 4px 8px; border-radius: 4px; font-size: 0.85rem;">
                                {{ ucfirst($cita['estado']) }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="color: #666; padding: 10px 0;">No tienes citas asignadas.</p>
    @endif

</section>

@endsection