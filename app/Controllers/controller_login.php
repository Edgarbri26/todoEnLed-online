<?php

require_once __DIR__ . '/../models/model_login.php';
require_once __DIR__ . '/../models/model_cart.php';
require_once __DIR__ . '/../../Public/db.php';

$login = new Login();
$cart = new Cart();

if (isset($_POST['button'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($login->authenticate($username, $password)) {
        $id_user = $_SESSION['id_user'];
        $cart->getNumProducts($id_user);
        header("Location: ../Controllers/controller_index.php");
        exit();
    } else {
        echo "Error\n";
        echo "$username\n";
        echo "$password";
        exit();
    }
}



require_once __DIR__ . '/../views/LoginVistaPrueva.php';
?>