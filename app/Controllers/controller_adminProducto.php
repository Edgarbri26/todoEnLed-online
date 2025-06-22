<?php
session_start();

require_once __DIR__ . '/../models/model_adminProducto.php';
require_once __DIR__ . '/../../Public/db.php';

$pa = new ProductoAdmin();


$prod = $pa->getProducto();

//$rol = $_SESSION['rol'] ?? 0;


require_once __DIR__ . '/../views/view_gestionProducto.php';
?>