<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('messages.prizes')</title>
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
    @vite(['resources/css/premios.scss', 'resources/js/app.js', 'resources/js/subscribe.js'])
</head>

<body>
@include('partials/header')
<main>
    @include('partials/panelSubscribe')

    @include('partials/banner')

    <div id="premios" class="container">
        <h2>@lang('messages.prizes')</h2>
        <p>@lang('messages.prizesText')</p>
        <div id="premiosPodio" class="row">
            <div class="bloquePremio col-12 col-md-4">
                <h3 class="primerPremio">1<sup>@lang('messages.firstPrize')</sup> @lang('messages.prize')</h3>
                <img src="{{asset('img/p5MasF1.webp')}}" class="imgPrimer" alt="primerPremio"
                     srcset="{{asset('img/p5MasF1.webp')}}">
                <p>Pack PlayStation 5 + Formula 1 2023 </p>
            </div>
            <div class="bloquePremio col-12 col-md-4">
                <h3 class="segundoPremio">2<sup>@lang('messages.secPrize')</sup> @lang('messages.prize')</h3>
                <img src="{{asset('img/f123Juego.avif')}}" class="imgSec" alt="segundoPremio"
                     srcset="{{asset('img/f123Juego.avif')}}">
                <p>Formula 1 2023</p>
            </div>
            <div class="bloquePremio col col-md-4">
                <h3 class="tercerPremio">3<sup>@lang('messages.thiPrize')</sup> @lang('messages.prize')</h3>
                <img src="{{asset('img/premio3.jpg')}}" class="imgTerc" alt="tercerPremio"
                     srcset="{{asset('img/premio3.jpg')}}">
                <p id="pTercer">2 @lang('messages.thiPrizeText')</p>
            </div>
        </div>
    </div>
</main>

@include('partials/footer')

</body>
</html>
