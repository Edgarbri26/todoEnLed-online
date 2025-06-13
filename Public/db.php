<?php

class Conectar {

public static function Conexion() {

    $conn = new mysqli("bnn1q6tfgrthzggcbz0h-mysql.services.clever-cloud.com", "uwiiuvgomc2rl3dq", "pjCiwvwhTEJ69ufPvZRE", "bnn1q6tfgrthzggcbz0h", 3306);
    $conn->set_charset("utf8");
    return $conn;
}

}
//echo "<script>alert('¡Hola, Edgar! Esto es un alert desde PHP');</script>";
?>
