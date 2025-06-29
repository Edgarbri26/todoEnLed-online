<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/header.php'; ?>

<main class="main-container">
    <h1>Resultados</h1>
</main>



      <?php if($_SESSION['rol'] != 3): ?>
        <a href='src/php/cart.php' class='container-cart'>
          <!-- SVG carrito aquí -->
          <h3 id='counter-product'></h3>
        </a>
      <?php endif; ?>
    </div>
</header>

    <main class="main-container">
        <h1>Resultados</h1>
    </main>

</body>
</html>
