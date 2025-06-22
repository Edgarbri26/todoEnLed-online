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
    $img = $_POST['img'];
    $id_categoria = $_POST['id_categoria'];
    $ep->modificarProducto($id, $precio, $nombre, $stock, $descripcion, $img, $id_categoria);
    header('Location: controller_index.php');
    exit;
}


require_once __DIR__ . '/../views/view_editarProducto.php';
?>