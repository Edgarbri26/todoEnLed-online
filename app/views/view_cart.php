<?php require '../../Public/templates/header.php'; 
?>


<body class="bg-gray-50 font-sans">
  <main class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Carrito de compra</h1>

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
              <tr class="border-t border-t-gray-300 ">
                <td class="py-4 flex items-center space-x-4">
                  <img src="../../Public/img/productos/corneta.jpg" class="w-16 h-16 object-cover rounded" alt="cornetas">
                  <div>
                    <p class="font-semibold">Cornetas</p>
                    <p class="text-gray-500 text-sm">Dual Track Matte</p>
                  </div>
                </td>
                <td class="text-center">
                  <div class="inline-flex items-center space-x-1">
                    <button type="button" class="border border-gray-200 rounded-l-2xl px-2 py-1 h-8 w-8"> - </button>
                    <span class="px-2">1</span>
                    <button type="button" class="border border-gray-200 rounded-r-2xl px-2 py-1 h-8 w-8">+</button>
                  </div>
                </td>
                <td class="">
                  <button type="button" class="ml-2 text-gray-400 hover:text-red-500">
                      🗑️
                    </button>
                </td>
                <td class="text-right text-verde-principal font-semibold">
                  $59.99
                </td>
              </tr>
              <tr class="border-t border-t-gray-300 ">
                <td class="py-4 flex items-center space-x-4">
                  <img src="../../Public/img/productos/corneta.jpg" class="w-16 h-16 object-cover rounded" alt="cornetas">
                  <div>
                    <p class="font-semibold">Cornetas</p>
                    <p class="text-gray-500 text-sm">Dual Track Matte</p>
                  </div>
                </td>
                <td class="text-center">
                  <div class="inline-flex items-center space-x-1">
                    <button type="button" class="border border-gray-200 rounded-l-2xl px-2 py-1 h-8 w-8"> - </button>
                    <span class="px-2">1</span>
                    <button type="button" class="border border-gray-200 rounded-r-2xl px-2 py-1 h-8 w-8">+</button>
                  </div>
                </td>
                <td class="">
                  <button type="button" class="ml-2 text-gray-400 hover:text-red-500">
                      🗑️
                    </button>
                </td>
                <td class="text-right text-verde-principal font-semibold">
                  $59.99
                </td>
              </tr>
              <tr class="border-t border-t-gray-300 ">
                <td class="py-4 flex items-center space-x-4">
                  <img src="../../Public/img/productos/corneta.jpg" class="w-16 h-16 object-cover rounded" alt="cornetas">
                  <div>
                    <p class="font-semibold">Cornetas</p>
                    <p class="text-gray-500 text-sm">Dual Track Matte</p>
                  </div>
                </td>
                <td class="text-center">
                  <div class="inline-flex items-center space-x-1">
                    <button type="button" class="border border-gray-200 rounded-l-2xl px-2 py-1 h-8 w-8"> - </button>
                    <span class="px-2">1</span>
                    <button type="button" class="border border-gray-200 rounded-r-2xl px-2 py-1 h-8 w-8">+</button>
                  </div>
                </td>
                <td class="">
                  <button type="button" class="ml-2 text-gray-400 hover:text-red-500">
                      🗑️
                    </button>
                </td>
                <td class="text-right text-verde-principal font-semibold">
                  $59.99
                </td>
              </tr>
            </tbody>
          </table>
         <button class="mt-6 flex items-center bg-verde-principal border border-gray-300 px-4 py-2 rounded hover:bg-red-100">
          🗑 Vaciar carrito
        </button>
      </article>
      


      <!--resumen -->
      <article class="bg-white p-6 rounded-xl shadow sticky top-6 h-fit">
        <h2 class="text-lg font-semibold mb-4">Resumen de compra</h2>
        <div class="flex justify-between text-sm mb-2">
          <span>Descuentos</span>
          <span class="text-green-600">26,00 $</span>
        </div>
        <div class="flex justify-between text-sm mb-2">
          <span>Subtotal</span>
          <span>2,95 $</span>
        </div>
        <div class="flex justify-between text-sm mb-4">
          <span>Cuota IVA (21 %)</span>
          <span>0,62 $</span>
        </div>
        <div class="flex justify-between font-bold text-lg border-t border-t-gray-300 pt-4 mb-4">
          <span>Total</span>
          <span>3,57 $</span>
        </div>

        <label class="inline-flex items-start text-xs">
          <input type="checkbox" class="mr-2 mt-1">
          <span>Leo y acepto las <a href="#" class="text-blue-600 hover:underline">Condiciones generales de Contratación</a> y <a href="#" class="text-blue-600 hover:underline">Política de privacidad</a></span>
        </label>

        <button type="button" 
        class="w-full opacity-80 bg-verde-principal text-white py-2 rounded mt-4 hover:opacity-100 transition-opacity duration-300 hover:cursor-pointer">
          Pagar compra
        </button>
</article>
    </section>
  </main>
</body>
</html>

</body>

<?php require '../../Public/templates/footer.php'; ?>