<?php require __DIR__ . '/../../Public/templates/head.php'; ?>
<?php require __DIR__ . '/../../Public/templates/header.php'; ?>

<?php
// session_start();
?>


<main class="main-container">
    <!-- Search Bar -->
    <section class="flex flex-col">
        <h1 class="text-2xl font-bold text-center mb-6">Busqueda</h1>
        <form action="../Controllers/controller_search.php" method="post" class="flex  justify-center items-center mb-6 relative">
            <input type="search" name="search" placeholder="Buscar producto..." class="border border-gray-300 rounded px-4 py-2 w-1/2 focus:outline-none focus:ring-2 focus:ring-verde-principal " autofocus>
            <button class="bg-verde-principal text-white px-6 py-2 rounded-r absolute right-1/4">Buscar</button>
        </form>
    </section>

    <section class="flex gap-6">
      <!-- Sidebar filtros -->
      <aside class=" w-1/5">
        <h3 class="font-semibold mb-4">Filtros</h3>

        <div class="mb-6">
          <h4 class="font-medium mb-2">Precio</h4>
          <div class="flex gap-2">
            <input type="text" class="border border-gray-300 rounded px-2 py-1 w-1/2" placeholder="$">
            <input type="text" class="border border-gray-300 rounded px-2 py-1 w-1/2" placeholder="$">
          </div>
        </div>

        <!-- <div>
          <h4 class="font-medium mb-2">Brand</h4>
          <ul class="space-y-1">
            <li><input type="checkbox" id="mfjs"> <label for="mfjs">mfjs (1)</label></li>
            <li><input type="checkbox" id="moyu"> <label for="moyu">moyu (3)</label></li>
            <li><input type="checkbox" id="qiyi"> <label for="qiyi">qiyi (3)</label></li>
            <li><input type="checkbox" id="yj"> <label for="yj">yj (2)</label></li>
            <li><input type="checkbox" id="yuxin"> <label for="yuxin">yuxin (3)</label></li>
          </ul>
        </div> -->
      </aside>

      <section class="flex-1 ">
        <!-- num de productos y ordenar por -->
        <?php if (isset($products)): ?>
        <article class="flex justify-between items-center mb-4">
          <span class="text-gray-500"><?php echo count($products); ?> producto<?php echo count($products) === 1 ? '' : 's'; ?> encontrado<?php echo count($products) === 1 ? '' : 's'; ?></span>
          <select class="border border-gray-300 rounded px-2 py-1">
            <option>Recomendado</option>
            <option>Precio: Menor a Mayor</option>
            <option>Precio: Mayor a Menor</option>
          </select>
        </article>

        <!-- Products Grid -->
          <section class="grid grid-cols-1 my-2.5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-2.5 mb-10">
            <?php foreach ($products as $row): ?>
              <a href="/todoEnLed-online/app/Controllers/controller_product.php?id=<?php echo $row['id']; ?>">
                <card-product class="hover:scale-105 transition-all duration-300" stock="<?php echo $row['stock']; ?>" id="<?php echo $row['id']; ?>" name="<?php echo $row['nombre']; ?>" price="<?php echo $row['precio']; ?>" desc="<?php echo $row['descripcion']; ?>" img="<?php echo $row['img']; ?>"></card-product>
              </a>
            <?php endforeach; ?>
          </section>
        <?php elseif (isset($products)): ?>
          <p class="text-center text-red-500 font-bold mt-10">No se encontraron productos para tu búsqueda.</p>
        <?php endif; ?>
      </section>
    </section>
  </main>

<script src="../../Public/js/components/cardProduct.js"></script>

<?php require __DIR__ . '/../../Public/templates/footer.php'; ?>