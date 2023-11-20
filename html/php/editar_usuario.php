<?php
include_once 'conexion_BD.php';
$sql = "SELECT * FROM usuario WHERE _idusuario = ";


if (isset($_POST['username'])) {
    $nombre = $_POST['name'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $rol = $_POST['rol'];
    $nacimiento = $_POST['birth'];
    $email = $_POST['mail'];
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $password2 = ($_POST['password2']);

    $conexion = new db();
    $con = $conexion->connect();

    if ($con) {
        // Llama al procedimiento almacenado SP_EditUsuario
        $stmt = $con->prepare("CALL SP_EditUsuario(?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("ssssssss", $nombre, $apellido, $sexo, $rol, $nacimiento, $password, $email, $username);

            if ($stmt->execute()) {
                $response = array('resultado' => true, 'mensaje' => 'Datos actualizados correctamente');
            } else {
                $response = array('resultado' => false, 'mensaje' => 'No se pudo actualizar: ' . $stmt->error);
            }
        } else {
            $response = array('resultado' => false, 'mensaje' => 'Error al preparar la consulta: ' . $con->error);
        }
    } else {
        $response = array('resultado' => false, 'mensaje' => 'Error de conexión a la base de datos');
    }

    echo json_encode($response);
}
?>
