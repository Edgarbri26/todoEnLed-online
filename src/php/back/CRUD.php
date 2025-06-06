<?php
include '../db.php';

$apiKey = "e730751c6fa1c9108be628b4a5928040";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $precio = $_POST['precio'] ?? '';
    $stock = $_POST['stock'] ?? 0;

    if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== 0) {
        die("Error: No se pudo cargar la imagen.");
    }

    $imagenTemp = $_FILES['imagen']['tmp_name'];
    if (!file_exists($imagenTemp)) {
        die("Error: El archivo temporal no existe.");
    }

    $imagenData = base64_encode(file_get_contents($imagenTemp));

    $response = file_get_contents("https://api.imgbb.com/1/upload?key=$apiKey", false, stream_context_create([
        'http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query(['image' => $imagenData])
        ]
    ]));

    $data = json_decode($response, true);
    $imagenURL = $data['data']['url'] ?? '';

    if ($imagenURL) {
        $stmt = $conn->prepare("INSERT INTO products (nombre, descripcion, precio, img, stock, id_categoria) VALUES (?, ?, ?, ?, ?, 1)");
        $stmt->bind_param("ssisi", $nombre, $descripcion, $precio, $imagenURL, $stock);
        $stmt->execute();
        echo "<script>alert('Producto agregado exitosamente');</script>";
         header(header: 'location:../vistas/gestionarProducto.php');
         //header("location:index.php");
    } else {
        echo "Error al subir la imagen. Respuesta: " . $response;
    }
    
}


?>

