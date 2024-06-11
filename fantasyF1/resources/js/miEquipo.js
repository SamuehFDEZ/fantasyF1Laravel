//variables to specific functions
let ordenPuntosAsc = true;
let ordenValorAsc = true;
let ordenPuntosAscC = true;
let ordenValorAscC = true;
const ordenarPorPuntos = document.getElementById('ordenarPorPuntos');
const ordenarPorValor = document.getElementById('ordenarPorValor');
const ordenarPorPuntosC = document.getElementById('ordenarPorPuntosC');
const ordenarPorValorC = document.getElementById('ordenarPorValorC');

window.onload = async () => {
    // all functions to be executed
    suscribete.addEventListener("click", suscribirse);
    quitarSubs.addEventListener("click", quitarPanel);
    const botonGuardar = document.getElementById('guardarEquipo');
    botonGuardar.disabled = true;
    progresoDeCartera();
    addClassActive();
    await obtenerInfoPilotos(); // call to API endpoint
    await obtenerInfoCoches();// call to API endpoint
    filtrarPilotos();
    ordenarPorPuntosyValorMercado();
    elegirPiloto();
    filtrarConstructores();
    ordenarPorPuntosYValorMercadoConstructores();
    elegirConstructor();
    botonGuardar.addEventListener("click", guardarEquipo);
}

// Asynchronous function to save the user's team
async function guardarEquipo() {
    // Gets the token to prevent csrf attack
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // ID of the user in the blade template
    const sesionDeUsuario = document.querySelector('meta[name="user-id"]').getAttribute('content');

    // Gets the drivers selected by the user with the function
    const pilotos = getSelectedPilots();

    // Gets the teams selected by the user with the function
    const constructores = getSelectedConstructors();

    // Creates an object with data that contains the drivers and teams selected
    const data = {
        // Maps the drivers selected to include only the necessary fields
        pilotos: pilotos.map(piloto => ({
            nombre_piloto: piloto.nombre_piloto,  // Driver name
            puntosRealizados: piloto.puntosRealizados  // Driver points
        })),
        // Same for teams
        constructores: constructores.map(constructor => ({
            nombre_constructor: constructor.nombre_constructor,  // Team name
            puntosRealizados: constructor.puntosRealizados  // Team points
        }))
    };

    try {
        // URL of the API with the userID as the parameter
        const url = `http://127.0.0.1:8000/api/actualiza/${sesionDeUsuario}`;

        // fetching url
        await fetch(url, {
            'method': "POST",  // method use
            'headers': {
                'Content-Type': 'application/json',  // type of content of the request
                'X-CSRF-TOKEN': csrfToken  // Token CSRF for security
            },
            'body': JSON.stringify(data)  // request body as JSON
        }).then(data => data.json())  // Response as JSON
            .then(info => {
                console.log(info);  // Prints the information of the API
                let par = document.createElement("p");
                par.classList.add("text-success");
                par.textContent = "Equipo Guardado";
                document.querySelector("#costesYContinuar > section").appendChild(par);
            });
    } catch (error) {
        // logs the errors
        console.error('Error:', error);
    }
}

// function that stores in an array the selected drivers
function getSelectedPilots() {
    const selectedPilots = []; // creates empty array
    const pilotos = document.querySelectorAll('.piloto .campoPiloto img'); // gets the drivers
    pilotos.forEach(piloto => {
        // in a loop, saves in the array the name and points that stores the image with the custom attributes from the driver
        selectedPilots.push({
            nombre_piloto: piloto.getAttribute('data-nombre-piloto'),
            puntosRealizados: parseInt(piloto.getAttribute('data-puntos-piloto')),

        });
    });
    console.log(selectedPilots)
    return selectedPilots; // returns the drivers
}

// function that stores in an array the selected constructors
function getSelectedConstructors() {
    // same logic as the drivers but for the constructors
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
/*COMMENCE OF  DRIVERS FUNCTIONS*/

/*---------------------------------------------------------------------------------------------------------------------*/

// Asynchronous function to obtain the drivers data
async function obtenerInfoPilotos() {
    // gets the drivers data with the API endpoint
    let url = 'http://127.0.0.1:8000/api/piloto/info';
    await fetch(url).then(data => data.json()).then(async info => {
        await cargarInfoPilotos(info);
    });
}

// function to create the divs that store the drivers imgs
function crearCampoPiloto() {
    // creates a div and add a class
    const campoPiloto = document.createElement('div');
    campoPiloto.classList.add('campoPiloto');
    // creates a paragraph to store the + sign
    const mas = document.createElement('p');
    mas.id = 'mas';
    mas.textContent = '+';
    // Another paragraph to store the word
    const anyadirPiloto = document.createElement('p');
    anyadirPiloto.classList.add('anyadirPiloto');
    anyadirPiloto.textContent = 'Añadir piloto';
    // appends the divs to the "campoPiloto" father div
    campoPiloto.appendChild(mas);
    campoPiloto.appendChild(anyadirPiloto);

    return campoPiloto; // returns the divs
}

// function to delete the driver img from the div
function eliminarPiloto() {
    // selects the imgs
    const huecosPiloto = document.querySelectorAll('.piloto .campoPiloto img');
    for (let img of huecosPiloto) {
        // for each image adds a click listener
        img.addEventListener("click", () => {
            // in a variable we store the img closest to the div
            const contenedor = img.closest('.campoPiloto');
            // gets the points of the driver
            const valorPiloto = parseFloat(img.getAttribute('data-valor'));
            // removes the img
            img.remove();
            // creates the driver field without the img again
            const nuevoCampoPiloto = crearCampoPiloto();
            // cleans the container html if there's any problem
            contenedor.innerHTML = '';
            // appends the new div to the div father
            contenedor.appendChild(nuevoCampoPiloto);
            // functions to verify if the driver can or cannot be selected
            verificarSeleccionPilotos();
            verificarHuecosLlenos();
            // function to substract the value of the progress bar
            actualizarCoste(-valorPiloto);

        });
    }
}

// function to choose a driver
function elegirPiloto() {
    // gets all the buttons from the list
    const botonesElegir = document.querySelectorAll('.pilotoElegir');
    botonesElegir.forEach(boton => {
        // for each button we create and eventListener
        boton.addEventListener('click', () => {
            // gets the closest list to the button (the list as the button is inside)
            const filaPiloto = boton.closest('li');
            // gets the driver img
            const imgPiloto = filaPiloto.querySelector('img');
            // gets the driver img src
            const imgPilotoSrc = imgPiloto.src;
            // gets the driver value from the list without the text, only the number
            const valorPiloto = parseFloat(filaPiloto.querySelector('.valorPiloto').textContent.replace('M$', ''));
            // gets the divs that will store the drivers imgs
            const huecosPiloto = document.querySelectorAll('.piloto .campoPiloto img');
            for (let img of huecosPiloto) {
                if (img.src === imgPilotoSrc) {
                    return;
                }
            }
            // gets a copy of the img from the drivers list
            const nuevoImgPiloto = imgPiloto.cloneNode(true);
            // adds the class
            nuevoImgPiloto.classList.add("imgPiloto");
            // sets a custom attribute with the driver value
            nuevoImgPiloto.setAttribute('data-valor', valorPiloto);
            // gets the divs that stores the drivers img
            const campoHuecosPiloto = document.querySelectorAll('.piloto .campoPiloto');
            for (let hueco of campoHuecosPiloto) {
                // if there's no img
                if (!hueco.querySelector('img')) {
                    // cleans the div
                    hueco.innerHTML = '';
                    // appends the img
                    hueco.appendChild(nuevoImgPiloto);
                    // adds an event to the img
                    nuevoImgPiloto.addEventListener("click", eliminarPiloto);
                    // findsout the drivers selected and the divs without img that still remaining
                    verificarSeleccionPilotos();
                    verificarHuecosLlenos();
                    //updates the progress bar
                    actualizarCoste(valorPiloto);
                    break;
                }
            }
        });
    });
}


// function to sort the drivers on the list
function ordenarPor(campo, ascendente) {
    // gets the entire list of the drivers
    let listaPilotos = document.getElementById('listaDePilotos').getElementsByTagName('ul')[0];
    //gets all the information from the li element (what contains)
    let pilotos = Array.from(listaPilotos.getElementsByTagName('li'));
    // sorts the array of drivers
    pilotos.sort((a, b) => {
        // Retrieves the value of the specified field for each driver
        let valorA = obtenerValorCampo(a, campo);
        let valorB = obtenerValorCampo(b, campo);
        // Sorts in ascending or descending order based on the 'ascendente' parameter
        if (ascendente) {
            // If ascending, subtracts the values to determine the order
            return valorA - valorB;
        } else {
            // If descending, subtracts the values in reverse order to determine the order
            return valorB - valorA;
        }
    });
    // Clears the existing list and appends the sorted drivers
    listaPilotos.innerHTML = '';
    pilotos.forEach(piloto => listaPilotos.appendChild(piloto));
}

// Function to get the value of the specified field from a driver element
function obtenerValorCampo(elemento, campo) {
    if (campo === 'puntosRealizados') {
        // If the field is 'puntosRealizados', returns the integer value of the pilot's points
        return parseInt(elemento.getElementsByClassName('puntosPiloto')[0].textContent);
    } else if (campo === 'valorMercado') {
        // If the field is 'valorMercado', returns the float value of the pilot's market value, removing the 'M$' suffix
        return parseFloat(elemento.getElementsByClassName('valorPiloto')[0].textContent.replace('M$', ''));
    }
}

// function to find out if driver can be selected or not
function actualizarDisponibilidadPilotos(valorDisponible) {
    // gets the drivers
    const pilotos = document.querySelectorAll('#listaDePilotos ul li');

    pilotos.forEach(piloto => {
        //gets the value
        const valorPiloto = parseFloat(piloto.querySelector('.valorPiloto').textContent.replace('M$', ''));
        //gets the buttons
        const boton = piloto.querySelector('.pilotoElegir');

        if (valorPiloto > valorDisponible) {
            // if the value of the driver is above of the available (from the progress bar) you cant select it
            piloto.style.opacity = '0.5';
            boton.disabled = true;
        } else {
            // else you can choose the driver
            piloto.style.opacity = '1';
            boton.disabled = false;
        }
    });
}

// function to filter the drivers on the list
function filtrarPilotos() {
    // gets the input type search
    const inputFiltrar = document.getElementById('filtrar');
    // adds listener
    inputFiltrar.addEventListener("input", function () {
        // puts the value of the input to lower case
        const filtro = inputFiltrar.value.toLowerCase();
        // gets the drivers
        const elementosPiloto = document.querySelectorAll('#listaDePilotos ul li');
        // boolean in false cause there's nothing to find at the moment
        let encontradaCoincidencia = false;

        elementosPiloto.forEach(piloto => {
            // itereates the drivers and puts on lower case the drivers names
            const textoPiloto = piloto.textContent.toLowerCase();

            if (textoPiloto.includes(filtro)) {
                // if the text equals to what the user puts in the input
                // shows only the driver
                piloto.style.display = 'block';
                piloto.style = ' display: flex;\n' +
                    '    flex-direction: row;\n' +
                    '    justify-content: space-between; \n' +
                    '    align-items: center;';
                encontradaCoincidencia = true;
            } else {
                // else, shows nothing
                piloto.style.display = 'none';
            }
        });
        // if the code does not go into the if, puts a message of not found
        const mensajeNoEncontrado = document.getElementById('mensajeNoEncontrado');
        mensajeNoEncontrado.style.display = encontradaCoincidencia ? 'none' : 'block';
    });
}

// function to load all data from the drivers in the list
function cargarInfoPilotos(info) {
    // gets the <ul> element
    const listaPilotos = document.getElementById('listaDePilotos').getElementsByTagName('ul')[0];

    info.forEach(piloto => {
        //creates a <li>
        const li = document.createElement('li');

        // creates a <div> adding the respective class and the name of the driver with a
        // custom attribute
        const divNombre = document.createElement('div');
        divNombre.classList.add("nombrePiloto");
        divNombre.setAttribute('data-nombre-piloto', piloto.nombre);

        // same for the points
        const divPuntos = document.createElement('div');
        divPuntos.classList.add("puntosPiloto");
        divPuntos.setAttribute('data-puntos-piloto', piloto.puntosRealizados);

        //same for the value
        const divValorMercado = document.createElement('div');
        divValorMercado.classList.add("valorPiloto");
        divValorMercado.setAttribute('data-valor', piloto.valorMercado);

        // same for the img, in this case it creates the two attributes that we will need later
        const img = document.createElement('img');
        img.src = piloto.imgPiloto;
        img.alt = 'piloto';
        img.setAttribute('data-nombre-piloto', piloto.nombre);
        img.setAttribute('data-puntos-piloto', piloto.puntosRealizados);

        // texts in the list with the driver information
        const nombrePiloto = document.createTextNode(piloto.nombre);

        const puntosPiloto = document.createTextNode(piloto.puntosRealizados);

        const valorMercadoPiloto = document.createTextNode(`${piloto.valorMercado}M$`);

        // creates the button to select the drivers
        const boton = document.createElement('button');
        boton.className = 'pilotoElegir';
        boton.textContent = '+';
        // appends all divs to their respective father divs
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

// function to verify if the driver is selected
function verificarSeleccionPilotos() {
    // gets the imgs of the drivers
    const huecosPilotos = document.querySelectorAll('.piloto .campoPiloto img');
    // gets the first element of the driver's list (the img of the driver)
    const listaDePilotos = document.getElementById('listaDePilotos').getElementsByTagName('ul')[0];
    // inits the variable to 0
    let seleccionados = 0;
    // if there is an image we increment the variable
    huecosPilotos.forEach(img => {
        if (img) {
            seleccionados++;
        }
    });
    // if the variable is greater or equals than 5 (number of drivers)
    if (seleccionados >= 5) {
        // we disable the buttons to choose the driver, and we add opacity to the list obtained via API endpoint
        listaDePilotos.style.opacity = '0.5';
        const botones = listaDePilotos.querySelectorAll('button.pilotoElegir');
        botones.forEach(boton => boton.disabled = true);
    } else {
        // else we keep the buttons not disabled
        listaDePilotos.style.opacity = '1';
        const botones = listaDePilotos.querySelectorAll('button.pilotoElegir');
        botones.forEach(boton => boton.disabled = false);
    }
}

// Function to sort by points or market value
function ordenarPorPuntosyValorMercado() {
    // Event listener for the button to sort by points
    ordenarPorPuntos.addEventListener('click', () => {
        // Sorts the list by 'puntosRealizados' in the current order (ascending or descending)
        ordenarPor('puntosRealizados', ordenPuntosAsc);
        // Toggles the sort order for the next click
        ordenPuntosAsc = !ordenPuntosAsc;
    });

    // Event listener for the button to sort by market value
    ordenarPorValor.addEventListener('click', () => {
        // Sorts the list by 'valorMercado' in the current order (ascending or descending)
        ordenarPor('valorMercado', ordenValorAsc);
        // Toggles the sort order for the next click
        // if its sroted in ascendant, it returns back to descendent
        ordenValorAsc = !ordenValorAsc;
    });
}


/*---------------------------------------------------------------------------------------------------------------------*/
/*END OF DRIVER FUNCTIONS*/
/*---------------------------------------------------------------------------------------------------------------------*/


/*---------------------------------------------------------------------------------------------------------------------*/
/*COMMENCE OF TEAMS FUNCTIONS, SAME AS THE DRIVERS BUT WITH THE TEAMS*/

/*---------------------------------------------------------------------------------------------------------------------*/

//Asynchronous function to obtain the teams data
async function obtenerInfoCoches() {
    let url = 'http://127.0.0.1:8000/api/constructor/info';
    // gets the drivers data with the API endpoint
    await fetch(url).then(data => data.json()).then(async info => {
        await cargarInfoConstructores(info);
    });
}

// function to create the divs that store the teams imgs
function crearCampoConstructor() {
    // creates a div and add a class
    const campoCoche = document.createElement('div');
    campoCoche.classList.add('campoPiloto');
    // creates a paragraph to store the + sign
    const mas = document.createElement('p');
    mas.id = 'mas';
    mas.textContent = '+';
    // Another paragraph to store the word
    const anyadirCoche = document.createElement('p');
    anyadirCoche.classList.add('anyadirCoche');
    anyadirCoche.textContent = 'Añadir constructor';
    // appends the divs to the "campoCoche" father div
    campoCoche.appendChild(mas);
    campoCoche.appendChild(anyadirCoche);
    // returns the divs
    return campoCoche;
}

// function to delete the driver img from the div
function eliminarConstructor() {
    // selects the imgs
    const huecosConstructor = document.querySelectorAll('.coche .campoCoche img');
    // for each image adds a click listener
    for (let img of huecosConstructor) {
        img.addEventListener("click", () => {
            // in a variable we store the img closest to the div
            const contenedor = img.closest('.campoCoche');
            // gets the points of the driver
            const valorConstructor = parseFloat(img.getAttribute('data-valor'));
            // removes the img
            img.remove();
            // creates the driver field without the img again
            const nuevoCampoCoche = crearCampoConstructor();
            // cleans the container html if there's any problem
            contenedor.innerHTML = '';
            // appends the new div to the div father
            contenedor.appendChild(nuevoCampoCoche);
            // functions to verify if the driver can or cannot be selected
            // needs to be done like this because if not, it doesn't work
            //first find out, then update
            verificarSeleccionCoches();
            verificarHuecosLlenos();
            // function to substract the value of the progress bar
            actualizarCoste(-valorConstructor);
        });
    }
}

// function to choose team
function elegirConstructor() {
    // gets all the buttons from the list
    const botonesElegir = document.querySelectorAll('.cocheElegir');
    botonesElegir.forEach(boton => {
        // for each button we create and eventListener

        boton.addEventListener('click', () => {
            // gets the closest list to the button (the list as the button is inside)
            const filaConstructor = boton.closest('li');
            // gets the team img
            const imgConstructor = filaConstructor.querySelector('img');
            // gets the team img src
            const imgConstructorSrc = imgConstructor.src;
            // gets the team value from the list without the text, only the number
            const valorConstructor = parseFloat(filaConstructor.querySelector('.valorCoche').textContent.replace('M$', ''));
            // gets the divs that will store the teams imgs
            const huecosConstructor = document.querySelectorAll('.coche .campoCoche img');
            for (let img of huecosConstructor) {
                if (img.src === imgConstructorSrc) {
                    return;
                }
            }
            // gets a copy of the img from the teams list
            const nuevoImgConstructor = imgConstructor.cloneNode(true);
            // adds the class
            nuevoImgConstructor.classList.add("imgConstructor");
            // sets a custom attribute with the driver value
            nuevoImgConstructor.setAttribute('data-valor', valorConstructor);
            // gets the divs that stores the drivers img
            const campoHuecosConstructor = document.querySelectorAll('.coche .campoCoche');
            for (let hueco of campoHuecosConstructor) {
                // if there's no img
                if (!hueco.querySelector('img')) {
                    // cleans the div
                    hueco.innerHTML = '';
                    // appends the img
                    hueco.appendChild(nuevoImgConstructor);
                    // adds an event to the img
                    nuevoImgConstructor.addEventListener("click", eliminarConstructor);
                    // findsout the teams selected and the divs without img that still remaining
                    verificarSeleccionCoches();
                    verificarHuecosLlenos();
                    actualizarCoste(valorConstructor);
                    break;
                }
            }
        });
    });
}

// function to sort the teams depending on the value and points made
function ordenarPorCoches(campo, ascendente) {
    // gets the entire list of the teams
    let listaCoches = document.getElementById('listaDeCoches').getElementsByTagName('ul')[0];
    //gets all the information from the li element (what contains)
    let coches = Array.from(listaCoches.getElementsByTagName('li'));
    // sorts the array of teams
    coches.sort((a, b) => {
        // Retrieves the value of the specified field for each team
        let valorA = obtenerValorCampoCoche(a, campo);
        let valorB = obtenerValorCampoCoche(b, campo);
        // Sorts in ascending or descending order based on the 'ascendente' parameter
        if (ascendente) {
            // If ascending, subtracts the values to determine the order
            return valorA - valorB;
        } else {
            // If descending, subtracts the values in reverse order to determine the order
            return valorB - valorA;
        }
    });
    // Clears the existing list and appends the sorted teams
    listaCoches.innerHTML = '';
    coches.forEach(coche => listaCoches.appendChild(coche));
}

// Function to get the value of the specified field from a driver element
function obtenerValorCampoCoche(elemento, campo) {
    if (campo === 'puntosRealizados') {
        // If the field is 'puntosRealizados', returns the integer value of the teams points
        return parseInt(elemento.getElementsByClassName('puntosCoche')[0].textContent);
    } else if (campo === 'valorMercado') {
        // If the field is 'valorMercado', returns the float value of the teams market value, removing the 'M$' suffix
        return parseFloat(elemento.getElementsByClassName('valorCoche')[0].textContent.replace('M$', ''));
    }
}

// function to find out if driver can be selected or not
function actualizarDisponibilidadCoches(valorDisponible) {
    // gets the teams
    const coches = document.querySelectorAll('#listaDeCoches ul li');

    coches.forEach(coche => {
        //gets the value
        const valorCoche = parseFloat(coche.querySelector('.valorCoche').textContent.replace('M$', ''));
        //gets the buttons
        const boton = coche.querySelector('.cocheElegir');

        if (valorCoche > valorDisponible) {
            // if the value of the driver is above of the available (from the progress bar) you cant select it
            coche.style.opacity = '0.5';
            boton.disabled = true;
        } else {
            // else you can choose the driver
            coche.style.opacity = '1';
            boton.disabled = false;
        }
    });
}

// function to load all data from the teams in the list
function cargarInfoConstructores(info) {
    // gets the <ul> element
    const listaDeCoches = document.getElementById('listaDeCoches').getElementsByTagName('ul')[0];

    const constructores = Object.values(info);

    constructores.forEach(constructor => {
        //creates a <li>
        const li = document.createElement('li');
        // creates a <div> adding the respective class and the name of the team with a
        // custom attribute
        const divNombre = document.createElement('div');
        divNombre.classList.add("nombreCoche");
        divNombre.setAttribute('data-nombre-constructor', constructor.nombre);
        // same for the points
        const divPuntos = document.createElement('div');
        divPuntos.classList.add("puntosCoche");
        divPuntos.setAttribute('data-puntos-constructor', constructor.puntosRealizados);
        //same for the value
        const divValorMercado = document.createElement('div');
        divValorMercado.classList.add("valorCoche");
        divValorMercado.setAttribute('data-valor', constructor.valorMercado);
        // same for the img, in this case it creates the two attributes that we will need later
        const img = document.createElement('img');
        img.src = constructor.coche;
        img.alt = 'coche';
        img.setAttribute('data-nombre-constructor', constructor.nombre);
        img.setAttribute('data-puntos-constructor', constructor.puntosRealizados);
        // texts in the list with the team information
        const nombreCoche = document.createTextNode(constructor.nombre);

        const puntosCoche = document.createTextNode(constructor.puntosRealizados);

        const valorMercadoCoche = document.createTextNode(`${constructor.valorMercado}M$`);
        // creates the button to select the teams

        const boton = document.createElement('button');
        boton.className = 'cocheElegir';
        boton.textContent = '+';
        // appends all divs to their respective father divs
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

// function to filter the teams on the list
function filtrarConstructores() {
    // gets the input type search
    const inputFiltrar = document.getElementById('filtrar');
    // adds listener

    inputFiltrar.addEventListener("input", function () {
        // puts the value of the input to lower case
        const filtro = inputFiltrar.value.toLowerCase();
        // gets the teams
        const elementosConstructor = document.querySelectorAll('#listaDeCoches ul li');
        // boolean in false cause there's nothing to find at the moment
        let encontradaCoincidencia = false;

        elementosConstructor.forEach(constructor => {
            // itereates the teams and puts on lower case the teams names
            const textoConstructor = constructor.textContent.toLowerCase();

            if (textoConstructor.includes(filtro)) {
                // if the text equals to what the user puts in the input
                // shows only the team
                constructor.style.display = 'block';
                constructor.style = ' display: flex;\n' +
                    '    flex-direction: row;\n' +
                    '    justify-content: space-between; /!* Alinea los elementos alrededor del espacio disponible *!/\n' +
                    '    align-items: center;';
                encontradaCoincidencia = true;
            } else {
                // else, shows nothing
                constructor.style.display = 'none';
            }
        });
        // if the code does not go into the if, puts a message of not found
        const mensajeNoEncontrado = document.getElementById('mensajeNoEncontradoC');
        mensajeNoEncontrado.style.display = encontradaCoincidencia ? 'none' : 'block';
    });
}

// Function to sort by points or market value of the teams list
function ordenarPorPuntosYValorMercadoConstructores() {
    // Event listener for the button to sort by points
    ordenarPorPuntosC.addEventListener('click', () => {
        // Sorts the list by 'puntosRealizados' in the current order (ascending or descending)
        ordenarPorCoches('puntosRealizados', ordenPuntosAscC);
        // Toggles the sort order for the next click
        ordenPuntosAscC = !ordenPuntosAscC;
    });
    // Event listener for the button to sort by market value
    ordenarPorValorC.addEventListener('click', () => {
        // Sorts the list by 'valorMercado' in the current order (ascending or descending)
        ordenarPorCoches('valorMercado', ordenValorAscC);
        // Toggles the sort order for the next click
        // if its sroted in ascendant, it returns back to descenden
        ordenValorAscC = !ordenValorAscC;
    });
}

// function to verify if the team is selected
function verificarSeleccionCoches() {
    // gets the imgs of the teams
    const huecosConstructor = document.querySelectorAll('.coche .campoCoche img');
    // gets the first element of the team's list (the img of the driver)
    const listaDeCoches = document.getElementById('listaDeCoches').getElementsByTagName('ul')[0];
    // inits the variable to 0
    let seleccionados = 0;
    // if there is an image we increment the variable
    huecosConstructor.forEach(img => {
        if (img) {
            seleccionados++;
        }
    });
    // if the variable is greater or equals than 2 (number of teams)
    if (seleccionados >= 2) {
        // we disable the buttons to choose the team, and we add opacity to the list obtained via API endpoint
        listaDeCoches.style.opacity = '0.5';
        const botones = listaDeCoches.querySelectorAll('button.cocheElegir');
        botones.forEach(boton => boton.disabled = true);
    } else {
        // else we keep the buttons not disabled
        listaDeCoches.style.opacity = '1';
        const botones = listaDeCoches.querySelectorAll('button.cocheElegir');
        botones.forEach(boton => boton.disabled = false);
    }
}

/*---------------------------------------------------------------------------------------------------------------------*/
/*END OF TEAMS FUNCTIONS*/
/*---------------------------------------------------------------------------------------------------------------------*/

/*---------------------------------------------------------------------------------------------------------------------*/
/*COMMENCE OF GENERAL FUNCTIONS*/

/*---------------------------------------------------------------------------------------------------------------------*/

// function to verify the disabled of the button save team
function verificarHuecosLlenos() {
    // we get all the divs, drivers + teams
    const huecosPilotos = document.querySelectorAll('.piloto .campoPiloto img');
    const huecosConstructores = document.querySelectorAll('.coche .campoCoche img');
    // we save the length of the divs, always going to be 7
    const totalSeleccionados = huecosPilotos.length + huecosConstructores.length;
    // gets the button
    const botonGuardar = document.getElementById('guardarEquipo');
    // button disabled until there are 5 drivers and 2 teams
    botonGuardar.disabled = totalSeleccionados < 7;
}

// function that displays the list of the teams or the drivers
function toggleSections(selectedSection) {
    //gets the drivers section
    const seccionPilotos = document.getElementById('cuerpoDePilotos');
    //gets the teams section
    const seccionConstructores = document.getElementById('cuerpoDeCoches');

    // if section selected is drivers display none for teams section
    if (selectedSection === 'drivers') {
        seccionPilotos.classList.remove('oculto');
        seccionConstructores.classList.add('oculto');
    } else if (selectedSection === 'constructors') {
        // the opposite
        seccionPilotos.classList.add('oculto');
        seccionConstructores.classList.remove('oculto');
    }
}

// function to reduce the value of the progress bar
function progresoDeCartera() {
    // gets in float the value of the label
    let valorLabel = parseFloat(document.querySelector('label[for="cartera"]').textContent);
    // gets the progress bar
    let progress = document.getElementById('cartera');
    // links the label value with the progress bar value
    progress.value = valorLabel;
    // max value allowed is 100
    progress.max = 100;
}

// function to update the value in both cases, progress bar (wallet) and label
function actualizarCoste(valor) {
    // gets the label
    let valorLabel = parseFloat(document.querySelector('label[for="cartera"]').textContent);
    // label - the value of the driver/team
    let nuevoValor = valorLabel - valor;

    // verify if the new value is finite
    if (isFinite(nuevoValor)) {
        // new value assigned to the label
        document.querySelector('label[for="cartera"]').textContent = `${nuevoValor.toFixed(1)}M$`;
        // gets the wallet
        let progress = document.getElementById('cartera');
        // associates the wallet value to the new one
        progress.value = nuevoValor;
        // gets the buttom
        let botonContinuar = document.querySelector('button[type="button"]');
        // disabled if new value is less than 0
        botonContinuar.disabled = nuevoValor < 0;
        // calls functions with new value
        actualizarDisponibilidadPilotos(nuevoValor);
        actualizarDisponibilidadCoches(nuevoValor);
    } else {
        console.error('El nuevo valor no es un número finito:', nuevoValor);
    }
}

// Function to add 'active' class to anchors of the drivers and teams lists
function addClassActive() {
    // Get all the anchor elements within the header
    const anchors = document.querySelectorAll("#cabecera a");

    // Iterate over each anchor
    anchors.forEach(function (anchor) {
        // Add event listener for 'click' event
        anchor.addEventListener("click", () => {
            // Add 'activo' class to the clicked anchor
            anchor.classList.add("activo");

            // Remove 'activo' class from all other anchors
            anchors.forEach(function (otherAnchor) {
                if (otherAnchor !== anchor) {
                    otherAnchor.classList.remove("activo");
                }
            });

            // Call toggleSections function with the clicked anchor's ID
            toggleSections(anchor.id);
        });
    });
}

// function to display subscribe modal
function suscribirse() {
    panel.classList.remove("oculto");
}

// function to remove subscribe modal
function quitarPanel() {
    panel.classList.add("oculto");
}


/*---------------------------------------------------------------------------------------------------------------------*/
/*FIN FUNCIONES GENERALES*/
/*---------------------------------------------------------------------------------------------------------------------*/
