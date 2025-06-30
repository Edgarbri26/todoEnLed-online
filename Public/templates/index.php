<?php
require_once __DIR__ . '/../../app/Controllers/ClienteController.php';

$request = trim($_SERVER['REQUEST_URI'], '/');
$basePath = ''; // Ajusta según tu estructura y URL base

// Extraer ruta relativa dentro de templates
if (strpos($request, $basePath) === 0) {
    $path = substr($request, strlen($basePath));
    $path = trim($path, '/');
} else {
    $path = $request;
}

switch ($path) {
    case '':
    case 'register':
        $controller = new ClienteController();
        $controller->registrar();
        break;

    case 'register/procesar':
        $controller = new ClienteController();
        $controller->registrar();
        break;

    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
