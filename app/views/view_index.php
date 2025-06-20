<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/header.php'; ?>


<?php
  $rol = 1;
  if($rol == 1){
    header('Location: /todoEnLed-online/app/views/view_homeEmpleado.php');
  }
?>

<main class="main-container">
  <section class=" mx-2.5 text-center max-w-screen-xl mx-au" id="inicio">
    <?php
    if($rol == 3 || $rol == 1){
      $user = ($rol == 1) ? "gerente" : "empleado";
      echo "<h1 class='slogan'>Vista <br> $user, <span>Todo en LED.</span></h1>
            <p>todo en accesorios para carros</p>
            <a href='src/php/vistas/gestionarProducto.php' class='btn'>Gestion de productos</a>
            <button class='btn' type='button'>solicitudes de compra</button>";
    } else {
      echo "<h1 class=' font-bold text-6xl '>Tu camino, <br>Tu estilo,  <span class=' text-verde-principal'>Todo en LED.</span></h1>
            <p class=' text-2xl text-gray-600 font-medium'>todo en accesorios para carros</p>";
    }
    ?>
  </section>



  
  <?php if($rol != 3): ?>
    <h2 class=" text-4xl text-verde-principal my-5 text-center font-bold">Ultimo agregado</h2>
    <section class=" grid grid-cols-1 my-2.5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-2.5">
      <?php foreach($products as $row): ?>
        <card-product class="hover:scale-105 transition-all duration-300" name="<?php echo $row['nombre']; ?>" price="<?php echo $row['precio']; ?>" desc="<?php echo $row['descripcion']; ?>" img="<?php echo $row['img']; ?>"></card-product>
      <?php endforeach; ?>
    </section>
  <?php endif; ?>
  


  <!--?php if($rol != 3): ?>
  <section id="new" class="max-w-screen-xl mx-auto">
    <h2 class="name-section">Nuevo</h2>
    <article id="products-new" class="products-container">
      <-?php foreach($products as $row): ?>
        <div class="product-container">
          <a id="<-?php echo $row['id']; ?>" href="src/php/product.php">
            <img class="img-product" src="<-?php echo $row['img']; ?>" alt="<-?php echo $row['nombre']; ?>">
          </a>
          <h3 class="product-name"><-?php echo $row['nombre']; ?></h3>
          <p>Disponible: <-?php echo $row['stock']; ?></p>
          <span class="cost">$ <-?php echo $row['precio']; ?></span>
          <form method="post" style="display:inline;" action="../Controllers/controller_cart.php">
            <input type="hidden" name="producto" value="<-?php echo $row['id']; ?>">
            <button type="submit" class="btn">
              <span class="icon">
                <svg viewBox='0 0 175 80' width='40' height='40'>
                  <rect width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                  <rect y='30' width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                  <rect y='60' width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                </svg>
              </span>
              <span class="text">Add</span>
            </button>
          </form>
        </div>
      <-?php endforeach; ?>
    </article>
    <a href="">ver más</a>
  </section>
  <-?php endif; ?-->
</main>

<!--script src="src/js/compents/todoEnLed-header.js"></-script-->
<script src="../../Public/js/components/cardProduct.js"></script>

<?php require '../../Public/templates/footer.php'; ?>
