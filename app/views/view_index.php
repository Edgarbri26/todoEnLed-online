<?php require __DIR__ . '/../../Public/templates/head.php'; ?>
<?php require __DIR__ . '/../../Public/templates/header.php'; ?>


<?php
// session_start();
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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


?>

<main class="main-container">
  <!-- el titulo se encuentra en el archivo titulo.php -->
  <?php require '../../Public/templates/titulo.php'; ?>

    <h2 class=" text-4xl text-verde-principal my-5 text-center font-bold mt-10 mb-5">Ultimo agregado</h2>
    <section class="grid grid-cols-1 my-2.5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-2.5 mb-10">
      <?php $cont = 0; foreach ($products as $row): ?>
        <?php if($cont < 4 && $row['id_categoria'] == 1): ?>
          <?php $cont++; ?>
        <a href="/todoEnLed-online/app/Controllers/controller_product.php?id=<?php echo $row['id']; ?>"> 
          <card-product class="hover:scale-105 transition-all duration-300" stock="<?php echo $row['stock']; ?>" id="<?php echo $row['id']; ?>" name="<?php echo $row['nombre']; ?>" price="<?php echo $row['precio']; ?>" desc="<?php echo $row['descripcion']; ?>" img="<?php echo $row['img']; ?>"></card-product>
        </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </section>

    <h2 class=" text-4xl text-verde-principal my-5 text-center font-bold mt-10 mb-5">Seguridad</h2>
    <section class="grid grid-cols-1 my-2.5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-2.5 mb-10">
      <?php $cont = 0; foreach ($products as $row): ?>
        <?php if($cont < 4 && $row['id_categoria'] == 2): ?>
          <?php $cont++; ?>
          <a href="/todoEnLed-online/app/Controllers/controller_product.php?id=<?php echo $row['id']; ?>"> 
            <card-product class="hover:scale-105 transition-all duration-300" stock="<?php echo $row['stock']; ?>" id="<?php echo $row['id']; ?>" name="<?php echo $row['nombre']; ?>" price="<?php echo $row['precio']; ?>" desc="<?php echo $row['descripcion']; ?>" img="<?php echo $row['img']; ?>"></card-product>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </section>

    <h2 class=" text-4xl text-verde-principal my-5 text-center font-bold mt-10 mb-5">Iluminación</h2>
    <section class="grid grid-cols-1 my-2.5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-2.5 mb-10">
      <?php $cont = 0; foreach ($products as $row): ?>
        <?php if($cont < 4 && $row['id_categoria'] == 3): ?>
          <?php $cont++; ?>
        <a href="/todoEnLed-online/app/Controllers/controller_product.php?id=<?php echo $row['id']; ?>"> 
          <card-product class="hover:scale-105 transition-all duration-300" stock="<?php echo $row['stock']; ?>" id="<?php echo $row['id']; ?>" name="<?php echo $row['nombre']; ?>" price="<?php echo $row['precio']; ?>" desc="<?php echo $row['descripcion']; ?>" img="<?php echo $row['img']; ?>"></card-product>
        </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </section>

    <h2 class=" text-4xl text-verde-principal my-5 text-center font-bold mt-10 mb-5">Audio</h2>
    <section class="grid grid-cols-1 my-2.5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-2.5 mb-10">
      <?php $cont = 0; foreach ($products as $row): ?>
        <?php if($cont < 4 && $row['id_categoria'] == 4): ?>
          <?php $cont++; ?>
          <a href="/todoEnLed-online/app/Controllers/controller_product.php?id=<?php echo $row['id']; ?>"> 
            <card-product class="hover:scale-105 transition-all duration-300" stock="<?php echo $row['stock']; ?>" id="<?php echo $row['id']; ?>" name="<?php echo $row['nombre']; ?>" price="<?php echo $row['precio']; ?>" desc="<?php echo $row['descripcion']; ?>" img="<?php echo $row['img']; ?>"></card-product>
          </a>
        <?php endif; ?>
      <?php endforeach; ?> 
    </section>


</main>

<!--script src="src/js/compents/todoEnLed-header.js"></-script-->
<script src="../../Public/js/components/cardProduct.js"></script>

<?php if (isset($_SESSION['compra_en_proceso']) && $_SESSION['compra_en_proceso']): ?>
  <script>
    // Abrir WhatsApp en una nueva ventana
    window.open("https://wa.me/<?php echo $_SESSION['wa_numero']; ?>?text=<?php echo $_SESSION['wa_mensaje']; ?>", "_blank");
    // Mostrar alerta
    Swal.fire({
      title: 'Compra en proceso',
      text: 'Tu compra está siendo procesada. Pronto nos comunicaremos contigo.',
      icon: 'info'
    });
  </script>
  <?php
    $_SESSION['compra_en_proceso'] = false;
    unset($_SESSION['wa_numero']);
    unset($_SESSION['wa_mensaje']);
  ?>
<?php endif; ?>

<?php if (isset($_SESSION['add_cart']) && $_SESSION['add_cart']): ?>
  <script>
    Swal.fire({
      title: 'Producto agregado al carrito',
      text: 'El producto ha sido agregado al carrito.',
      icon: 'success'
    });
  </script>
  <?php
    $_SESSION['add_cart'] = false;
  ?>
<?php endif; ?>

<?php require __DIR__ . '/../../Public/templates/footer.php'; ?>
