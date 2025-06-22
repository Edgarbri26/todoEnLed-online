<?php
session_start();

require_once __DIR__ . '/../models/model_cart.php';
require_once __DIR__ . '/../../Public/db.php';

$cart = new Cart();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
    $id = $_POST['product_id'];
    $price = $_POST['product_price'];
    
    $cart->addProduct($id, $price);
    $carrito = $cart->getCarrito();
    header('Location: controller_index.php');
    exit;
}


$carrito = $cart->getCarrito();
foreach($carrito as $item){
    $id = $item['id_producto'];
    $producto = $cart->getProducto($id);
}

$rol = $_SESSION['rol'] ?? 0;


require_once __DIR__ . '/../views/view_cart.php';
?>