<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 LOG IN</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>
    @vite(['resources/css/login.scss', 'resources/js/login.js'])

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <header class="col-md col-sm col">
            <a href="{{route('index')}}"><img src="{{asset("img/logoF1.png")}}" alt="logoF1" id="logoHeader"
                                              class="img-fluid"></a>
            <form id="formCerrarSesion" action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" name="cerrarSes" id="cerrarSes" value="Cerrar Sesión">
            </form>
        </header>
    </div>

    <div class="row">
        <nav id="navbar" class="col-xl col-md col-sm col">
            <div id="botones">
                <button id="iniciar" onclick="window.location='{{route('login')}}'" class="boton" type="button">
                    <span>Iniciar Sesión</span>
                </button>
                <button id="crear" onclick="window.location='{{route('registro')}}'" class="boton" type="button">
                    Crear Cuenta
                </button>
            </div>
        </nav>
    </div>


    <main id="main">
        <form id="formLog" action="{{ route('login') }}" method="POST">
            @csrf
            <h1>INICIAR SESIÓN</h1>
            <hr>
            <label for="nombreLog">Usuario</label><br>
            <input type="text" name="nombre" id="nombreLog" placeholder="Introduce tu Nombre de Usuario"><br><br>
            <label for="contrasenyaLog">Contraseña</label><br>
            <input type="password" name="contrasenya" id="contrasenyaLog" placeholder="Introduce tu Clave">
            <span toggle="#contrasenyaLog" class="field-icon">
                        <img src="{{asset('img/eye.png')}}" id="ojoLog" alt="ojo" srcset="{{asset('img/eye.png')}}">
                    </span><br><br>
            <button id="forgetPass">¿Olvidaste tu contraseña?</button>
            <br><br>
            <input type="submit" name="iniciarSes" id="iniciarSes" value="INCIAR SESIÓN"><br><br>
            {{--@if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            @if(session('mensaje'))
                <p class="text-success">{{ session('mensaje') }}</p>
            @endif--}}
            <label for="sinCuenta">¿Aún no tienes una cuenta?</label>
            <button id="sinCuenta" type="button" onclick="window.location='{{ route('registro') }}'">Registrarte con
                F1
            </button>
            <br><br>
        </form>
    </main>


    <div class="row">
        <footer class="col-xl-11 col-md-11 col-sm col">
            <nav id="navFooter">
                <a href="views/index"><img src="{{asset('img/logoF1.png')}}" alt="logoF1" id="logoFooter"
                                           srcset="{{asset('img/logoF1.png')}}"></a>
                <a href="#">Política de Privacidad</a>
                <a href="#">Suscripción</a>
                <a href="#">Condiciones de Uso</a>
                <a href="#">Preguntas Frecuentes</a>
                <a href="#">Preferencias para cookies</a>
            </nav>

            <hr>

            <div id="parrFooter" class="col-md">
                &copy; 2003-2024 Formula One World Championship Limited
            </div>
            <!-- Button trigger modal -->
            <button type="button" id="botonApoyo" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" id="chat" x="0px" y="0px" width="30" height="30"
                     viewBox="0 0 50 50">
                    <path
                        d="M 25 4.0625 C 12.414063 4.0625 2.0625 12.925781 2.0625 24 C 2.0625 30.425781 5.625 36.09375 11 39.71875 C 10.992188 39.933594 11 40.265625 10.71875 41.3125 C 10.371094 42.605469 9.683594 44.4375 8.25 46.46875 L 7.21875 47.90625 L 9 47.9375 C 15.175781 47.964844 18.753906 43.90625 19.3125 43.25 C 21.136719 43.65625 23.035156 43.9375 25 43.9375 C 37.582031 43.9375 47.9375 35.074219 47.9375 24 C 47.9375 12.925781 37.582031 4.0625 25 4.0625 Z M 25 5.9375 C 36.714844 5.9375 46.0625 14.089844 46.0625 24 C 46.0625 33.910156 36.714844 42.0625 25 42.0625 C 22.996094 42.0625 21.050781 41.820313 19.21875 41.375 L 18.65625 41.25 L 18.28125 41.71875 C 18.28125 41.71875 15.390625 44.976563 10.78125 45.75 C 11.613281 44.257813 12.246094 42.871094 12.53125 41.8125 C 12.929688 40.332031 12.9375 39.3125 12.9375 39.3125 L 12.9375 38.8125 L 12.5 38.53125 C 7.273438 35.21875 3.9375 29.941406 3.9375 24 C 3.9375 14.089844 13.28125 5.9375 25 5.9375 Z"></path>
                </svg>
                Apoyo
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="views/index"><img src="{{asset('img/logoF1Blanco.png')}}" alt="logoF1"
                                                       id="logoModal" srcset="{{asset('img/logoF1Blanco.png')}}"></a>
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Soporte de F1</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Ponte en contacto con el equipo pulsando el botón</p>
                            <button type="button" class="btn">Enviar</button>

                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
