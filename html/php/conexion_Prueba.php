<?php
// Incluye el archivo de conexión
include 'conexion_BD.php';

// Verifica si la conexión se ha establecido
if ($conexion) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
}
?>