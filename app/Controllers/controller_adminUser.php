<?php
//session_start();

require_once __DIR__ . '/../models/model_adminUser.php';
require_once __DIR__ . '/../../Public/db.php';

$ua = new UserAdmin();


$user = $ua->getUser();

//$rol = $_SESSION['rol'] ?? 0;


require_once __DIR__ . '/../views/view_gestionUsuario.php';
?>