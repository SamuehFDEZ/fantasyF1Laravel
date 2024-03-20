<?php

?>


    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 FANTASY</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
<header>
    <img src="{{ asset('img/logoF1Blanco.png' )}}" alt="logoF1" id="logoHeader"
         srcset="{{ asset('img/logoF1Blanco.png') }}">
        <button id="botonUser" onclick="window.location='{{ route('login') }}'" class="buttonHeaderUser" type="button">
            <svg id="userIcon" class="feather feather-user" fill="none" height="24" stroke="currentColor"
                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
            <span id="nomUser"><?php session_start();  echo $_SESSION["user"] ?? "Sign In"; ?></span>
        </button>
        <button id="suscribete" class="buttonHeaderSub" type="button">Suscribete</button>
</header>
<main>
    <div id="panel" class="oculto">
        <h1>SUSCRIBETE</h1>
        <hr>
        <div id="botones">
            <button type="button" class="opcioneSubscribe">26,99/año</button>
            <button type="button" class="opcioneSubscribe">2.99/mes</button>
        </div>
        <button id="quitarSubs" type="button">X</button>
    </div>
    <div id="banner">
        <img src=" {{asset("img/hp-masthead-filler-web.svg")}} " alt=""
             srcset=" {{asset("img/hp-masthead-filler-web.svg")}} ">
        <img src=" {{asset("img/f1-fantasy-white-logo.svg")}} " id="logoEnBanner" alt="logoBanner"
             srcset=" {{asset("img/f1-fantasy-white-logo.svg")}} ">
        <img src=" {{asset("img/hp-masthead-thumb-web.png")}} " id="pilotos" alt=""
             srcset=" {{asset("img/hp-masthead-thumb-web.png")}} ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div id="containerNav" class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    @include('partials/nav')
                </div>
            </div>
        </nav>
    </div>

    <div id="siguienteGP" class="container">
        <div class="row">
            <div class="col-md-3 ">
                <img src="{{asset("img/Melbourne.jpg")}}" id="melbourne" alt="Melbourne" srcset="{{asset("img/Melbourne.jpg")}}">
            </div>
            <div id="infoPais" class="col-md-6">
                <section>
                    <h1>
                        <img src="{{asset("img/Australia.svg")}}" id="bandera" alt="Melbourne" srcset="{{asset("img/Australia.svg")}}">
                        <span id="pais">AUSTRALIA</span>
                        <p>FORMULA 1 GRAND PRIX AUSTRALIA 2024</p>
                    </h1>
                    <img src="{{asset("img/Melbourne.svg")}}" id="circuito" alt="Melbourne" srcset="{{asset("img/Melbourne.svg")}}">

                </section>

            </div>
            <div id="cuentaAtrasYelegir" class="col-md-3">
                <section>
                    <h2><span>Bloqueo de Equipo</span></h2>
                    <div id="contador">
                        <ul>
                            <li>00</li>
                            <span>:</span>
                            <li>00</li>
                            <span>:</span>
                            <li>00</li>
                            <span>Días</span>
                            <span>Horas</span>
                            <span>Minutos</span>
                        </ul>
                    </div>
                </section>
                <button type="button">Escoge tu equipo</button>
            </div>
        </div>
    </div>


</main>

<footer class="container-fluid">
    <hr>
    <div class="row">
        <div id="logoFooter1" class="col-md-4">
            <img src="{{asset("img/logoF1.png")}}" alt="logoF1" id="logoFooter2" srcset="{{asset("img/logoF1.png")}}">
        </div>
        <div id="parrFooter" class="col-md">
            &copy; 2003-2024 Formula One World Championship Limited
        </div>
        <div class="col-md">
            <div id="iconos">
                <a id="ig" href="https://www.instagram.com/f1/" style="text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" id="imgIg" width="50" height="20" fill="white"
                         class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
                <a id="fc" href="https://www.facebook.com/Formula1" style="text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" id="imgFc" width="50" height="20" fill="white"
                         class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                </a>
                <a id="twitter" href="https://twitter.com/f1" style="text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" id="imgX" width="50" height="20" fill="white"
                         class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path
                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                    </svg>
                </a>
                <a id="yt" href="https://www.youtube.com/F1" style="text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" id="imgYt" width="50" height="20" fill="white"
                         class="bi bi-youtube" viewBox="0 0 16 16">
                        <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
