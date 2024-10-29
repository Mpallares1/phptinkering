<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Editar Equipo</h1>
    <form action="/equips-update" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($Equips->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700">Nombre:</label>
            <input type="text" name="nombre" value="<?= htmlspecialchars($Equips->nombre) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="fundado" class="block text-gray-700">Fundado:</label>
            <input type="number" name="fundado" value="<?= htmlspecialchars($Equips->fundado) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="estadio" class="block text-gray-700">Estadio:</label>
            <input type="text" name="estadio" value="<?= htmlspecialchars($Equips->estadio) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="ciudad" class="block text-gray-700">Ciudad:</label>
            <input type="text" name="ciudad" value="<?= htmlspecialchars($Equips->ciudad) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="pais" class="block text-gray-700">País:</label>
            <input type="text" name="pais" value="<?= htmlspecialchars($Equips->pais) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="liga" class="block text-gray-700">Liga:</label>
            <input type="text" name="liga" value="<?= htmlspecialchars($Equips->liga) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar Cambios</button>
    </form>
    <a href="/equips" class="text-gray-500 hover:underline mt-4 block">Volver</a>
</div>
</body>
</html>