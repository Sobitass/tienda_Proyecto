// Asigna las funciones a los botones después de cargar el DOM
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("btn-registro").addEventListener('click', validarRegistro);
    document.getElementById("btn-regresar").addEventListener('click', regresar);
});

function validarRegistro() {
    // Obtiene referencias a los elementos del formulario por sus IDs
    const Nombre_Categoria = document.getElementById("Nombre_Categoria");
    const Descripcion_Categoria = document.getElementById("Descripcion_Categoria");


   // console.log(Nombre_Categoria, Descripcion_Categoria);

    let errorMessage = "";

    // Verifica si los campos requeridos están vacíos y agrega mensajes de error correspondientes
    if (Nombre_Categoria.value === "") {
        errorMessage += "Nombre de la categoria es obligatorio.\n";
    }
    if (Descripcion_Categoria.value === "") {
        errorMessage += "El producto debe contar con detalles.\n";
    }
    
   
   
    // Si hay errores, muestra un mensaje de alerta con los errores
    if (errorMessage !== "") {
        alert("Por favor, complete los siguientes campos:\n" + errorMessage);
    } else {
        // Si no hay errores, muestra un mensaje de éxito y redirige a la página correspondiente
        
        
          alert("Campos correctos");
        //   window.location = "index_Vendedor.php";
    
    
    
    }
}

// Función para el botón "Regresar" (sin condiciones)
function regresar() {
    // Puedes poner aquí cualquier lógica que desees para el botón "Regresar"
    // Por ejemplo, redirigir al usuario a otra página
    window.location = "categoria.php";
}
