<?php

require_once 'db.php';

try {
    $conexion = Conectar::Conexion();

    require_once '../app/controllers/controller_index.php';
    $controller = new Product();
    // Aquí continúa la lógica normal con la conexión exitosa...
} catch (Exception $e) {
    // Incluir el controlador de error
    header("Location: /todoEnLed-online/app/Controllers/controller_error.php");
    exit();
}



//$controller->index();
?>