<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-id" content="{{ session('idDeUsuario') }}">
    <div id="config"
         data-csrf-token="{{ csrf_token() }}"></div>
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
    @vite(['resources/css/miEquipo.scss', 'resources/js/miEquipo.js'])
</head>
<body>
@include('partials/header')

@if(empty(session('nombreDeUsuario')))
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            const myModal = bootstrap.Modal.getOrCreateInstance('#loginModal');
            myModal.show();
        });
    </script>
@endif
<div class="modal show" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="loginModalLabel">@lang('messages.restricMyTeam')</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <button type="button" id="cancelar" class="btn" data-bs-dismiss="modal"
                        aria-label="Close">@lang('messages.cancel')
                </button>
                <button type="button" id="modalInicSes" class="btn"
                        onclick="window.location='{{ route('login') }}'">
                    @lang('messages.login')
                </button>
            </div>
        </div>
    </div>
</div>

<main>
    @include('partials/panelSubscribe')

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

    <div id="eleccionDeEquipo" class="row-xl row-md row-sm row">
        <div id="equipo" class="col-xl-6 col-md col-sm col">
            <div id="costesYContinuar">
                <section>
                    <h4>@lang('messages.costCap')</h4>
                    <label for="cartera">100.0M$</label>
                    <progress id="cartera" value="0" max="100"></progress>

                    {{--No necesitas especificar la acción si vas a usar
                    JavaScript para enviar la solicitud.--}}
                    <form id="formGuardarEquipo"
                          {{--pasamos como parametro el userID--}}
                          action="{{ route('actualizarPilotosYConstructores', ['userID' => session('idDeUsuario')]) }}"
                          method="POST" data-csrf-token="{{ csrf_token() }}">
                        @csrf
                        <button type="button" name="guardarEquipo"
                                id="guardarEquipo">@lang('messages.saveTeam')</button>
                    </form>
                    @if(isset($_POST['guardarEquipo']))
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        @endif
                        @if(session('mensaje'))
                            <p class="text-success">{{ session('mensaje') }}</p>
                        @endif
                    @endif
                </section>
                <hr>
                <section class="row">
                    <div class="piloto col-md col-sm col text-center">
                        <div class="campoPiloto" data-num-piloto="1">
                            <p id="mas">&plus;</p>
                            <p class="anyadirPiloto">@lang('messages.addDriver')</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm col text-center">
                        <div class="piloto col-md col-sm col text-center">
                            <div class="campoPiloto" data-num-piloto="2">
                                <p id="mas">&plus;</p>
                                <p class="anyadirPiloto">@lang('messages.addDriver')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm col text-center">
                        <div class="piloto col-md col-sm col text-center">
                            <div class="campoPiloto" data-num-piloto="3">
                                <p id="mas">&plus;</p>
                                <p class="anyadirPiloto">@lang('messages.addDriver')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm col text-center">
                        <div class="piloto col-md col-sm col text-center">
                            <div class="campoPiloto" data-num-piloto="4">
                                <p id="mas">&plus;</p>
                                <p class="anyadirPiloto">@lang('messages.addDriver')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm col text-center">
                        <div class="piloto col-md col-sm col text-center">
                            <div class="campoPiloto" data-num-piloto="4">
                                <p id="mas">&plus;</p>
                                <p class="anyadirPiloto">@lang('messages.addDriver')</p>
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
                <section class="row align-items-center justify-content-center">
                    <div class="col-md-6 col-sm col text-center">
                        <div class="coche col-md col-sm col text-center">
                            <div class="campoCoche" data-nombre-constructor="1">
                                <p id="mas">&plus;</p>
                                <p class="anyadirCoche">@lang('messages.addConst')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm col text-center">
                        <div class="coche col-md col-sm col text-center">
                            <div class="campoCoche" data-nombre-constructor="2">
                                <p id="mas">&plus;</p>
                                <p class="anyadirCoche">@lang('messages.addConst')</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div id="eleccion" class="col-xl col-md col-sm col">
            <div id="cabecera">
                <ul>
                    <li>
                        <a id="drivers">@lang('messages.drivers')</a>
                    </li>
                    <li>
                        <a id="constructors">@lang('messages.constructors')</a>
                    </li>
                </ul>
                <hr>
                <input type="search" name="filtrar" id="filtrar" placeholder="{{__('messages.find')}}">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50"
                     style="fill:#FA5252;">
                    <path
                        d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
                </svg>
                <hr>
            </div>
            <div id="cuerpoDePilotos">
                <div id="ordenarPor">@lang('messages.orderBy')
                    <button id="ordenarPorPuntos">@lang('messages.points')</button>
                    <span></span>
                    <button id="ordenarPorValor">@lang('messages.marketValue')</button>
                </div>
                <div id="listaDePilotos">
                    <ul></ul>
                    <div id="mensajeNoEncontrado" class="oculto">
                        <p>@lang('messages.notFound')</p>
                    </div>
                </div>
            </div>
            <div id="cuerpoDeCoches" class="oculto">
                <div id="ordenarPorC">@lang('messages.orderBy')
                    <button id="ordenarPorPuntosC">@lang('messages.points')</button>
                    <span></span>
                    <button id="ordenarPorValorC">@lang('messages.marketValue')</button>
                </div>
                <div id="listaDeCoches">
                    <ul></ul>
                    <div id="mensajeNoEncontradoC" class="oculto">
                        <p>@lang('messages.notFound')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@include('partials/footer')
</body>
</html>
