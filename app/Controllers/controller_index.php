<?php
//session_start();

require_once __DIR__ . '/../models/model_product.php';
require_once __DIR__ . '/../../Public/db.php';

$productModel = new Product();

$products = $productModel->getAll();

if(isset($_GET['rol'])){
    $rol = $_GET['rol'];
    $_SESSION['rol'] = $rol;
}

//$rol = $_SESSION['rol'] ?? 0;

require_once __DIR__ . '/../views/view_index.php';
?>