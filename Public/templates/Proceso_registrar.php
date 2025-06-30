<?php
    require_once __DIR__ . '/../../app/models/Cliente.php'; // Ajusta ruta según estructura

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $apellido = trim($_POST['apellido'] ?? '');
    $correo = trim($_POST['correo'] ?? '');

    $error = '';
    $exito = '';

    if (!$nombre || !$apellido || !$correo) {
        $error = "Por favor, completa todos los campos.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error = "Correo electrónico no válido.";
    } else {
        $cliente = new Cliente();

        if ($cliente->existeEmail($correo)) {
            $error = "El correo ya está registrado.";
        } else {
            $registrado = $cliente->registrar($nombre, $apellido, $correo);

            if ($registrado) {
                $exito = "Registro exitoso. Puedes iniciar sesión.";
            } else {
                $error = "Error al registrar. Intenta nuevamente.";
            }
        }
    }
} else {
    // Si no es POST, redirigir al formulario
    header('Location: /todoEnLed-online/public/templates/vista_register.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Resultado Registro</title>
  <link rel="stylesheet" href="../../assets/output.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-md rounded-md w-full max-w-md p-6 text-center">
    <?php if ($error): ?>
      <p class="text-red-600 mb-4"><?= htmlspecialchars($error) ?></p>
      <a href="/todoEnLed-online/public/templates/vista_register.php" class="text-blue-600 underline">Volver al formulario</a>
    <?php else: ?>
      <p class="text-green-600 mb-4"><?= htmlspecialchars($exito) ?></p>
      <a href="/todoEnLed-online/public/templates/login.php" class="text-blue-600 underline">Ir a iniciar sesión</a>
    <?php endif; ?>
  </div>
</body>
</html>
