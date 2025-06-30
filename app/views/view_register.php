<?php
require_once '../../Public/templates/head.php';
?>
<main class="bg-gray-100 flex items-center justify-center min-h-screen m-2.5">
  <div class="bg-white shadow-md rounded-md w-full max-w-md p-6">
    <h2 class="text-2xl font-semibold text-center mb-6">Crear nueva cuenta</h2>

      <form action="/todoEnLed-online/app/Controllers/controller_register.php" method="POST" class="space-y-4">
      <!-- Nombre -->
      <div>
        <label for="nombre" class="block text-gray-700 mb-1">Nombre</label>
        <input 
          type="text" 
          id="nombre" 
          name="nombre" 
          required 
          placeholder="Nombre" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal"
        >
      </div>

      <!-- Apellido -->
      <div>
        <label for="apellido" class="block text-gray-700 mb-1">Apellido</label>
        <input 
          type="text" 
          id="apellido" 
          name="apellido" 
          required 
          placeholder="Apellido" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal"
        >
      </div>

      <!-- Correo -->
      <div>
        <label for="correo" class="block text-gray-700 mb-1">Correo electrónico</label>
        <input 
          type="email" 
          id="correo" 
          name="correo" 
          required 
          placeholder="correo@ejemplo.com" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal"
        >
      </div>

      <!-- Telefono -->
      <div>
        <label for="telefono" class="block text-gray-700 mb-1">Teléfono</label>
        <input 
          type="tel" 
          id="telefono" 
          name="telefono" 
          required 
          placeholder="584123456789" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal"
        >
      </div>

      <!-- Usuario -->
      <div>
        <label for="usuario" class="block text-gray-700 mb-1">Usuario</label>
        <input 
          type="text" 
          id="usuario" 
          name="usuario" 
          required 
          placeholder="usuario" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal"
        >
      </div>

      <!-- Contraseña -->
      <div>
        <label for="contrasena" class="block text-gray-700 mb-1">Contraseña</label>
        <input 
          type="password" 
          id="contrasena" 
          name="contrasena" 
          required 
          placeholder="********" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal"
        >
      </div>

      <!-- Confirmar contraseña -->

      <div>
        <label for="confirmar_contrasena" class="block text-gray-700 mb-1">Confirmar contraseña</label>
        <input 
          type="password" 
          id="confirmar_contrasena" 
          name="confirmar_contrasena" 
          required 
          placeholder="********" 
          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-verde-principal"
        >
      </div>


          <!-- Botón Registrar -->
      <button type="submit" class="w-full bg-verde-principal hover:bg-verde-menta text-white font-semibold py-2 rounded-md transition duration-200 shadow-md">
        Registrar
      </button>
    </form>
  </div>
</main>
</html>
