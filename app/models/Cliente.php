<?php
// Ajusta la ruta según la estructura de tu proyecto y nombre correcto (public en minúsculas)
require_once __DIR__ . '/../../Public/db.php';

class Cliente {
    private $db;

    public function __construct() {
        $this->db = Conectar::Conexion();
    }

    // Verifica si el correo ya existe en la base de datos
    public function existeEmail(string $correo): bool {
        $stmt = $this->db->prepare("SELECT id FROM cliente WHERE email = ?");
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta existeEmail: " . $this->db->error);
        }
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->store_result();
        $existe = $stmt->num_rows > 0;
        $stmt->close();
        return $existe;
    }

    // Inserta un nuevo cliente en la tabla
    public function registrar(string $nombre, string $apellido, string $correo, int $id_user = 0): bool {
        $stmt = $this->db->prepare("INSERT INTO cliente (name, lastname, email, id_user) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta registrar: " . $this->db->error);
        }
        $stmt->bind_param("sssi", $nombre, $apellido, $correo, $id_user);
        $resultado = $stmt->execute();
if (!$resultado) {
    throw new Exception("Error en la ejecución de la consulta: " . $stmt->error);
}

        $stmt->close();
        return $resultado;
    }
}
