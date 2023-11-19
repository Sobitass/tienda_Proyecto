// Función para validar el botón "Registrarse e ir al Login"


function validarRegistro() {
    const usernameInput = document.getElementById("username");
    const NombreInput = document.getElementById("nombre_User");
    const ApellidosInput = document.getElementById("Apellido_User");
    const EmailInput = document.getElementById("email");
    const RolInput = document.getElementById("Rol");
    const SexoInput = document.getElementById("Sexo");
    const PasswordInput = document.getElementById("password");

    let errorMessage = "";

    // Verifica si los campos requeridos están vacíos y agrega mensajes de error correspondientes
    if (usernameInput.value === "") {
        errorMessage += "Username es obligatorio.\n";
    }
    if (NombreInput.value === "") {
        errorMessage += "Nombre(s) es obligatorio.\n";
    }
    if (ApellidosInput.value === "") {
        errorMessage += "Apellido es obligatorio.\n";
    }
    if (EmailInput.value === "") {
        errorMessage += "Correo electrónico es obligatorio.\n";
    }
    if (PasswordInput.value === "") {
        errorMessage += "Contraseña es obligatoria.\n";
    } else{
        if (
            !/[A-Z]/.test(PasswordInput.value) ||  // al menos una mayúscula
            (PasswordInput.value.match(/\d/g) || []).length < 2 ||  // al menos dos números
            !/[!@#$%^&*]/.test(PasswordInput.value) ||  // al menos un símbolo
            PasswordInput.value.length < 10  // al menos 10 caracteres
        ) {
            errorMessage += "La contraseña no cumple con los requisitos mínimos:\n";
            if (!/[A-Z]/.test(PasswordInput.value)) {
                errorMessage += "- Al menos una mayúscula.\n";
            }
            if ((PasswordInput.value.match(/\d/g) || []).length < 2) {
                errorMessage += "- Al menos dos números.\n";
            }
            if (!/[!@#$%^&*]/.test(PasswordInput.value)) {
                errorMessage += "- Al menos un símbolo.\n";
            }
            if (PasswordInput.value.length < 10) {
                errorMessage += "- Al menos 10 caracteres.\n";
            }
        }
    }


    if (RolInput.value === "") {
        errorMessage += "Rol es obligatorio.\n";
    }
    if (SexoInput.value === "") {
        errorMessage += "Género es obligatorio.\n";
    }

    // Si hay errores, muestra un mensaje de alerta con los errores
    if (errorMessage !== "") {
        alert("Por favor, complete los siguientes campos:\n" + errorMessage);
    } else {
        // Validar el username y la contraseña aquí si es necesario
        alert("¡Registro exitoso!")
        window.location="../HTML/index.html";
    }
}

// Función para el botón "Regresar" (sin condiciones)
function regresar() {
    // Puedes poner aquí cualquier lógica que desees para el botón "Regresar"
    // Por ejemplo, redirigir al usuario a otra página
    window.location = "../HTML/index.html";
}

// Asigna las funciones a los botones
document.getElementById("btn-registro").addEventListener('click', validarRegistro);

document.getElementById("btn-regresar").addEventListener('click', regresar);
