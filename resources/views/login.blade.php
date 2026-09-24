<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MediCita - Iniciar Sesión</title>

    <link rel="stylesheet" href="{{  asset('css/login.css') }}">
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>


    <div class="container">


        <div class="left-panel">


            <div class="logo">
                <img src="{{ asset ('imagenes/logo medicita.png') }}" alt="Logo Medicita">


                <h2>MediCita</h2>
            </div>


            <h1>
                Tu salud,<br>
                nuestra <span>prioridad</span>
            </h1>


            <p class="description">
                Agenda tus citas con especialistas de forma rápida, fácil y segura.
            </p>


            <div class="feature">
                <div class="icon">
                    <i class="fa-regular fa-calendar"></i>
                </div>
                <div>
                    <h3>Agenda tu cita</h3>
                    <p>Encuentra especialistas y elige el horario que mejor se adapte a ti.</p>
                </div>
            </div>


            <div class="feature">
                <div class="icon">
                    <i class="fa-solid fa-shield-heart"></i>
                </div>
                <div>
                    <h3>Seguro y confiable</h3>
                    <p>Protegemos tu información y garantizamos seguridad.</p>
                </div>
            </div>


            <div class="feature">
                <div class="icon">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div>
                    <h3>Especialistas verificados</h3>
                    <p>Accede a profesionales certificados y calificados.</p>
                </div>
            </div>


        </div>
        <div class="login-card">


            <h2>Iniciar sesión</h2>
            <p>Ingresa tus datos para acceder a tu cuenta</p>


            <form id="loginForm">

       
                <label>Nombre de usuario</label>
                <div class="input-group">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" id="nombre_usuario" placeholder="Ingresa tu usuario">
                </div>


                <label>Contraseña</label>
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password" placeholder="Ingresa tu contraseña">
                    <i class="fa-regular fa-eye" id="ojo"></i>
                </div>

                <p id="mensajeLogin"></p>


                <a href="#" class="forgot-password">
                    ¿Olvidaste tu contraseña?
                </a>


                <button type="submit" class="btn-login">
                    Iniciar sesión
                </button>


                <div class="separator">
                    <span></span>
                    <p>O</p>
                    <span></span>
                </div>


                <button type="button" class="btn-google">
                    <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt="Google">
                    Continuar con Google
                </button>


                <p class="register">
                    ¿No tienes una cuenta?
                    <a href="/registro">Regístrarse</a>
                </p>


            </form>


        </div>


    </div>
           <script>
            const ojo = document.getElementById("ojo");
            const password = document.getElementById("password");
          


            ojo.addEventListener("click", function () {


                if (password.type === "password") {
                    password.type = "text";
                    ojo.className = "fa-regular fa-eye-slash";
                } else {
                    password.type = "password";
                    ojo.className = "fa-regular fa-eye";
                }

});


document.getElementById('loginForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const mensajeLogin = document.getElementById('mensajeLogin');
    mensajeLogin.textContent = '';

    try {
        const respuesta = await fetch('/api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                nombre_usuario: document.getElementById('nombre_usuario').value,
                password: document.getElementById('password').value
            })
        });

        const resultado = await respuesta.json();

        if (respuesta.ok) {
            localStorage.setItem('token', resultado.token);
            localStorage.setItem('id_rol', resultado.id_rol);
            window.location.href = '/dashboard';
        } else {
            mensajeLogin.style.color = 'red';
            mensajeLogin.textContent = resultado.message;
        }
    } catch (error) {
        mensajeLogin.style.color = 'red';
        mensajeLogin.textContent = 'No se pudo conectar con el servidor.';
    }
});



</script>



</body>
</html>
