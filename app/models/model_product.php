<?php
class Product {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
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

    public function search($term) {
        $sql = "SELECT * FROM products WHERE nombre LIKE ? OR descripcion LIKE ?";
        $stmt = $this->conn->prepare($sql);
        $likeTerm = '%' . $term . '%';
        $stmt->bind_param("ss", $likeTerm, $likeTerm);
        $stmt->execute();
        $result = $stmt->get_result();
        $products = [];
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        $stmt->close();
        return $products;
    }
}

