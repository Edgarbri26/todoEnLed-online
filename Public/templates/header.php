<header class="bg-azul-principal shadow sticky top-0 z-50 px-6 md:px-24 text-center">
  <div class="max-w-screen-xl mx-auto px-4 py-4 grid grid-cols-3 items-center">
    <!-- Logo a la izquierda -->
    <div class="flex items-center justify-start">
      <a href="/todoEnLed-online/app/Controllers/controller_index.php">
        <img src="/todoEnLed-online/Public/img/logo.png" alt="Logo" class="h-10 mt-1" >
      </a>
    </div>

    <!-- Input de búsqueda centrado -->
    <div class="flex justify-center">
      <form method="get" action="" class="flex items-center space-x-2 bg-white rounded-full shadow-lg px-3 py-1 border-2 border-[#0057FF] hover:border-[#25D366] transition-all duration-300 w-full max-w-md">
        <span class="flex items-center justify-center">
          <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path d="M13 2L3 14h7v8l10-12h-7V2z" fill="#25D366"/>
          </svg>
        </span>
        <input 
          type="text" 
          name="search" 
          placeholder="Buscar producto..." 
          class="bg-transparent focus:outline-none px-4 py-2 rounded-full text-[#0057FF] placeholder:text-[#25D366] font-semibold w-full transition-all duration-300"
          value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>"
        >
        <button type="submit" class="flex items-center justify-center bg-[#25D366] hover:bg-[#0057FF] text-white rounded-full w-10 h-10 shadow transition-all duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
            <circle cx="11" cy="11" r="7" stroke="#fff" stroke-width="2" fill="none"/>
            <line x1="16.5" y1="16.5" x2="21" y2="21" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </button>
      </form>
    </div>

    <!-- Íconos a la derecha -->
    <div class="flex items-center justify-end space-x-4 h-full">
      <a href="../Controllers/controller_login.php">
        <i class="fa-solid fa-user text-white text-2xl hover:text-verde-principal"></i>
      </a>
      <div class="relative">
        <a href="/todoEnLed-online/app/Controllers/controller_cart.php" class="text-gray-700 hover:text-black">
          <i class="fa-solid fa-cart-shopping text-white text-2xl hover:text-verde-principal"></i>
        </a>
        <span class="absolute -top-3 -right-2 bg-verde-principal text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">
          <?php 
          echo isset($_SESSION['numProducts']) ? $_SESSION['numProducts'] : '0';
          ?>
        </span>
      </div>
    </div>
  </div>

  <!-- Navegación -->
  <nav>
    <div class="max-w-screen-xl mx-auto px-4 py-2 flex justify-center space-x-6 text-lg font-semibold text-white gap-2.5">
      <a href="#" class="hover:text-verde-principal">New</a>
      <a href="#" class="hover:text-verde-principal">Luces</a>
      <a href="#" class="hover:text-verde-principal">Cornetas</a>
      <a href="#" class="hover:text-verde-principal">Seguridad</a>
      <a href="#" class="hover:text-verde-principal">Oferta</a>
      <a href="#" class="hover:text-verde-principal">Faros</a>
      <a href="#" class="hover:text-verde-principal">Filtros</a>
      <a href="#" class="hover:text-verde-principal">Leds</a>
    </div>
  </nav>
</header>