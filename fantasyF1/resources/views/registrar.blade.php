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
    @vite(['resources/css/registrar.scss', 'resources/js/login.js'])

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <header class="col-md col-sm col">
            <a href="{{route('index')}}"><img src="{{asset("img/logoF1.png")}}" alt="logoF1" id="logoHeader"
                                              class="img-fluid"></a>
            <form id="formEliminarUsuario" action="{{route('registro')}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="eliminarUser" id="eliminarUser" value="{{__('messages.deleteUser')}}">
            </form>
            <form id="formCerrarSesion" action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" name="cerrarSes" id="cerrarSes" value="{{__('messages.closeSession')}}">
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
    <main>
        <form id="formReg" action="{{route('registro')}}" method="POST">
            @csrf
            <h1>
                @lang('messages.registerUPPER')
            </h1>
            <hr>
            <label for="nombreReg">
                @lang('messages.name')
            </label><br>
            <input type="text" name="nombre" id="nombreReg" placeholder="{{__('messages.userNamePlaceHold')}}"><br><br>
            <label for="email"> @lang('messages.mail')</label><br>
            <input type="text" name="email" id="email" placeholder="{{__('messages.mailPlaceHold')}}"><br><br>
            <label for="contrasenyaReg">@lang('messages.password')</label><br>
            <input type="password" name="contrasenya" id="contrasenyaReg"
                   placeholder="{{__('messages.keyPlaceHolder')}}">
            <span toggle="#contrasenyaReg" class="field-icon">
                <img src="{{asset('img/eye.png')}}" id="ojoReg" alt="ojo"
                     srcset="{{asset('img/eye.png')}}">
            </span>
            <br><br>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            @if(session('mensaje'))
                <p class="text-success">{{ session('mensaje') }}</p>
            @endif
            <input type="submit" name="crearCuenta" id="crearCuentaReg" value="{{__('messages.register')}}"><br><br>
        </form>
    </main>

    <div class="row">
        @include('partials/footerLogin')
    </div>


</div>
</body>
</html>
