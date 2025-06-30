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
        $this->conn->close();
        return $products;
    }

    public function getByID($id){
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        $this->conn->close();
        return $row;
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
        $this->conn->close();
        return $products;
    }

    public function getByCategory($category) {
        $sql = "SELECT * FROM products WHERE id_categoria = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $result = $stmt->get_result();
        $products = [];
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        $stmt->close();
        $this->conn->close();
        return $products;
    }

}

