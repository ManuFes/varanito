<?php

function obtenerSinonimosDesdeCSV($palabra, $rutaCSV) {
    if (!file_exists($rutaCSV)) {
        echo "El archivo CSV no existe en la ruta especificada: $rutaCSV";
        return null;
    }

    $archivo = fopen($rutaCSV, 'r');
    if ($archivo === false) {
        echo "Error al abrir el archivo CSV.";
        return null;
    }

    while (($datos = fgetcsv($archivo)) !== false) {
        if (in_array(strtolower($palabra), array_map('strtolower', $datos))) {
            fclose($archivo);
            return array_filter($datos, function($sinonimo) use ($palabra) {
                return strtolower($sinonimo) !== strtolower($palabra);
            });
        }
    }

    fclose($archivo);
    return null;
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['idioma'])) {
    $idioma = $_GET['idioma'];

    // Establecer la ruta completa del archivo CSV en función del idioma seleccionado
    if ($idioma == 'ITA') {
        $rutaCSV = 'E:\1 FP Malaga\programacion\Segundo\verano\taboo\palabras\sinonimos_ITA.csv';
        $titulo = "Inserisci una parola per ottenere i sinonimi";
        $etiquetaPalabra = "Parola:";
        $botonTexto = "Ottieni sinonimi";
    } else {
        $rutaCSV = 'E:\1 FP Malaga\programacion\Segundo\verano\taboo\palabras\sinonimos_SPA.csv';
        $titulo = "Introduce una palabra para obtener sus sinónimos";
        $etiquetaPalabra = "Palabra:";
        $botonTexto = "Obtener Sinónimos";
    }

    // Mostrar el formulario para ingresar una palabra
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Juego de Sinónimos</title>
    </head>
    <body>
        <h1>' . $titulo . '</h1>
        <form action="sinonimos.php" method="post">
            <label for="palabra">' . $etiquetaPalabra . '</label>
            <input type="text" id="palabra" name="palabra" required>
            <input type="hidden" name="idioma" value="' . $idioma . '">
            <button type="submit">' . $botonTexto . '</button>
        </form>
    </body>
    </html>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabra = $_POST['palabra'];
    $idioma = $_POST['idioma'];

    // Establecer la ruta completa del archivo CSV en función del idioma seleccionado
    if ($idioma == 'ITA') {
        $rutaCSV = 'E:\1 FP Malaga\programacion\Segundo\verano\taboo\palabras\sinonimos_ITA.csv';
        $tituloResultado = "Sinonimi di '$palabra':";
    } else {
        $rutaCSV = 'E:\1 FP Malaga\programacion\Segundo\verano\taboo\palabras\sinonimos_SPA.csv';
        $tituloResultado = "Sinónimos de '$palabra':";
    }

    $sinonimos = obtenerSinonimosDesdeCSV($palabra, $rutaCSV);

    echo "<h2>$tituloResultado</h2>";
    if ($sinonimos) {
        if (empty($sinonimos)) {
            echo "No se encontraron sinónimos.";
        } else {
            foreach ($sinonimos as $sinonimo) {
                echo $sinonimo . "<br>";
            }
        }
    } else {
        echo "No se encontraron sinónimos o la palabra no está en el archivo.";
    }
}
?>
