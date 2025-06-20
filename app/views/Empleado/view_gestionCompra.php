<?php require '../../Public/templates/head.php'; ?>
<?php require '../../Public/templates/header.php'; ?>

    <main class="max-w-7xl mx-auto p-6  min-h-screen">
        <section class="p-2.5 bg-white rounded-2xl shadow">
            <table class="w-full overflow-x-auto h-auto text-sm text-left">
                <thead class="p-2.5">
                    <tr class="text-gray-400" >
                        <th scope="col" class="p-2.5 text-center">Usuario</th>
                        <th scope="col" class="p-2.5 text-center">Productos</th>
                        <th scope="col" class="p-2.5 text-center">Fecha</th>
                        <th scope="col" class="p-2.5 text-center">Monto</th>
                        <th scope="col" class="p-2.5 text-center">Estado</th>
                        <th scope="col" class="p-2.5 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-300 p-2.5">
                        <td class="p-2.5 text-center font-bold">Juan Perez</td>
                        <td>
                            <ul class="flex flex-col gap-1 text-center">
                                <li>Producto 1</li>
                                <li>Producto 2</li>
                                <li>Producto 3</li>
                            </ul>
                        </td>
                        <td class="p-2.5 text-center">2021-01-01</td>
                        <td class="p-2.5 text-center font-bold text-verde-principal">452.000</td>
                        <td class="p-2.5 text-center text-orange-500 font-bold">Pendiente</td>
                        <td class="p-2.5 text-center">
                            <button class="bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">Ver</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded hover:scale-105 transition-all">Rechazar</button>
                        </td>
                    </tr>
                    <tr class="border-t border-gray-300 p-2.5">
                        <td class="p-2.5 text-center font-bold">Juan Perez</td>
                        <td>
                            <ul class="flex flex-col gap-1 text-center">
                                <li>Producto 1</li>
                                <li>Producto 2</li>
                                <li>Producto 3</li>
                            </ul>
                        </td>
                        <td class="p-2.5 text-center">2021-01-01</td>
                        <td class="p-2.5 text-center font-bold text-verde-principal">452.000</td>
                        <td class="p-2.5 text-center text-green-500 font-bold">Entregada</td>
                        <td class="p-2.5 text-center">
                            <button class="bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">Ver</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded hover:scale-105 transition-all">Rechazar</button>
                        </td>
                    </tr>
                    <tr class="border-t border-gray-300 p-2.5">
                        <td class="p-2.5 text-center font-bold">Juan Perez</td>
                        <td>
                            <ul class="flex flex-col gap-1 text-center">
                                <li>Producto 1</li>
                                <li>Producto 2</li>
                                <li>Producto 3</li>
                            </ul>
                        </td>
                        <td class="p-2.5 text-center">2021-01-01</td>
                        <td class="p-2.5 text-center font-bold text-verde-principal">452.000</td>
                        <td class="p-2.5 text-center text-amber-300 font-bold">En proceso</td>
                        <td class="p-2.5 text-center">
                            <button class="bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all">Ver</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded hover:scale-105 transition-all">Rechazar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

<?php require '../../Public/templates/footer.php'; ?>

