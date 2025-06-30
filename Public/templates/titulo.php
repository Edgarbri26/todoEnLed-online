<?php
require_once '../../Public/db.php';
require_once '../../app/models/model_config.php';
$configuracion = new Config();
$titulo = $configuracion->getConfig();

?>
<section class="text-center">
        <h1 class=' font-bold text-6xl '><?php echo $titulo['titulo1']; ?>, <br><?php echo $titulo['titulo2']; ?>,  <span class=' text-verde-principal'><?php echo $titulo['titulo3']; ?></span></h1>
        <p class=' text-2xl text-gray-600 font-medium mb-12'><?php echo $titulo['subtitulo']; ?></p>
</section>