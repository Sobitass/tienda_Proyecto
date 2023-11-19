<?php
/*
include('conexion_BD.php');
//include_once 'conexion_BD.php';

if (isset($_POST['userLogin'] && $_POST['passwordLogin']  )) {

    $username = $_POST['userLogin'];
    $password = ($_POST['passwordLogin']);

    $conexion = new db();
    $con = $conexion->connect();

        if ($con) {
            $select = "SELECT * FROM Usuario WHERE Username = ? AND Password = ?";
            $stmt = $con->prepare($select);
        
            if ($stmt) {
                $stmt->bind_param("ss",  $username,$password);
        
                if ($stmt->execute()) {
                    $result = $stmt->get_result();
    
                    if ($result->num_rows > 0) {
                        // Usuario autenticado correctamente
                       // $response = array('resultado' => true, 'mensaje' => 'Usuario autenticado correctamente');
                       echo "usuario logeado con exito";
                    } else {
                        // Usuario no encontrado o credenciales incorrectas
                        $response = array('resultado' => false, 'mensaje' => 'Usuario no encontrado o credenciales incorrectas');
                    }
            } else {
                $response = array('resultado' => false, 'mensaje' => 'Error al preparar la consulta: ' . $con->error);
            }
        } else {
            $response = array('resultado' => false, 'mensaje' => 'Error de conexión a la base de datos');
    }

    

    

}

echo json_encode($response);

}
*/





include('conexion_BD.php');  // Incluye el archivo de conexión



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['usernameLogin'];
    $password1 = $_POST['passwordLogin'];

    $conexion = new db();
    $conn = $conexion->connect();

    $select = "SELECT * FROM Usuario WHERE Username = '$username' AND Contrasenia_Usuario = '$password1'";
    $result = $conn->query($select);

    if ($result->num_rows > 0) { 

        $row = $result->fetch_assoc();
    echo "Usuario loggeado awebi";    
    header("Location: ../index.php?usuario=$username");
    } else {
        $mensaje = "Nombre de usuario o contraseña incorrectos.";
        header("Location: ../login.php?mensaje=$mensaje&usuario=$username");
        
    }

}
    

?>