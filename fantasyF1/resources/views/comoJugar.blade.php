<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    @vite(['resources/css/comoJugar.scss', 'resources/js/app.js'])
</head>

<body>
@include('partials/header')
<main>
    @include('partials/panelSubscribe')
    <section id="sectionBann">
        <div id="banner" class="text-center">
            <img src=" {{asset('img/hp-masthead-filler-web.svg')}} " id="imgEnBannerIzq" alt=""
                 srcset=" {{asset('img/hp-masthead-filler-web.svg')}}" class="img-fluid">
            <img src=" {{asset('img/logoEnBannerOficial.png')}} " id="logoEnBanner" alt="logoBanner"
                 srcset=" {{asset('img/logoEnBannerOficial.png')}}" class="img-fluid img-logo">
            <img src=" {{asset('img/hp-masthead-thumb-web.png')}} " id="pilotos" alt=""
                 srcset=" {{asset('img/hp-masthead-thumb-web.png')}}" class="img-fluid d-none d-lg-block">
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
    </section>

    <div id="explicacion">
        <p>
            F1 Fantasy es un juego virtual que te permite crear tu propio equipo de Fórmula 1 y competir contra otros
            aficionados de todo el mundo. La esencia del juego radica en seleccionar cuidadosamente a tus pilotos y
            equipos para maximizar tus puntos basados en su desempeño en eventos reales de Fórmula 1 a lo largo de la
            temporada.
        </p>
        <p>
            Aquí hay un desglose paso a paso de cómo empezar a jugar:
        </p>
        <p>

            Registro en una plataforma de F1 Fantasy: Lo primero que necesitas hacer es registrarte en una plataforma de
            F1 Fantasy. Hay varias opciones disponibles, incluyendo las oficiales de la Fórmula 1 y otras plataformas
            independientes que ofrecen experiencias similares. Una vez que te registres, es posible que necesites crear
            un perfil y proporcionar alguna información básica.
        </p>
        <p>

            Entender las reglas del juego: Antes de comenzar a seleccionar tu equipo, es importante entender las reglas
            del juego. Esto incluye conocer cómo se puntúa, las restricciones de presupuesto y cualquier otra regla
            específica del juego. Las reglas pueden variar según la plataforma, así que asegúrate de leerlas
            detenidamente.
        </p>
        <p>

            Seleccionar tu equipo: Una vez que estés familiarizado con las reglas, es hora de seleccionar tu equipo. Por
            lo general, tienes un presupuesto virtual limitado para gastar en la compra de pilotos y equipos. Cada
            piloto y equipo tiene un valor asignado en función de su rendimiento esperado y su historial en carreras
            anteriores. Debes equilibrar cuidadosamente tus selecciones para asegurarte de que se ajusten al presupuesto
            y maximicen tus posibilidades de éxito.
        </p>
        <p>

            Unirse o crear una liga: Después de seleccionar tu equipo, puedes unirte a una liga pública o crear tu
            propia liga privada. Las ligas pueden tener diferentes configuraciones de reglas y restricciones, como
            límites de presupuesto, selecciones únicas de pilotos, etc. Unirse a una liga te permite competir contra
            otros aficionados y comparar tu desempeño con el de ellos.
        </p>
        <p>

            Seguir el progreso y ajustar tu equipo: A lo largo de la temporada de Fórmula 1, puedes seguir el progreso
            de tu equipo y realizar ajustes según sea necesario. Esto puede incluir realizar cambios en tu alineación de
            pilotos y equipos, realizar transferencias para mejorar tu equipo y ajustar tu estrategia en función de los
            resultados de las carreras anteriores.
        </p>
        <p>

            Competir y disfrutar: Una vez que hayas configurado tu equipo y te hayas unido a una liga, estás listo para
            competir y disfrutar del emocionante mundo del fantasy de Fórmula 1. Sigue de cerca el progreso de tus
            selecciones durante las carreras reales y celebra tus éxitos a medida que acumulas puntos y te acercas a la
            cima de la clasificación.
        </p>
    </div>

</main>

@include('partials/footer')

</body>
</html>
