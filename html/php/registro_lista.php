<?php
include_once 'conexion_BD.php';




if (isset($_POST['Nombre_Lista'])) {
    //alert('Entramos a producto.');
   
    //alert('Entramos a categoria.');

    $Nombre_lista = $_POST['Nombre_Lista'];
    $Descripcion_lista = $_POST['Descripcion_Lista'];
    

    $conexion = new db();
    $con = $conexion->connect();

    if ($con) {
        $insert = "INSERT INTO lista (Nombre_Lista, Descripcion_Lista) VALUES (?, ?)";
        $stmt = $con->prepare($insert);

        if ($stmt) {
            $stmt->bind_param("ss", $Nombre_lista, $Descripcion_lista, );

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
//  echo '<script language="javascript">alert("Entramos a producto FIN.");</script>';
      
?>
