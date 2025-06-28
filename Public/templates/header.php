<body class="bg-white">
  <header class=" bg-azul-principal shadow sticky top-0 z-50 px-24 text-center">
    <div class="max-w-screen-xl mx-auto px-4 py-4 grid grid-cols-[1fr_auto_1fr] items-center">
      <!-- Search icon -->
      <div class="flex items-center space-x-4">
  <form method="get" action="" class="flex items-center space-x-2">
    <input 
      type="text" 
      name="search" 
      placeholder="Buscar producto..." 
      class="border rounded px-2 py-1"
      value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>"
    >
    <button type="submit" class="text-white hover:text-black">
      <i class="fa-solid fa-magnifying-glass text-2xl hover:text-verde-principal"></i>
    </button>
  </form>
</div>


      <div class="flex flex-col items-center">
        <a href="/todoEnLed-online/app/Controllers/controller_index.php">
        <!--span class="text-xs text-center text-white">TodoEnLed | Tu camino, Tu estilo</!--span-->
          <img src="/todoEnLed-online/Public/img/logo.png" alt="Logo" class="h-10 mt-1" >
        </a>
      </div>


      <div class="flex items-center justify-end space-x-4 h-full">
        <a href="../Controllers/controller_login.php">
          <i class="fa-solid fa-user text-white text-2xl hover:text-verde-principal"></i>
        </a>
        <div class="relative">
          <a href="/todoEnLed-online/app/Controllers/controller_cart.php" class="text-gray-700 hover:text-black">
            <i class="fa-solid fa-cart-shopping text-white text-2xl hover:text-verde-principal "></i>
          </a>
          <span class=" absolute -top-3 -right-2 bg-verde-principal text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">
            <?php 
            if(isset($_SESSION['numProducts'])){

              echo ($_SESSION['numProducts']); 
            }else{
              ?>
              0
              <?php
            }
            ?>
          </span>
        </div>
      </div>
    </div>

    <!-- npavigation -->
    <nav class="">
      <div class="max-w-screen-xl mx-auto px-4 py-2 flex justify-center space-x-6 text-lg font-semibold text-white gap-2.5">
        <a href="#" class="hover:text-verde-principal">New</a>
        <a href="#" class="hover:text-verde-principal">Luces</a>
        <a href="#" class="hover:text-verde-principal">Cornetas</a>
        <a href="#" class="hover:text-verde-principal">Seguiridad</a>
        <a href="#" class="hover:text-verde-principal">oferta</a>
        <a href="#" class="hover:text-verde-principal">faros</a>
        <a href="#" class="hover:text-verde-principal">filtros</a>
        <a href="#" class="hover:text-verde-principal">Leds</a>
      </div>
    </nav>
  </header>