<?php
class CompraAdmin {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function getCompra() {
        $sql = "SELECT 
    u.user_name AS Usuario,
    c.telefono AS Telefono,
    p.Productos,
    p.Cantidades,
    o.orden_fecha AS Fecha,
    o.estado_id AS EstadoID,
    o.id_orden AS ID,
    eo.estado AS EstadoNombre,
    FORMAT(o.monto_total, 0) AS Monto
FROM 
    ordenes o
INNER JOIN 
    users u ON o.user_id = u.id_user
INNER JOIN
    cliente c ON u.id_user = c.id_user
INNER JOIN 
    (
        SELECT 
            od.orden_id,
            GROUP_CONCAT(p.nombre ORDER BY p.nombre SEPARATOR ', ') AS Productos,
            GROUP_CONCAT(od.cantidad ORDER BY p.nombre SEPARATOR ', ') AS Cantidades
        FROM 
            orden_detalles od
        INNER JOIN 
            products p ON od.product_id = p.id
        GROUP BY 
            od.orden_id
    ) p ON o.id_orden = p.orden_id
INNER JOIN
    estado_orden eo ON o.estado_id = eo.id_estado
ORDER BY 
    o.orden_fecha DESC, o.id_orden DESC;";
        $result = $this->conn->query($sql);
        $compra = [];
        while($row = $result->fetch_assoc()) {
            $compra[] = $row;
        }
        return $compra;
    }

    public function getNumCompras(){
        $_SESSION['numCompras'] = 0;
        $sql = "SELECT * FROM ordenes WHERE estado_id != 4;";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                $_SESSION['numCompras']++;
            }
        }
        return $_SESSION['numCompras'];
    }
    
}