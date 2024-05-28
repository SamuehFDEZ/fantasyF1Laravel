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
    @vite(['resources/css/constructor.scss', 'resources/js/constructor.js'])
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
        <span id="nomUser">{{ session('nombreDeUsuario') ? session('nombreDeUsuario') : __('messages.login') }}</span>
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
    <div id="constructores" class="container-fluid">
        <h1>@lang('2024 F1 TEAMS')</h1>
        @include('partials/coches')
    </div>

</main>

@include('partials/footer')

</body>
</html>
