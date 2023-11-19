// Asigna las funciones a los botones después de cargar el DOM
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("btn-registro").addEventListener('click', validarRegistro);
    document.getElementById("btn-regresar").addEventListener('click', regresar);
});

function validarRegistro() {
    // Obtiene referencias a los elementos del formulario por sus IDs
    const nombre_Prod = document.getElementById("name_Prod");
    const detalleProducto = document.getElementById("detalle_Prod");
    const Precio = document.getElementById("precio_Prod");

    console.log(nombre_Prod, detalleProducto);

    let errorMessage = "";

    // Verifica si los campos requeridos están vacíos y agrega mensajes de error correspondientes
    if (nombre_Prod.value === "") {
        errorMessage += "Nombre del producto es obligatorio.\n";
    }
    if (detalleProducto.value === "") {
        errorMessage += "El producto debe contar con detalles.\n";
    }
    if (detalleProducto.value === "") {
        errorMessage += "El producto debe contar con precio.\n";
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
    window.location = "index_Vendedor.php";
}
