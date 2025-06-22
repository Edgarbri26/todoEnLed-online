<?php
class ProductoAdmin {

    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function getProducto() {
        $sql = "SELECT products.id, products.precio, products.nombre AS nombreProducto, products.stock, products.descripcion, 
        products.img, products.id_categoria, categorias_productos.nombre FROM products JOIN categorias_productos
         ON products.id_categoria = categorias_productos.id_categoria;";
        $result = $this->conn->query($sql);
        $producto = [];
        while($row = $result->fetch_assoc()) {
            $producto[] = $row;
        }
        return $producto;
    }

    
}