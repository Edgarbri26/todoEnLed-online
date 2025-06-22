<?php
class EditarProducto {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function getProducto($id) {
        $id = (int) $id;
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $this->conn->query($sql);
        $edit = [];
        while($row = $result->fetch_assoc()) {
            $edit[] = $row;
        }
        return $edit;
    }

    public function modificarProducto($id, $a, $b, $c, $d, $e, $f) {
        $id = (int) $id;
        $sql = "UPDATE products
SET precio = $a, nombre = '$b', stock = $c, descripcion = '$d', img = '$e', id_categoria = $f
WHERE id = $id;";
        $result = $this->conn->query($sql);
    }
    
}