<!DOCTYPE html>
<html lang="{{session('locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('messages.login')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQ+zqX6gSbd85u4mG4QzX+"

            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    @vite(['resources/css/login.scss', 'resources/js/login.js'])
</head>
<body>
<div class="container-fluid">
    <div class="row">
        @include('partials/headerLoginReg')
    </div>

    <div class="row">
        <nav id="navbar" class="col-12 bg-dark text-white py-2">
            <div id="botones" class="d-flex justify-content-center">
                <button id="iniciar" onclick="window.location='{{route('login')}}'"
                        class="boton btn btn-link text-white" type="button">
                    <span>@lang('messages.login')</span>
                </button>
                <button id="crear" onclick="window.location='{{route('registro')}}'"
                        class="boton btn btn-link text-white" type="button">
                    @lang('messages.register')
                </button>
            </div>
        </nav>
    </div>

    <main id="main" class="d-flex justify-content-center">
        <form id="formLog" action="{{ route('login') }}" method="POST" class="w-50 mt-4">
            @csrf
            <h1 class="text-left">
                @lang('messages.loginUPPER')
            </h1>
            <hr>
            <div class="mb-3">
                <label for="nombreLog" class="form-label">@lang('messages.user')</label>
                <input type="text" name="nombre" id="nombreLog"
                       placeholder="{{__('messages.userName')}}"
                       class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
            </div>
            <div class="mb-3 position-relative">
                <label for="contrasenyaLog" class="form-label">@lang('messages.password')</label>
                <input type="password" name="contrasenya" id="contrasenyaLog"
                       placeholder="{{__('messages.keyPlaceHolder')}}"
                       class="form-control @error('contrasenya') is-invalid @enderror" value="{{ old('contrasenya') }}">
                <span toggle="#contrasenyaLog" class="field-icon position-absolute"
                      style="top: 70%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                    <img src="{{asset('img/eye.png')}}" id="ojoLog" alt="ojo" style="width: 30px;">
                </span>
            </div>
            <div class="mb-3 d-flex justify-content-between">
            </div>
            <div class="mb-3">
                <input type="submit" name="iniciarSes" id="iniciarSes" value="{{__('messages.loginUPPER')}}"
                       class="btn btn-danger w-100">
            </div>
            @if($errors->any())
                <div class="mb-3">
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if(session('mensaje'))
                <div class="mb-3">
                    <p class="text-success">{{ session('locale') ? __('auth.failed') : __('auth.success')  }}</p>
                </div>
            @endif
            <div class="mb-3">
                <label for="sinCuenta">@lang('messages.withoutAcc')</label>
                <button id="sinCuenta" type="button" class="btn btn-link p-0"
                        onclick="window.location='{{ route('registro') }}'">
                    @lang('messages.registerF1')
                </button>
            </div>
        </form>
    </main>

    <div class="row">
        @include('partials/footerLogin')
    </div>
</div>
</body>
</html>
