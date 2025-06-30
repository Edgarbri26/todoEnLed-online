<?php require '../../Public/templates/head.php';?>
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
            <a href="/todoEnLed-online/app/Controllers/controller_adminProducto.php">
                <i class="fa-solid fa-arrow-left text-4xl mb-10 text-verde-principal rounded-full "></i>
            </a>    
            <h1 class="text-6xl font-bold text-center mb-10">Editar <span class="text-verde-principal">Producto</span></h1>
        </section>
        <section class=" mt-5 flex justify-center items-center">
            <article class=" mt-5 bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
                <form enctype="multipart/form-data" class="flex flex-col gap-2" action="../Controllers/controller_editarProducto.php" method="post"">

                    <?php

                    foreach ($edit as $item) {
                    ?>
                        <input type="hidden" name="id" value="<?php echo ($item['id']); ?>">
                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="nombre">Nombre</label>
                            <input required type="text" id="nombre" name="nombre" value="<?php echo ($item['nombre']); ?>"
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="precio">Precio</label>
                            <input required type="number" id="precio" name="precio" step="0.01" value="<?php echo ($item['precio']); ?>"
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="stock">Stock</label>
                            <input required type="number" id="stock" name="stock" value="<?php echo ($item['stock']); ?>"
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="descripcion">Descripción</label>
                            <textarea required id="descripcion" name="descripcion"
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal"><?php echo ($item['descripcion']); ?></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="img">Imagen</label>
                            <input type="file" id="img" name="img" accept="image/*" class="mb-2 w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                            <input type="hidden" name="img_actual" value="<?php echo htmlspecialchars($item['img']); ?>">
                            <img id="preview" src="<?php echo htmlspecialchars($item['img']); ?>" alt="Previsualización" class="w-full h-auto mb-2 rounded-md" />
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="id_categoria">Categoría</label>
                            <select id="id_categoria" name="id_categoria" required
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                                <option value="">Seleccionar categoría</option>
                                <option value="1" <?php if ($item['id_categoria'] == 1) echo 'selected'; ?>>Nuevo</option>
                                <option value="2" <?php if ($item['id_categoria'] == 2) echo 'selected'; ?>>Seguridad</option>
                                <option value="3" <?php if ($item['id_categoria'] == 3) echo 'selected'; ?>>Luces</option>
                                <option value="4" <?php if ($item['id_categoria'] == 4) echo 'selected'; ?>>Cornetas</option>
                            </select>
                        </div>

                    <?php
                    }

                    ?>




                    <button type="submit" name="edit"
                        class="w-full bg-verde-principal text-white py-2 rounded hover:bg-green-500 cursor-pointer transition-all duration-300">
                        Editar Producto
                    </button>
                </form>
            </article>
        </section>
    </main>
</body>

<?php require '../../Public/templates/footer.php'; ?>