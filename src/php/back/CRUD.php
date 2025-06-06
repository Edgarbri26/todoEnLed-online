<?php
include "../db.php";
$apiKey = "e730751c6fa1c9108be628b4a5928040";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    
    // se convierte la imagen primero antes de enviarla
    $imagenTemp = $_FILES['imagen']['tmp_name'];
    $imagenData = base64_encode(file_get_contents($imagenTemp));

    // esto la sube a imgbb(donde tenemos las imagenes)
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
        //si cargo la imagen  guarda en la base de datos
        $stmt = $conn->prepare("INSERT INTO productos (nombre, descripcion, precio, imagen_url) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssds", $nombre, $descripcion, $precio, $imagenURL);
        $stmt->execute();
        echo "Producto creado correctamente. <a href='index.php'>Volver</a>";
    } else {
        echo "Error al subir la imagen.";
    }
}
?>
