<?php require '../../Public/templates/head.php'; ?>
<?php
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1 && $_SESSION['rol'] != 3) {
    header("Location: ../views/Error404.html");
    exit();
}
?>
<?php require '../../Public/templates/headerAdmin.php'; ?>

<main class="main-container">
    <section class="flex gap-4 items-center justify-center">
        <a href="/todoEnLed-online/app/views/view_homeAdmin.php">
            <i class="fa-solid fa-arrow-left text-4xl mb-10 text-verde-principal rounded-full "></i>
        </a>
        <h1 class="text-6xl font-bold text-center mb-10">Gestión de <span class="text-verde-principal">Compras</span></h1>
    </section>

    <article class="flex justify-end mb-4">
        <button class="bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">Descargar reporte</button>
    </article>

    <section class="p-2.5 bg-white rounded-2xl shadow">
        <table class="w-full overflow-x-auto h-auto text-sm text-left">
            <thead class="p-2.5">
                <tr class="text-gray-400">
                    <th scope="col" class="p-2.5 text-center">Usuario</th>
                    <th scope="col" class="p-2.5 text-center">Productos</th>
                    <th scope="col" class="p-2.5 text-center">Fecha</th>
                    <th scope="col" class="p-2.5 text-center">Monto</th>
                    <th scope="col" class="p-2.5 text-center">Estado</th>
                    <th scope="col" class="p-2.5 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($comp as $item) {
                ?>

                    <tr class="border-t border-gray-300 p-2.5">
                        <td class="p-2.5 text-center font-bold"><?php echo ($item['Usuario']) ?></td>
                        <td>
                            <ul class="flex flex-col gap-1 text-center">
                                <?php

                                $productos = explode(',', $item['Productos']);
                                $cantidades = explode(',', $item['Cantidades']);
                                $length = min(count($productos), count($cantidades));

                                for ($i = 0; $i < $length; $i++) {
                                    $producto = trim($productos[$i]);
                                    $cantidad = trim($cantidades[$i]);
                                    echo "<li>{$producto} x {$cantidad}</li>";
                                }
                                ?>
                            </ul>
                        </td>
                        <td class="p-2.5 text-center"><?php echo ($item['Fecha']) ?></td>
                        <td class="p-2.5 text-center font-bold text-verde-principal"><?php echo ($item['Monto']) ?></td>
                        <?php
                        $estado = $item['EstadoNombre'];
                        $color = 'text-orange-500';
                        if ($estado === 'Entregado') $color = 'text-green-500';
                        elseif ($estado === 'Pendiente') $color = 'text-yellow-500';
                        elseif ($estado === 'Cancelado') $color = 'text-red-500';
                        elseif ($estado === 'En proceso') $color = 'text-blue-500';
                        ?>
                        <td class="p-2.5 text-center font-bold <?php echo $color; ?>"><?php echo ($estado) ?></td>
                        <td class="p-2.5 text-center">
                            <form action="../Controllers/controller_editarCompra.php" method="post">
                                <input type="hidden" name="id" value="<?php echo ($item['ID']) ?>">
                                <button name="btn" class="bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </form>
                        </td>
                    </tr>


                <?php
                }

                ?>
            </tbody>
        </table>
    </section>
</main>

<?php require '../../Public/templates/footer.php'; ?>