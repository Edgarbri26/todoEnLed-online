<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - DARO</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800 font-sans">

  <main class=" flex items-center justify-center h-lvh bg-gray-100 px-4">
    <section class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
      <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">Iniciar sesión</h2>
      
      <form action="../Controllers/controller_login.php" method="post" class="space-y-4">
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
          <input type="text" name="username" id="username" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
          <input type="password" name="password" id="password" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="flex items-center justify-between">
          <label class="flex items-center text-sm">
            <input type="checkbox" class="form-checkbox mr-2"> Recordarme
          </label>
          <a href="" class="text-sm text-blue-600 hover:underline">¿Olvidaste tu contraseña?</a>
        </div>

        <button name="button" type="submit" class="w-full bg-lime-400 text-white font-semibold py-2 rounded hover:bg-lime-500">Iniciar sesión</button>
      </form>

      <p class="text-center text-sm text-gray-600 mt-4">
        ¿No tienes cuenta? <a href="../views/view_register.php" class="text-blue-600 hover:underline">Regístrate</a>
      </p>
    </section>
  </main>
</body>
</html>
