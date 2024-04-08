window.onload = () => {

    suscribete.addEventListener("click", suscribirse);
    quitarSubs.addEventListener("click", quitarPanel);
}

// Establecer la fecha del evento
const fechaEvento = new Date('2024-04-20T05:00:00');

function actualizarContador() {
    const ahora = new Date();
    const diferencia = fechaEvento - ahora;

    const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
    const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));

    document.getElementById('contador').innerHTML = `
        <ul>
            <li>${dias} <span>Días</span></li>
            <li>${horas} <span>Horas</span></li>
            <li>${minutos} <span>Minutos</span></li>
        </ul>
  `;

    // Detener el contador cuando llegue la fecha del evento
    if (diferencia <= 0) {
        clearInterval(actualizacion);
    }
}

// Actualizar el contador cada segundo
actualizarContador();
const actualizacion = setInterval(actualizarContador, 1000);


function suscribirse() {
    panel.classList.remove("oculto");
}

function quitarPanel() {
    panel.classList.add("oculto");
}
