let ordenPuntosAsc = true;
let ordenValorAsc = true;
let ordenPuntosAscC = true;
let ordenValorAscC = true;
const ordenarPorPuntos = document.getElementById('ordenarPorPuntos');
const ordenarPorValor = document.getElementById('ordenarPorValor');
const ordenarPorPuntosC = document.getElementById('ordenarPorPuntosC');
const ordenarPorValorC = document.getElementById('ordenarPorValorC');

window.onload = async () => {
    progresoDeCartera();
    addClassActive();
    await obtenerInfoPilotos();
    await obtenerInfoCoches();
    filtrarPilotos();
    ordenarPorPuntosyValorMercado();
    elegirPiloto();
    filtrarConstructores();
    ordenarPorPuntosYValorMercadoConstructores();
    elegirConstructor();
}

function crearCampoPiloto() {
    const campoPiloto = document.createElement('div');
    campoPiloto.classList.add('campoPiloto');

    const mas = document.createElement('p');
    mas.id = 'mas';
    mas.textContent = '+';

    const anyadirPiloto = document.createElement('p');
    anyadirPiloto.classList.add('anyadirPiloto');
    anyadirPiloto.textContent = 'Añadir piloto';

    campoPiloto.appendChild(mas);
    campoPiloto.appendChild(anyadirPiloto);

    return campoPiloto;
}

function eliminarPiloto() {
    const huecosPiloto = document.querySelectorAll('.piloto .campoPiloto img');
    for (let img of huecosPiloto) {
        img.addEventListener("dblclick", () => {
            const contenedor = img.closest('.campoPiloto');
            const valorPiloto = parseFloat(img.getAttribute('data-valor'));
            img.remove();
            const nuevoCampoPiloto = crearCampoPiloto();
            contenedor.innerHTML = '';
            contenedor.appendChild(nuevoCampoPiloto);
            actualizarCoste(-valorPiloto);
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
            const valorPiloto = parseFloat(filaPiloto.querySelector('.valorPiloto').textContent.replace('M$', ''));

            const huecosPiloto = document.querySelectorAll('.piloto .campoPiloto img');
            for (let img of huecosPiloto) {
                if (img.src === imgPilotoSrc) {
                    return;
                }
            }

            const nuevoImgPiloto = imgPiloto.cloneNode(true);
            nuevoImgPiloto.classList.add("imgPiloto");
            nuevoImgPiloto.setAttribute('data-valor', valorPiloto);

            const campoHuecosPiloto = document.querySelectorAll('.piloto .campoPiloto');
            for (let hueco of campoHuecosPiloto) {
                if (!hueco.querySelector('img')) {
                    hueco.innerHTML = '';
                    hueco.appendChild(nuevoImgPiloto);
                    nuevoImgPiloto.addEventListener("dblclick", eliminarPiloto);
                    actualizarCoste(valorPiloto);
                    break;
                }
            }
        });
    });
}

function ordenarPorPuntosyValorMercado() {
    ordenarPorPuntos.addEventListener('click', () => {
        ordenarPor('puntosRealizados', ordenPuntosAsc);
        ordenPuntosAsc = !ordenPuntosAsc;
    });

    ordenarPorValor.addEventListener('click', () => {
        ordenarPor('valorMercado', ordenValorAsc);
        ordenValorAsc = !ordenValorAsc;
    });
}

function ordenarPor(campo, ascendente) {
    let listaPilotos = document.getElementById('listaDePilotos').getElementsByTagName('ul')[0];
    let pilotos = Array.from(listaPilotos.getElementsByTagName('li'));
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

function ordenarPorCoches(campo, ascendente) {
    let listaCoches = document.getElementById('listaDeCoches').getElementsByTagName('ul')[0];
    let coches = Array.from(listaCoches.getElementsByTagName('li'));
    coches.sort((a, b) => {
        let valorA = obtenerValorCampoCoche(a, campo);
        let valorB = obtenerValorCampoCoche(b, campo);

        if (ascendente) {
            return valorA - valorB;
        } else {
            return valorB - valorA;
        }
    });

    listaCoches.innerHTML = '';
    coches.forEach(coche => listaCoches.appendChild(coche));
}

function obtenerValorCampo(elemento, campo) {
    if (campo === 'puntosRealizados') {
        return parseInt(elemento.getElementsByClassName('puntosPiloto')[0].textContent);
    } else if (campo === 'valorMercado') {
        return parseFloat(elemento.getElementsByClassName('valorPiloto')[0].textContent.replace('M$', ''));
    }
}

function obtenerValorCampoCoche(elemento, campo) {
    if (campo === 'puntosRealizados') {
        return parseInt(elemento.getElementsByClassName('puntosCoche')[0].textContent);
    } else if (campo === 'valorMercado') {
        return parseFloat(elemento.getElementsByClassName('valorCoche')[0].textContent.replace('M$', ''));
    }
}

function progresoDeCartera() {
    let valorLabel = parseFloat(document.querySelector('label[for="cartera"]').textContent);
    let progress = document.getElementById('cartera');
    progress.value = valorLabel;
    progress.max = 100;
}

function actualizarCoste(valor) {
    let valorLabel = parseFloat(document.querySelector('label[for="cartera"]').textContent);
    let nuevoValor = valorLabel - valor;
    document.querySelector('label[for="cartera"]').textContent = `${nuevoValor.toFixed(1)}M$`;

    let progress = document.getElementById('cartera');
    progress.value = nuevoValor;

    let botonContinuar = document.querySelector('button[type="button"]');
    botonContinuar.disabled = nuevoValor < 0;

    actualizarDisponibilidadPilotos(nuevoValor);
    actualizarDisponibilidadCoches(nuevoValor);
}

function actualizarDisponibilidadPilotos(valorDisponible) {
    const pilotos = document.querySelectorAll('#listaDePilotos ul li');

    pilotos.forEach(piloto => {
        const valorPiloto = parseFloat(piloto.querySelector('.valorPiloto').textContent.replace('M$', ''));
        const boton = piloto.querySelector('.pilotoElegir');

        if (valorPiloto > valorDisponible) {
            piloto.style.opacity = '0.5';
            boton.disabled = true;
        } else {
            piloto.style.opacity = '1';
            boton.disabled = false;
        }
    });
}

function actualizarDisponibilidadCoches(valorDisponible) {
    const coches = document.querySelectorAll('#listaDeCoches ul li');

    coches.forEach(coche => {
        const valorCoche = parseFloat(coche.querySelector('.valorCoche').textContent.replace('M$', ''));
        const boton = coche.querySelector('.cocheElegir');

        if (valorCoche > valorDisponible) {
            coche.style.opacity = '0.5';
            boton.disabled = true;
        } else {
            coche.style.opacity = '1';
            boton.disabled = false;
        }
    });
}

function filtrarPilotos() {
    const inputFiltrar = document.getElementById('filtrar');

    inputFiltrar.addEventListener("input", function () {
        const filtro = inputFiltrar.value.toLowerCase();
        const elementosPiloto = document.querySelectorAll('#listaDePilotos ul li');
        let encontradaCoincidencia = false;

        elementosPiloto.forEach(piloto => {
            const textoPiloto = piloto.textContent.toLowerCase();

            if (textoPiloto.includes(filtro)) {
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

async function obtenerInfoCoches() {
    let url = 'http://127.0.0.1:8000/api/constructor/info';
    await fetch(url).then(data => data.json()).then(async info => {
        await cargarInfoConstructores(info);
    });
}

function cargarInfoConstructores(info) {
    const listaDeCoches = document.getElementById('listaDeCoches').getElementsByTagName('ul')[0];

    // Convertir el objeto en un array de objetos
    const constructores = Object.values(info);

    constructores.forEach(constructor => {
        const li = document.createElement('li');

        const divNombre = document.createElement('div');
        divNombre.classList.add("nombreCoche");

        const divPuntos = document.createElement('div');
        divPuntos.classList.add("puntosCoche");

        const divValorMercado = document.createElement('div');
        divValorMercado.classList.add("valorCoche");

        const img = document.createElement('img');
        img.src = constructor.coche;
        img.alt = 'coche';

        const nombreCoche = document.createTextNode(constructor.nombre);
        const puntosCoche = document.createTextNode(constructor.puntosRealizados);
        const valorMercadoCoche = document.createTextNode(`${constructor.valorMercado}M$`);

        const boton = document.createElement('button');
        boton.className = 'cocheElegir';
        boton.textContent = '+';

        divNombre.appendChild(nombreCoche);
        divPuntos.appendChild(puntosCoche);
        divValorMercado.appendChild(valorMercadoCoche);

        li.appendChild(img);
        li.appendChild(divNombre);
        li.appendChild(divPuntos);
        li.appendChild(divValorMercado);
        li.appendChild(boton);

        listaDeCoches.appendChild(li);
    });
}


function cargarInfoPilotos(info) {
    const listaPilotos = document.getElementById('listaDePilotos').getElementsByTagName('ul')[0];

    info.forEach(piloto => {
        const li = document.createElement('li');

        const divNombre = document.createElement('div');
        divNombre.classList.add("nombrePiloto");

        const divPuntos = document.createElement('div');
        divPuntos.classList.add("puntosPiloto");

        const divValorMercado = document.createElement('div');
        divValorMercado.classList.add("valorPiloto");

        const img = document.createElement('img');
        img.src = piloto.imgPiloto;
        img.alt = 'piloto';

        const nombrePiloto = document.createTextNode(piloto.nombre);

        const puntosPiloto = document.createTextNode(piloto.puntosRealizados);

        const valorMercadoPiloto = document.createTextNode(`${piloto.valorMercado}M$`);

        const boton = document.createElement('button');
        boton.className = 'pilotoElegir';
        boton.textContent = '+';

        divNombre.appendChild(nombrePiloto);
        divPuntos.appendChild(puntosPiloto);
        divValorMercado.appendChild(valorMercadoPiloto);

        li.appendChild(img);
        li.appendChild(divNombre);
        li.appendChild(divPuntos);
        li.appendChild(divValorMercado);
        li.appendChild(boton);

        listaPilotos.appendChild(li);
    });
}

function addClassActive() {
    const anchors = document.querySelectorAll("#cabecera a");

    anchors.forEach(function (anchor) {
        anchor.addEventListener("click", () => {
            anchor.classList.add("activo");

            anchors.forEach(function (otherAnchor) {
                if (otherAnchor !== anchor) {
                    otherAnchor.classList.remove("activo");
                }
            });
            console.log(anchor.id);
            toggleSections(anchor.id);

        });
    });
}

function toggleSections(selectedSection) {
    const seccionPilotos = document.getElementById('cuerpoDePilotos');
    const seccionConstructores = document.getElementById('cuerpoDeCoches');

    if (selectedSection === 'drivers') {
        seccionPilotos.classList.remove('oculto');
        seccionConstructores.classList.add('oculto');
    } else if (selectedSection === 'constructors') {
        seccionPilotos.classList.add('oculto');
        seccionConstructores.classList.remove('oculto');
    }
}

// Función para filtrar los constructores
function filtrarConstructores() {
    const inputFiltrar = document.getElementById('filtrar');

    inputFiltrar.addEventListener("input", function () {
        const filtro = inputFiltrar.value.toLowerCase();
        const elementosConstructor = document.querySelectorAll('#listaDeCoches ul li');
        let encontradaCoincidencia = false;

        elementosConstructor.forEach(constructor => {
            const textoConstructor = constructor.textContent.toLowerCase();

            if (textoConstructor.includes(filtro)) {
                constructor.style.display = 'block';
                constructor.style = ' display: flex;\n' +
                    '    flex-direction: row;\n' +
                    '    justify-content: space-between; /* Alinea los elementos alrededor del espacio disponible */\n' +
                    '    align-items: center;';
                encontradaCoincidencia = true;
            } else {
                constructor.style.display = 'none';
            }
        });

        const mensajeNoEncontrado = document.getElementById('mensajeNoEncontradoC');
        mensajeNoEncontrado.style.display = encontradaCoincidencia ? 'none' : 'block';
    });
}


// Función para elegir un constructor
function elegirConstructor() {
    const botonesElegir = document.querySelectorAll('.cocheElegir');
    botonesElegir.forEach(boton => {
        boton.addEventListener('click', () => {
            const filaConstructor = boton.closest('li');
            const imgConstructor = filaConstructor.querySelector('img');
            const imgConstructorSrc = imgConstructor.src;
            const valorConstructor = parseFloat(filaConstructor.querySelector('.valorCoche').textContent.replace('M$', ''));

            const huecosConstructor = document.querySelectorAll('.coche .campoCoche img');
            for (let img of huecosConstructor) {
                if (img.src === imgConstructorSrc) {
                    return;
                }
            }

            const nuevoImgConstructor = imgConstructor.cloneNode(true);
            nuevoImgConstructor.classList.add("imgConstructor");
            nuevoImgConstructor.setAttribute('data-valor', valorConstructor);

            const campoHuecosConstructor = document.querySelectorAll('.coche .campoCoche');
            for (let hueco of campoHuecosConstructor) {
                if (!hueco.querySelector('img')) {
                    hueco.innerHTML = '';
                    hueco.appendChild(nuevoImgConstructor);
                    nuevoImgConstructor.addEventListener("dblclick", eliminarConstructor);
                    actualizarCoste(valorConstructor);
                    verificarSeleccionCoches(); // Llama a la función aquí
                    break;
                }
            }
        });
    });
}

function eliminarConstructor() {
    const huecosConstructor = document.querySelectorAll('.coche .campoCoche img');
    for (let img of huecosConstructor) {
        img.addEventListener("dblclick", () => {
            const contenedor = img.closest('.campoCoche');
            const valorConstructor = parseFloat(img.getAttribute('data-valor'));
            img.remove();
            const nuevoCampoCoche = crearCampoConstructor();
            contenedor.innerHTML = '';
            contenedor.appendChild(nuevoCampoCoche);
            actualizarCoste(-valorConstructor);
            verificarSeleccionCoches(); // Llama a la función aquí
        });
    }
}


function crearCampoConstructor() {
    const campoCoche = document.createElement('div');
    campoCoche.classList.add('campoPiloto');

    const mas = document.createElement('p');
    mas.id = 'mas';
    mas.textContent = '+';

    const anyadirCoche = document.createElement('p');
    anyadirCoche.classList.add('anyadirCoche');
    anyadirCoche.textContent = 'Añadir constructor';

    campoCoche.appendChild(mas);
    campoCoche.appendChild(anyadirCoche);

    return campoCoche;
}

// Función para ordenar constructores por puntos y valor de mercado
function ordenarPorPuntosYValorMercadoConstructores() {
    ordenarPorPuntosC.addEventListener('click', () => {
        ordenarPorCoches('puntosRealizados', ordenPuntosAscC);
        ordenPuntosAscC = !ordenPuntosAscC;
    });

    ordenarPorValorC.addEventListener('click', () => {
        ordenarPorCoches('valorMercado', ordenValorAscC);
        ordenValorAscC = !ordenValorAscC;
    });
}

function verificarSeleccionCoches() {
    const huecosConstructor = document.querySelectorAll('.coche .campoCoche img');
    const listaDeCoches = document.getElementById('listaDeCoches').getElementsByTagName('ul')[0];
    let seleccionados = 0;

    huecosConstructor.forEach(img => {
        if (img) {
            seleccionados++;
        }
    });

    if (seleccionados >= 2) {
        listaDeCoches.style.opacity = '0.5';
        const botones = listaDeCoches.querySelectorAll('button.cocheElegir');
        botones.forEach(boton => boton.disabled = true);
    } else {
        listaDeCoches.style.opacity = '1';
        const botones = listaDeCoches.querySelectorAll('button.cocheElegir');
        botones.forEach(boton => boton.disabled = false);
    }
}

/*
let ordenPuntosAsc = true;
let ordenValorAsc = true;
let ordenPuntosAscC = true;
let ordenValorAscC = true;

const ordenarPorPuntos = document.getElementById('ordenarPorPuntos');
const ordenarPorValor = document.getElementById('ordenarPorValor');
const ordenarPorPuntosC = document.getElementById('ordenarPorPuntosC');
const ordenarPorValorC = document.getElementById('ordenarPorValorC');

window.onload = async () => {
    progresoDeCartera();
    addClassActive();
    await obtenerInfo('piloto');
    await obtenerInfo('constructor');
    filtrarElementos('piloto');
    filtrarElementos('constructor');
    ordenarPorEventos();
    elegirElemento('piloto');
    elegirElemento('constructor');
}

function crearCampoElemento(tipo) {
    const campoElemento = document.createElement('div');
    campoElemento.classList.add(`campo${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`);

    const mas = document.createElement('p');
    mas.id = 'mas';
    mas.textContent = '+';

    const anyadirElemento = document.createElement('p');
    anyadirElemento.classList.add(`anyadir${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`);
    anyadirElemento.textContent = `Añadir ${tipo}`;

    campoElemento.appendChild(mas);
    campoElemento.appendChild(anyadirElemento);

    return campoElemento;
}

function eliminarElemento(tipo) {
    const huecosElemento = document.querySelectorAll(`.${tipo} .campo${tipo.charAt(0).toUpperCase() + tipo.slice(1)} img`);
    for (let img of huecosElemento) {
        img.addEventListener("dblclick", () => {
            const contenedor = img.closest(`.campo${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`);
            const valorElemento = parseFloat(img.getAttribute('data-valor'));
            img.remove();
            const nuevoCampoElemento = crearCampoElemento(tipo);
            contenedor.innerHTML = '';
            contenedor.appendChild(nuevoCampoElemento);
            actualizarCoste(-valorElemento);
        });
    }
}

function elegirElemento(tipo) {
    const botonesElegir = document.querySelectorAll(`.${tipo}Elegir`);
    botonesElegir.forEach(boton => {
        boton.addEventListener('click', () => {
            const filaElemento = boton.closest('li');
            const imgElemento = filaElemento.querySelector('img');
            const imgElementoSrc = imgElemento.src;
            const valorElemento = parseFloat(filaElemento.querySelector(`.valor${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`).textContent.replace('M$', ''));

            const huecosElemento = document.querySelectorAll(`.${tipo} .campo${tipo.charAt(0).toUpperCase() + tipo.slice(1)} img`);
            for (let img of huecosElemento) {
                if (img.src === imgElementoSrc) {
                    return;
                }
            }

            const nuevoImgElemento = imgElemento.cloneNode(true);
            nuevoImgElemento.classList.add(`img${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`);
            nuevoImgElemento.setAttribute('data-valor', valorElemento);

            const campoHuecosElemento = document.querySelectorAll(`.${tipo} .campo${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`);
            for (let hueco of campoHuecosElemento) {
                if (!hueco.querySelector('img')) {
                    hueco.innerHTML = '';
                    hueco.appendChild(nuevoImgElemento);
                    nuevoImgElemento.addEventListener("dblclick", () => eliminarElemento(tipo));
                    actualizarCoste(valorElemento);
                    break;
                }
            }
        });
    });
}

function ordenarPorEventos() {
    ordenarPorPuntos.addEventListener('click', () => {
        ordenarPor('piloto', 'puntosRealizados', ordenPuntosAsc);
        ordenPuntosAsc = !ordenPuntosAsc;
    });

    ordenarPorValor.addEventListener('click', () => {
        ordenarPor('piloto', 'valorMercado', ordenValorAsc);
        ordenValorAsc = !ordenValorAsc;
    });

    ordenarPorPuntosC.addEventListener('click', () => {
        ordenarPor('constructor', 'puntosRealizados', ordenPuntosAscC);
        ordenPuntosAscC = !ordenPuntosAscC;
    });

    ordenarPorValorC.addEventListener('click', () => {
        ordenarPor('constructor', 'valorMercado', ordenValorAscC);
        ordenValorAscC = !ordenValorAscC;
    });
}

function ordenarPor(tipo, campo, ascendente) {
    let listaElementos = document.getElementById(`listaDe${tipo.charAt(0).toUpperCase() + tipo.slice(1)}s`).getElementsByTagName('ul')[0];
    let elementos = Array.from(listaElementos.getElementsByTagName('li'));
    elementos.sort((a, b) => {
        let valorA = obtenerValorCampo(a, campo, tipo);
        let valorB = obtenerValorCampo(b, campo, tipo);

        if (ascendente) {
            return valorA - valorB;
        } else {
            return valorB - valorA;
        }
    });

    listaElementos.innerHTML = '';
    elementos.forEach(elemento => listaElementos.appendChild(elemento));
}

function obtenerValorCampo(elemento, campo, tipo) {
    if (campo === 'puntosRealizados') {
        return parseInt(elemento.getElementsByClassName(`puntos${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`)[0].textContent);
    } else if (campo === 'valorMercado') {
        return parseFloat(elemento.getElementsByClassName(`valor${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`)[0].textContent.replace('M$', ''));
    }
}

function progresoDeCartera() {
    let valorLabel = parseFloat(document.querySelector('label[for="cartera"]').textContent);
    let progress = document.getElementById('cartera');
    progress.value = valorLabel;
    progress.max = 100;
}

function actualizarCoste(valor) {
    let valorLabel = parseFloat(document.querySelector('label[for="cartera"]').textContent);
    let nuevoValor = valorLabel - valor;
    document.querySelector('label[for="cartera"]').textContent = `${nuevoValor.toFixed(1)}M$`;

    let progress = document.getElementById('cartera');
    progress.value = nuevoValor;

    let botonContinuar = document.querySelector('button[type="button"]');
    botonContinuar.disabled = nuevoValor < 0;

    actualizarDisponibilidad('piloto', nuevoValor);
    actualizarDisponibilidad('constructor', nuevoValor);
}

function actualizarDisponibilidad(tipo, valorDisponible) {
    const elementos = document.querySelectorAll(`#listaDe${tipo.charAt(0).toUpperCase() + tipo.slice(1)}s ul li`);

    elementos.forEach(elemento => {
        const valorElemento = parseFloat(elemento.querySelector(`.valor${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`).textContent.replace('M$', ''));
        const boton = elemento.querySelector(`.${tipo}Elegir`);

        if (valorElemento > valorDisponible) {
            elemento.style.opacity = '0.5';
            boton.disabled = true;
        } else {
            elemento.style.opacity = '1';
            boton.disabled = false;
        }
    });
}

function filtrarElementos(tipo) {
    const inputFiltrar = document.getElementById('filtrar');

    inputFiltrar.addEventListener("input", function () {
        const filtro = inputFiltrar.value.toLowerCase();
        const elementos = document.querySelectorAll(`#listaDe${tipo.charAt(0).toUpperCase() + tipo.slice(1)}s ul li`);
        let encontradaCoincidencia = false;

        elementos.forEach(elemento => {
            const textoElemento = elemento.textContent.toLowerCase();

            if (textoElemento.includes(filtro)) {
                elemento.style.display = 'block';
                elemento.style = ' display: flex;\n' +
                    '    flex-direction: row;\n' +
                    '    justify-content: space-between; /!* Alinea los elementos alrededor del espacio disponible *!/\n' +
                    '    align-items: center;';
                encontradaCoincidencia = true;
            } else {
                elemento.style.display = 'none';
            }
        });

        const mensajeNoEncontrado = document.getElementById(`mensajeNoEncontrado${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`);
        mensajeNoEncontrado.style.display = encontradaCoincidencia ? 'none' : 'block';
    });
}

async function obtenerInfo(tipo) {
    let url = `http://127.0.0.1:8000/api/${tipo}/info`;
    await fetch(url).then(data => data.json()).then(async info => {
        await cargarInfo(info, tipo);
    });
}

function cargarInfo(info, tipo) {
    const listaElementos = document.getElementById(`listaDe${tipo.charAt(0).toUpperCase() + tipo.slice(1)}s`).getElementsByTagName('ul')[0];
    const elementos = Object.values(info);

    elementos.forEach(elemento => {
        const liElemento = document.createElement('li');
        const imgElemento = document.createElement('img');
        imgElemento.src = elemento.imagen;
        imgElemento.alt = elemento.nombre;

        const nombreElemento = document.createElement('p');
        nombreElemento.textContent = elemento.nombre;

        const puntosElemento = document.createElement('p');
        puntosElemento.classList.add(`puntos${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`);
        puntosElemento.textContent = elemento.puntos;

        const valorElemento = document.createElement('p');
        valorElemento.classList.add(`valor${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`);
        valorElemento.textContent = `${elemento.valor}M$`;

        const botonElegir = document.createElement('button');
        botonElegir.classList.add(`${tipo}Elegir`);
        botonElegir.textContent = 'Elegir';

        liElemento.appendChild(imgElemento);
        liElemento.appendChild(nombreElemento);
        liElemento.appendChild(puntosElemento);
        liElemento.appendChild(valorElemento);
        liElemento.appendChild(botonElegir);

        listaElementos.appendChild(liElemento);
    });

    const mensajeNoEncontrado = document.createElement('p');
    mensajeNoEncontrado.id = `mensajeNoEncontrado${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`;
    mensajeNoEncontrado.textContent = `No se encontraron ${tipo}s.`;
    mensajeNoEncontrado.style.display = 'none';
    listaElementos.parentElement.appendChild(mensajeNoEncontrado);
}

function addClassActive() {
    const botones = document.querySelectorAll('button');
    botones.forEach(boton => {
        boton.addEventListener('click', () => {
            botones.forEach(b => b.classList.remove('active'));
            boton.classList.add('active');
        });
    });
}
*/



