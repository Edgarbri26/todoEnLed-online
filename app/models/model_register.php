<?php

class Register {
    private $db;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function registerUser($usuario, $contrasena) {
        $rol = 2;
        $sql = "INSERT INTO users (id_rol, user_name, pass) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("iss", $rol, $usuario, $contrasena);
        $stmt->execute();
        $stmt->close();
    }

    public function registerClient($nombre, $apellido, $correo, $telefono, $id_user) {
        $sql = "INSERT INTO cliente (name, lastname, email, telefono, id_user) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssi", $nombre, $apellido, $correo, $telefono, $id_user);
        $stmt->execute();
        $stmt->close();
    }

    public function getUser($usuario) {
        $sql = "SELECT id_user FROM users WHERE user_name = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $id_user = $result->fetch_assoc();
        return $id_user['id_user'];
    }
}


?>