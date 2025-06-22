<?php
class Cart {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
            $_SESSION['numProducts'] = 0;
        }
    }

    public function addProduct($productId, $price) {
        $_SESSION['carrito'][] = $productId;
        $_SESSION['numProducts']++;
        $stmt = $this->conn->prepare("INSERT INTO carrito (id_producto, cantidad, monto) VALUES (?, 1, ?)");
        $productId = (int) $productId;
        $stmt->bind_param("id", $productId, $price);
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function getNumProducts() {
        return $_SESSION['numProducts'];
    }

    public function getCarrito() {
        $sql = "SELECT * FROM carrito";
        $result = $this->conn->query($sql);
        $carrito = [];
        while($row = $result->fetch_assoc()) {
            $carrito[] = $row;
        }
        return $carrito;
    }

    public function getProducto($id) {
        $id = (int) $id;
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $this->conn->query($sql);
        $producto = [];
        while($row = $result->fetch_assoc()) {
            $producto[] = $row;
        }
        return $producto;
    }

    
}
