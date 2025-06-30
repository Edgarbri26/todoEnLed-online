<?php require '../../Public/templates/head.php'; ?>
<?php
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {
    header("Location: ../views/Error404.html");
    exit();
}
?>
<?php require '../../Public/templates/headerAdmin.php'; ?>

    <main class="main-container">
        <section class="flex gap-4 items-center justify-center">
            <a href="/todoEnLed-online/app/views/view_homeAdmin.php">
                <i class="fa-solid fa-arrow-left text-4xl mb-10 text-verde-principal rounded-full "></i>
            </a>
            <h1 class="text-6xl font-bold text-center mb-10">Gestión de <span class="text-verde-principal">Usuarios</span></h1>
        </section>

    <!-- Botón agregar producto -->
    <!-- <section class="flex flex-col">
        <form action="" method="post" class="flex  justify-center items-center mb-6 relative">
            <input type="text" placeholder="5x5" class="border border-gray-300 rounded px-4 py-2 w-1/2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
            <button class="bg-verde-principal text-white px-6 py-2 rounded-r absolute right-1/4">Buscar</button>
        </form>
    </section> -->
      <!-- <section class="flex justify-between mb-4">
        <form class="flex justify-start h-12 pr-20  w-lg" action="/todoEnLed-online/app/Controllers/controller_search.php" method="post" >
          <input type="text" placeholder="Buscar..." name="text" class="bg-verde-menta pl-1.5  rounded-sm w-full focus:border-2 focus:border-verde-principal focus:outline-none" required>

          <button type="submit" name="search" 
          class="flex justify-center items-center bg-verde-principal h-12 w-12 -translate-x-10 rounded-sm " >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM14 8a6 6 0 11-12 0 6 6 0 0112 0z" clip-rule="evenodd" />
            </svg>
          </button>
        </form>   
      </section>-->


    <section>
        
        <!-- Tabla de productos -->
      <table class="w-full text-sm text-left overflow-x-auto h-auto ">
        <thead class="border-b">
            <tr class="text-gray-400">
              <th class="py-2">Usuario</th>
              <th class="py-2 text-center">Rol</th>
            </tr>
        </thead>
        <tbody>


        <?php 
        foreach($user as $item){
         ?>
          
          <tr class="border-t border-t-gray-300 ">
            <td class="py-4 flex items-center space-x-4">
              <div>
                <p class="font-semibold"><?php echo ($item['user_name']); ?></p>
              </div>
            </td>
            <td class="text-center font-bold">
              <span class="px-2"><?php echo ($item['rol_name']); ?></span>
            </td>
            <td class=" text-right">
              <form action="../Controllers/controller_editarUsuario.php" method="post">
                <input type="hidden" name="id" value="<?php echo ($item['id_user']); ?>">
                <button name="btn" class=" bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">Edit</button>
              </form>
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