
<?php
if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];
    echo "<script>alert('$mensaje');</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login v3</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js//jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container-all">

        <div class="ctn-form">
            <img src="images/logo.png" alt="" class="logo">
            <h1 class="title">Iniciar Sesión</h1>

            <form action="php/login2.php" id="inicio" method="post">

                <label for="">Usuario</label>
                <input type="text" name="usernameLogin" id="usernameLogin">
                <label for="">Contraseña</label>
                <input type="password" name="passwordLogin" id="passwordLogin">
                <button type="submit">Iniciar</button>
            </form>

            <span class="text-footer">¿Aún no te has registrado?
                <a href="register.php">Regístrate</a>
            </span>
        </div>

        <div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description">Lorem ipsum dolor sit amet.</h1>
            <p class="text-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat natus dolore ea dicta molestias totam iusto perspiciatis iste obcaecati quod dolor, eaque qui asperiores? Molestias ad nemo placeat est quidem?</p>
        </div>

    </div>

  <!--  <script src="js/query_login.js"></script> -->

</body>
</html>
