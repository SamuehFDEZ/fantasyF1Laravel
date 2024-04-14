window.onload = async () => {
    await obtenerConstructores()
}

async function obtenerConstructores() {
    let url = 'http://127.0.0.1:8000/api/constructor';

    await fetch(url).then(data => data.json()).then(async info => {
        await nombresConstructores(info);
    });

    async function nombresConstructores(info) {
        const nombres = document.querySelectorAll('.nombre');
        nombres[0].innerText = info[6]['nombre']
        nombres[1].innerText = info[2]['nombre']
        nombres[2].innerText = info[4]['nombre']
        nombres[3].innerText = info[5]['nombre']
        nombres[4].innerText = info[1]['nombre']
        nombres[5].innerText = info[8]['nombre']
        nombres[6].innerText = info[3]['nombre']
        nombres[7].innerText = info[9]['nombre']
        nombres[8].innerText = info[7]['nombre']
        nombres[9].innerText = info[0]['nombre']
    }
}
