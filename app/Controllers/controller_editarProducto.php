<?php

require_once __DIR__ . '/../models/model_editarProducto.php';
require_once __DIR__ . '/../../Public/db.php';

$ep = new EditarProducto();

if (isset($_POST['btn'])) {
    $id = $_POST['id'];    
    $edit = $ep->getProducto($id);
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $precio = $_POST['precio'];
    $nombre = $_POST['nombre'];
    $stock = $_POST['stock'];
    $descripcion = $_POST['descripcion'];
    $id_categoria = $_POST['id_categoria'];

    // Subida a Cloudinary o mantener la imagen anterior
    $img_url = '';
    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $tmpFilePath = $_FILES['img']['tmp_name'];
        $cloudinary_url = 'https://api.cloudinary.com/v1_1/ddf7x11wg/image/upload';
        $postData = [
            'file' => new CURLFile($tmpFilePath),
            'upload_preset' => 'todoEnLed'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $cloudinary_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response, true);
        if (isset($data['secure_url'])) {
            $img_url = $data['secure_url'];
        } else {
            $img_url = '';
        }
    } else if (isset($_POST['img_actual'])) {
        $img_url = $_POST['img_actual'];
    }
    $ep->modificarProducto($id, $precio, $nombre, $stock, $descripcion, $img_url, $id_categoria);
    $_SESSION['success'] = 'Producto modificado correctamente';
    header('Location: ../Controllers/controller_adminProducto.php');
    exit;
}

if(isset($_POST['agregar'])){
    $precio = $_POST['precio'];
    $nombre = $_POST['nombre'];
    $stock = $_POST['stock'];
    $descripcion = $_POST['descripcion'];
    $id_categoria = $_POST['id_categoria'];
    // Subida a Cloudinary
    $img_url = '';
    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $tmpFilePath = $_FILES['img']['tmp_name'];
        $cloudinary_url = 'https://api.cloudinary.com/v1_1/ddf7x11wg/image/upload';
        $postData = [
            'file' => new CURLFile($tmpFilePath),
            'upload_preset' => 'todoEnLed'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $cloudinary_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response, true);
        if (isset($data['secure_url'])) {
            $img_url = $data['secure_url'];
        } else {
            $img_url = '';
        }
    }
    $ep->agregarProducto($precio, $nombre, $stock, $descripcion, $img_url, $id_categoria);
    $_SESSION['success'] = 'Producto agregado correctamente';
    header('Location: ../Controllers/controller_adminProducto.php');
    exit;
}


require_once __DIR__ . '/../views/view_editarProducto.php';
?>