window.onload = async () => {
    suscribete.addEventListener("click", suscribirse);
    quitarSubs.addEventListener("click", quitarPanel);
    // Update the counter each second
    actualizarContador();
    await datosCircuito();
}

// function to get the info from the API endpoint
async function datosCircuito() {
    let url = `http://127.0.0.1:8000/api/circuitos/${10}`;

    await fetch(url).then(data => data.json()).then(async info => {
        await cargarDatosCircuito(info);
    });

}

// function to get the info of the API and print it in the container of the blade template
function cargarDatosCircuito(info) {
    document.getElementById("datosCircuito").innerHTML = `
        <ul>
            <li>${ronda}<span>${info[0]['ronda']}</span></li>
            <hr>
            <li>${longitud}<span>${info[0]['km']}</span></li>
            <hr>
            <li>${datecirc}<span>${info[0]['fecha']}</span></li>
            <hr>
            <li>${nameCirc}<span>${info[0]['nombre']}</span></li>
            <hr>
            <li>${laps}<span>${info[0]['num_vueltas']}</span></li>
            <hr>
            <li>${turns}<span>${info[0]['num_curvas']}</span></li>
            <hr>
            <li>${scoreCirc}<span>${info[0]['autor_RecordCircuito']}</span></li>
            <hr>
            <li>${scoreTime}<span>${info[0]['tiempo_RecordCircuito']}</span></li>
            <hr>
            <li>${scoreYear}<span>${info[0]['anyo_RecordCircuito']}</span></li>
        </ul>
    `;
}

// Event date
const fechaEvento = new Date('2024-06-22T16:00:00');

//function to update each second the time remaining to the event date
function actualizarContador() {
    const ahora = new Date();
    const diferencia = fechaEvento - ahora;

    const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
    const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));

    const actualizacion = setInterval(actualizarContador, 1000);


    document.getElementById('contador').innerHTML = `
        <ul>
            <li>${dias} <span>${Days}</span></li>
            <li>${horas} <span>${Hours}</span></li>
            <li>${minutos} <span>${Minutes}</span></li>
        </ul>
  `;

    // Detener el contador cuando llegue la fecha del evento
    if (diferencia <= 0) {
        clearInterval(actualizacion);
    }
}

//Two functions for the subscribe modal to appear and desappear
function suscribirse() {
    panel.classList.remove("oculto");
}

function quitarPanel() {
    panel.classList.add("oculto");
}
