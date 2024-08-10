<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinónimos</title>
</head>
<body>
    <h1>Buscar Sinónimos</h1>
    <form method="post">
        <label for="palabra">Introduce una palabra:</label>
        <input type="text" id="palabra" name="palabra" required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $palabra = $_POST['palabra'];
        $idioma = $_GET['idioma'];

        function obtenerSinonimos($palabra, $idioma) {
            $filePath = $idioma === 'ITA' ? 'palabras/sinonimos_ITA.csv' : 'palabras/sinonimos_SPA.csv';

            if (!file_exists($filePath)) {
                echo "El archivo CSV no existe.";
                return null;
            }

            $file = fopen($filePath, 'r');
            while (($line = fgetcsv($file)) !== false) {
                if (in_array($palabra, $line)) {
                    fclose($file);
                    return $line;
                }
            }
            fclose($file);
            return null;
        }

        $sinonimos = obtenerSinonimos($palabra, $idioma);

        echo "<h2>Sinónimos de '$palabra':</h2>";
        if ($sinonimos) {
            echo "<ul>";
            foreach ($sinonimos as $sinonimo) {
                echo "<li>" . htmlspecialchars($sinonimo) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se encontraron sinónimos o la palabra no está en el archivo.</p>";
        }
    }
    ?>
</body>
</html>
