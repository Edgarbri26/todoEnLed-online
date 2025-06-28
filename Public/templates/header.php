<body class="bg-white">
  <header class=" bg-azul-principal shadow sticky top-0 z-50 px-24 text-center">
    <div class="max-w-screen-xl mx-auto px-4 py-4 grid grid-cols-[1fr_auto_1fr] items-center">
      <!-- Search icon -->
   <div class="flex items-center space-x-4">
  <form method="get" action="" class="relative flex items-center bg-white rounded-full shadow-lg px-3 py-1 border-2 border-[#0057FF] hover:border-[#25D366] transition-all duration-300">
    <!-- Icono lupa SVG a la izquierda, siempre visible -->
    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#25D366] pointer-events-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#25D366" stroke-width="2">
        <circle cx="11" cy="11" r="7" stroke="#25D366" stroke-width="2" fill="none"/>
        <line x1="16.5" y1="16.5" x2="21" y2="21" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </span>
    <input 
      id="searchInput"
      type="text" 
      name="search" 
      placeholder="Buscar producto..." 
      class="pl-10 pr-10 bg-transparent focus:outline-none py-2 rounded-full text-[#0057FF] placeholder:text-[#25D366] font-semibold w-48 md:w-64 transition-all duration-300"
      value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>"
      autocomplete="off"
    >
    <!-- Botón X para limpiar, solo visible si hay texto -->
    <button
      type="button"
      id="clearSearch"
      class="absolute right-12 top-1/2 -translate-y-1/2 text-[#0057FF] hover:text-[#25D366] bg-white rounded-full p-1 transition-all duration-300 hidden"
      aria-label="Limpiar búsqueda"
      tabindex="-1"
    >
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <line x1="18" y1="6" x2="6" y2="18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        <line x1="6" y1="6" x2="18" y2="18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>
    <!-- Botón submit a la derecha -->
    <button type="submit" class="flex items-center justify-center bg-[#25D366] hover:bg-[#0057FF] text-white rounded-full w-10 h-10 shadow transition-all duration-300 ml-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
        <circle cx="11" cy="11" r="7" stroke="white" stroke-width="2" fill="none"/>
        <line x1="16.5" y1="16.5" x2="21" y2="21" stroke="white" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>
  </form>
</div>

<script>
  // Mostrar/ocultar la X y borrar el input
  const searchInput = document.getElementById('searchInput');
  const clearBtn = document.getElementById('clearSearch');

  function toggleClearBtn() {
    if (searchInput.value.length > 0) {
      clearBtn.classList.remove('hidden');
    } else {
      clearBtn.classList.add('hidden');
    }
  }

  searchInput.addEventListener('input', toggleClearBtn);

  clearBtn.addEventListener('click', function() {
    searchInput.value = '';
    searchInput.focus();
    toggleClearBtn();
  });

  // Mostrar la X si ya hay texto al cargar
  window.addEventListener('DOMContentLoaded', toggleClearBtn);
</script>




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