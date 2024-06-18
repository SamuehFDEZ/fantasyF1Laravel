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
                <li><a href="locale/pt">@lang('messages.pt') <img src="{{asset('img/lang/pt.png')}}" alt="pt"></a></li>
                <li><a href="locale/en">@lang('messages.en') <img src="{{asset('img/lang/en.png')}}" alt="en"></a></li>
                <li><a href="locale/fr">@lang('messages.fr') <img src="{{asset('img/lang/fr.svg')}}" alt="fr"></a></li>
                <li><a href="locale/de">@lang('messages.de') <img src="{{asset('img/lang/de.png')}}" alt="de"></a></li>
                <li><a href="locale/it">@lang('messages.it') <img src="{{asset('img/lang/it.png')}}" alt="it"></a></li>
                <li><a href="locale/cn">@lang('messages.cn') <img src="{{asset('img/lang/cn.png')}}" alt="cn"></a></li>
                <li><a href="locale/ru">@lang('messages.ru') <img src="{{asset('img/lang/ru.png')}}" alt="ru"></a></li>
            </ul>
        </li>
    </ul>
</nav>
