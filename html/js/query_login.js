$(document).ready(function () {
    $('#inicio').submit(function (event) {
        event.preventDefault(); 
        alert("Envío de formulario awebo");
        
        var formData = new FormData(this);
        $.ajax({
            data:  formData,
            type: "POST",
            dataType: "json",
            url: "php/login2.php",
            cache: false,
            contentType: false,
            processData: false
        }).done(function (data) {
            console.log(data);
            if (data.resultado == true) {
                alert("Usuario encontrado!: " + data.mensaje);
        // Redirecciona a la página especificada
            window.location.href = "index.php";

            } else {
                alert("No se encontró: " + data.mensaje);
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.log("La solicitud marcó error " + textStatus);
            console.log("Error: " + errorThrown);
            console.log("Respuesta del servidor: " + jqXHR.responseText);
        });
        
    });
});
