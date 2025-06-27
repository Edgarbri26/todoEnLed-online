<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/headerEmpleado.php'; ?>

<main class="max-w-7xl mx-auto p-6  min-h-screen">
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
                        <td class="p-2.5 text-center text-orange-500 font-bold"><?php echo ($item['EstadoNombre']) ?></td>
                        <td class="p-2.5 text-center">
                            <form action="../Controllers/controller_editarCompra.php" method="post">
                                <input type="hidden" name="id" value="<?php echo ($item['ID']) ?>">
                                <button name="btn" class="bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">Editar</button>
                            </form>

                            <form action="../Controllers/controller_editarCompra.php" method="post">
                                <input type="hidden" name="id" value="<?php echo ($item['ID']) ?>">
                                <button name="cancelar" class="bg-red-500 text-white px-4 py-2 rounded hover:scale-105 transition-all">Rechazar</button>
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