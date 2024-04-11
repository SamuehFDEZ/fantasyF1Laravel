window.onload = () => {
    mostrarContrasenyaLogIn();
    mostrarContrasenyaReg();
}

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
