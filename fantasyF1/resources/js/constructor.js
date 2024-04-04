window.onload = () => {
    obtenerConstructores()
}

function obtenerConstructores() {
    let url = 'http://127.0.0.1:8000/api/constructor';

    fetch(url).then(data => data.json()).then(info => {
        console.log(info);
    });
}
