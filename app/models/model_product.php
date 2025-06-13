<?php
class Product {

    private $conn;

    public function __construct() {
        $this->conn =Conectar::Conexion();
        
    }

    public function getAll() {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        $products = [];
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products;
    }
}
