<?php

require_once __DIR__ . '/../models/model_login.php';
require_once __DIR__ . '/../../Public/db.php';

$login = new Login();

if (isset($_POST['button'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($login->authenticate($username, $password)) {
        $rol = $_SESSION['rol'];
        header("Location: ../Controllers/controller_index.php?rol=$rol");
        exit();
    } else {
        echo "Error\n";
        echo "$username\n";
        echo "$password";
        exit();
    }
}



require_once __DIR__ . '/../views/LoginVistaPrueva.php';
//require_once __DIR__ . '/../views/LoginVistaPrueva.php';
?>