<!DOCTYPE html>
<html lang="{{session('locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="User can see where is he at the global ranking">
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

    @include('partials/banner')


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
