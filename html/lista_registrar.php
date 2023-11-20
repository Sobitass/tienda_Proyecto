


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate v3</title>
    <link rel="stylesheet"  href="css/estilos.css">
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js//jquery-3.6.0.min.js"></script>
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>


</head>
<body>
    <div class="container-all">

        <div class="ctn-form">
            <img src="assets/img/logo2.png" alt="" id="Foto "class="logo">
            <h1 class="title">Registrar nuevo wishlist</h1>

            <form action="" id = "FormWishlist" name="FormWishlist"  method="post" onsubmit="">
                
                <label for="">Nombre del producto</label>
                <input type="text" name="Nombre_Lista" id="Nombre_Lista" vali="Nombre_Lista">
               
                <label for="">Detalle del producto</label>
                <input type="text" name="Descripcion_Lista" id="Descripcion_Lista" vali="Descripcion_Lista">

                </select>
                <br>

                <form onsubmit="return validateForm()">
                <input type="submit" class="btn-registro" id="btn-registro" value="Registrar Lista">
                </form>
                      <!-- Cambia el tipo de botón a "button" y agrega un id -->
                <!--   <button type="button" class="text-description" id="btn-registro">Guardar</button>   -->

            </form>

            <span class="text-footer">¿No vas a registrar una lista?
                <a id = "btn-regresar" href="wishlist.php">Regresar</a>
            </span>
        </div>

        <div class="ctn-text2">
    <div class="capa"></div>
    <label for="producto-image" class="title-description">
        <img id="producto-image-preview" src="ruta_por_defecto_imagen" alt="Perfil">
        <br>
        <br>
        <h1>Selecciona una imagen</h1>
        <h1>del producto</h1>
        <br>
        <br>
    
        <input type="file" id="producto-image" name="producto" accept="image/*" onchange="previewproductoImage(event)">
        <br>
    </label>
    <br>
    <form onsubmit="return validateForm()">
   <!-- Cambia el tipo de botón a "button" y agrega un id -->
    <button type="submit" class="text-description" id="btn-registro">Guardar</button>

    </form>
</div>
<!--
<script>
    function previewProfileImage(event) {
        const input = event.target;
        const preview = document.getElementById('profile-image-preview');
        const file = input.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    }

    function validateForm() {
        const profileImageInput = document.getElementById('profile-image');
        const file = profileImageInput.files[0];

        if (!file) {
            alert('Por favor, selecciona una imagen de perfil.');
            return false;
        }

        // Aquí puedes agregar más validaciones según tus necesidades

        // Si todas las validaciones son exitosas, puedes enviar el formulario
        alert('Imagen cargada y formulario enviado correctamente.');
        return true;
    }


</script>


-->

    </div>
    <script src="js/validar_lista_campos.js"></script>
    <script src="js/validar_lista_registro.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/query_insert_lista.js"></script>
</body>
</html>