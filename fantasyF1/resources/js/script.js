window.onload = async () => {
    suscribete.addEventListener("click", suscribirse);
    quitarSubs.addEventListener("click", quitarPanel);
    // Actualizar el contador cada segundo
    actualizarContador();
    await datosCircuito();
}

async function datosCircuito() {
    let url = `http://127.0.0.1:8000/api/circuitos/${7}`;

    await fetch(url).then(data => data.json()).then(async info => {
        await cargarDatosCircuito(info);
    });

}

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

// Establecer la fecha del evento
const fechaEvento = new Date('2024-06-05T16:00:00');

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


function suscribirse() {
    panel.classList.remove("oculto");
}

function quitarPanel() {
    panel.classList.add("oculto");
}
