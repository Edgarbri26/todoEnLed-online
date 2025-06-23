<?php
session_start();

require_once __DIR__ . '/../models/model_cart.php';
require_once __DIR__ . '/../../Public/db.php';

$cart = new Cart();

if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
        if (isset($_POST['product_id'], $_POST['product_price'])) {


            $id_producto = $_POST['product_id'];
            $price = $_POST['product_price'];
            $verificar = $cart->verificar($id_user, $id_producto);
            if ($verificar) {
                header('Location: controller_index.php?error=product_exists');
                exit;
            } else {
                $cart->addProduct($id_user, $id_producto, $price);
                header('Location: controller_index.php');
                exit;
            }
        }
    }

    $carrito = $cart->getCarrito($id_user);

    foreach ($carrito as $item) {
        $id = $item['id_producto'];
        $producto = $cart->getProducto($id);
        // Procesar $producto si es necesario
    }

    $rol = $_SESSION['rol'] ?? 0;

    require_once __DIR__ . '/../views/view_cart.php';
} else {
    header('Location: controller_login.php');
    exit;
}
