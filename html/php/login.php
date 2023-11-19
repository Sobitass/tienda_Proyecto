

<?php
// Comprueba si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene los valores enviados del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    $resultado = validarInicioSesion($email, $password);
    // Realiza la validación del inicio de sesión
    if ($row = $resultado->fetch_object()) {
        // Inicio de sesión exitoso, redirige a la página de inicio
        $username = $row->username; // Suponiendo que el nombre del usuario se llama 'nombre'
        $password = $row->password; // Suponiendo que el email del usuario se llama 'email'

        session_start();
         $_SESSION['usuario'] = array(
             'username'=> $username,
             'password' => $password);
        header('Location: index.php');
        exit();
    } else {
        // Credenciales inválidas, muestra un mensaje de error
        $error = 'Credenciales inválidas. Por favor, inténtalo de nuevo.';
    }
}

// Función para validar el inicio de sesión
function validarInicioSesion($username, $password) {
    // Establece la conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "ameizon2");

    // Escapa los valores para evitar inyección de SQL (opcional, pero recomendado)
    $email = mysqli_real_escape_string($conexion, $username);
    $password = mysqli_real_escape_string($conexion, $password);

    // Consulta SQL para verificar las credenciales
    $query = "SELECT * FROM Usuario WHERE username = '$username' AND password = '$password'";

    // Ejecuta la consulta
    $result = mysqli_query($conexion, $query);

    // Verifica si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($result) > 0) {
        // El inicio de sesión es válido
        return $result;
    } else {
        // El inicio de sesión es inválido
        return $result;
    }
}
?>