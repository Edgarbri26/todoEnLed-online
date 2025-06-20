<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../assets/output.css">
  <title>Registro - Paso a Paso</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-md rounded-md w-full max-w-2xl p-6">
    <!-- Step 1 -->
    <div id="step1">
      <h2 class="text-2xl font-semibold text-center mb-2">Create new account</h2>
      <p class="text-center text-gray-500 mb-6">Step 1 of 2</p>

      <div class="mb-4">
        <label class="block text-gray-700">Username</label>
        <input type="text" class="w-full border rounded px-4 py-2" placeholder="Username">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Password</label>
        <input type="password" class="w-full border rounded px-4 py-2" placeholder="Password">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Confirm Password</label>
        <input type="password" class="w-full border rounded px-4 py-2" placeholder="Confirm Password">
      </div>
      <div class="mb-4">
        <label class="inline-flex items-center">
          <input type="checkbox" class="form-checkbox">
          <span class="ml-2 text-sm">I read and accept the <a href="#" class="text-blue-600 underline">General Conditions of Contract</a> and <a href="#" class="text-blue-600 underline">Privacy Policy</a></span>
        </label>
      </div>
      <div class="mb-6">
        <label class="inline-flex items-center">
          <input type="checkbox" class="form-checkbox">
          <span class="ml-2 text-sm">I want to receive news and promotions</span>
        </label>
      </div>
      <button onclick="nextStep()" class="bg-verde-principal text-white px-6 py-2 rounded w-full">Continue →</button>
    </div>

    <!-- Step 2 -->
    <div id="step2" class="hidden">
      <button onclick="prevStep()" class="text-blue-600 underline mb-4">← Return</button>
      <h2 class="text-2xl font-semibold text-center mb-2">Create new account</h2>
      <p class="text-center text-gray-500 mb-6">Step 2 of 2</p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <input type="text" placeholder="Name" class="border px-4 py-2 rounded">
        <input type="text" placeholder="Surnames" class="border px-4 py-2 rounded">
        <input type="text" placeholder="Tax ID/VAT number" class="border px-4 py-2 rounded">
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <input type="email" placeholder="Email" class="border px-4 py-2 rounded">
        <div class="flex gap-2">
          <input type="text" value="+58" class="border px-4 py-2 rounded w-20" readonly>
          <input type="text" placeholder="Phone number" class="border px-4 py-2 rounded w-full">
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <input type="text" placeholder="Estado" class="border px-4 py-2 rounded" readonly>
        <input type="text" placeholder="Department" class="border px-4 py-2 rounded">
        <input type="text" placeholder="City" class="border px-4 py-2 rounded">
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <input type="text" placeholder="Postal Code" class="border px-4 py-2 rounded">
        <input type="text" placeholder="Address" class="border px-4 py-2 rounded">
      </div>
      <button class=" bg-verde-principal text-white px-6 py-2 rounded w-full">Create Account →</button>
    </div>
  </div>

  <script>
    function nextStep() {
      document.getElementById("step1").classList.add("hidden");
      document.getElementById("step2").classList.remove("hidden");
    }

    function prevStep() {
      document.getElementById("step2").classList.add("hidden");
      document.getElementById("step1").classList.remove("hidden");
    }
  </script>
</body>
</html>
