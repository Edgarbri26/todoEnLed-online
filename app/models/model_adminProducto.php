<?php
class ProductoAdmin {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function getProducto() {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        $producto = [];
        while($row = $result->fetch_assoc()) {
            $producto[] = $row;
        }
        return $producto;
    }

    
}