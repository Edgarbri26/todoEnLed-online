<?php require __DIR__ . '/../../Public/templates/head.php'; ?>



<?php
// session_start();
?>

<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<?php if (isset($_GET['error']) && $_GET['error'] === 'product_exists'): ?>
  <script>
    Swal.fire({
      title: 'Producto ya en el carrito',
      text: 'Este producto ya está agregado en tu carrito.',
      icon: 'error'
    });
  </script>
<?php endif; ?>

<?php
if (isset($_SESSION['rol'])) {
  $rol = $_SESSION['rol'];
  $usuario = $_SESSION['username'];
  $presentasion = $_SESSION['presentasion'];
  if($presentasion){
  ?>
    <script>
    Swal.fire({
      title: 'Bienvenido <?php echo "$usuario"?>.',
      text: 'Tu tienda para accesorios de carros.',
      icon: 'success'
    });
  </script>
  <?php
  $_SESSION['presentasion'] = false;
  }
} else {
  $rol = 2;
}
if ($rol == 1) {
  header('Location: /todoEnLed-online/app/views/view_homeAdmin.php');
  exit;
} else if ($rol == 3) {
  header('Location: /todoEnLed-online/app/views/view_homeEmpleado.php');
  exit;
}
require __DIR__ . '/../../Public/templates/header.php';
?>

<main class="main-container">
  <section class=" mx-2.5 text-center max-w-screen-xl " id="inicio">
    <h1 class=' font-bold text-6xl '>Tu camino, <br>Tu estilo,  <span class=' text-verde-principal'>Todo en LED.</span></h1>
    <p class=' text-2xl text-gray-600 font-medium'>todo en accesorios para carros</p>
  </section>

  <?php if ($rol != 3): ?>
    <h2 class=" text-4xl text-verde-principal my-5 text-center font-bold">Ultimo agregado</h2>
    <section class=" grid grid-cols-1 my-2.5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-2.5">
      <?php foreach ($products as $row): ?>
        <a href="/todoEnLed-online/app/Controllers/controller_product.php?id=<?php echo $row['id']; ?>"> 
          <card-product class="hover:scale-105 transition-all duration-300" id="<?php echo $row['id']; ?>" name="<?php echo $row['nombre']; ?>" price="<?php echo $row['precio']; ?>" desc="<?php echo $row['descripcion']; ?>" img="<?php echo $row['img']; ?>"></card-product>
        </a>
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

<?php require __DIR__ . '/../../Public/templates/footer.php'; ?>