<?php
session_start();

require_once __DIR__ . '/../models/model_product.php';
require_once __DIR__ . '/../models/model_cart.php';
require_once __DIR__ . '/../../Public/db.php';

$productModel = new Product();
$cart = new Cart();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['producto'])) {
    $cart->addProduct($_POST['producto']);
    // Redireccionar para evitar repost
    header('Location: index.php');
    exit;
}

$products = $productModel->getAll();
$rol = $_SESSION['rol'] ?? 0;

require_once '../views/view_index.php';
?>