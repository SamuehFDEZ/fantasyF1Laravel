<section id="sectionBann">
    <div id="banner" class="text-center">
        <img src="{{asset('img/hp-masthead-filler-web.svg')}}" id="imgEnBannerIzq" alt=""
             srcset="{{asset('img/hp-masthead-filler-web.svg')}}" class="img-fluid">
        <img src="{{asset('img/logoEnBannerOficial.png')}}" id="logoEnBanner" alt="logoBanner"
             srcset="{{asset('img/logoEnBannerOficial.png')}}" class="img-fluid img-logo">
        <img src="{{asset('img/hp-masthead-thumb-web.png')}}" id="pilotos" alt=""
             srcset="{{asset('img/hp-masthead-thumb-web.png')}}" class="img-fluid d-none d-lg-block">
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
