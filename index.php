
<?php include 'src/php/db.php'; ?>
<?php
  session_start();

  // Inicializa el carrito si no existe
  if (!isset($_SESSION['carrito'])) {
      $_SESSION['carrito'] = [];
      $_SESSION['numProducts'] = 0;
  }

  function agregarAlCarrito($producto) {
      $_SESSION['carrito'][] = $producto;
      $_SESSION['numProducts']++;
  }

  // Agregar un producto (ejemplo)
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['producto'])) {
      agregarAlCarrito($_POST['producto']);
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <link rel="stylesheet" href="src/css/global.css">
    <link rel="stylesheet" href="src/css/inicio.css">
    <link rel="icon" href="assets/logo.ico">
    <title>TodoEnLed</title>
</head>
<body>
  <header>
            <div class="container-header">
                    <div class="logo">
                    <a href="index.php" >
                    <img src="assets/logo.png" alt="Logo TodoEnLed">
                    </a>
                </div>

                <div class="container-search">
                    <input type="search" placeholder="Buscar..." name="text" class="search-input">
                    <button type="button" class="search-button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <nav class="nav-bar">
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Catalogo</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </nav>

                <a href="src/php/cart.php"  class="container-cart">
                    <svg class="" width="28" height="28" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.8 2.2a.8.8 0 1 0 0 1.6h2.803l1.542 14.541a1 1 0 0 0 .995.895h15.055a1 1 0 0 0 .982-.811l2.105-10.91a1 1 0 0 0-.982-1.189H6.48l-.432-4.081a.05.05 0 0 0-.05-.045H1.8Zm4.849 5.726h16.923l-1.873 9.709H7.679l-1.03-9.709Z"></path>
                            <path d="M10.917 23.62a1.909 1.909 0 1 1-3.818 0 1.909 1.909 0 0 1 3.818 0ZM22.372 23.62a1.91 1.91 0 1 1-3.819 0 1.91 1.91 0 0 1 3.819 0Z"></path>
                        </g>
                    </svg>
                    <h3 id="counter-product">
                      <?php 
                        echo  $_SESSION['numProducts'];
                      ?>
                    </h3>
                </a>
            </div>

        </header>
<!--iframe src="https://drive.google.com/file/d/1QaSsHMoC6yMpctV1oup7kzUQPZG_8nJU/preview" width="600" height="400"></!--iframe-->    

  <main>
    <section id="inicio">
            <h1 class="slogan">Tu camino, <br>tu estilo, <span>Todo en LED.</span></h1>
            <p>todo en acesorios para carros</p>
    </section>

    <section id="new" class="new">
            <h2 class="name-section">Nuevo</h2>
            <article id="products-new" class="products-container">
                <?php
                  $sql = "SELECT * FROM products";
                  $result = $conn->query($sql);
                  while($row = $result->fetch_assoc()) {
                    echo "<div class='product-container'>
                                <img class='img-product' src='{$row['img']}' alt='{$row['nombre']}'>
                                <h3 class='product-name'>{$row['nombre']}</h3>
                                <p>Disponible: {$row['stock']}</p>
                                <span class='cost'>$ {$row['precio']}</span>
                                <button type='button' class='btn' onclick='agregarAlCarrito({$row['id']})' >
                                    <span class='icon'>
                                        <svg viewBox='0 0 175 80' width='40' height='40'>
                                            <rect width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                                            <rect y='30' width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                                            <rect y='60' width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                                        </svg>
                                    </span>
                                    <span class='text'>Add</span>
                                </button>
                          </div>";
                  }
                ?>
            </article>
            <a href="">ver mas</a>
        </section>
  </main>

  <form id="formularioPedido" action="src/php/enviar_pedido.php" method="POST" style="display:none;">
    <input type="hidden" name="pedido" id="pedidoInput">
  </form>
  
  <script src="src/js/compents/todoEnLed-header.js"></script>
  <script src="src/js/script.js"></script>
  

</body>
</html>




<!--form method="post">
    <input type="text" name="producto" placeholder="Nombre del producto">
    <button type="submit">Agregar al carrito</button>
</!--form-->