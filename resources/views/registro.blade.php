<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCita - Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/registro.css')}}">
</head>
<body>

<div class="container">
<header>
    <div class="logo">
        <img src="{{ asset ('imagenes/logo medicita.png') }}" alt="logo">
        <div class="logo-text">
            <h1>MediCita</h1>
            <p>Completa tus datos para crear tu cuenta</p>
        </div>
    </div>
</header>



<h2><i class="fa-solid fa-user"></i> Información Personal</h2>

<form id="formRegistro">

<div class="grid">

    <div class="input-group">
        <label>Nombre completo</label>
        <div class="input-icon">
            <i class="fa-solid fa-user"></i>
            <input type="text" id="nombre" placeholder="Ej. Juan Pérez García">
        </div>
    </div>

    <div class="input-group">
        <label>Tipo de documento</label>
        <div class="input-icon">
            <i class="fa-solid fa-id-card"></i>
            <select id="tipo_documento">
                <option value="CC">Cédula de ciudadanía</option>
                <option value="TI">Tarjeta de identidad</option>
                <option value="CE">Cédula extranjera</option>
            </select>
        </div>
    </div>

    <div class="input-group">
        <label>Número de documento</label>
        <div class="input-icon">
            <i class="fa-solid fa-address-card"></i>
            <input type="text" id="numero_documento" placeholder="1234567890">
        </div>
    </div>

    <div class="input-group">
        <label>Fecha de nacimiento</label>
        <div class="input-icon">
            <i class="fa-solid fa-calendar-days"></i>
            <input type="date" id="fecha_nacimiento">
        </div>
    </div>

    <div class="input-group">
        <label>Género</label>
        <div class="input-icon">
            <i class="fa-solid fa-venus-mars"></i>
            <select id="genero">
                <option value="">Selecciona tu género</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="No binario">No binario</option>
            </select>
        </div>
    </div>

</div>


<h2><i class="fa-solid fa-address-book"></i> Información de Contacto</h2>

<div class="grid">

    <div class="input-group">
        <label>Correo electrónico</label>
        <div class="input-icon">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" id="correo" placeholder="Ej. correo@ejemplo.com">
        </div>
    </div>

    <div class="input-group">
        <label>Número de celular</label>
        <div class="input-icon">
            <i class="fa-solid fa-phone"></i>
            <input type="tel" id="celular" placeholder="Ej. 3001234567">
        </div>
    </div>

    <div class="input-group full-width">
        <label>Dirección</label>
        <div class="input-icon">
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" id="direccion" placeholder="Ej. Calle 123 #45-67">
        </div>
    </div>

</div>


<h2><i class="fa-solid fa-key"></i> Información de la Cuenta</h2>

<div class="grid">

    <div class="input-group">
        <label>Nombre de usuario</label>
        <div class="input-icon">
            <i class="fa-solid fa-user-tag"></i>
            <input type="text" id="nombre_usuario" placeholder="juanperez">
        </div>
    </div>

    <div class="input-group">
        <label>Contraseña</label>
        <div class="input-icon">
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="password" placeholder="Crea una contraseña">
        </div>
    </div>

    <div class="input-group">
        <label>Confirmar contraseña</label>
        <div class="input-icon">
            <i class="fa-solid fa-shield-halved"></i>
            <input type="password" id="password2" placeholder="Confirma tu contraseña">
        </div>
    </div>

</div>
        <div class="checkbox">
            <input type="checkbox" id="terminos">
            <label for="terminos">
                Acepto los
                <a href="#">Términos y Condiciones</a> 
                y la
                <a href="#">Política de Privacidad</a>
            </label>
        </div>

        <p id="mensaje"></p>

        <button type="submit">Registrarme</button>

        <p class="login">
            ¿Ya tienes cuenta?
            <a href="/login">Inicia sesión</a>
        </p>

    </form>

</div>

<script>
document.getElementById('formRegistro').addEventListener('submit', async function (e) {
    e.preventDefault();

    const mensaje = document.getElementById('mensaje');
    mensaje.textContent = '';

    if (!document.getElementById('terminos').checked) {
        mensaje.textContent = 'Debes aceptar los términos y condiciones.';
        return;
    }

    if (document.getElementById('password').value !== document.getElementById('password2').value) {
        mensaje.textContent = 'Las contraseñas no coinciden.';
        return;
    }

    const datos = {
        nombre: document.getElementById('nombre').value,
        tipo_documento: document.getElementById('tipo_documento').value,
        numero_documento: document.getElementById('numero_documento').value,
        fecha_nacimiento: document.getElementById('fecha_nacimiento').value,
        genero: document.getElementById('genero').value,
        correo: document.getElementById('correo').value,
        celular: document.getElementById('celular').value,
        direccion: document.getElementById('direccion').value,
        nombre_usuario: document.getElementById('nombre_usuario').value,
        password: document.getElementById('password').value
    };

    try {
        const respuesta = await fetch('/api/pacientes', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(datos)
        });

        const resultado = await respuesta.json();

        if (respuesta.ok) {
            mensaje.style.color = 'green';
            mensaje.textContent = '¡Registro exitoso! Redirigiendo al login...';
            setTimeout(() => window.location.href = '/login', 2000);
        } else {
            mensaje.style.color = 'red';
            const errores = resultado.errors ? Object.values(resultado.errors).flat().join(' ') : resultado.message;
            mensaje.textContent = errores;
        }
    } catch (error) {
        mensaje.style.color = 'red';
        mensaje.textContent = 'No se pudo conectar con el servidor.';
    }
});
</script>







</body>
</html>
