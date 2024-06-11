// global object that will contain all the info of each user (username, drivers, teams, and points)
const usuarios = {};

window.onload = async () => {
    // functions and listeners
    suscribete.addEventListener("click", suscribirse);
    quitarSubs.addEventListener("click", quitarPanel);
    await cargarInfoPilotos();
    await cargarInfoConstructores();
    // Una vez cargada la información de pilotos y constructores, actualizamos la interfaz de usuario
    actualizarInterfazDeUsuario();
};

//Asynchronous  function to obtain the drivers the user has selected
async function cargarInfoPilotos() {
    let url = 'http://127.0.0.1:8000/api/obtener-pilotos';

    await fetch(url)
        .then(data => data.json())
        .then(async info => {
            await cargarDatosDePilotos(info);
        });
}

// Asynchronous function to obtain the teams the user has selected
async function cargarInfoConstructores() {
    let url = 'http://127.0.0.1:8000/api/obtener-constructores';

    await fetch(url)
        .then(data => data.json())
        .then(async info => {
            await cargarDatosDeConstructores(info);
        });
}

// Asynchronous function to load driver data
async function cargarDatosDePilotos(info) {
    // Store the driver information in the user data structure
    const pilotos = info.pilotos;

    // Iterate over each driver
    pilotos.forEach(user => {
        // If the user does not exist in the 'usuarios' object, create a new entry
        if (!usuarios[user.nombre]) {
            usuarios[user.nombre] = {
                nombre: user.nombre, // Store the user's name
                puntosRealizadosTotales: user.puntosRealizadosTotales, // Store the total points achieved by the user
                pilotos: [], // Initialize the driver array as empty
                constructores: [] // Initialize the teams array as empty
            };
        }
        // Add the driver image to the user's pilots array
        usuarios[user.nombre].pilotos.push(user.imgPiloto);
    });
}

// Asynchronous function to load driver data
// the same as drivers but with the teams
async function cargarDatosDeConstructores(info) {
    const constructores = info.constructores;
    constructores.forEach(user => {
        if (!usuarios[user.nombre]) {
            usuarios[user.nombre] = {
                nombre: user.nombre,
                puntosRealizadosTotales: user.puntosRealizadosTotales,
                pilotos: [],
                constructores: []
            };
        }
        usuarios[user.nombre].constructores.push(user.coche);
    });
}

// function to display the users data (name, drivers, teams, and points)
function actualizarInterfazDeUsuario() {
    // Get the container element where the user data will be displayed
    const container = document.getElementById('vistaDeJugadores');

    // Iterate over the user data structure and update the user interface
    Object.values(usuarios).forEach(user => {
        // Create a container for each user
        const userContainer = document.createElement('div');
        userContainer.classList.add('usuario-container');

        // Create and populate a container for the user's name
        const nombreUsuarioContainer = document.createElement('div');
        nombreUsuarioContainer.classList.add('jugador-nombre');
        nombreUsuarioContainer.textContent = user.nombre;

        // Create a container for the user's elements (pilots and constructors)
        const elementosContainer = document.createElement('div');
        elementosContainer.classList.add('jugador-elementos');

        // Add pilot images to the elements container
        user.pilotos.forEach(imgSrc => {
            const imgPiloto = document.createElement('img');
            imgPiloto.src = imgSrc;
            imgPiloto.alt = 'Piloto';
            imgPiloto.classList.add('elemento-img');
            elementosContainer.appendChild(imgPiloto);
        });

        // Add constructor images to the elements container
        user.constructores.forEach(imgSrc => {
            const imgConstructor = document.createElement('img');
            imgConstructor.src = imgSrc;
            imgConstructor.alt = 'Constructor';
            imgConstructor.classList.add('elemento-img');
            elementosContainer.appendChild(imgConstructor);
        });

        // Create and populate a container for the user's total points
        const puntosUsuarioContainer = document.createElement('div');
        puntosUsuarioContainer.classList.add('jugador-puntos');
        puntosUsuarioContainer.textContent = user.puntosRealizadosTotales;

        // Append the user's name, elements, and points containers to the user container
        userContainer.appendChild(nombreUsuarioContainer);
        userContainer.appendChild(elementosContainer);
        userContainer.appendChild(puntosUsuarioContainer);

        // Append the user container to the main container
        container.appendChild(userContainer);
    });
}

// function to display the subscribe modal

function suscribirse() {
    panel.classList.remove("oculto");
}

// function to remove the subscribe modal
function quitarPanel() {
    panel.classList.add("oculto");
}
