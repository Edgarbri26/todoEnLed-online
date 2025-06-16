<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" -->

  <link rel="stylesheet" href="../../assets/output.css">
  <!--link rel="stylesheet" href="/todoEnLed-online/Public/css/header.css"-->
  <!--link rel="stylesheet" href="/todoEnLed-online/Public/css/inicio.css"-->
  <link rel="icon" href="/todoEnLed-online/Public/img/logo.ico">
  <title>TodoEnLed</title>
</head>
<body>
  <header class=" bg-azul-principal shadow sticky top-0 z-50 px-24 text-center">
  <div class="max-w-screen-xl mx-auto px-4 py-4 grid grid-cols-[1fr_auto_1fr] items-center">
    <!-- Search icon -->
    <div class="flex items-center space-x-4">
      <button type="button" class=" text-white hover:text-black">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM14 8a6 6 0 11-12 0 6 6 0 0112 0z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>

    <div class="flex flex-col items-center">
      <a href="/todoEnLed-online/app/Controllers/controller_index.php">
      <!--span class="text-xs text-center text-white">TodoEnLed | Tu camino, Tu estilo</!--span-->
        <img src="/todoEnLed-online/Public/img/logo.png" alt="Logo" class="h-10 mt-1" >
      </a>
    </div>


    <div class="flex items-center justify-end space-x-4">
      <a href="../Controllers/controller_login.php" class="text-gray-700 hover:text-black">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </a>
      <div class="relative">
        <a href="/todoEnLed-online/app/views/view_cart.php" class="text-gray-700 hover:text-black">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.293 2.293a1 1 0 00-.207.707V17h16m-7 0a2 2 0 100 4 2 2 0 000-4zm-6 0a2 2 0 100 4 2 2 0 000-4z" />
          </svg>
        </a>
        <span class="absolute -top-1 -right-1 bg-orange-500 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">3</span>
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


<!--header class=" bg-azul-principal flex justify-center">
  <div class=" max-w-7xl grid grid-cols-3 items-center p-4">
    <div class="logo">
      <a href="/todoEnLed-online/app/Controllers/controller_index.php" >
        <img src="/todoEnLed-online/Public/img/logo.png" alt="Logo TodoEnLed"
            class=" w-28 object-cover">
      </a>
    </div>

      <form class="container-search flex align-center h-12 pl-4 pr-20  w-lg" action="/todoEnLed-online/app/Controllers/controller_search.php" method="post" >
        <input type="search" placeholder="Buscar..." name="text" class="bg-verde-menta  rounded-2xl w-full" required>

        <button type="submit" class=" s bg-verde-principal h-12 w-12 -translate-x-8 rounded-r-xl " name="search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>

    <!-?php session_start();
    $_SESSION['rol'] = 1; // Simulating a user role, replace with actual session data
    if($_SESSION['rol'] != 3){ 
      echo "<a href='/todoEnLed-online/app/views/view_cart.php' class='container-cart'>
        <svg width='28' height='28' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
          <g fill='currentColor'>
            <path fill-rule='evenodd' clip-rule='evenodd' d='M1.8 2.2a.8.8 0 1 0 0 1.6h2.803l1.542 14.541a1 1 0 0 0 .995.895h15.055a1 1 0 0 0 .982-.811l2.105-10.91a1 1 0 0 0-.982-1.189H6.48l-.432-4.081a.05.05 0 0 0-.05-.045H1.8Zm4.849 5.726h16.923l-1.873 9.709H7.679l-1.03-9.709Z'></path>
            <path d='M10.917 23.62a1.909 1.909 0 1 1-3.818 0 1.909 1.909 0 0 1 3.818 0ZM22.372 23.62a1.91 1.91 0 1 1-3.819 0 1.91 1.91 0 0 1 3.819 0Z'></path>
          </g>
        </svg>
        <h3 id='counter-product'></h3>
      </a>";
    }else {

    }
        
        ?>
        <-a href="/todoEnLed-online/Public/index.php" id="btn-login">login</!--a->
  </div>
</!--header-->
