<?php
class EditarCompra {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function getCompra($id) {
        $id = (int) $id;
        $sql = "SELECT * FROM ordenes WHERE id_orden = $id";
        $result = $this->conn->query($sql);
        $edit = [];
        while($row = $result->fetch_assoc()) {
            $edit[] = $row;
        }
        return $edit;
    }

    public function modificarCompra($id, $a) {
        $id = (int) $id;
        $sql = "UPDATE ordenes SET estado_id = $a WHERE id_orden = $id;";
        $result = $this->conn->query($sql);
    }

    public function cancelarCompra($id) {
        $id = (int) $id;
        $sql = "UPDATE ordenes SET estado_id = 4 WHERE id_orden = $id;";
        $result = $this->conn->query($sql);
    }
    
}