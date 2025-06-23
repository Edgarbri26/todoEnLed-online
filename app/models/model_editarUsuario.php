<?php
class EditarUsuario {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function getUsuario($id) {
        $id = (int) $id;
        $sql = "SELECT * FROM users WHERE id_user = $id";
        $result = $this->conn->query($sql);
        $edit = [];
        while($row = $result->fetch_assoc()) {
            $edit[] = $row;
        }
        return $edit;
    }

    public function modificarUsuario($id, $a, $b) {
        $id = (int) $id;
        $sql = "UPDATE users SET user_name = '$a', id_rol = $b WHERE id_user = $id;";
        $result = $this->conn->query($sql);
    }
    
}