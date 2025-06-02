<?php
function eliminarProducto($id) {
    $sql = "DELETE FROM productos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Producto eliminado exitosamente'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar el producto');</script>";
    }
}


function editarProducto($id) {
    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        echo "<script>alert('Producto no encontrado');</script>";
        return null;
    }
}
?>