<?php require_once '../../Public/templates/head.php'; ?>
<?php
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {
    header("Location: ../views/Error404.html");
    exit();
}
?>
<?php
    require_once '../../Public/templates/headerAdmin.php';
?>


<main class="main-container">
    <section class="flex gap-4 items-center justify-center">
        <a href="/todoEnLed-online/app/views/view_homeAdmin.php">
            <i class="fa-solid fa-arrow-left text-4xl mb-10 text-verde-principal rounded-full "></i>
        </a>
        <h1 class="text-6xl font-bold text-center mb-10">Configuración de <span class="text-verde-principal">Página Inicial</span></h1>
    </section>

    <section class="mt-5 flex justify-center items-center gap-4 ">
        <article class="mt-5 bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
            <h2 class="text-2xl font-semibold mb-6 text-center">Título de la página inicial</h2>
            <form action="../Controllers/controller_config.php" method="post">
                <div class="mb-4">
                    <label for="frase1" class="block mb-1 font-medium">Frase 1</label>
                    <input required type="text" id="frase1" name="frase1" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                </div>
                <div class="mb-4">
                    <label for="frase2" class="block mb-1 font-medium">Frase 2</label>
                    <input required type="text" id="frase2" name="frase2" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                </div>
                <div class="mb-4"></div>
                    <label for="frase3" class="block mb-1 font-medium">Frase 3</label>
                    <input required type="text" id="frase3" name="frase3" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                </div>
                <div class="mt-4 mb-4">
                    <label for="frase4" class="block mb-1 font-medium">Sub título</label>
                    <input required type="text" id="frase4" name="frase4" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                </div>           
                <button type="submit" class="bg-verde-principal text-white px-4 py-2 rounded-md">Guardar</button>
            </form>
        </article>
        <article class="mt-5 bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
            <h2 class="text-2xl font-semibold mb-6 text-center">Banner de la página inicial</h2>
            <form action="../Controllers/controller_config.php" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="banner" class="block mb-1 font-medium">Imagen 1</label>
                    <input required type="file" id="banner1" name="banner1" accept="image/*" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                </div>
                <div class="mb-4">
                    <label for="banner" class="block mb-1 font-medium">Imagen 2</label>
                    <input required type="file" id="banner2" name="banner2" accept="image/*" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                </div>
                
                <div class="mb-4">
                    <label for="banner" class="block mb-1 font-medium">Imagen 3</label>
                    <input required type="file" id="banner3" name="banner3" accept="image/*" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                </div>
                <div class="mb-4">
                    <label for="banner" class="block mb-1 font-medium">Imagen 4</label>
                    <input required type="file" id="banner4" name="banner4" accept="image/*" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
                </div>
                <button type="submit" class="bg-verde-principal text-white px-4 py-2 rounded-md">Guardar</button>
            </form>
        </article>
    </section>
</main>




