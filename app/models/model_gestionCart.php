<?php
class Gestion
{

    private $conn;

    public function __construct()
    {
        $this->conn = Conectar::Conexion();
    }

    public function Restar($id)
    {
        $id = (int) $id;
        $sql = "SELECT * FROM carrito WHERE id_producto = $id";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $resta = $row['cantidad'] - 1;
            return $resta;
        }
        return 0;
    }

    public function Disminuir($id, $resta)
    {
        $id = (int) $id;
        $sql = "UPDATE carrito SET cantidad = $resta WHERE id_producto = $id;";
        $result = $this->conn->query($sql);
    }

    public function Sumar($id)
    {
        $id = (int) $id;
        $sql = "SELECT * FROM carrito WHERE id_producto = $id";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $suma = $row['cantidad'] + 1;
            return $suma;
        }
        return 1;
    }

    public function Validar($id, $suma){
        $id = (int) $id;
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $final = $row['stock'];
            
            if($suma > $final){
                $_SESSION['error_stock'] = true;
                return false;
            }else if($suma <= $final){
                $_SESSION['error_stock'] = false;
                return true;
            }
        } else {
            // Producto no encontrado
            $_SESSION['error_stock'] = true;
            return false;
        }
    }

    public function Aumentar($id, $suma)
    {
        $id = (int) $id;
        $sql = "UPDATE carrito SET cantidad = $suma WHERE id_producto = $id;";
        $result = $this->conn->query($sql);
    }

    public function Eliminar($id)
    {
        $_SESSION['numProducts']--;
        $id = (int) $id;
        $sql = "DELETE FROM carrito WHERE id_producto = $id";
        $result = $this->conn->query($sql);
    }

    public function EliminarTodo($id)
    {
        $_SESSION['numProducts'] = 0;
        $sql = "DELETE FROM carrito WHERE id_user = $id";
        $result = $this->conn->query($sql);
    }

    public function Maximo($id)
    {
        $id = (int) $id;
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['stock'];
        }
        return 0;
    }

    public function getUserId($username)
    {
        $stmt = $this->conn->prepare("SELECT id_user FROM users WHERE user_name = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $stmt->close();
            return $row['id_user'];
        } else {
            $stmt->close();
            return -1;
        }
    }

    public function InsertarOrden($usuario, $total)
    {
        $stmt = $this->conn->prepare("INSERT INTO ordenes(user_id, orden_fecha, monto_total, estado_id) 
        VALUES(?, CURDATE(), ?, 1)");
        $stmt->bind_param("id", $usuario, $total);
        if ($stmt->execute()) {
            $new_id = $stmt->insert_id;
            $stmt->close();
            return $new_id;
        } else {
            $stmt->close();
            return -1;
        }
    }

    public function InsertarOrdenDetalles($orden, $productos, $cantidades)
    {
        if (count($productos) === 0 || count($cantidades) === 0) return false;

        $stmt = $this->conn->prepare("INSERT INTO orden_detalles(orden_id, product_id, cantidad) VALUES(?, ?, ?)");

        for ($i = 0; $i < count($productos); $i++) {
            $producto = $productos[$i];
            $cantidad = $cantidades[$i];
            $stmt->bind_param("iii", $orden, $producto, $cantidad);
            if (!$stmt->execute()) {
                $stmt->close();
                return false;
            }
        }

        $stmt->close();
        return true;
    }
}
