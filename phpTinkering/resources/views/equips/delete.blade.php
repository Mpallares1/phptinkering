<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equips</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold mb-4">Delete Equips</h1>
    <p>Vols eliminar la peli "<?= htmlspecialchars($Equips->name) ?>"?</p>
    <form action="/equips-destroy" method="POST" class="mt-4">
        <input type="hidden" name="id" value="<?= $Equips->id ?>">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
    </form>
    <a href="/Equips" class="text-gray-500 hover:underline mt-4 block">Cancel</a>
</body>
</html>