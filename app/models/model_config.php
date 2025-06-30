<?php
class Config {
    private $conn;

    public function __construct() {
        $this->conn = Conectar::Conexion();
    }

    public function getConfig() {
        $sql = "SELECT * FROM config";
        $result = $this->conn->query($sql);
        $config = [];
        while($row = $result->fetch_assoc()) {
            $config[$row['titulo']] = $row['contenido'];
        }
        return $config;
    }

    public function setConfig($config) {
        foreach ($config as $titulo => $contenido) {
            $titulo = $this->conn->real_escape_string($titulo);
            $contenido = $this->conn->real_escape_string($contenido);
            $sql = "UPDATE config SET contenido = '$contenido' WHERE titulo = '$titulo'";
            $this->conn->query($sql);
        }
    }
}
?>