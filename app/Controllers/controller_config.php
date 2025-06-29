<?php
session_start();

// Verificar si el usuario está logueado y es admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../Public/index.php');
    exit();
}

// Archivo para guardar la configuración
$configFile = '../../assets/config.json';

// Función para cargar la configuración actual
function loadConfig($configFile) {
    if (file_exists($configFile)) {
        $config = json_decode(file_get_contents($configFile), true);
        return $config ?: [];
    }
    return [];
}

// Función para guardar la configuración
function saveConfig($configFile, $config) {
    file_put_contents($configFile, json_encode($config, JSON_PRETTY_PRINT));
}

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Directorio donde se guardarán las imágenes
    $uploadDir = '../../assets/img/';
    
    // Asegurar que el directorio existe
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    // Cargar configuración actual
    $config = loadConfig($configFile);
    
    // Procesar las imágenes del banner
    $bannerImages = ['banner1', 'banner2', 'banner3', 'banner4'];
    $uploadedImages = [];
    
    foreach ($bannerImages as $bannerKey) {
        if (isset($_FILES[$bannerKey]) && $_FILES[$bannerKey]['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES[$bannerKey];
            
            // Validar que sea una imagen
            $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
            if (!in_array($file['type'], $allowedTypes)) {
                $_SESSION['error'] = "El archivo {$bannerKey} no es una imagen válida.";
                header('Location: ../views/view_config.php');
                exit();
            }
            
            // Generar nombre único para la imagen
            $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
            $newFileName = $bannerKey . '_' . time() . '.' . $fileExtension;
            $uploadPath = $uploadDir . $newFileName;
            
            // Mover el archivo subido
            if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
                $uploadedImages[$bannerKey] = $newFileName;
                $config['banner_images'][$bannerKey] = $newFileName;
            } else {
                $_SESSION['error'] = "Error al subir la imagen {$bannerKey}.";
                header('Location: ../views/view_config.php');
                exit();
            }
        }
        // Si no se seleccionó una nueva imagen, mantener la existente
        elseif (!isset($config['banner_images'][$bannerKey])) {
            $config['banner_images'][$bannerKey] = null;
        }
    }
    
    // Procesar las frases del título (si se envían)
    if (isset($_POST['frase1'])) $config['frases']['frase1'] = $_POST['frase1'];
    if (isset($_POST['frase2'])) $config['frases']['frase2'] = $_POST['frase2'];
    if (isset($_POST['frase3'])) $config['frases']['frase3'] = $_POST['frase3'];
    if (isset($_POST['frase4'])) $config['frases']['frase4'] = $_POST['frase4'];
    
    // Guardar la configuración
    saveConfig($configFile, $config);
    
    $_SESSION['success'] = "Configuración guardada exitosamente.";
    header('Location: ../views/view_config.php');
    exit();
    
} else {
    // Si no es POST, redirigir al formulario
    header('Location: ../views/view_config.php');
    exit();
}
?> 