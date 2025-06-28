<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/header.php'; ?>

<?php
// Verificar si el producto existe
if (!isset($product) || !$product) {
    echo '<div class="container mx-auto py-8 text-center">';
    echo '<h1 class="text-2xl font-bold text-red-600 mb-4">Producto no encontrado</h1>';
    echo '<p class="text-gray-600 mb-4">El producto que buscas no existe o ha sido eliminado.</p>';
    echo '<a href="../../app/Controllers/controller_index.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Volver al inicio</a>';
    echo '</div>';
    require '../../Public/templates/footer.php';
    exit;
}

// Valores por defecto
$cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 1;
$color = isset($_POST['color']) ? $_POST['color'] : 'Azul'; // Cambia por el color por defecto de tu producto

// Si se envía el formulario de cantidad
if (isset($_POST['sumar'])) {
    $cantidad++;
}
if (isset($_POST['restar']) && $cantidad > 1) {
    $cantidad--;
}

// Si se selecciona color
if (isset($_POST['color'])) {
    $color = $_POST['color'];
}
?>

<main class="main-container py-8">
  <section class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Galería de miniaturas -->
    <article class="flex items-center space-y-4">
      <div class="flex flex-col items-center space-y-4">
      <img src="<?php echo $product['img']; ?>" alt="Miniatura 1" class="w-16 h-16 object-cover rounded border-2 border-gray-200 cursor-pointer hover:border-verde-principal transition" />
      <img src="<?php echo $product['img']; ?>" alt="Miniatura 1" class="w-16 h-16 object-cover rounded border-2 border-gray-200 cursor-pointer hover:border-verde-principal transition" />
      <img src="<?php echo $product['img']; ?>" alt="Miniatura 1" class="w-16 h-16 object-cover rounded border-2 border-gray-200 cursor-pointer hover:border-verde-principal transition" />
      <img src="<?php echo $product['img']; ?>" alt="Miniatura 1" class="w-16 h-16 object-cover rounded border-2 border-gray-200 cursor-pointer hover:border-verde-principal transition" />
      </div>
      <div class="flex-1 flex items-center justify-center">
        <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['nombre']; ?>" class="rounded-xl shadow-lg w-full h-full max-w-md object-cover" />
      </div>
    </article>

    <article class="flex flex-col md:flex-row gap-8 w-full">

      <div class="flex-1 flex flex-col justify-between">
        <div>
          <h1 class="text-3xl font-bold mb-2"><?php echo $product['nombre']; ?></h1>
          <div class="flex items-center space-x-4 mb-4">
            <span class="text-2xl font-bold text-red-500">$<?php echo $product['precio']; ?></span>
            <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full font-semibold text-sm">40% OFF Extra</span>
          </div>
          <p class="text-gray-600 mb-4"><?php echo $product['descripcion'] ?? 'Descripción del producto.'; ?></p>
          
          <!-- Formulario de cantidad y color -->
          <form method="post" class="space-y-4">
            <!-- Opciones de color -->
            <div>
              <span class="font-semibold">Opciones:</span>
              <div class="flex space-x-2 mt-2">
                <?php
                $colores = ['Azul', 'Rosa', 'Plata', 'Verde'];
                foreach ($colores as $c) {
                  $selected = ($color === $c) ? 'border-2 border-verde-principal text-verde-principal font-bold' : 'hover:bg-gray-100';
                  echo "<button type='submit' name='color' value='$c' class='px-4 py-1 border rounded $selected focus:outline-none'>$c</button>";
                }
                ?>
              </div>
            </div>
            <!-- Selector de cantidad -->
            <div>
              <span class="font-semibold">Cantidad:</span>
              <div class="flex items-center mt-2">
                <button type="submit" name="restar" class="border border-gray-300 rounded-l px-3 py-1 text-lg hover:bg-gray-100">-</button>
                <span class="px-4 py-1 border-t border-b border-gray-300"><?php echo $cantidad; ?></span>
                <button type="submit" name="sumar" class="border border-gray-300 rounded-r px-3 py-1 text-lg hover:bg-gray-100">+</button>
                <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
                <input type="hidden" name="color" value="<?php echo $color; ?>">
              </div>
            </div>
            <!-- Botón agregar al carrito -->
            <button type="submit" formaction="../Controllers/controller_cart.php" class="w-full h-12 border-2 border-verde-principal text-verde-principal py-3 rounded font-bold text-lg hover:bg-verde-principal hover:text-white transition mt-4">
              Agregar al carrito - $<?php echo $product['precio']; ?>
            </button>
            <button type="button" class="w-full h-12 bg-verde-principal text-white py-3 rounded font-bold text-lg hover:bg-verde-principal hover:text-white transition">Comprar ahora</button>
          </form>
        </div>
      </div>
    </article>
  </section>
</main>

<?php require '../../Public/templates/footer.php'; ?>