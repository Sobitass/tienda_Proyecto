

<?php


include_once 'conexion_BD.php';

if (isset($_POST['categoria'])) {
    //echo json_encode(array('mensaje' => ' DVKL 

    alert('Entramos a categoria.');
    $Nombre_Categoria = $_POST['Nombre_Categoria'];
    $Detalle_Categoria = $_POST['Descripcion_Categoria'];
    
    echo("Quesesto Registro_Categoria")
    
    $conexion = new db();
    $con = $conexion->connect();
    
if ($con) {
    $insert = "INSERT INTO Categoria (Nombre_Categoria, Descripcion_Categoria) VALUES (?,?)";
    $stmt = $con->prepare($insert);
 
    if ($stmt) {
        $stmt->bind_param("ss", $Nombre_Categoria, $Detalle_Categoria);

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