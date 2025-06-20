<?php

class Conectar {

public static function Conexion() {

    $conn = new mysqli("localhost", "root", "", "todoenled_db", 3306);
    $conn->set_charset("utf8");
    return $conn;
}

}
//echo "<script>alert('¡Hola, Edgar! Esto es un alert desde PHP');</script>";
?>
