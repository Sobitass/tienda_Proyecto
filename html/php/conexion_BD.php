<?php

    class db {
        static public function connect() {
            $host = "127.0.0.1";
            $db = "ameizon2";
            $user = "root";
            $pass = "";
            
            set_exception_handler(function ($exception) {
                $response = array('resultado' => false, 'mensaje' => 'Error al conectarse a la base de datos: ' . $exception->getMessage());
                header('Content-Type: application/json');
                echo json_encode($response);
                exit;
            });

            $mysqli = new mysqli($host, $user, $pass, $db);

            if ($mysqli->connect_errno) {
                throw new Exception($mysqli->connect_error, $mysqli->connect_errno);
            }
                //else {
                  //  echo "Equis de";
                //}
            return $mysqli;
        }
    }

/*

    // $a= new db();
    // $a-> connect();

   
    $servername = "localhost";  // Cambia a la dirección de tu servidor si es diferente
    $username = "root";   // Cambia al nombre de usuario de tu base de datos
    $password = ""; // Cambia a la contraseña de tu base de datos
    $dbname = "ameizon2"; // Cambia al nombre de tu base de datos
    
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Comprobar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
    }
    //echo "Conexión exitosa a la base de datos";

*/

?>
