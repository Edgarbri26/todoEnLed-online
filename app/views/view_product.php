<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/header.php'; ?>

<main class="main-container">

    <section class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

    <article class="flex space-x-4">
        <div class="flex flex-col space-y-2">
            <img src="../../Public/img/productos/corneta.jpg" alt="Preview 1" class="w-20 h-20 object-cover rounded shadow" />
            <img src="../../Public/img/productos/corneta.jpg" alt="Preview 2" class="w-20 h-20 object-cover rounded shadow" />
            <img src="../../Public/img/productos/corneta.jpg" alt="Preview 3" class="w-20 h-20 object-cover rounded shadow" />
        </div>

        <div class="flex-1">
            <img src="../../Public/img/productos/corneta.jpg" alt="Main Image" class="rounded shadow w-full h-auto" />
        </div>
    </article>

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

<?php require '../../Public/templates/footer.php'; ?>