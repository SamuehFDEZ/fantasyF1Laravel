let ordenPuntosAsc = true;
let ordenValorAsc = true;
let ordenPuntosAscC = true;
let ordenValorAscC = true;
const ordenarPorPuntos = document.getElementById('ordenarPorPuntos');
const ordenarPorValor = document.getElementById('ordenarPorValor');
const ordenarPorPuntosC = document.getElementById('ordenarPorPuntosC');
const ordenarPorValorC = document.getElementById('ordenarPorValorC');

window.onload = async () => {
    const botonGuardar = document.getElementById('guardarEquipo');
    botonGuardar.disabled = true;
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
    botonGuardar.addEventListener('click', guardarEquipo);
}

// async function guardarEquipo() {
//     const url = 'http://127.0.0.1:8000/api/actualiza-equipo';
//     const pilotos = getSelectedPilots();
//     const constructores = getSelectedConstructors();
//
//     const payload = {
//         pilotos: pilotos,
//         constructores: constructores
//     };
//
//     await fetch(url).then(data => data.json()).then(info => {
//         console.log(info);
//     });
// }
/*const constructores = [
    {"nombre_constructor": "Alpine", "puntosRealizados": 1},
    {"nombre_constructor": "Aston Martin", "puntosRealizados": 42}
];

const pilotos = [
    {"nombre_piloto": "Alex Albon", "puntosRealizados": 0},
    {"nombre_piloto": "Logan Sargeant", "puntosRealizados": 0},
    {"nombre_piloto": "Valteri Bottas", "puntosRealizados": 0},
    {"nombre_piloto": "Zhou Guanyu", "puntosRealizados": 0},
    {"nombre_piloto": "Esteban Ocon", "puntosRealizados": 1}
];*/

async function guardarEquipo(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del formulario

    const url = 'http://127.0.0.1:8000/api/actualiza-equipo';
    const pilotos = [
        {"nombre_piloto": "Alex Albon", "puntosRealizados": 0},
        {"nombre_piloto": "Logan Sargeant", "puntosRealizados": 0},
        {"nombre_piloto": "Valteri Bottas", "puntosRealizados": 0},
        {"nombre_piloto": "Zhou Guanyu", "puntosRealizados": 0},
        {"nombre_piloto": "Esteban Ocon", "puntosRealizados": 1}
    ];
    const constructores = [
        {"nombre_constructor": "Alpine", "puntosRealizados": 1},
        {"nombre_constructor": "Aston Martin", "puntosRealizados": 42}
    ];

    const payload = {
        pilotos: pilotos,
        constructores: constructores
    };

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(payload)
        });

        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }

        const data = await response.json();
        console.log('Success:', data);
    } catch (error) {
        console.error('Error:', error);
    }
}


/*async function guardarEquipo(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del formulario

    const url = 'http://127.0.0.1:8000/api/actualiza-equipo';
    const pilotos = [
        {"nombre_piloto": "Alex Albon", "puntosRealizados": 0},
        {"nombre_piloto": "Logan Sargeant", "puntosRealizados": 0},
        {"nombre_piloto": "Valteri Bottas", "puntosRealizados": 0},
        {"nombre_piloto": "Zhou Guanyu", "puntosRealizados": 0},
        {"nombre_piloto": "Esteban Ocon", "puntosRealizados": 1}
    ];
    const constructores = [
        {"nombre_constructor": "Alpine", "puntosRealizados": 1},
        {"nombre_constructor": "Aston Martin", "puntosRealizados": 42}
    ];

    const payload = {
        pilotos: pilotos,
        constructores: constructores
    };

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(payload)
        });

        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }

        const data = await response.json();
        console.log('Success:', data);
    } catch (error) {
        console.error('Error:', error);
    }
}*/


function getSelectedPilots() {
    const selectedPilots = [];
    const pilotos = document.querySelectorAll('.piloto .campoPiloto img');
    pilotos.forEach(piloto => {
        selectedPilots.push({
            nombre_piloto: piloto.getAttribute('data-nombre-piloto'),
            puntosRealizados: parseInt(piloto.getAttribute('data-puntos-piloto')),

        });
    });
    console.log(selectedPilots)
    return selectedPilots;
}

function getSelectedConstructors() {
    const selectedConstructors = [];
    const constructores = document.querySelectorAll('.coche .campoCoche img');
    constructores.forEach(constructor => {
        selectedConstructors.push({
            nombre_constructor: constructor.getAttribute('data-nombre-constructor'),
            puntosRealizados: parseInt(constructor.getAttribute('data-puntos-constructor')),
        });
    });
    console.log(selectedConstructors)
    return selectedConstructors;
}


/*---------------------------------------------------------------------------------------------------------------------*/
/*INICIO FUNCIONES DE LOS PILOTOS*/

/*---------------------------------------------------------------------------------------------------------------------*/

async function obtenerInfoPilotos() {
    let url = 'http://127.0.0.1:8000/api/piloto/info';
    await fetch(url).then(data => data.json()).then(async info => {
        await cargarInfoPilotos(info);
    });
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
            verificarSeleccionPilotos();
            verificarHuecosLlenos();
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
            //nuevoImgPiloto.setAttribute('data-valor', valorPiloto);

            const campoHuecosPiloto = document.querySelectorAll('.piloto .campoPiloto');
            for (let hueco of campoHuecosPiloto) {
                if (!hueco.querySelector('img')) {
                    hueco.innerHTML = '';
                    hueco.appendChild(nuevoImgPiloto);
                    nuevoImgPiloto.addEventListener("dblclick", eliminarPiloto);
                    verificarSeleccionPilotos();
                    verificarHuecosLlenos();
                    actualizarCoste(valorPiloto);
                    // Llama a la función aquí
                    break;
                }
            }
        });
    });
}


// ORDENAR LOS PILOTOS
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

// VALOR DE LOS PILOTOS
function obtenerValorCampo(elemento, campo) {
    if (campo === 'puntosRealizados') {
        return parseInt(elemento.getElementsByClassName('puntosPiloto')[0].textContent);
    } else if (campo === 'valorMercado') {
        return parseFloat(elemento.getElementsByClassName('valorPiloto')[0].textContent.replace('M$', ''));
    }
}

function actualizarDisponibilidadPilotos(valorDisponible) {
    const pilotos = document.querySelectorAll('#listaDePilotos ul li');

    pilotos.forEach(piloto => {
        const valorPiloto = parseFloat(piloto.querySelector('.valorPiloto').textContent.replace('M$', ''));
        const boton = piloto.querySelector('.pilotoElegir');

        if (valorPiloto > valorDisponible) {
            piloto.style.opacity = '0.5';
            boton.disabled = true; // Asegúrate de que el botón esté deshabilitado
        } else {
            piloto.style.opacity = '1';
            boton.disabled = false; // Asegúrate de que el botón esté habilitado
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
                    '    justify-content: space-between; /!* Alinea los elementos alrededor del espacio disponible *!/\n' +
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

function cargarInfoPilotos(info) {
    const listaPilotos = document.getElementById('listaDePilotos').getElementsByTagName('ul')[0];

    info.forEach(piloto => {
        const li = document.createElement('li');

        const divNombre = document.createElement('div');
        divNombre.classList.add("nombrePiloto");
        divNombre.setAttribute('data-nombre-piloto', piloto.nombre); // Añadir atributo

        const divPuntos = document.createElement('div');
        divPuntos.classList.add("puntosPiloto");
        divPuntos.setAttribute('data-puntos-piloto', piloto.puntosRealizados); // Añadir atributo

        const divValorMercado = document.createElement('div');
        divValorMercado.classList.add("valorPiloto");
        divValorMercado.setAttribute('data-valor', piloto.valorMercado); // Añadir atributo

        const img = document.createElement('img');
        img.src = piloto.imgPiloto;
        img.alt = 'piloto';
        img.setAttribute('data-nombre-piloto', piloto.nombre); // Añadir atributo
        img.setAttribute('data-puntos-piloto', piloto.puntosRealizados); // Añadir atributo

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


function verificarSeleccionPilotos() {
    const huecosPilotos = document.querySelectorAll('.piloto .campoPiloto img');
    const listaDePilotos = document.getElementById('listaDePilotos').getElementsByTagName('ul')[0];
    let seleccionados = 0;

    huecosPilotos.forEach(img => {
        if (img) {
            seleccionados++;
        }
    });

    if (seleccionados >= 5) {
        listaDePilotos.style.opacity = '0.5';
        const botones = listaDePilotos.querySelectorAll('button.pilotoElegir');
        botones.forEach(boton => boton.disabled = true);
    } else {
        listaDePilotos.style.opacity = '1';
        const botones = listaDePilotos.querySelectorAll('button.pilotoElegir');
        botones.forEach(boton => boton.disabled = false);
    }
}

/*---------------------------------------------------------------------------------------------------------------------*/
/*FIN FUNCIONES DE LOS PILOTOS*/
/*---------------------------------------------------------------------------------------------------------------------*/


/*---------------------------------------------------------------------------------------------------------------------*/
/*INICIO FUNCIONES DE LOS CONSTRUCTORES*/

/*---------------------------------------------------------------------------------------------------------------------*/

async function obtenerInfoCoches() {
    let url = 'http://127.0.0.1:8000/api/constructor/info';
    await fetch(url).then(data => data.json()).then(async info => {
        await cargarInfoConstructores(info);
    });
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

function obtenerValorCampoCoche(elemento, campo) {
    if (campo === 'puntosRealizados') {
        return parseInt(elemento.getElementsByClassName('puntosCoche')[0].textContent);
    } else if (campo === 'valorMercado') {
        return parseFloat(elemento.getElementsByClassName('valorCoche')[0].textContent.replace('M$', ''));
    }
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

/*function cargarInfoConstructores(info) {
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
        nombreCoche.setAttribute('data-nombre-constructor');

        const puntosCoche = document.createTextNode(constructor.puntosRealizados);
        puntosCoche.setAttribute('data-puntos-constructor');

        const valorMercadoCoche = document.createTextNode(`${constructor.valorMercado}M$`);
        valorMercadoCoche.setAttribute('data-valor-constructor');


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
}*/

function cargarInfoConstructores(info) {
    const listaDeCoches = document.getElementById('listaDeCoches').getElementsByTagName('ul')[0];

    const constructores = Object.values(info);

    constructores.forEach(constructor => {
        const li = document.createElement('li');

        const divNombre = document.createElement('div');
        divNombre.classList.add("nombreCoche");
        divNombre.setAttribute('data-nombre-constructor', constructor.nombre); // Añadir atributo

        const divPuntos = document.createElement('div');
        divPuntos.classList.add("puntosCoche");
        divPuntos.setAttribute('data-puntos-constructor', constructor.puntosRealizados); // Añadir atributo

        const divValorMercado = document.createElement('div');
        divValorMercado.classList.add("valorCoche");
        divValorMercado.setAttribute('data-valor', constructor.valorMercado); // Añadir atributo

        const img = document.createElement('img');
        img.src = constructor.coche;
        img.alt = 'coche';
        img.setAttribute('data-nombre-constructor', constructor.nombre); // Añadir atributo
        img.setAttribute('data-puntos-constructor', constructor.puntosRealizados); // Añadir atributo

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
                    '    justify-content: space-between; /!* Alinea los elementos alrededor del espacio disponible *!/\n' +
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
            //nuevoImgConstructor.setAttribute('data-valor', valorConstructor);

            const campoHuecosConstructor = document.querySelectorAll('.coche .campoCoche');
            for (let hueco of campoHuecosConstructor) {
                if (!hueco.querySelector('img')) {
                    hueco.innerHTML = '';
                    hueco.appendChild(nuevoImgConstructor);
                    nuevoImgConstructor.addEventListener("dblclick", eliminarConstructor);
                    verificarSeleccionCoches(); // Llama a la función aquí
                    verificarHuecosLlenos(); // Llama a la función aquí
                    actualizarCoste(valorConstructor);


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
            // si no es en este orden no se hace correctamente
            //primero comprobar luego actualizar
            verificarSeleccionCoches(); // Llama a la función aquí
            verificarHuecosLlenos(); // Llama a la función aquí
            actualizarCoste(-valorConstructor);


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

/*---------------------------------------------------------------------------------------------------------------------*/
/*FIN FUNCIONES DE LOS CONSTRUCTORES*/
/*---------------------------------------------------------------------------------------------------------------------*/

/*---------------------------------------------------------------------------------------------------------------------*/
/*INICIO FUNCIONES GENERALES*/
/*---------------------------------------------------------------------------------------------------------------------*/

// Función para verificar si todos los huecos están llenos y actualizar el estado del botón de guardar equipo
/*function verificarHuecosLlenos() {
    const huecosPilotos = document.querySelectorAll('.piloto .campoPiloto img');
    const huecosConstructores = document.querySelectorAll('.coche .campoCoche img');

    let pilotosLlenos = false;
    let constructoresLlenos = false;

    huecosPilotos.forEach(img => {
        //if simplificado
        pilotosLlenos = img;
    });

    huecosConstructores.forEach(img => {
        //if simplificado
        constructoresLlenos = img;
    });


    const botonGuardar = document.getElementById('guardarEquipo');
    botonGuardar.disabled = !(pilotosLlenos && constructoresLlenos);
}*/

function verificarHuecosLlenos() {
    const huecosPilotos = document.querySelectorAll('.piloto .campoPiloto img');
    const huecosConstructores = document.querySelectorAll('.coche .campoCoche img');

    const totalSeleccionados = huecosPilotos.length + huecosConstructores.length;

    const botonGuardar = document.getElementById('guardarEquipo');
    botonGuardar.disabled = totalSeleccionados < 7;
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

/*---------------------------------------------------------------------------------------------------------------------*/
/*FIN FUNCIONES GENERALES*/
/*---------------------------------------------------------------------------------------------------------------------*/
