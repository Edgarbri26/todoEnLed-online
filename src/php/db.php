<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "todoenled_db";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "<script>alert('¡Hola, Edgar! Esto es un alert desde PHP');</script>";
?>
