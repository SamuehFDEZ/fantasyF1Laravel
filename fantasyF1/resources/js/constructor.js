window.onload = async () => {
    await obtenerConstructores()
}

async function obtenerConstructores() {
    let url = 'http://127.0.0.1:8000/api/constructor';

    await fetch(url).then(data => data.json()).then(async info => {
        await cargarNombres(info);
    });

    let url2 = 'http://127.0.0.1:8000/api/constructor/puntos';

    await fetch(url2).then(data => data.json()).then(async info => {
        await cargarPuntos(info);
    });

    let url3 = 'http://127.0.0.1:8000/api/constructor/coches';

    await fetch(url3).then(data => data.json()).then(async info => {
        await cargarImgsCoches(info);

    });

    let url4 = 'http://127.0.0.1:8000/api/constructor/logos';

    await fetch(url4).then(data => data.json()).then(async info => {
        await cargarLogosCoches(info);

    });

    let url5 = 'http://127.0.0.1:8000/api/piloto/imgYNombre';

    await fetch(url5).then(data => data.json()).then(async info => {

        await cargarImgYNombresPilotos(info);
    });

    let url6 = 'http://127.0.0.1:8000/api/constructor/colores';

    await fetch(url6).then(data => data.json()).then(async info => {

        await cargarColores(info);
    });
}

async function cargarColores(info) {
    const coches = document.querySelectorAll('.coche');
    const barras = document.querySelectorAll('.barra');

    // Iterar sobre el array info
    info.forEach((color, index) => {
        console.log(color);
        console.log(index)
        coches[index].addEventListener('mouseover', () => {
            coches[index].style.borderTopColor = color;
            coches[index].style.borderRightColor = color;
        });
        coches[index].addEventListener('mouseleave', () => {
            coches[index].style.borderTopColor = '';
            coches[index].style.borderRightColor = '';
        });

        barras[index].style.backgroundColor = color;
    });
}

async function cargarImgYNombresPilotos(info) {
    // Seleccionar todos los contenedores de pilotos
    const contenedoresPilotos = document.querySelectorAll(".pilotosEnEq");

    // Iterar sobre cada equipo de información de pilotos
    info.forEach((pilotos, index) => {
        const contenedorPilotos = contenedoresPilotos[index];

        // Iterar sobre los pilotos de este equipo
        pilotos.forEach(piloto => {
            // Crear elementos HTML para cada piloto
            const divPiloto = document.createElement('div');
            divPiloto.classList.add('piloto');

            const spanNombre = document.createElement('span');
            spanNombre.innerHTML = `${piloto.nombre.split(' ')[0]} <b>${piloto.nombre.split(' ')[1]}</b>`;

            const imgPiloto = document.createElement('img');
            imgPiloto.src = piloto.imgPiloto;
            imgPiloto.alt = 'piloto';

            divPiloto.appendChild(spanNombre);
            divPiloto.appendChild(imgPiloto);

            // Agregar el piloto al contenedor
            contenedorPilotos.appendChild(divPiloto);
        });
    });
}


async function cargarLogosCoches(info) {
    const logoDivs = document.querySelectorAll('.logo'); // Asumiendo que tus divs tienen la clase 'logo'

    // Iterar sobre el array info
    info.forEach((item, index) => {
        const logoUrl = item.logo; // Obtener la URL del logo
        // Crear un nuevo elemento de imagen
        let img = document.createElement('img');
        img.src = logoUrl; // Asignar la URL de la imagen al src del elemento de imagen
        // Encontrar el div correspondiente utilizando su índice
        let imgContainer = logoDivs[index];
        imgContainer.appendChild(img);
    });
}

async function cargarImgsCoches(info) {
    const cochesImg = document.querySelectorAll('.imgCoche'); // Asumiendo que tus divs tienen la clase 'imgCoche'

    info.forEach((url, index) => {
        // Crea un nuevo elemento de imagen
        let img = document.createElement('img');
        img.src = url; // Asigna la URL de la imagen al src del elemento de imagen

        // Encuentra el div correspondiente utilizando su índice
        let imgContainer = cochesImg[index];

        imgContainer.appendChild(img);
    });
}

async function cargarNombres(info) {
    const nombres = document.querySelectorAll('.nombre');
    info.forEach((nombre, index) => {
        nombres[index].innerText = nombre;
    });
}

async function cargarPuntos(info) {
    // Obtener todos los elementos con el id "puntos"
    const puntosSpans = document.querySelectorAll("#puntos");
    // Iterar sobre los datos obtenidos
    info.forEach((equipo, index) => {
        // Obtener el span de puntos correspondiente al índice actual
        const puntosSpan = puntosSpans[index];
        puntosSpan.textContent = `${equipo} PTS`;
    });
}

