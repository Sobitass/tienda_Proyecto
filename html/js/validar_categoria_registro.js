function validarRegistro() {
    const CategoriaNombreInput = document.getElementById("Nombre_Categoria");
    const CategoriaDescripcionInput = document.getElementById("Detalle_Categoria");
    alert("Aqui entra");

    let errorMessage = "";

    // Verifica si los campos requeridos están vacíos y agrega mensajes de error correspondientes
    if (CategoriaNombreInput.value === "") {
        errorMessage += "Nombre de categoria es obligatorio.\n";
    }
    if (CategoriaDescripcionInput.value === "") {
        errorMessage += "Dar detalles es obligatorio.\n";
    } 
    else {
        // Validar el username y la contraseña aquí si es necesario
        alert("¡Registro exitoso!")
        window.location="gallery_Vendedor.php";
    }

   
}

// Función para el botón "Regresar" (sin condiciones)
function regresar() {
    // Puedes poner aquí cualquier lógica que desees para el botón "Regresar"
    // Por ejemplo, redirigir al usuario a otra página
    window.location = "categoria.php";
}

// Asigna las funciones a los botones
document.getElementById("btn-registro").addEventListener('click', validarRegistro);

document.getElementById("btn-regresar").addEventListener('click', regresar);
