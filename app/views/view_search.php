<?php require '../../Public/templates/header.php'; ?>

      <?php if($_SESSION['rol'] != 3): ?>
        <a href='src/php/cart.php' class='container-cart'>
          <!-- SVG carrito aquí -->
          <h3 id='counter-product'></h3>
        </a>
      <?php endif; ?>
    </div>
</header>

<h1>Resultados</h1>

<?php if(!empty($products)): ?>
    <?php foreach($products as $row): ?>
        <div class='product-container'>
            <a id="<?php $row['id'] ?>" href='src/php/product.php'>
                <img class='img-product' src='<?php htmlspecialchars($row['img']) ?>' alt='<?php htmlspecialchars($row['nombre']) ?>' />
            </a>
            <h3 class='product-name'><?php htmlspecialchars($row['nombre']) ?></h3>
            <p>Disponible: <?php $row['stock'] ?></p>
            <span class='cost'>$ <?php $row['precio'] ?></span>
            <button type='button' class='btn' onclick='agregarAlCarrito(<?php $row['id'] ?>)'>
                <span class='icon'>
                    <svg viewBox='0 0 175 80' width='40' height='40'>
                        <rect width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                        <rect y='30' width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                        <rect y='60' width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                    </svg>
                </span>
                <span class='text'>Add</span>
            </button>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No se encontró ese producto</p>
<?php endif; ?>

</body>
</html>
