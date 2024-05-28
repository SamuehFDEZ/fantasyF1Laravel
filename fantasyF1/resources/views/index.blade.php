<!DOCTYPE html>
<html lang="">
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
    <button id="botonUser" onclick="window.location='{{ route('login') }}'" class="buttonHeaderUser"
            type="button">
        <svg id="userIcon" class="feather feather-user" fill="none" height="24" stroke="currentColor"
             stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
        </svg>
        <span
            id="nomUser"> {{ session('nombreDeUsuario') ?? __('messages.login') }}
        </span>
    </button>
    <button id="suscribete" class="buttonHeaderSub" type="button">
        @lang('messages.subscribe')
    </button>
</header>
<main>
    <div id="panel" class="oculto">
        <h1>
            @lang('messages.subscribeUPPER')
        </h1>
        <hr>
        <div id="botones">
            <button type="button" class="opcioneSubscribe">26,99/@lang('messages.year')</button>
            <button type="button" class="opcioneSubscribe">2.99/@lang('messages.month')</button>
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
                <img src="{{asset("img/circuitos/Imola.jpg")}}" id="circuitoImg" alt="circuitoImg"
                     srcset="{{asset("img/circuitos/Imola.jpg")}}">
            </div>
            <div id="infoPais" class="col-md-6">
                <section>
                    <h1>
                        <img src="{{asset("img/banderas/Italy.svg")}}" id="bandera" alt="bandera"
                             srcset="{{asset("img/banderas/Italy.svg")}}">
                        <span id="pais">ITALIA</span>
                        <p>FORMULA 1 GRAND PRIX IMOLA 2024</p>
                    </h1>
                    <!-- Scrollable modal -->
                    <button type="button" id="botonModal" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                        <img src="{{asset("img/circuitos_shape/Imola.svg")}}" id="circuito" alt="formaCircuito"
                             srcset="{{asset("img/circuitos_shape/Imola.svg")}}">
                    </button>
                </section>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                    <img src="{{asset("img/banderas/Italy.svg")}}" id="bandera" alt="bandera"
                                         srcset="{{asset("img/banderas/Italy.svg")}}">
                                    <span id="pais">ITALIA</span></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>Circuito</h3>
                                <hr>
                                <img src="{{asset('img/circuitos_shape/Imola_MasInfo.png')}}" alt="circuitoMasInfo"
                                     srcset="{{asset('img/circuitos_shape/Imola_MasInfo.png')}}">
                                <hr>
                                <div id="datosCircuito"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cuentaAtrasYelegir" class="col-md-3">
                <section>
                    <h2><span>@lang('messages.TeamLocked')</span></h2>
                    <div id="contador">
                        <script>
                            const Days = "@lang('messages.days')";
                            const Hours = "@lang('messages.hours')";
                            const Seconds = "@lang('messages.seconds')";

                        </script>
                    </div>
                </section>
                <button id="escogeEquipo" type="button" onclick="window.location='{{ route('mi-equipo') }}'">
                    @lang('messages.pickTeam')
                </button>
            </div>
        </div>
    </div>

</main>

@include('partials/footer')

</body>
</html>
