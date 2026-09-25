@extends('layouts.paciente')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<!-- Encabezado -->
<header>
    <div class="titulo">
        <h1>Mi Perfil</h1>
        <p>Consulta y actualiza tus datos personales</p>
    </div>
</header>

<!-- Formulario de perfil -->
<section style="margin-top: 30px; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); max-width: 700px;">

    <form>
        <div style="margin-bottom: 20px;">
            <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Nombre completo</label>
            <input type="text" value="{{ $paciente['nombre'] }}" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
        </div>

        <div style="display:flex; gap:20px; margin-bottom:20px;">
            <div style="flex:1;">
                <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Tipo de documento</label>
                <input type="text" value="{{ $paciente['tipo_documento'] }}" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
            </div>
            <div style="flex:1;">
                <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Número de documento</label>
                <input type="text" value="{{ $paciente['numero_documento'] }}" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
            </div>
        </div>

        <div style="display:flex; gap:20px; margin-bottom:20px;">
            <div style="flex:1;">
                <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Correo electrónico</label>
                <input type="email" value="{{ $paciente['correo'] }}" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
            </div>
            <div style="flex:1;">
                <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Celular</label>
                <input type="text" value="{{ $paciente['celular'] }}" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
            </div>
        </div>

        <div style="display:flex; gap:20px; margin-bottom:20px;">
            <div style="flex:1;">
                <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Fecha de nacimiento</label>
                <input type="date" value="{{ $paciente['fecha_nacimiento'] }}" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
            </div>
            <div style="flex:1;">
                <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Género</label>
                <input type="text" value="{{ $paciente['genero'] }}" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
            </div>
        </div>

        <div style="margin-bottom: 25px;">
            <label style="display:block; margin-bottom:6px; color:#071b67; font-weight:bold;">Dirección</label>
            <input type="text" value="{{ $paciente['direccion'] }}" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:8px;">
        </div>

        <button type="submit" style="background:#2563ff; color:white; border:none; padding:12px 30px; border-radius:10px; font-size:16px; cursor:pointer;">
            Guardar cambios
        </button>
    </form>

</section>

@endsection