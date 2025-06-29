<?php require __DIR__ . '/../../Public/templates/head.php'; ?>
<?php require __DIR__ . '/../../Public/templates/header.php'; ?>

<?php
// session_start();
?>


<main class="main-container">
    <!-- Search Bar -->
    <section class="flex flex-col">
        <h1 class="text-2xl font-bold text-center mb-6">Busqueda</h1>
        <form action="" method="post" class="flex  justify-center items-center mb-6 relative">
            <input type="text" placeholder="5x5" class="border border-gray-300 rounded px-4 py-2 w-1/2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
            <button class="bg-verde-principal text-white px-6 py-2 rounded-r absolute right-1/4">Buscar</button>
        </form>
    </section>

    <section class="flex gap-6">
      <!-- Sidebar Filter -->
      <aside class=" w-1/5">
        <h3 class="font-semibold mb-4">Filter</h3>

        <div class="mb-6">
          <h4 class="font-medium mb-2">Price</h4>
          <div class="flex gap-2">
            <input type="text" class="border border-gray-300 rounded px-2 py-1 w-1/2" placeholder="$">
            <input type="text" class="border border-gray-300 rounded px-2 py-1 w-1/2" placeholder="$">
          </div>
        </div>

        <div>
          <h4 class="font-medium mb-2">Brand</h4>
          <ul class="space-y-1">
            <li><input type="checkbox" id="mfjs"> <label for="mfjs">mfjs (1)</label></li>
            <li><input type="checkbox" id="moyu"> <label for="moyu">moyu (3)</label></li>
            <li><input type="checkbox" id="qiyi"> <label for="qiyi">qiyi (3)</label></li>
            <li><input type="checkbox" id="yj"> <label for="yj">yj (2)</label></li>
            <li><input type="checkbox" id="yuxin"> <label for="yuxin">yuxin (3)</label></li>
          </ul>
        </div>
      </aside>

      <section class="flex-1 ">
        <!-- num de productos y ordenar por -->
        <article class="flex justify-between items-center mb-4">
          <span class="text-gray-500">32 Products</span>
          <select class="border border-gray-300 rounded px-2 py-1">
            <option>Recommend</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
          </select>
        </article>

        <!-- Products Grid -->
        <article class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- aqui van los productos -->
            <a href="/todoEnLed-online/app/Controllers/controller_product.php?id=15"> 
                <card-product  id="15" name="prueba" price="22.00" desc="borra esto cuando tengas productos" img="https://via.placeholder.com/150"></card-product>
            </a>
        </article>
      </section>
    </section>
  </main>

<script src="../../Public/js/components/cardProduct.js"></script>

<?php require __DIR__ . '/../../Public/templates/footer.php'; ?>