<?php require '../../Public/templates/head.php'; ?>
<?php
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {
    header("Location: ../views/Error404.html");
    exit();
}
?>
<?php require '../../Public/templates/headerAdmin.php'; ?>

<body class="bg-gray-100">
    <main class="main-container">
        <section class="flex gap-4 items-center justify-center">
            <a href="/todoEnLed-online/app/views/view_homeAdmin.php">
                <i class="fa-solid fa-arrow-left text-4xl mb-10 text-verde-principal rounded-full "></i>
            </a>
        <h1 class="text-6xl font-bold text-center mb-10">Editar <span class="text-verde-principal">Usuario</span></h1>
        </section>

        <section class=" mt-5 flex justify-center items-center">
            <article class=" mt-5 bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
                <form class="flex flex-col gap-2" action="../Controllers/controller_editarUsuario.php" method="post">

                    <?php

                    foreach ($edit as $item) {
                    ?>
                        <input type="hidden" name="id" value="<?php echo ($item['id_user']); ?>">
                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="nombre">Usuario</label>
                            <input required type="text" id="nombre" name="nombre" value="<?php echo ($item['user_name']); ?>"
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="id_categoria">Nivel de acceso</label>
                            <select id="id_rol" name="id_rol" required
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                                <option value="">Seleccionar nivel de acceso</option>
                                <option value="1" <?php if ($item['id_rol'] == 1) echo 'selected'; ?>>Admin</option>
                                <option value="2" <?php if ($item['id_rol'] == 2) echo 'selected'; ?>>Cliente</option>
                                <option value="3" <?php if ($item['id_rol'] == 3) echo 'selected'; ?>>Empleado</option>
                            </select>
                        </div>

                    <?php
                    }

                    ?>

                    <button type="submit" name="edit"
                        class="w-full bg-verde-principal text-white py-2 rounded hover:bg-green-500 cursor-pointer transition-all duration-300">
                        Editar Usuario
                    </button>
                </form>
            </article>
        </section>
    </main>
</body>

<?php require '../../Public/templates/footer.php'; ?>