<?php
require __DIR__ . '/../../Public/templates/head.php';
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
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            header('Location: /todoEnLed-online/app/views/view_homeAdmin.php');
        } else if ($rol == 3) {
            header('Location: /todoEnLed-online/app/views/view_homeEmpleado.php');
        }else{
            header("Location: ../Controllers/controller_index.php");
        }
        exit();
    } else {
        echo '<script>
            Swal.fire({
            title: "Login incorrecto",
            text: "Usuario o contraseña incorrectos",
            icon: "error"
            });
        </script>';
        // exit();
    }
}



require_once __DIR__ . '/../views/LoginVistaPrueva.php';
?>