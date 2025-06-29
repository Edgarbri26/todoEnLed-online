<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1 && $_SESSION['rol'] != 3) {
    header("Location: ../views/Error404.html");
    exit();
}
?>
<?php
require_once __DIR__ . '/../models/model_editarCompra.php';
require_once __DIR__ . '/../../Public/db.php';

$ec = new EditarCompra();

if (isset($_POST['btn'])) {
    $id = $_POST['id'];    
    $edit = $ec->getCompra($id);
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $estado = $_POST['estado_id'];
    $ec->modificarCompra($id, $estado);
    header('Location: controller_adminCompras.php');
    exit;
}

if(isset($_POST['cancelar'])){
    $id = $_POST['id'];
    $ec->cancelarCompra($id);
    header('Location: controller_adminCompras.php');
    exit;
}

require_once __DIR__ . '/../views/view_editarCompra.php';
?>