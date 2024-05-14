let ordenPuntosAsc = true;
let ordenValorAsc = true;
const ordenarPorPuntos = document.getElementById('ordenarPorPuntos');
const ordenarPorValor = document.getElementById('ordenarPorValor');

window.onload = async () => {
    progresoDeCartera();
    addClassActive();
    await obtenerInfoPilotos();
    filtrarPilotos();
    ordenarPorPuntosyValorMercado();
    elegirPiloto();
}

function crearCampoPiloto() {
    // Crea el contenedor principal <div class="campoPiloto">
    const campoPiloto = document.createElement('div');
    campoPiloto.classList.add('campoPiloto');

    // Crea el elemento de signo más <p id="mas">&plus;</p>
    const mas = document.createElement('p');
    mas.id = 'mas';
    mas.textContent = '+';

    // Crea el elemento de texto "Añadir piloto" <p class="anyadirPiloto">Añadir piloto</p>
    const anyadirPiloto = document.createElement('p');
    anyadirPiloto.classList.add('anyadirPiloto');
    anyadirPiloto.textContent = 'Añadir piloto';

    // Adjunta los elementos al contenedor principal
    campoPiloto.appendChild(mas);
    campoPiloto.appendChild(anyadirPiloto);

    // Devuelve el contenedor principal con todos sus elementos hijos
    return campoPiloto;
}


function eliminarPiloto() {
    const huecosPiloto = document.querySelectorAll('.piloto .campoPiloto img');
    for (let img of huecosPiloto) {
        img.addEventListener("dblclick", () => {
            //El método closest() de la interfaz Element recorre el elemento y sus padres
            // (dirigiéndose hacia la raiz del documento) hasta encontrar un nodo que coincida con el CSS
            // selector especificado.
            const contenedor = img.closest('.campoPiloto'); // Encuentra el contenedor específico de campo piloto
            img.remove(); // Elimina la imagen cuando se hace clic
            const nuevoCampoPiloto = crearCampoPiloto(); // Crea un nuevo campo piloto
            // Limpia el contenido del contenedor
            contenedor.innerHTML = '';
            // Agrega el nuevo campo piloto al contenedor
            contenedor.appendChild(nuevoCampoPiloto);
        });
    }
}


function elegirPiloto() {
    const botonesElegir = document.querySelectorAll('.pilotoElegir');
    botonesElegir.forEach(boton => {
        boton.addEventListener('click', () => {
            const filaPiloto = boton.closest('li');
            const imgPiloto = filaPiloto.querySelector('img');
            const imgPilotoSrc = imgPiloto.src;

            // Verificar si la imagen del piloto ya está en un hueco
            const huecosPiloto = document.querySelectorAll('.piloto .campoPiloto img');
            for (let img of huecosPiloto) {
                if (img.src === imgPilotoSrc) {
                    return;
                }
            }
            // Si no está, se añade al primer hueco disponible
            const nuevoImgPiloto = imgPiloto.cloneNode(true);
            nuevoImgPiloto.classList.add("imgPiloto");

            const campoHuecosPiloto = document.querySelectorAll('.piloto .campoPiloto');
            for (let hueco of campoHuecosPiloto) {
                if (!hueco.querySelector('img')) {
                    hueco.innerHTML = '';  // Limpiar el contenido del hueco
                    hueco.appendChild(nuevoImgPiloto);
                    // Añadir el listener de click para eliminar la imagen
                    nuevoImgPiloto.addEventListener("click", eliminarPiloto);
                    break;
                }
            }
        });
    });
}

function ordenarPorPuntosyValorMercado() {
    ordenarPorPuntos.addEventListener('click', () => {
        ordenarPor('puntosRealizados', ordenPuntosAsc);
        /*Primera vez que se hace clic en el botón:
            Supongamos que ordenValorAsc es inicialmente true.
            Se llama a la función ordenarPor('valorMercado', ordenValorAsc), que ordena de manera ascendente porque ordenValorAsc es true.
            Luego, ordenValorAsc = !ordenValorAsc; cambia ordenValorAsc a false.

        Segunda vez que se hace clic en el botón:
            Ahora, ordenValorAsc es false.
            Se llama a la función ordenarPor('valorMercado', ordenValorAsc), que ordena de manera descendente porque ordenValorAsc es false.
            Luego, ordenValorAsc = !ordenValorAsc; cambia ordenValorAsc de nuevo a true.*/
        ordenPuntosAsc = !ordenPuntosAsc;
    });

    ordenarPorValor.addEventListener('click', () => {
        ordenarPor('valorMercado', ordenValorAsc);
        ordenValorAsc = !ordenValorAsc;
    });
}

// ordena por campo y por orden de < o >
function ordenarPor(campo, ascendente) {
    // obtiene los valores (o bien los puntos o el valorMercado)
    let listaPilotos = document.getElementById('listaDePilotos').getElementsByTagName('ul')[0];
    // guarda como array el contenido de las listas de li
    let pilotos = Array.from(listaPilotos.getElementsByTagName('li'));
    // ordena el array dependiendo de si es ascendente o no
    pilotos.sort((a, b) => {
        let valorA = obtenerValorCampo(a, campo);
        let valorB = obtenerValorCampo(b, campo);

        if (ascendente) {
            return valorA - valorB;
        } else {
            return valorB - valorA;
        }
    });

    listaPilotos.innerHTML = '';
    pilotos.forEach(piloto => listaPilotos.appendChild(piloto));
}

// funcion que devuelve un numero (el valor de los puntos o del valor de mercado)
function obtenerValorCampo(elemento, campo) {
    // si es puntosRealizados devuelve el numero de ese campo
    if (campo === 'puntosRealizados') {
        return parseInt(elemento.getElementsByClassName('puntosPiloto')[0].textContent);
        // lo mismo para el valor
    } else if (campo === 'valorMercado') {
        return parseFloat(elemento.getElementsByClassName('valorPiloto')[0].textContent.replace('M$', ''));
    }
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
