<?php
include_once 'conexion_BD.php';




if (isset($_POST['nombre_Prod'])) {
    //alert('Entramos a producto.');
   

    $nombreProd = $_POST['nombre_Prod'];
    $DetalleProd = $_POST['detalleProducto'];
    $Categoria = $_POST['categoria'];
    $Cotizable = $_POST['cotizable'];
    $PrecioProd = $_POST['Precio'];

    $conexion = new db();
    $con = $conexion->connect();

    if ($con) {
        $insert = "INSERT INTO Producto (Nombre_Producto, Descripcion_Producto, Categoria_Producto, Cotizable, Precio_Producto ) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($insert);

        if ($stmt) {
            $stmt->bind_param("sssss", $nombreProd, $DetalleProd, $Categoria, $Cotizable, $PrecioProd);

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
