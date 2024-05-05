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
}
