<?php
class Cart
{

    private $conn;

    public function __construct()
    {
        $this->conn = Conectar::Conexion();
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
            $_SESSION['numProducts'] = 0;
        }
    }

    public function addProduct($userId, $productId, $price)
    {
        $_SESSION['carrito'][] = $productId;
        $_SESSION['numProducts']++;
        $stmt = $this->conn->prepare("INSERT INTO carrito (id_user, id_producto, cantidad, monto) VALUES (?, ?, 1, ?)");
        $productId = (int) $productId;
        $stmt->bind_param("iid", $userId, $productId, $price);
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function getNumProducts()
    {
        return $_SESSION['numProducts'];
    }

    public function getCarrito($id)
    {
        $sql = "SELECT * FROM carrito JOIN products ON carrito.id_producto = products.id
        WHERE carrito.id_user = $id;";
        $result = $this->conn->query($sql);
        $carrito = [];
        while ($row = $result->fetch_assoc()) {
            $carrito[] = $row;
        }
        return $carrito;
    }

    public function verificar($a, $b)
    {
        $stmt = $this->conn->prepare("SELECT * FROM carrito WHERE id_user = ? AND id_producto = ?");
        $stmt->bind_param("ii", $a, $b);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return true;
        } else {

            return false;
        }
    }



    public function getProducto($id)
    {
        $id = (int) $id;
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $this->conn->query($sql);
        $producto = [];
        while ($row = $result->fetch_assoc()) {
            $producto[] = $row;
        }
        return $producto;
    }
}
