<header class="col-12 d-flex justify-content-between align-items-center p-3">
    <a href="{{route('index')}}">
        <img src="{{ asset("img/logoBueno.jpg")}}" alt="logoF1" id="logoHeader" class="img-fluid">
    </a>
    <div>
        <form id="formEliminarUsuario" action="{{route('login')}}" method="POST" class="d-inline-block me-2">
            @csrf
            @method('DELETE')
            <input type="submit" name="eliminarUser" id="eliminarUser"
                   value="{{__('messages.deleteUser')}}" class="btn btn-outline-light">
        </form>
        <form id="formCerrarSesion" action="{{ route('logout') }}" method="POST" class="d-inline-block">
            @csrf
            <input type="submit" name="cerrarSes" id="cerrarSes"
                   value="{{__('messages.closeSession')}}" class="btn btn-outline-light">
        </form>
    </div>
</header>
