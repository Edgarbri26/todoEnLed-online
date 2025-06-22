<?php
class Gestion {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function Restar($id) {
        $id = (int) $id;
        $sql = "SELECT * FROM carrito WHERE id_producto = $id";
        $result = $this->conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $resta = $row['cantidad'];
        }
        $resta = $resta - 1;
        return $resta;
    }

    public function Disminuir($id, $resta) {
        $id = (int) $id;
        $sql = "UPDATE carrito SET cantidad = $resta WHERE id_producto = $id;";
        $result = $this->conn->query($sql);
    }

    public function Sumar($id) {
        $id = (int) $id;
        $sql = "SELECT * FROM carrito WHERE id_producto = $id";
        $result = $this->conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $suma = $row['cantidad'];
        }
        $suma = $suma + 1;
        return $suma;
    }

    public function Aumentar($id, $suma) {
        $id = (int) $id;
        $sql = "UPDATE carrito SET cantidad = $suma WHERE id_producto = $id;";
        $result = $this->conn->query($sql);
    }

    public function Eliminar($id) {
        $id = (int) $id;
        $sql = "DELETE FROM carrito WHERE id_producto = $id";
        $result = $this->conn->query($sql);
    }

    public function EliminarTodo($id) {
        $sql = "DELETE FROM carrito WHERE id_user = $id";
        $result = $this->conn->query($sql);
    }

    public function Maximo($id) {
        $id = (int) $id;
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $this->conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $maximo = $row['stock'];
        }
        return $maximo;
    }

    
}