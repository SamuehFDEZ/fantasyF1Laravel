<!DOCTYPE html>
<html lang="{{session('locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="User learns how to play">
    <title>@lang('messages.howToPlay')</title>
    <!-- Styles -->
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
    @vite(['resources/css/comoJugar.scss', 'resources/js/app.js', 'resources/js/subscribe.js'])
</head>

<body>
@include('partials/header')
<main>
    @include('partials/panelSubscribe')

    @include('partials/banner')


    <div id="explicacion">
        <h1>@lang('messages.howToPlay')</h1>
        <p></p>
        @lang('messages.subtitle')
        <p></p>
        @lang('messages.introduction')
        <p></p>
        @lang('messages.body')
        <p></p>
        @lang('messages.bodyTwo')
        <p></p>
        @lang('messages.retQuestion')
    </div>
</main>

@include('partials/footer')

</body>
</html>
