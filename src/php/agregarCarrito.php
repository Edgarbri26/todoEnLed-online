<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 1. Conexión
include 'src/php/db.php';

// 2. Verifica que recibimos un ID
if (isset($_POST['id'])) {
    $session_id = session_id();
    $producto_id = intval($_POST['id']);

    // 3. Ejecutamos el insert con ON DUPLICATE
    $stmt = $conn->prepare("INSERT INTO carrito (session_id, id_producto, cantidad) 
                              VALUES (?, ?, 1) 
                              ON DUPLICATE KEY UPDATE cantidad = cantidad + 1");

    $stmt->bind_param("si", $session_id, $producto_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Producto agregado correctamente.";
    } else {
        echo "No se pudo agregar.";
    }

    $stmt->close();
} else {
    echo "No se recibió ningún ID.";
}

$conn->close();

echo "<script>alert('¡Hola, Edgar! Esto es un alert desde PHP');</script>";

?>