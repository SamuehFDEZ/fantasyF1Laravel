<!DOCTYPE html>
<html lang="">
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
            <a href="{{route('index')}}"><img src="{{asset("img/logoBueno.jpg")}}" alt="logoF1" id="logoHeader"
                                              class="img-fluid"></a>
            <form id="formEliminarUsuario" action="{{route('login')}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="eliminarUser" id="eliminarUser"
                       value="{{__('messages.deleteUser')}}">
            </form>
            <form id="formCerrarSesion" action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" name="cerrarSes" id="cerrarSes"
                       value="{{__('messages.closeSession')}}">
            </form>
        </header>
    </div>

    <div class="row">
        <nav id="navbar" class="col-xl col-md col-sm col">
            <div id="botones">
                <button id="iniciar" onclick="window.location='{{route('login')}}'" class="boton" type="button">
                    <span>@lang('messages.login')</span>
                </button>
                <button id="crear" onclick="window.location='{{route('registro')}}'" class="boton" type="button">
                    @lang('messages.register')
                </button>
            </div>
        </nav>
    </div>


    <main id="main">
        <form id="formLog" action="{{ route('login') }}" method="POST">
            @csrf
            <h1>
                @lang('messages.loginUPPER')
            </h1>
            <hr>
            <label for="nombreLog">
                @lang('messages.user')
            </label><br>
            <input type="text" name="nombre" id="nombreLog"
                   placeholder="{{__('messages.userName')}}"
                   class="@error('nombre') is-invalid @enderror" value="{{ old('nombre') }}"><br><br>
            <label for="contrasenyaLog">@lang('messages.password')</label><br>
            <input type="password" name="contrasenya" id="contrasenyaLog"
                   placeholder="{{__('messages.keyPlaceHolder')}}"
                   class="@error('contrasenya') is-invalid @enderror" value="{{ old('contrasenya') }}">
            <span toggle="#contrasenyaLog" class="field-icon">
                        <img src="{{asset('img/eye.png')}}" id="ojoLog" alt="ojo" srcset="{{asset('img/eye.png')}}">
                    </span><br><br>
            <button id="forgetPass">@lang('messages.forgPassword')</button>
            <br><br>
            <input type="submit" name="iniciarSes" id="iniciarSes" value="{{__('messages.loginUPPER')}}"><br><br>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            @if(session('mensaje'))
                <p class="text-success">{{ session('mensaje') }}</p>
            @endif
            <label for="sinCuenta">
                @lang('messages.withoutAcc')
            </label>
            <button id="sinCuenta" type="button" onclick="window.location='{{ route('registro') }}'">
                @lang('messages.registerF1')
            </button>
            <br><br>
        </form>
    </main>


    <div class="row">
        @include('partials/footerLogin')
    </div>
</div>
</body>
</html>
