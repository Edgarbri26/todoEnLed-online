<?php
session_start();
require_once '../../Public/db.php';
require_once '../models/model_config.php';
$configuracion = new Config();

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $config = [];
    if (isset($_POST['titulo1'])) $config['titulo1'] = $_POST['titulo1'];
    if (isset($_POST['titulo2'])) $config['titulo2'] = $_POST['titulo2'];
    if (isset($_POST['titulo3'])) $config['titulo3'] = $_POST['titulo3'];
    if (isset($_POST['subtitulo'])) $config['subtitulo'] = $_POST['subtitulo'];

    $configuracion->setConfig($config);

    $_SESSION['success'] = "Configuración guardada exitosamente.";
    header('Location: ../Controllers/controller_config.php');
    exit();
} 


$config = $configuracion->getConfig();

require_once '../views/view_config.php'; 
?>