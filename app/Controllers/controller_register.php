<?php
require_once '../../Public/db.php';
require_once '../models/model_register.php';

    if (isset($_POST['usuario'], $_POST['contrasena'], $_POST['confirmar_contrasena'], $_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['telefono'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $confirmar_contrasena = $_POST['confirmar_contrasena'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];

        if ($contrasena === $confirmar_contrasena) {
            $register = new Register();
            $register->registerUser($usuario, $contrasena);
            $id_user = $register->getUser($usuario);
            $register->registerClient($nombre, $apellido, $correo, $telefono, $id_user);
            header('Location: controller_login.php');
            exit;
        } else {
            $_SESSION['error'] = 'Las contraseñas no coinciden';
            
        }
    }







require_once '../views/view_register.php';
?>  