window.onload = () => {
    suscribete.addEventListener("click", suscribirse);
    quitarSubs.addEventListener("click", quitarPanel);
    // Actualizar el contador cada segundo

}

function suscribirse() {
    panel.classList.remove("oculto");
}

function quitarPanel() {
    panel.classList.add("oculto");
}
