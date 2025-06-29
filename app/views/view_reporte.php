<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/headerAdmin.php'; ?>

<main class="main-container ">
    <section class="flex flex-col items-center justify-center">
        <h1 class="text-6xl font-bold text-center mb-10">Reporte de <span class="text-verde-principal">Ventas</span></h1>
    </section>
    <!-- <section class="flex flex-col gap-4 items-center justify-center rounded-lg p-4 bg-white shadow-md">
        <h2 class="text-2xl font-semibold">Filtral por rango de fechas</h2>
        <form action="" method="post">
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
            <input type="date" name="fecha_fin" id="fecha_fin" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal">
            <button type="submit" class="bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">Aplicar</button>
        </form>
    </section> -->

    <section class="flex flex-col items-center justify-center ">
        <h2>Reporte de ventas</h2>
        <table class="text-lg rounded-lg shadow-md w-full mb-4">
            <thead class="mb-4 text-gray-500">
                <tr class="text-center">
                    <th>Empleado</th>
                    <th>Fecha</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr class="text-center border-t border-gray-300 my-2 text-gray-800">
                    <td>Juan Perez</td>
                    <td>2025-01-01</td>
                    <td>100</td>
                </tr>
            </tbody>
        </table>
        <button class="bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">Descargar reporte</button>
    </section>
</main>

<?php require '../../Public/templates/footer.php'; ?>