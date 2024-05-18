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
        await cargarImgs(info);

    });
}

async function cargarImgs(info) {
    const imgContainers = document.querySelectorAll('.imgCoche'); // Asumiendo que tus divs tienen la clase 'imgCoche'

    info.forEach((url, index) => {
        // Crea un nuevo elemento de imagen
        let img = document.createElement('img');
        img.src = url; // Asigna la URL de la imagen al src del elemento de imagen

        // Encuentra el div correspondiente utilizando su índice
        let imgContainer = imgContainers[index];

        imgContainer.appendChild(img);
    });
}

async function cargarNombres(info) {
    const nombres = document.querySelectorAll('.nombre');
    nombres[0].innerText = info[6]['nombre']
    nombres[1].innerText = info[2]['nombre']
    nombres[2].innerText = info[4]['nombre']
    nombres[3].innerText = info[5]['nombre']
    nombres[4].innerText = info[1]['nombre']
    nombres[5].innerText = info[8]['nombre']
    nombres[6].innerText = info[3]['nombre']
    nombres[7].innerText = info[9]['nombre']
    nombres[8].innerText = info[7]['nombre']
    nombres[9].innerText = info[0]['nombre']
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
