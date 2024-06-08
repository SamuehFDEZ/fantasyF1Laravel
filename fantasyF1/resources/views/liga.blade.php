<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('messages.league')</title>
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
    @vite(['resources/css/liga.scss', 'resources/js/liga.js'])
</head>
<body>
@include('partials/header')
<main>
    @include('partials/panelSubscribe')

    <section id="sectionBann">
        <div id="banner" class="text-center">
            <img src=" {{asset('img/hp-masthead-filler-web.svg')}} " id="imgEnBannerIzq" alt=""
                 srcset=" {{asset('img/hp-masthead-filler-web.svg')}}" class="img-fluid">
            <img src=" {{asset('img/logoEnBannerOficial.png')}} " id="logoEnBanner" alt="logoBanner"
                 srcset=" {{asset('img/logoEnBannerOficial.png')}}" class="img-fluid img-logo">
            <img src=" {{asset('img/hp-masthead-thumb-web.png')}} " id="pilotos" alt=""
                 srcset=" {{asset('img/hp-masthead-thumb-web.png')}}" class="img-fluid d-none d-lg-block">
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

    <div class="container-fluid">
        <div class="row">
            <div class="columna col-xl col-md col-sm col">
                <div id="vistaDeJugadores">
                    <div id="labels">
                        <div id="jugador">
                            <span>@lang('messages.player')</span>
                        </div>
                        <div id="pilotos">
                            <span>@lang('messages.drivers')</span>
                        </div>
                        <div id="constructores">
                            <span>@lang('messages.teams')</span>
                        </div>
                        <div id="puntos" class="d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
                            <span>@lang('messages.points')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('partials/footer')

</body>
</html>
