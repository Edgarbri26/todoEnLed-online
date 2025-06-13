<?php
class Search {
    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function searchProducts($search) {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE nombre LIKE ?");
        $likeSearch = "%".$search."%";
        $stmt->bind_param("s", $likeSearch);
        $stmt->execute();
        $result = $stmt->get_result();
        $products = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $products;
    }
}
?>
