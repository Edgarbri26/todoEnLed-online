<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/headerEmpleado.php'; ?>

    <main class="main-container">
        <div class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Gestión de Productos</h1>

    <!-- Botón agregar producto -->
      <section class="flex justify-between mb-4">
        <form class="flex justify-start h-12 pr-20  w-lg" action="/todoEnLed-online/app/Controllers/controller_search.php" method="post" >
          <input type="text" placeholder="Buscar..." name="text" class="bg-verde-menta pl-1.5  rounded-sm w-full focus:border-2 focus:border-verde-principal focus:outline-none" required>

          <button type="submit" name="search" 
          class="flex justify-center items-center bg-verde-principal h-12 w-12 -translate-x-10 rounded-sm " >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM14 8a6 6 0 11-12 0 6 6 0 0112 0z" clip-rule="evenodd" />
            </svg>
          </button>
        </form>

        <button class=" bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">+ Agregar Producto</button>
      </section>

    <section>
        
        <!-- Tabla de productos -->
      <table class="w-full text-sm text-left overflow-x-auto h-auto ">
        <thead class="border-b">
            <tr class="text-gray-400">
              <th class="py-2">Producto</th>
              <th class="py-2 text-center">Stock</th>
              <th class="py-2 text-center">Categoria</th>
              <th class="py-2 text-center">Precio</th>
              <th class="py-2 text-right">Edit</th>
            </tr>
        </thead>
        <tbody>


        <?php 
        foreach($prod as $item){
         ?>
          
          <tr class="border-t border-t-gray-300 ">
            <td class="py-4 flex items-center space-x-4">
              <img src="<?php echo ($item['img']); ?>" class="w-16 h-16 object-cover rounded" alt="cornetas">
              <div>
                <p class="font-semibold"><?php echo ($item['nombre']); ?></p>
                <!-- la descripcion -->
                <p class="text-gray-500 text-sm"><?php echo ($item['descripcion']); ?></p>
              </div>
            </td>
            <td class="text-center font-bold">
              <span class="px-2"><?php echo ($item['stock']); ?></span>
            </td>
            <td class="text-center font-semibold">
              Sonido
            </td>
            <td class="text-center text-verde-principal font-semibold">
              <?php echo ($item['precio']); ?>
            </td>
            <td class=" text-right">
              <button class=" bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">Edit</button>
            </td>
          </tr>

          <?php
        }            
        
        ?>

        </tbody>
      </table>
    </section>
  </main>

<script src="/Public/js/script.js"></script>

<?php require '../../Public/templates/footer.php'; ?>