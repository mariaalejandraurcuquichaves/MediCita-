@extends('layouts.medico')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<!-- Encabezado -->
<header>
    <div class="titulo">
        <h1>Configuración</h1>
        <p>Administra tu contraseña y preferencias de notificaciones</p>
    </div>
</header>

<!-- Cambiar contraseña -->
<section style="margin-top: 30px; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); max-width: 700px;">

    <h3 style="color:#071b67; margin-bottom:20px;">
        <i class="fa-solid fa-lock"></i> Cambiar contraseña
    </h3>

    <form>
        <div style="margin-bottom: 20px;">
            <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Contraseña actual</label>
            <input type="password" placeholder="••••••••" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
        </div>

        <div style="display:flex; gap:20px; margin-bottom:20px;">
            <div style="flex:1;">
                <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Nueva contraseña</label>
                <input type="password" placeholder="••••••••" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
            </div>
            <div style="flex:1;">
                <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Confirmar nueva contraseña</label>
                <input type="password" placeholder="••••••••" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
            </div>
        </div>

        <button type="submit" style="background:#2563ff; color:white; border:none; padding:12px 30px; border-radius:10px; font-size:16px; cursor:pointer;">
            Actualizar contraseña
        </button>
    </form>

</section>

<!-- Preferencias de notificaciones -->
<section style="margin-top: 25px; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); max-width: 700px;">

    <h3 style="color:#071b67; margin-bottom:20px;">
        <i class="fa-regular fa-bell"></i> Preferencias de notificaciones
    </h3>

    <form>
        <div style="display:flex; align-items:center; gap:12px; margin-bottom:18px;">
            <input type="checkbox" id="notif_email" style="width:18px; height:18px;" {{ $preferencias['notificaciones_email'] ? 'checked' : '' }}>
            <label for="notif_email" style="color:#071b67;">Recibir notificaciones por correo electrónico</label>
        </div>

        <div style="display:flex; align-items:center; gap:12px; margin-bottom:18px;">
            <input type="checkbox" id="notif_sms" style="width:18px; height:18px;" {{ $preferencias['notificaciones_sms'] ? 'checked' : '' }}>
            <label for="notif_sms" style="color:#071b67;">Recibir notificaciones por SMS</label>
        </div>

        <div style="display:flex; align-items:center; gap:12px; margin-bottom:25px;">
            <input type="checkbox" id="recordatorio_citas" style="width:18px; height:18px;" {{ $preferencias['recordatorio_citas'] ? 'checked' : '' }}>
            <label for="recordatorio_citas" style="color:#071b67;">Recibir recordatorio antes de cada cita agendada</label>
        </div>

        <button type="submit" style="background:#2563ff; color:white; border:none; padding:12px 30px; border-radius:10px; font-size:16px; cursor:pointer;">
            Guardar preferencias
        </button>
    </form>

</section>

@endsection