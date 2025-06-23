<?php

require_once __DIR__ . '/../models/model_editarUsuario.php';
require_once __DIR__ . '/../../Public/db.php';

$eu = new EditarUsuario();

if (isset($_POST['btn'])) {
    $id = $_POST['id'];    
    $edit = $eu->getUsuario($id);
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $usuario = $_POST['nombre'];
    $id_rol = $_POST['id_rol'];
    $eu->modificarUsuario($id, $usuario, $id_rol);
    header('Location: controller_index.php');
    exit;
}


require_once __DIR__ . '/../views/view_editarUsuario.php';
?>