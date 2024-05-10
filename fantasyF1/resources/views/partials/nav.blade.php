<nav>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mi-equipo') }}">Mi Equipo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ligas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pilotos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('constructor') }}">Constructores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Circuitos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('premios') }}">Premios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('comoJugar') }}">¿Como jugar?</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                Idiomas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Español</a></li>
                <li><a class="dropdown-item" href="#">Inglés</a></li>
            </ul>
        </li>
    </ul>
</nav>
