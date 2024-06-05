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
    @vite(['resources/css/app.scss', 'resources/js/script.js'])
</head>
<body>
@include('partials/header')
<main>
    @include('partials/panelSubscribe')
    <section id="sectionBann">
        <div id="banner" class="text-center">
            <img src="{{asset('img/hp-masthead-filler-web.svg')}}" id="imgEnBannerIzq" alt=""
                 srcset="{{asset('img/hp-masthead-filler-web.svg')}}" class="img-fluid">
            <img src="{{asset('img/logoEnBannerOficial.png')}}" id="logoEnBanner" alt="logoBanner"
                 srcset="{{asset('img/logoEnBannerOficial.png')}}" class="img-fluid img-logo">
            <img src="{{asset('img/hp-masthead-thumb-web.png')}}" id="pilotos" alt=""
                 srcset="{{asset('img/hp-masthead-thumb-web.png')}}" class="img-fluid d-none d-lg-block">
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
    </section>

    <section>
        <div id="siguienteGP" class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('img/circuitos/Imola.jpg')}}" id="circuitoImg" alt="circuitoImg"
                         srcset="{{asset('img/circuitos/Imola.jpg')}}" class="img- d-lg-block d-md-none d-block">
                </div>
                <div id="infoPais" class="col-md-6 text-center">
                    <section>
                        <h1 class="d-flex align-items-center justify-content-center">
                            <img src="{{asset('img/banderas/Italy.svg')}}" id="bandera" alt="bandera"
                                 srcset="{{asset('img/banderas/Italy.svg')}}" class="img-fluid">
                            <span id="pais" class="ms-2">ITALIA</span>
                        </h1>
                        <p>FORMULA 1 GRAND PRIX IMOLA 2024</p>
                        <!-- Scrollable modal -->
                        <button type="button" id="botonModal" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                            <img src="{{asset('img/circuitos_shape/Imola.svg')}}" id="circuito" alt="formaCircuito"
                                 srcset="{{asset('img/circuitos_shape/Imola.svg')}}" class="img-fluid">
                        </button>
                    </section>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                        <img src="{{asset('img/banderas/Italy.svg')}}" id="bandera" alt="bandera"
                                             srcset="{{asset('img/banderas/Italy.svg')}}">
                                        <span id="pais">ITALIA</span></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{asset('img/circuitos_shape/Imola_MasInfo.png')}}" alt="circuitoMasInfo"
                                         srcset="{{asset('img/circuitos_shape/Imola_MasInfo.png')}}">
                                    <hr>
                                    <div id="datosCircuito">
                                        <script>
                                            const ronda = "@lang('messages.round')";
                                            const longitud = "@lang('messages.length')";
                                            const datecirc = "@lang('messages.date')";
                                            const nameCirc = "@lang('messages.nameCirc')";
                                            const laps = "@lang('messages.laps')";
                                            const turns = "@lang('messages.turns')";
                                            const scoreCirc = "@lang('messages.scoreCirc')";
                                            const scoreTime = "@lang('messages.scoreTime')";
                                            const scoreYear = "@lang('messages.scoreYear')";
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cuentaAtrasYelegir" class="col-md-3 text-center">
                    <section>
                        <h2><span>@lang('messages.TeamLocked')</span></h2>
                        <div id="contador">
                            <script>
                                const Days = "@lang('messages.days')";
                                const Hours = "@lang('messages.hours')";
                                const Minutes = "@lang('messages.minutes')";
                            </script>
                        </div>
                    </section>
                    <button id="escogeEquipo" type="button" class="mt-3"
                            onclick="window.location='{{ route('mi-equipo') }}'">
                        @lang('messages.pickTeam')
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>


@include('partials/footer')

</body>
</html>
