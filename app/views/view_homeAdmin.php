<?php require '../../Public/templates/head.php'; ?>
<?php
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1 && $_SESSION['rol'] != 3) {
    header("Location: ../views/Error404.html");
    exit();
}
?>
<?php require '../../Public/templates/headerAdmin.php'; ?>

    <main class="main-container">

    <?php require '../../Public/templates/titulo.php'; ?>

            <h1 class="text-3xl font-bold mb-6 text-verde-principal">Panel Principal</h1>
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Gestion productos-->
                <article class="bg-white rounded-lg shadow p-6 hover:scale-105 transition-all duration-300">
                    <a href="/todoEnLed-online/app/Controllers/controller_adminProducto.php" class="flex flex-col items-center justify-center">
                        <i class="fa-solid fa-box-open text-2xl bg-verde-menta text-verde-principal rounded-full p-4"></i>        
                        <h2 class="text-xl font-semibold mb-2">Productos</h2>
                        <p class="text-gray-500 text-center">Administra el catálogo de productos.</p>
                    </a>
                </article>

                <!-- Gestion compras-->
                <article class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center hover:scale-105 transition-all duration-300">
                    <a href="/todoEnLed-online/app/Controllers/controller_adminCompras.php" class="flex flex-col items-center justify-center">
                        <i class="fa-solid fa-cart-shopping text-2xl bg-verde-menta text-verde-principal rounded-full p-4"></i>        
                        <h2 class="text-xl font-semibold mb-2">Compras</h2>
                        <p class="text-gray-500 text-center">Gestiona las compras de los clientes.</p>
                    </a>
                </article>

                <?php if($_SESSION['rol'] == 1){ ?>
                <!-- Gestion usuarios-->
                <article class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center hover:scale-105 transition-all duration-300">
                    <a href="/todoEnLed-online/app/Controllers/controller_adminUser.php" class="flex flex-col items-center justify-center">
                        <i class="fa-solid fa-user-shield text-2xl bg-verde-menta text-verde-principal rounded-full p-4"></i>        
                        <h2 class="text-xl font-semibold mb-2">Usuarios</h2>
                        <p class="text-gray-500 text-center">Gestiona los permisos y usuarios del sistema.</p>
                    </a>
                </article>
                <!-- Configuración-->
                <article class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center hover:scale-105 transition-all duration-300">
                    <a href="/todoEnLed-online/app/Controllers/controller_config.php" class="flex flex-col items-center justify-center">
                        <i class="fa-solid fa-gear text-2xl bg-verde-menta text-verde-principal rounded-full p-4"></i>        
                        <h2 class="text-xl font-semibold mb-2">Configuración</h2>
                        <p class="text-gray-500 text-center">Configura los textos e imágenes de la página.</p>
                    </a>
                </article>
                <?php } ?>

                <!-- reportes -->
                <!-- <article class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center hover:scale-105 transition-all duration-300">
                    <a href="/todoEnLed-online/app/views/view_reporte.php" class="flex flex-col items-center justify-center">
                        <i class="fa-solid fa-file-invoice text-2xl bg-verde-menta text-verde-principal rounded-full p-4"></i>        
                        <h2 class="text-xl font-semibold mb-2">Reportes</h2>
                        <p class="text-gray-500 text-center">Genera reportes de las ventas.</p>
                    </a>
                </article> -->
                

                
            </section>
    </main>

<?php require '../../Public/templates/footer.php'; ?>
