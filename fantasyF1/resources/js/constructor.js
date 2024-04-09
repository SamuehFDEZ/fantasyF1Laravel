window.onload = async () => {
    await obtenerConstructores()
}

async function obtenerConstructores() {
    let url = 'http://127.0.0.1:8000/api/constructor';

    await fetch(url, {method: 'POST'}).then(data => data.json()).then(info => {
        console.table(info[0]['nombre']);
        console.table(info[1]['nombre']);
        console.table(info[2]['nombre']);
        console.table(info[3]['nombre']);
        console.table(info[4]['nombre']);
        console.table(info[5]['nombre']);
        console.table(info[6]['nombre']);
        console.table(info[7]['nombre']);
        console.table(info[8]['nombre']);
        console.table(info[9]['nombre']);
    });
}
