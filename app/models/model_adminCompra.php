<?php
class CompraAdmin {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function getCompra() {
        $sql = "SELECT 
    u.user_name AS Usuario,
    p.Productos,
    o.orden_fecha AS Fecha,
    o.estado_id AS EstadoID,
    eo.estado AS EstadoNombre,
    FORMAT(o.monto_total, 0) AS Monto
FROM 
    ordenes o
INNER JOIN 
    users u ON o.user_id = u.id_user
INNER JOIN 
    (
        SELECT 
            orden_id,
            GROUP_CONCAT(p.nombre ORDER BY p.nombre SEPARATOR ', ') AS Productos
        FROM 
            orden_detalles od
        INNER JOIN 
            products p ON od.product_id = p.id
        GROUP BY 
            orden_id
    ) p ON o.id_orden = p.orden_id
INNER JOIN
    estado_orden eo ON o.estado_id = eo.id_estado
ORDER BY 
    u.user_name, o.orden_fecha, o.estado_id;";
        $result = $this->conn->query($sql);
        $compra = [];
        while($row = $result->fetch_assoc()) {
            $compra[] = $row;
        }
        return $compra;
    }

    
}