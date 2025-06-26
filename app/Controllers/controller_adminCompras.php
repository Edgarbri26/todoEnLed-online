<?php
//session_start();

require_once __DIR__ . '/../models/model_adminCompra.php';
require_once __DIR__ . '/../../Public/db.php';

$ca = new CompraAdmin();


$comp = $ca->getCompra();

//$rol = $_SESSION['rol'] ?? 0;


require_once __DIR__ . '/../views/view_gestionCompra.php';
?>