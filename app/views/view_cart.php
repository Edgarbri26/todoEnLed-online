<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/header.php'; ?>
<?php require_once __DIR__ . '/../../Public/db.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($_SESSION['error_stock']) && $_SESSION['error_stock'] == true): ?>
  <script>
    Swal.fire({
      title: 'Stock insuficiente',
      text: 'No hay suficiente stock disponible para este producto.',
      icon: 'warning'
    });
  </script>
<?php endif; ?>
<?php 
// Limpiar la variable de sesión después de mostrar el alert
if (isset($_SESSION['error_stock'])) {
    unset($_SESSION['error_stock']);
}
?>

<body class="bg-gray-50 font-sans">
  <main class="main-container">
    <section class="flex gap-4 items-center justify-center">
        <h1 class="text-6xl font-bold text-center mb-10">Carrito de <span class="text-verde-principal">compra</span></h1>
    </section>


    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!--artiiculos en el carrito-->
      <article class="lg:col-span-2 bg-white p-6 rounded-xl shadow">

          <table class="w-full text-sm text-left overflow-x-auto h-auto ">
            <thead class="border-b">
              <tr class="text-gray-400">
                <th class="py-2">Producto</th>
                <th class="py-2 text-center">Cantidad</th>
                <th></th>
                <th class="py-2 text-right">Precio</th>
              </tr>
            </thead>
            <tbody>

            <?php
    $acumulador = 0;
    $total = 0;
    $productos = [];
    $cant = [];
    foreach ($carrito as $item) {
        $productId = $item['id_producto'];
        $cantidad = $item['cantidad'];
        $productos[] = $productId; 
        $cant[] = $cantidad;
            

            ?>
            <tr class="border-t border-t-gray-300 ">
                <td class="py-4 flex items-center space-x-4">
                    <img src="<?php echo ($item['img']); ?>" class="w-16 h-16 object-cover rounded" alt="cornetas">
                    <div>
                        <p class="font-semibold"><?php echo ($item['nombre']); ?></p>
                        <p class="text-gray-500 text-sm"><?php echo ($item['descripcion']); ?></p>
                    </div>
                </td>
                <td class="text-center">
                    <div class="inline-flex items-center space-x-1">
                      <form action="../Controllers/controller_gestionCart.php" method="post">
                        <input type="hidden" name="id" value="<?php echo "$productId"?>">
                        <button type="submit" name="restar" class="border border-gray-200 rounded-l-2xl px-2 py-1 h-8 w-8"> - </button>
                      </form>
                        <span class="px-2"><?php echo ($cantidad); ?></span>
                        <form action="../Controllers/controller_gestionCart.php" method="post">
                          <input type="hidden" name="id" value="<?php echo "$productId"?>">
                          <button type="submit" name="sumar" class="border border-gray-200 rounded-r-2xl px-2 py-1 h-8 w-8">+</button>
                        </form>
                    </div>
                </td>
                <td class="">
                  <form action="../Controllers/controller_gestionCart.php" method="post">
                    <input type="hidden" name="id" value="<?php echo "$productId"?>">
                    <button type="submit" name="eliminar" class="ml-2 text-gray-400 hover:text-red-500">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                  </form>
                </td>
                <td class="text-right text-verde-principal font-bold">
                    <?php echo ($item['precio']) . " $"; ?>
                </td>
            </tr>

            <?php
            $resultado = $cantidad * $item['precio'];
            $acumulador += $resultado;
          }
          $total = 0;
          $total = $acumulador + ($acumulador * 0.21);
?>

            
              
            </tbody>
          </table>
          <form action="../Controllers/controller_gestionCart.php" method="post">
            <input type="hidden" name="id" value="<?php echo ($item['id_user']); ?>">
            <button type="submit" name="eliminarTodo" class=" text-white mt-6 flex items-center bg-verde-principal border border-gray-300 px-4 py-2 rounded hover:bg-verde-principal/80 hover:cursor-pointer transition-all duration-300">
              <i class="fa-solid fa-trash mr-2"></i>  Vaciar carrito
            </button>
          </form>
      </article>
      


      <!--resumen -->
      <article class="bg-white p-6 rounded-xl shadow sticky top-6 h-fit">
        <h2 class="text-lg font-semibold mb-4">Resumen de compra</h2>
        <div class="flex justify-between text-sm mb-2">
          <span>Subtotal</span>
          <span><?php echo ($acumulador); ?> $</span>
        </div>
        <div class="flex justify-between text-sm mb-4">
          <span>Cuota IVA (21 %)</span>
          <span>0,21 $</span>
        </div>
        <div class="flex justify-between font-bold text-lg border-t border-t-gray-300 pt-4 mb-4">
          <span>Total</span>
          <span><?php echo ($total); ?> $</span>
        </div>

        <label class="inline-flex items-start text-xs">
          <input type="checkbox" class="mr-2 mt-1" required>
          <span>Leo y acepto las <a href="#" class="text-blue-600 hover:underline">Condiciones generales de Contratación</a> y <a href="#" class="text-blue-600 hover:underline">Política de privacidad</a></span>
        </label>

        <form action="../Controllers/controller_gestionCart.php" method="post">
          <input type="hidden" name="usuario" value="<?php echo ($_SESSION['username']); ?>">
          <input type="hidden" name="productos" value='<?php echo json_encode($productos); ?>'>
          <input type="hidden" name="cantidad" value='<?php echo json_encode($cant); ?>'>
          <input type="hidden" name="total" value="<?php echo ($total); ?>">
          <button type="submit" name="orden"
          class="w-full opacity-80 bg-verde-principal text-white py-2 rounded mt-4 hover:opacity-100 transition-opacity duration-300 hover:cursor-pointer">
            Pagar compra
          </button>
        </form>
</article>
    </section>
  </main>
</body>
</html>

</body>

<?php require '../../Public/templates/footer.php'; ?>