window.onload = ()=>{
    botonUser.addEventListener("click", ()=>{
        location.href = "/login.blade.php";
    });

    suscribete.addEventListener("click", suscribirse);
    quitarSubs.addEventListener("click", quitarPanel);
}



function suscribirse() {
    panel.classList.remove("oculto");
}

function quitarPanel() {
    panel.classList.add("oculto");
}
