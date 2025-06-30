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
            <a href="/todoEnLed-online/app/Controllers/controller_adminProducto.php">
                <i class="fa-solid fa-arrow-left text-4xl mb-10 text-verde-principal rounded-full "></i>
            </a>
            <h1 class="text-6xl font-bold text-center mb-10">Agregar <span class="text-verde-principal">Producto</span></h1>
        </section>
        <section class=" mt-5 flex justify-center items-center">
            <article class=" mt-5 bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
                <form enctype="multipart/form-data" class="flex flex-col gap-2" action="../Controllers/controller_editarProducto.php" method="post">
                    <div class="mb-4">
                        <label class="block mb-1 font-medium" for="nombre">Nombre</label>
                        <input required type="text" id="nombre" name="nombre"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-medium" for="precio">Precio</label>
                        <input required type="number" id="precio" name="precio" step="0.01"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-medium" for="stock">Stock</label>
                        <input required type="number" id="stock" name="stock"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-medium" for="descripcion">Descripción</label>
                        <textarea required id="descripcion" name="descripcion"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-medium" for="img">Imagen</label>
                        <input required type="file" id="img" name="img" accept="image/*"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                        <img src="" alt="" id="preview" class="w-full h-auto mb-2">
                        <input type="hidden" id="img_url" name="img">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-medium" for="id_categoria">Categoría</label>
                        <select id="id_categoria" name="id_categoria"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                            <option value="">Seleccionar categoría</option>
                            <option value="1">Nuevo</option>
                            <option value="2">Seguridad</option>
                            <option value="3">Iluminacion</option>
                            <option value="4">Pitos y Sirenas</option>
                        </select>
                    </div>
                    <button type="submit" name="agregar"
                        class="w-full bg-verde-principal text-white py-2 rounded hover:bg-green-500 cursor-pointer transition-all duration-300">
                        Agregar Producto
                    </button>
                </form>
            </article>
        </section>
    </main>
</body>

<?php require '../../Public/templates/footer.php'; ?>