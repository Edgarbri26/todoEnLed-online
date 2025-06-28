<?php
echo "Archivo de prueba funcionando correctamente";
echo "<br>ID recibido: " . ($_GET['id'] ?? 'No ID');
echo "<br><a href='app/views/view_index.php'>Volver al inicio</a>";
?> 