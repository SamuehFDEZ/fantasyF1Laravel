window.onload = async () => {
    mostrarContrasenyaLogIn();
    mostrarContrasenyaReg();
    /*  const formEliminarUsuario = document.getElementById("formEliminarUsuario");
      formEliminarUsuario.addEventListener("submit", eliminarUsuario);*/

}

/*async function eliminarUsuario(event) {
    event.preventDefault(); // Evitar que el formulario se envíe automáticamente
    let url = "http://127.0.0.1:8000/api/usuario/1";
    await fetch(url, {method: "DELETE"}).then(data => data.json()).then(info => {

    });

    /!* const response = await fetch(url, {
         method: "DELETE",
         headers: {
             "Content-Type": "application/json",
             "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
         }
     });*!/


}*/

function mostrarContrasenyaLogIn() {
    const ojoLog = document.getElementById("ojoLog");
    const input = document.getElementById("contrasenyaLog");
    if (ojoLog) {
        ojoLog.addEventListener("click", () => {
            if (ojoLog.srcset === "../img/eye.png") {
                ojoLog.srcset = "../img/hidden.png"; // Nueva imagen
                input.type = "text";
            } else {
                ojoLog.srcset = "../img/eye.png"; // Vuelve a la imagen original
                input.type = "password";
            }
        });
    }

}

function mostrarContrasenyaReg() {
    const ojoReg = document.getElementById("ojoReg");
    const input = document.getElementById("contrasenyaReg");
    if (ojoReg) {
        ojoReg.addEventListener("click", () => {
            if (ojoReg.srcset === "../img/eye.png") {
                ojoReg.srcset = "../img/hidden.png"; // Nueva imagen
                input.type = "text";
            } else {
                ojoReg.srcset = "../img/eye.png"; // Vuelve a la imagen original
                input.type = "password";
            }
        });
    }

}
