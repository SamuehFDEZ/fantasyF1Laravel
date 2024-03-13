window.onload = () => {
    mostrarContrasenyaLogIn();
    mostrarContrasenyaReg();

  // Asegurarse de que el formulario de registro permanezca visible después de enviar la solicitud
 

    const sinCuenta = document.getElementById("sinCuenta");
    const botonIniciar = document.getElementById("iniciar");
    const botonRegist = document.getElementById("crear");
    const formLog = document.getElementById("formLog");
    const formReg = document.getElementById("formReg");

    botonIniciar.addEventListener("click", function () {
        formReg.classList.add("oculto");
        formLog.classList.remove("oculto");
    });

    botonRegist.addEventListener("click", function () {
        formLog.classList.add("oculto");
        formReg.classList.remove("oculto");
    });

    sinCuenta.addEventListener("click", function () {
        // Eliminar la clase "active" de todos los botones
        botonIniciar.classList.remove("active");
        // Agregar la clase "active" solo al botón que se hizo clic
        crear.classList.add("active");
        main.classList.add("oculto");
        main2.classList.remove("oculto");
    });
}


function mostrarContrasenyaLogIn() {
    const ojo = document.getElementById("ojo");
    const input = document.getElementById("contrasenya");
    ojo.addEventListener("click", () => {
      if (ojo.srcset === "../img/eye.png") {
        ojo.srcset = "../img/hidden.png"; // Nueva imagen
        input.type = "text";
      } else {
        ojo.srcset = "../img/eye.png"; // Vuelve a la imagen original
        input.type = "password";
      }
    });
}

function mostrarContrasenyaReg() {
    const ojo = document.getElementById("ojoReg");
    const input = document.getElementById("contrasenyaReg");
    ojo.addEventListener("click", () => {
      if (ojo.srcset === "../img/eye.png") {
        ojo.srcset = "../img/hidden.png"; // Nueva imagen
        input.type = "text";
      } else {
        ojo.srcset = "../img/eye.png"; // Vuelve a la imagen original
        input.type = "password";
      }
    });
}
