<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController {
    private $model;

    public function __construct() {
        $this->model = new Cliente();
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');
            $apellido = trim($_POST['apellido'] ?? '');
            $correo = trim($_POST['correo'] ?? '');

            // Validaciones básicas
            if (!$nombre || !$apellido || !$correo) {
                $error = "Por favor, completa todos los campos.";
                    require __DIR__ . '/../../public/templates/views_register/registro.php';
                exit;
            }

            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $error = "Correo electrónico no válido.";
                require __DIR__ . '/../../public/templates/views_register/registro.php';
                exit;
            }

            if ($this->model->existeEmail($correo)) {
                $error = "El correo ya está registrado.";
                require __DIR__ . '/../../public/templates/views_register/registro.php';
                exit;
            }

            $id_user = 0; // Ajusta según tu lógica
            $resultado = $this->model->registrar($nombre, $apellido, $correo, $id_user);

            if ($resultado) {
                header('Location: /todoEnLed-online/public/templates/login?registro=exito');
                exit;
            } else {
                $error = "Error al registrar usuario. Intenta de nuevo.";
                require __DIR__ . '/../../public/templates/views_register/registro.php';
                exit;
            }
        } else {
            require __DIR__ . '/../../public/templates/views_register/registro.php';
        }
    }
}
