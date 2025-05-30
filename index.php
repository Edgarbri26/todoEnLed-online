<?php include 'src/php/db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Catálogo de Tienda</title>
  <link rel="stylesheet" href="src/css/global.css">
</head>
<body>
  <h1>Catálogo de Productos</h1>
  <div class="productos">
    <?php
      $sql = "SELECT * FROM productos";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
        echo "<div class='producto'>
                <img src='assets/{$row['imagen']}' alt='{$row['nombre']}'>
                <h3>{$row['nombre']}</h3>
                <p>{$row['descripcion']}</p>
                <span>$ {$row['precio']}</span>
                <button onclick='agregarAlCarrito(" . json_encode($row) . ")'>Agregar al carrito</button>
              </div>";
      }
    ?>
    <a href="">ver mas</a>
  </div>

  <h2>Carrito</h2>
  <ul id="carrito"></ul>
  <button onclick="enviarPedido()">Enviar pedido</button>

  <form id="formularioPedido" action="src/php/enviar_pedido.php" method="POST" style="display:none;">
    <input type="hidden" name="pedido" id="pedidoInput">
  </form>

  <script src="src/js/script.js"></script>
</body>
</html>
