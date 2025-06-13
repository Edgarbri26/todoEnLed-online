<?php
session_start();

require_once __DIR__ . '/../models/model_product.php';
require_once __DIR__ . '/../models/model_cart.php';
require_once __DIR__ . '/../../Public/db.php';

$cart = new Cart();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['producto'])) {
    $id = $_POST['producto'];
    $cart->addProduct($id);
    header('Location: controller_index.php');
    exit;
}

$rol = $_SESSION['rol'] ?? 0;


require_once '../views/view_index.php';
?>