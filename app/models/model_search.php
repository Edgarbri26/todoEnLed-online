<?php
class Search {
    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
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
}
?>
