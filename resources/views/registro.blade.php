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

<form>

<div class="grid">

    <div class="input-group">
        <label>Nombre completo</label>
        <div class="input-icon">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Ej. Juan Pérez García">
        </div>
    </div>

    <div class="input-group">
        <label>Tipo de documento</label>
        <div class="input-icon">
            <i class="fa-solid fa-id-card"></i>
            <select>
                <option>Cédula de ciudadanía</option>
                <option>Tarjeta de identidad</option>
                <option>Cédula extranjera</option>
            </select>
        </div>
    </div>

    <div class="input-group">
        <label>Número de documento</label>
        <div class="input-icon">
            <i class="fa-solid fa-address-card"></i>
            <input type="text" placeholder="1234567890">
        </div>
    </div>

    <div class="input-group">
        <label>Fecha de nacimiento</label>
        <div class="input-icon">
            <i class="fa-solid fa-calendar-days"></i>
            <input type="date">
        </div>
    </div>

    <div class="input-group">
        <label>Género</label>
        <div class="input-icon">
            <i class="fa-solid fa-venus-mars"></i>
            <select name="genero" id="genero">
                <option>Selecciona tu género</option>
                <option>Masculino</option>
                <option>Femenino</option>
                <option>No binario</option>
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
            <input type="email" placeholder="Ej. correo@ejemplo.com">
        </div>
    </div>

    <div class="input-group">
        <label>Número de celular</label>
        <div class="input-icon">
            <i class="fa-solid fa-phone"></i>
            <input type="tel" placeholder="Ej. 3001234567">
        </div>
    </div>

    <div class="input-group full-width">
        <label>Dirección (Opcional)</label>
        <div class="input-icon">
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" placeholder="Ej. Calle 123 #45-67">
        </div>
    </div>

</div>


<h2><i class="fa-solid fa-key"></i> Información de la Cuenta</h2>

<div class="grid">

    <div class="input-group">
        <label>Nombre de usuario</label>
        <div class="input-icon">
            <i class="fa-solid fa-user-tag"></i>
            <input type="text" placeholder="juanperez">
        </div>
    </div>

    <div class="input-group">
        <label>Contraseña</label>
        <div class="input-icon">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Crea una contraseña">
        </div>
    </div>

    <div class="input-group">
        <label>Confirmar contraseña</label>
        <div class="input-icon">
            <i class="fa-solid fa-shield-halved"></i>
            <input type="password" placeholder="Confirma tu contraseña">
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
        <button type="submit">Registrarme</button>

        <p class="login">
            ¿Ya tienes cuenta?
            <a href="/login">Inicia sesión</a>
        </p>

    </form>

</div>

</body>
</html>
