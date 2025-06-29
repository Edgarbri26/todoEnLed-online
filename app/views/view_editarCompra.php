<?php require '../../Public/templates/head.php'; ?>
<?php
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1 && $_SESSION['rol'] != 3) {
    header("Location: ../views/Error404.html");
    exit();
}
?>
<?php require '../../Public/templates/headerAdmin.php'; ?>

<body class="bg-gray-100">
    <main class="main-container">
        <section class="flex gap-4 items-center justify-center">
            <a href="/todoEnLed-online/app/views/view_gestionCompra.php">
                <i class="fa-solid fa-arrow-left text-4xl mb-10 text-verde-principal rounded-full "></i>
            </a>
            <h1 class="text-6xl font-bold text-center mb-10">Detalle de <span class="text-verde-principal"> Compra</span></h1>
        </section>

        <section class=" mt-5 flex justify-center items-center">
            <article class=" mt-5 bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
                <h2 class="text-2xl font-bold mb-6 text-center">Editar Compra</h2>
                <form class="flex flex-col gap-2" action="../Controllers/controller_editarCompra.php" method="post">

                    <?php

                    foreach ($edit as $item) {
                    ?>
                        <input type="hidden" name="id" value="<?php echo ($item['id_orden']); ?>">

                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="id_categoria">Estado</label>
                            <select id="id_rol" name="estado_id" required
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                                <option value="">Seleccionar estado</option>
                                <option value="1" <?php if ($item['estado_id'] == 1) echo 'selected'; ?>>Pendiente</option>
                                <option value="2" <?php if ($item['estado_id'] == 2) echo 'selected'; ?>>En proceso</option>
                                <option value="3" <?php if ($item['estado_id'] == 3) echo 'selected'; ?>>Entregado</option>
                                <option value="4" <?php if ($item['estado_id'] == 3) echo 'selected'; ?>>Cancelado</option>
                            </select>
                        </div>

                    <?php
                    }

                    ?>

                    <button type="submit" name="edit"
                        class="w-full bg-verde-principal text-white py-2 rounded hover:bg-green-500 cursor-pointer transition-all duration-300">
                        Editar Compra
                    </button>
                </form>
            </article>
        </section>
    </main>
</body>

<?php require '../../Public/templates/footer.php'; ?>