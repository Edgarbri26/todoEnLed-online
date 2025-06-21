<?php 


class Conectar {

    public static function Conexion() {
        $conn = new mysqli("localhost", "root", "12345", "todoenled", 3308);

        if ($conn->connect_error) {
            throw new Exception("Error de conexión: " . $conn->connect_error);
        }

        $conn->set_charset("utf8");
        return $conn;
    }

}


?>
