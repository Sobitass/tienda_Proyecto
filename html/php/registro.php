
<?php
/*
  include 'php/conexion_BD.php';

    if(isset($_POST['NombreUsuario'])){
     $nombre = $_POST['NombreUsuario'];
     $apellido = $_POST['ApellidosUsuario'];
     $sexo = $_POST['Sexo'];
     $rol = $_POST['rol'];
     $nacimiento = $_POST['FechaNacimiento'];
     $username = $_POST['username'];
     $password = ($_POST['password']);
     $password2 = ($_POST['password2']);
    
     $insert = "INSERT INTO Usuario (Nombre, Apellido_Paterno_Usuario, Genero, Rol_User, Fecha_Nacimiento, Password) VALUES ('$nombre', '$apellido', '$sexo', '$rol', '$nacimiento', '$password')";
    
    
    
     $stmt = $this->connect()->prepare($insert);
     $stmt->bind_param("ssssss", $nombre, $apellido, $sexo, $rol, $nacimiento, $password);

     if ($stmt->execute()) {
     


//if ($this->connect()->query($insert)) { // Reemplaza esto con tu lógica real
    if ($stmt->execute()) {
        $response = array('resultado' => true, 'mensaje' => 'Inserte correctamente');
    } else {
        $response = array('resultado' => false, 'mensaje' => 'No se pudo insertar');
    }
    
    header('Content-Type: application/json');
     
    $response = array('resultado' => true, 'mensaje' => 'Inserte correctamente');
    echo json_encode($response);
    

   
    //return json_encode($response);
/*

    if(mysqli_affected_rows($conexion) > 0){
        header('Location: ..Index.php');
        exit;
    } else {
        $error[] = 'Error al registrar el usuario';
    }
    
   

    
    ;
    
 


    $select = "SELECT * FROM Usuario WHERE username = '$username'";

    $result = mysqli_query($conexion, $select);

    if(mysqli_num_rows($result) > 0){
        //$error[] = 'El usuario ya existe';
    } else {
        if($password != $password2){
            $error[] = 'La contraseña no coincide';
        } else {
           
        }
    }
    
    
    }

}
*/






include_once 'conexion_BD.php';

if (isset($_POST['username'])) {
    //echo json_encode(array('mensaje' => ' DVKL 
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
    $insert = "INSERT INTO Usuario (Nombre_Usuario, Apellido_Paterno_Usuario, Genero, Rol_User, Fecha_Nacimiento, Contrasenia_Usuario, Correo_Usuario, Username ) VALUES (?,?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($insert);

    if ($stmt) {
        $stmt->bind_param("ssssssss", $nombre, $apellido, $sexo, $rol, $nacimiento, $password, $email, $username);

        if ($stmt->execute()) {
            $response = array('resultado' => true, 'mensaje' => 'Inserte correctamente');
        } else {
            $response = array('resultado' => false, 'mensaje' => 'No se pudo insertar: ' . $stmt->error);
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