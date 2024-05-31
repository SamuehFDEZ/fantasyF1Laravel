<header class="d-flex align-items-center justify-content-between p-3 container-fluid">
    <img src="{{ asset('img/logoF1Blanco.png' )}}" alt="logoF1" id="logoHeader"
         srcset="{{ asset('img/logoF1Blanco.png') }}">
    <div class="d-flex align-items-center">
        <button id="botonUser" onclick="window.location='{{ route('login') }}'" class="buttonHeaderUser mx-2"
                type="button">
            <svg id="userIcon" class="feather feather-user" fill="none" height="24" stroke="currentColor"
                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
            <span id="nomUser"> {{ session('nombreDeUsuario') ?? __('messages.login') }}
            </span>
        </button>
        <button id="suscribete" class="buttonHeaderSub mx-2" type="button">
            @lang('messages.subscribe')
        </button>
    </div>
</header>
