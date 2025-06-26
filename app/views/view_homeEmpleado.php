<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/headerEmpleado.php'; ?>


    <main class="main-container">

    <section class="text-center">
        <h1 class=' font-bold text-6xl '>Tu camino, <br>Tu estilo,  <span class=' text-verde-principal'>Todo en LED.</span></h1>
        <p class=' text-2xl text-gray-600 font-medium mb-12'>todo en accesorios para carros</p>
    </section>

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

                
            </section>
    </main>

<?php require '../../Public/templates/footer.php'; ?>
