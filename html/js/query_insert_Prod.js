$(document).ready(function () {
    $('#FormProducto').submit(function (event) {
        event.preventDefault(); 
        alert("Envío de formulario producto");
        
        var formData = new FormData(this);


        
               

            $.ajax({
                
            data:  formData,
            type: "POST",
            dataType: "json",
            url: "php/registro_Producto.php",
            cache: false,
            contentType: false,
            processData: false
        }).done(function (data) {
            console.log(data);
            if (data.resultado == true) {
                alert("Inserte correctamente: " + data.mensaje);
            } else {
                alert("No se pudo insertar: " + data.mensaje);
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
          //  alert("Entramos aqui error ");
            console.log("La solicitud marcó error " + textStatus);
            console.log("Error: " + errorThrown);
            console.log("Respuesta del servidor: " + jqXHR.responseText);
        });
        


    });
});
