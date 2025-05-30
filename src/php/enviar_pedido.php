<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pedido"])) {
  $mensaje = "Pedido realizado:\n\n" . $_POST["pedido"];
  $destino = "tucorreo@ejemplo.com";  // Cámbialo por tu correo
  $asunto = "Nuevo pedido desde la tienda";
  $headers = "From: tienda@tuweb.com";

  if (mail($destino, $asunto, $mensaje, $headers)) {
    echo "Pedido enviado correctamente.";
  } else {
    echo "Error al enviar el pedido.";
  }
} else {
  echo "Acceso no válido.";
}
?>
