<?php require '../../Public/templates/header.php'; ?>

<main class="max-w-6xl mx-auto px-6 py-10">
    <div class="flex flex-col lg:flex-row gap-6">
      <div class="flex-1 space-y-10">
        <!-- 1. Datos de facturación -->
        <section>
          <h2 class="text-lg font-semibold mb-2">1. Datos de facturación</h2>
          <div class="bg-white p-4 rounded-lg text-sm shadow">
            <p class="font-bold">Edgar Briceño</p>
            <p>31366298</p>
            <p>Barquisimeto, Lara</p>
            <p>3001 Barquisimeto, Centro-Occidental, Venezuela</p>
            <p>edgar@gmail.com - +58.4234564846</p>
            <p class="text-gray-400 text-xs mt-2">Las facturas se emiten siempre con tus datos de cliente y no se pueden cambiar una vez completado el pago.</p>
          </div>
        </section>

        <!-- 2. Productos y servicios -->
        <section>
          <h2 class="text-lg font-semibold mb-2">2. Productos</h2>
          <article class="lg:col-span-2 bg-white p-6 rounded-xl shadow">

          <table class="w-full text-sm text-left overflow-x-auto h-auto ">
            <thead class="border-b">
              <tr class="text-gray-400">
                <th class="py-2">Producto</th>
                <th class="py-2 text-center">Cantidad</th>

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
                    <span class="px-2">1</span>
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
                    <span class="px-2">1</span>
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
                    <span class="px-2">1</span>
                </td>


                <td class="text-right text-verde-principal font-semibold">
                  $59.99
                </td>
              </tr>
            </tbody>
          </table>
      </article>
        </section>

        <!-- 3. Elige una forma de pago -->
        <section>
          <h2 class="text-lg font-semibold mb-2">3. Elige una forma de pago</h2>
          <div class="bg-white p-4 rounded-lg shadow">
            <div class="flex space-x-4 mb-4">
              <button class="flex items-center space-x-2 px-4 py-2 border-2  rounded-lg bg-verde-principal">
                <span>💳</span>
                <span>Tarjeta de crédito</span>
              </button>
              <button class="px-4 py-2 border border-gray-600 rounded-lg">PayPal</button>
              <button class="px-4 py-2 border border-gray-600 rounded-lg">Cashea</button>
            </div>

            <!-- Formulario tarjeta -->
            <div class="space-y-4">
              <input type="text" placeholder="Titular de la tarjeta" class="w-full p-2 rounded bg-verde-menta text-white placeholder-gray-400" />
              <input type="text" placeholder="Número de la tarjeta" class="w-full p-2 rounded bg-verde-menta text-white placeholder-gray-400" />
              <div class="flex space-x-2">
                <input type="text" placeholder="Expiración (MM/AAAA)" class="w-1/2 p-2 rounded bg-verde-menta text-white placeholder-gray-400" />
                <input type="text" placeholder="CVC" class="w-1/2 p-2 rounded bg-verde-menta text-white placeholder-gray-400" />
              </div>
              <label class="flex items-center space-x-2 text-sm">
                <input type="checkbox" class="form-checkbox rounded" />
                <span>Guardar esta tarjeta para próximas compras</span>
              </label>
              <div class="flex items-center space-x-4 mt-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" class="h-6" alt="Visa" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" class="h-6" alt="Mastercard" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/30/American_Express_logo.svg" class="h-6" alt="Amex" />
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- Resumen de compra -->
      <aside class="bg-white p-4 rounded-lg w-full lg:w-1/3 h-fit sticky top-10 self-start shadow ">
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
      </aside>
    </div>
  </main>