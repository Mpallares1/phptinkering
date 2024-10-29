<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Equip</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Update Equip</h1>
    <form action="/equips-store" method="POST">
        <!-- Campo oculto para el ID -->
        <input type="hidden" name="id" value="<!-- ID del equipo a actualizar -->">

        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Name:</label>
            <input type="text" name="nombre" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter equip name">
        </div>

        <div class="mb-4">
            <label for="fundado" class="block text-sm font-medium text-gray-700">Founded Year:</label>
            <input type="number" name="fundado" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter founded year">
        </div>

        <div class="mb-4">
            <label for="ciudad" class="block text-sm font-medium text-gray-700">City:</label>
            <input type="text" name="ciudad" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter city">
        </div>

        <div class="mb-4">
            <label for="pais" class="block text-sm font-medium text-gray-700">Country:</label>
            <input type="text" name="pais" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter country">
        </div>

        <div class="mb-4">
            <label for="estadio" class="block text-sm font-medium text-gray-700">Stadium:</label>
            <input type="text" name="estadio" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter stadium">
        </div>

        <div class="mb-4">
            <label for="liga" class="block text-sm font-medium text-gray-700">League:</label>
            <input type="text" name="liga" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter league">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Update Equip</button>
    </form>
</div>
</body>
</html>
