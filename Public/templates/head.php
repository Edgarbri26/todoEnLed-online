<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" -->

  <link rel="stylesheet" href="/todoEnLed-online/assets/output.css">
  <!--link rel="stylesheet" href="/todoEnLed-online/Public/css/header.css"-->
  <!--link rel="stylesheet" href="/todoEnLed-online/Public/css/inicio.css"-->
  <link rel="icon" href="/todoEnLed-online/Public/img/logo.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="/todoEnLed-online/node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script src="/todoEnLed-online/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
  <title>TodoEnLed</title>
</head>
<body class="bg-white">



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
