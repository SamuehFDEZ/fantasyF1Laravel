window.onload = async () => {
    progresoDeCartera();
    addClassActive();
    await obtenerInfoPilotos();
    filtrarPilotos();

}

function progresoDeCartera() {
    // Obtener el valor del label y convertirlo a número
    let valorLabel = parseFloat(document.querySelector('label[for="cartera"]').textContent);

    // Obtener el elemento progress
    let progress = document.getElementById('cartera');

    // Ajustar el valor del progress según el valor del label
    progress.value = valorLabel; // Puedes ajustar esta lógica según tus necesidades

    // Por ejemplo, puedes aumentar o disminuir el valor del progress en una cantidad fija
    // progress.value += 10; // Aumenta en 10
    // progress.value -= 10; // Disminuye en 10
}

function filtrarPilotos() {
    const inputFiltrar = document.getElementById('filtrar');

    // Agrega un evento de escucha para detectar cambios en el valor del input
    inputFiltrar.addEventListener("input", function () {
        // Obtén el valor actual del input y conviértelo a minúsculas para hacer coincidencias de texto sin distinción entre mayúsculas y minúsculas
        const filtro = inputFiltrar.value.toLowerCase();

        // Selecciona todos los elementos <li> dentro del <ul>
        const elementosPiloto = document.querySelectorAll('#listaDePilotos ul li');

        // Variable para verificar si se encontró alguna coincidencia
        let encontradaCoincidencia = false;

        // Itera sobre los elementos <li> y muestra u oculta según el filtro
        elementosPiloto.forEach(piloto => {
            // Obtén el texto del piloto (nombre del piloto)
            const textoPiloto = piloto.textContent.toLowerCase();

            // Si el texto del piloto contiene el filtro, muestra el piloto, de lo contrario, ocúltalo
            if (textoPiloto.includes(filtro)) {
                // sino lo hago asi se come el estilo del <li> del scss
                piloto.style.display = 'block';
                piloto.style = ' display: flex;\n' +
                    '    flex-direction: row;\n' +
                    '    justify-content: space-between; /* Alinea los elementos alrededor del espacio disponible */\n' +
                    '    align-items: center;';
                encontradaCoincidencia = true;
            } else {
                piloto.style.display = 'none';
            }
        });

        // Muestra el mensaje de "No se ha encontrado ningún piloto" si no se encontró ninguna coincidencia
        const mensajeNoEncontrado = document.getElementById('mensajeNoEncontrado');
        mensajeNoEncontrado.style.display = encontradaCoincidencia ? 'none' : 'block';
    });
}


async function obtenerInfoPilotos() {
    let url = 'http://127.0.0.1:8000/api/piloto/info';
    await fetch(url).then(data => data.json()).then(async info => {
        await cargarInfoPilotos(info);
    });
}

function cargarInfoPilotos(info) {
    // Selecciona el elemento <ul> donde deseas cargar la lista de pilotos
    const listaPilotos = document.getElementById('listaDePilotos').getElementsByTagName('ul')[0];

    // Itera sobre el array de objetos de la API y crea dinámicamente elementos <li> para cada piloto
    info.forEach(piloto => {
        // Crea un nuevo elemento <li>
        const li = document.createElement('li');

        // Crea un nuevo elemento <div> para el nombre del piloto
        const divNombre = document.createElement('div');
        divNombre.classList.add("nombrePiloto");

        // Crea un nuevo elemento <div> para los puntos realizados por el piloto
        const divPuntos = document.createElement('div');
        divPuntos.classList.add("puntosPiloto");

        // Crea un nuevo elemento <div> para el valor de mercado del piloto
        const divValorMercado = document.createElement('div');
        divValorMercado.classList.add("valorPiloto");

        // Crea una imagen con la URL proporcionada por la API
        const img = document.createElement('img');
        img.src = piloto.imgPiloto;
        img.alt = 'piloto';

        // Crea un nodo de texto con el nombre del piloto
        const nombrePiloto = document.createTextNode(piloto.nombre);

        // Crea un nodo de texto con los puntos realizados por el piloto
        const puntosPiloto = document.createTextNode(piloto.puntosRealizados);

        // Crea un nodo de texto con el valor de mercado del piloto
        const valorMercadoPiloto = document.createTextNode(`${piloto.valorMercado}M$`);

        // Crea un botón
        const boton = document.createElement('button');
        boton.className = 'pilotoElegir';
        boton.textContent = '+';

        // Adjunta los nodos de texto e imagen a los <div> correspondientes
        divNombre.appendChild(nombrePiloto);
        divPuntos.appendChild(puntosPiloto);
        divValorMercado.appendChild(valorMercadoPiloto);

        // Adjunta los elementos al <li>
        li.appendChild(img);
        li.appendChild(divNombre);
        li.appendChild(divPuntos);
        li.appendChild(divValorMercado);
        li.appendChild(boton);

        // Adjunta el <li> al <ul>
        listaPilotos.appendChild(li);
    });
}


function addClassActive() {
    const anchors = document.querySelectorAll("#cabeceraDePilotos a");

    anchors.forEach(function (anchor) {
        anchor.addEventListener("click", () => {
            // Agregar clase "activo" al enlace clicado
            anchor.classList.add("activo");

            // Remover clase "activo" de los otros enlaces
            anchors.forEach(function (otherAnchor) {
                if (otherAnchor !== anchor) {
                    otherAnchor.classList.remove("activo");
                }
            });
        });
    });
}
