<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCita</title>


    
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
</head>


<body>


    <div class="contenedor">


        <header>
            <div class="logo">
                

                <img src="{{ asset('imagenes/logo medicita.png') }}" alt="Logo MediCita" >

                

                <h2>MediCita</h2>
            </div>


            <nav>
                <a href="#">Inicio</a>
                <a href="#">Servicios</a>
                <a href="#">Cómo funciona</a>
                <a href="#">Nosotros</a>
            </nav>


            <div class="botones-nav">
               

                <a href="/login" class="btn-outline">Iniciar sesión</a>

            

                <a href="/registro" class="btn-primary">Registrarse</a>
            </div>
        </header>


        <section class="hero">


            <div class="texto">
                <h1>
                    Tu salud,<br>
                    nuestra <span>prioridad</span>
                </h1>


                <p>
                    Conectamos contigo y los mejores profesionales
                    para que recibas atención médica de calidad,
                    donde estés.
                </p>


                <div class="hero-btns">
                    <button class="btn-primary" id="agendar">
                        <i class="fa-solid fa-calendar-days"></i>
                        Agendar cita
                    </button>


                    <button class="btn-outline">
                        Ver especialistas
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>


            <div class="imagen">
                
                <img src="{{ asset('imagenes/telefono.jpeg') }}" alt="Celular" >

            </div>


        </section>


        <section class="beneficios">


            <div class="card">
                <i class="fa-solid fa-shield-halved"></i>
                <div>
                    <h4>Seguro y confiable</h4>
                    <p>Tus datos estan protegidos</p>
                </div>
            </div>


            <div class="card">
                <i class="fa-regular fa-clock"></i>
                <div>
                    <h4>Atencion rapida</h4>
                    <p>Agenda tu cita en minutos</p>
                </div>
            </div>


            <div class="card">
                <i class="fa-regular fa-user"></i>
                <div>
                    <h4>Profesionales verificados</h4>
                    <p>Especialistas calificados</p>
                </div>
            </div>


        </section>


    </div>


    <script>
        document.getElementById("agendar").addEventListener("click", function () {
            alert("Redirigiendo al agendamiento de citas...");
        });
    </script>


</body>


</html>