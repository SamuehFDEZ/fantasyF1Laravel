window.onload = () => {
    // Obtener el valor del label y convertirlo a número
    let valorLabel = parseFloat(document.querySelector('label[for="cartera"]').textContent);

    // Obtener el elemento progress
    let progress = document.getElementById('cartera');

    // Ajustar el valor del progress según el valor del label
    progress.value = valorLabel; // Puedes ajustar esta lógica según tus necesidades

    // Por ejemplo, puedes aumentar o disminuir el valor del progress en una cantidad fija
    // progress.value += 10; // Aumenta en 10
    // progress.value -= 10; // Disminuye en 10
    addClassActive();
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
