<?php



?>



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
            <h1 class="title">Registrarse</h1>

            <form action="" id = "FormEdit" name="FormEdit"  method="post">

                <label for="">Nombre(s)</label>
                <input type="text" name="name" id="name" vali="nom">
               
                <label for="">Apellidos</label>
                <input type="text" name="apellido" id="apellido" vali="apes">

                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" required>
                    <option value="hom">Hombre</option>
                    <option value="muj">Mujer</option>
                    <option value="ot">Otros</option>

                </select>
                <br>

                <label for="rol">Tipo de Cuenta</label>
                <select name="rol" id="rol" required>
                    <option value="vend">Vendedor</option>
                    <option value="comp">Comprador</option>
                </select>
                <br>

                <label for="">Fecha de Nacimiento</label>
                <input type="date" name="birth" id="birth" min='1900-01-01' max = '2023-12-01' value='2001-01-01' vali="Fnac">
                <label for="">Email</label>
                <input type="email" name="mail" id="mail" vali="email">

                <label for="">Nombre de Usuario</label>
                <input type="text" name="username" id="username" vali="usu">

                <label for="">Contraseña</label>
                <input type="password" name="password" id="password" vali="contra">
                <label for="">Confirmar contraseña</label>
                <input type="password" name="password2" id="password2" vali="contraConfi">

               

                <input type="submit" class="btn-registro" value="Editar informacion">

            </form>

            <span class="text-footer">¿No vas a editar datos?
                <a href="index.php">Regresar</a>
            </span>
        </div>

        <div class="ctn-text2">
    <div class="capa"></div>
    <label for="profile-image" class="title-description">
        <img id="profile-image-preview" src="ruta_por_defecto_imagen" alt="Perfil">
        <br>
        <br>
        Selecciona una imagen de perfil
        <br>
        <br>
    
        <input type="file" id="profile-image" name="profileImage" accept="image/*" onchange="previewProfileImage(event)">
        <br>
    </label>
    <br>
    <form onsubmit="return validateForm()">
        <button type="submit" class="text-description">Guardar</button>
    </form>
</div>

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
    

    </div>
    <script src="js/Validar_Edit_User_Campos.js"></script>
    <script src="js/Validar_Edit_Datos.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/query_edit_usu.js"></script>
</body>
</html>