<?php

require_once 'db.php';

try {
    $conexion = Conectar::Conexion();
    header("Location: /todoEnLed-online/app/Controllers/controller_index.php");
    exit();

} catch (Exception $e) {
    // Incluir el controlador de error
    header("Location: /todoEnLed-online/app/Controllers/controller_error.php");
    exit();
}




//$controller->index();
?>