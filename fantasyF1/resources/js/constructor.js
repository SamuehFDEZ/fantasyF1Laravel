import {ip} from './ipConfig.js';

window.onload = async () => {
    // Add event listener to the subscribe button
    suscribete.addEventListener("click", suscribirse);
    quitarSubs.addEventListener("click", quitarPanel);
    // Fetch and load teams data
    await obtenerConstructores()
}

// Function to fetch and load team data
async function obtenerConstructores() {
    // Fetch team data from the API
    let url = `http://${ip}/api/constructor`;
    await fetch(url).then(data => data.json()).then(async info => {
        await cargarNombres(info);
    });

    // Fetch team points data from the API
    let url2 = `http://${ip}/api/constructor/puntos`;
    await fetch(url2).then(data => data.json()).then(async info => {
        await cargarPuntos(info);
    });

    // Fetch team cars images from the API
    let url3 = `http://${ip}/api/constructor/coches`;
    await fetch(url3).then(data => data.json()).then(async info => {
        await cargarImgsCoches(info);
    });

    // Fetch team logos from the API
    let url4 = `http://${ip}/api/constructor/logos`;
    await fetch(url4).then(data => data.json()).then(async info => {
        await cargarLogosCoches(info);
    });

    // Fetch driver images and names from the API
    let url5 = `http://${ip}/api/piloto/imgYNombre`;
    await fetch(url5).then(data => data.json()).then(async info => {
        await cargarImgYNombresPilotos(info);
    });

    // Fetch team colors from the API
    let url6 = `http://${ip}/api/constructor/colores`;
    await fetch(url6).then(data => data.json()).then(async info => {
        await cargarColores(info);
    });
}

// Function to load and apply colors to cars and bars
async function cargarColores(info) {
    // Select all elements with the class 'coche'
    const coches = document.querySelectorAll('.coche');
    // Select all elements with the class 'barra'
    const barras = document.querySelectorAll('.barra');

    // Iterate over the color info array
    info.forEach((color, index) => {
        console.log(color);
        console.log(index);
        // Add event listener to apply color on mouseover
        coches[index].addEventListener('mouseover', () => {
            coches[index].style.borderTopColor = color;
            coches[index].style.borderRightColor = color;
        });
        // Add event listener to remove color on mouse leave
        coches[index].addEventListener('mouseleave', () => {
            coches[index].style.borderTopColor = '';
            coches[index].style.borderRightColor = '';
        });

        // Apply background color to the bars
        barras[index].style.backgroundColor = color;
    });
}

// Function to load and display driver images and names
async function cargarImgYNombresPilotos(info) {
    // Select all containers for pilots
    const contenedoresPilotos = document.querySelectorAll(".pilotosEnEq");

    // Iterate over each team of pilot information
    info.forEach((pilotos, index) => {
        const contenedorPilotos = contenedoresPilotos[index];

        // Iterate over the pilots of this team
        pilotos.forEach(piloto => {
            // Create HTML elements for each pilot
            const divPiloto = document.createElement('div');
            divPiloto.classList.add('piloto');

            const spanNombre = document.createElement('span');
            spanNombre.innerHTML = `${piloto.nombre.split(' ')[0]} <b>${piloto.nombre.split(' ')[1]}</b>`;

            const imgPiloto = document.createElement('img');
            imgPiloto.src = piloto.imgPiloto;
            imgPiloto.alt = 'piloto';

            divPiloto.appendChild(spanNombre);
            divPiloto.appendChild(imgPiloto);

            // Add the pilot to the container
            contenedorPilotos.appendChild(divPiloto);
        });
    });
}

// Function to load and display constructor logos
async function cargarLogosCoches(info) {
    // Select all divs with the class 'logo'
    const logoDivs = document.querySelectorAll('.logo');

    // Iterate over the logo info array
    info.forEach((item, index) => {
        const logoUrl = item.logo; // Get the logo URL
        // Create a new image element
        let img = document.createElement('img');
        img.src = logoUrl; // Set the image source to the logo URL
        // Find the corresponding div by index
        let imgContainer = logoDivs[index];
        imgContainer.appendChild(img);
    });
}

// Function to load and display car images
async function cargarImgsCoches(info) {
    // Select all divs with the class 'imgCoche'
    const cochesImg = document.querySelectorAll('.imgCoche');

    // Iterate over the car images array
    info.forEach((url, index) => {
        // Create a new image element
        let img = document.createElement('img');
        img.src = url; // Set the image source to the car image URL

        // Find the corresponding div by index
        let imgContainer = cochesImg[index];

        imgContainer.appendChild(img);
    });
}

// Function to load and display team names
async function cargarNombres(info) {
    // Select all elements with the class 'nombre'
    const nombres = document.querySelectorAll('.nombre');

    // Iterate over the names array and set the text content
    info.forEach((nombre, index) => {
        nombres[index].innerText = nombre;
    });
}

// Function to load and display team points
async function cargarPuntos(info) {
    // Select all elements with the id 'puntos'
    const puntosSpans = document.querySelectorAll("#puntos");

    // Iterate over the points data and set the text content
    info.forEach((equipo, index) => {
        const puntosSpan = puntosSpans[index];
        puntosSpan.textContent = `${equipo} PTS`;
    });
}

// Function to show the subscription panel
function suscribirse() {
    panel.classList.remove("oculto");
}

// Function to hide the subscription panel
function quitarPanel() {
    panel.classList.add("oculto");
}
