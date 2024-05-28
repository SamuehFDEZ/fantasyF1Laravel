<nav>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">@lang('messages.home')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mi-equipo') }}">@lang('messages.myTeam')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('liga') }}">@lang('messages.league')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('constructor') }}">@lang('messages.drivers&Const')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">@lang('messages.circuits')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('premios') }}">@lang('messages.prizes')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('comoJugar') }}">@lang('messages.howToPlay')</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                @lang('messages.languages')
            </a>
            <ul class="dropdown-menu">
                <li><a href="locale/es">@lang('messages.es') <img src="{{asset('img/lang/es.png')}}" alt="es"></a></li>
                <li><a href="locale/en">@lang('messages.en') <img src="{{asset('img/lang/en.png')}}" alt="en"></a></li>
            </ul>
        </li>
    </ul>
</nav>
