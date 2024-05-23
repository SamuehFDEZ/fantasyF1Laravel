window.onload = async () => {
    await cargarInfoPilotos();
    await cargarInfoConstructores();
};

async function cargarInfoPilotos() {
    let url = 'http://127.0.0.1:8000/api/obtener-pilotos';

    await fetch(url).then(data => data.json()).then(async info => {
        await cargarDatosDePilotos(info);
    });
}

async function cargarInfoConstructores() {
    let url = 'http://127.0.0.1:8000/api/obtener-constructores';

    await fetch(url).then(data => data.json()).then(async info => {
        await cargarDatosDeConstructores(info);
    });
}

async function cargarDatosDePilotos(info) {
    // Obtener el contenedor
    const container = document.getElementById('vistaDeJugadores');

    // Crear el contenedor para el nombre de usuario
    const nombreUsuarioContainer = document.createElement('div');
    nombreUsuarioContainer.classList.add('jugador-info');
    container.appendChild(nombreUsuarioContainer);

    // Agregar el nombre de usuario una sola vez
    if (info.length > 0) {
        const nombreUsuario = document.createElement('div');
        nombreUsuario.textContent = info[0].nombre;
        nombreUsuarioContainer.appendChild(nombreUsuario);
    }

    // Iterar sobre los datos para crear los bloques de información
    info.forEach(item => {
        // Crear el contenedor de información para cada elemento
        const infoContainer = document.createElement('div');
        infoContainer.classList.add('jugador-info');

        // Crear y agregar la imagen del piloto
        const imgPiloto = document.createElement('img');
        imgPiloto.src = item.imgPiloto;
        imgPiloto.alt = item.nombre;
        infoContainer.appendChild(imgPiloto);

        // Agregar el contenedor de información al contenedor principal
        container.appendChild(infoContainer);
    });
}


async function cargarDatosDeConstructores(info) {
    // Obtener el contenedor principal
    const container = document.getElementById('vistaDeJugadores');

    // Iterar sobre los datos para crear los bloques de información
    info.forEach(item => {
        // Crear el contenedor de información para cada elemento
        const infoContainer = document.createElement('div');
        infoContainer.classList.add('jugador-info');

        // Crear y agregar la imagen del coche
        const imgCoche = document.createElement('img');
        imgCoche.src = item.coche; // Dejar en blanco para agregar después
        imgCoche.alt = 'Coche del equipo';
        imgCoche.classList.add("constructor");
        infoContainer.appendChild(imgCoche);

        // Agregar el contenedor de información al contenedor principal
        container.appendChild(infoContainer);
    });

    // Crear el contenedor para los puntos del usuario
    const puntosUsuarioContainer = document.createElement('div');
    puntosUsuarioContainer.classList.add('jugador-info');
    container.appendChild(puntosUsuarioContainer);

    // Agregar los puntos del usuario una sola vez
    if (info.length > 0) {
        const puntosUsuario = document.createElement('div');
        puntosUsuario.textContent = info[0].puntosRealizadosTotales;
        puntosUsuarioContainer.appendChild(puntosUsuario);
    }
}

