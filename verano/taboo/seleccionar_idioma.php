<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Idioma</title>
</head>
<body>
    <h1>Seleccione el idioma</h1>
    <form action="sinonimos.php" method="get">
        <label for="idioma">Idioma:</label>
        <select name="idioma" id="idioma" required>
            <option value="SPA">Español</option>
            <option value="ITA">Italiano</option>
        </select>
        <button type="submit">Seleccionar</button>
    </form>
</body>
</html>
