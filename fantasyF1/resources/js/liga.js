const usuarios = {};

window.onload = async () => {
    await cargarInfoPilotos();
    await cargarInfoConstructores();
    // Una vez cargada la información de pilotos y constructores, actualizamos la interfaz de usuario
    actualizarInterfazDeUsuario();
};

async function cargarInfoPilotos() {
    let url = 'http://127.0.0.1:8000/api/obtener-pilotos';

    await fetch(url)
        .then(data => data.json())
        .then(async info => {
            await cargarDatosDePilotos(info);
        });
}

async function cargarInfoConstructores() {
    let url = 'http://127.0.0.1:8000/api/obtener-constructores';

    await fetch(url)
        .then(data => data.json())
        .then(async info => {
            await cargarDatosDeConstructores(info);
        });
}

async function cargarDatosDePilotos(info) {
    // Almacenamos la información de los pilotos en la estructura de datos de usuarios
    const pilotos = info.pilotos;
    pilotos.forEach(user => {
        if (!usuarios[user.nombre]) {
            usuarios[user.nombre] = {
                nombre: user.nombre,
                puntosRealizadosTotales: user.puntosRealizadosTotales,
                pilotos: [], // Inicializamos como un array vacío
                constructores: [] // Inicializamos como un array vacío
            };
        }
        usuarios[user.nombre].pilotos.push(user.imgPiloto);
    });
}

async function cargarDatosDeConstructores(info) {
    // Almacenamos la información de los constructores en la estructura de datos de usuarios
    const constructores = info.constructores;
    constructores.forEach(user => {
        if (!usuarios[user.nombre]) {
            usuarios[user.nombre] = {
                nombre: user.nombre,
                puntosRealizadosTotales: user.puntosRealizadosTotales,
                pilotos: [], // Inicializamos como un array vacío
                constructores: [] // Inicializamos como un array vacío
            };
        }
        usuarios[user.nombre].constructores.push(user.coche);
    });
}

function actualizarInterfazDeUsuario() {
    const container = document.getElementById('vistaDeJugadores');
    // Recorremos la estructura de datos de usuarios y actualizamos la interfaz de usuario
    Object.values(usuarios).forEach(user => {
        const userContainer = document.createElement('div');
        userContainer.classList.add('usuario-container');

        const nombreUsuarioContainer = document.createElement('div');
        nombreUsuarioContainer.classList.add('jugador-nombre');
        nombreUsuarioContainer.textContent = user.nombre;

        const elementosContainer = document.createElement('div');
        elementosContainer.classList.add('jugador-elementos');

        // Agregamos las imágenes de pilotos al contenedor de elementos
        user.pilotos.forEach(imgSrc => {
            const imgPiloto = document.createElement('img');
            imgPiloto.src = imgSrc;
            imgPiloto.alt = 'Piloto';
            imgPiloto.classList.add('elemento-img');
            elementosContainer.appendChild(imgPiloto);
        });

        // Agregamos las imágenes de constructores al contenedor de elementos
        user.constructores.forEach(imgSrc => {
            const imgConstructor = document.createElement('img');
            imgConstructor.src = imgSrc;
            imgConstructor.alt = 'Constructor';
            imgConstructor.classList.add('elemento-img');
            elementosContainer.appendChild(imgConstructor);
        });

        const puntosUsuarioContainer = document.createElement('div');
        puntosUsuarioContainer.classList.add('jugador-puntos');
        puntosUsuarioContainer.textContent = user.puntosRealizadosTotales;

        userContainer.appendChild(nombreUsuarioContainer);
        userContainer.appendChild(elementosContainer);
        userContainer.appendChild(puntosUsuarioContainer);

        container.appendChild(userContainer);
    });
}
