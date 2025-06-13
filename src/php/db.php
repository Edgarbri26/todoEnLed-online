<?php
$host = "sql10.freesqldatabase.com";
$user = "sql10782447";
$password = "R7l2FgmBgb";
$database = "sql10782447";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

//echo "<script>alert('¡Hola, Edgar! Esto es un alert desde PHP');</script>";
?>
