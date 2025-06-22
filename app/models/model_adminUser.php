<?php
class UserAdmin {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function getUser() {
        $sql = "SELECT * FROM users JOIN rol ON users.id_rol = rol.id_rol;";
        $result = $this->conn->query($sql);
        $user = [];
        while($row = $result->fetch_assoc()) {
            $user[] = $row;
        }
        return $user;
    }

    
}