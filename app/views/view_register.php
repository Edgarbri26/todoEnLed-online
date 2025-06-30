<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../assets/output.css">
  <title>Registro - Paso Único</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-md rounded-md w-full max-w-md p-6">
    <h2 class="text-2xl font-semibold text-center mb-6">Crear nueva cuenta</h2>

      <form action="todoEnLed-online/public/templates/Proceso_registrar.php" method="POST" class="space-y-4">
      <!-- Nombre -->
      <div>
        <label for="nombre" class="block text-gray-700 mb-1">Nombre*</label>
        <input 
          type="text" 
          id="nombre" 
          name="nombre" 
          required 
          placeholder="Nombre" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#25D366]"
        >
      </div>

      <!-- Apellido -->
      <div>
        <label for="apellido" class="block text-gray-700 mb-1">Apellido*</label>
        <input 
          type="text" 
          id="apellido" 
          name="apellido" 
          required 
          placeholder="Apellido" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#25D366]"
        >
      </div>

      <!-- Correo -->
      <div>
        <label for="correo" class="block text-gray-700 mb-1">Correo electrónico*</label>
        <input 
          type="email" 
          id="correo" 
          name="correo" 
          required 
          placeholder="correo@ejemplo.com" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#25D366]"
        >
      </div>

      <!-- Botón Registrar -->
      <button type="submit" class="w-full bg-[#25D366] hover:bg-[#1eae56] text-white font-semibold py-2 rounded-md transition duration-200 shadow-md">
        Registrar
      </button>
    </form>
  </div>
</body>
</html>
