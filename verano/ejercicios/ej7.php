<!DOCTYPE html>
<html>

<body>
    
    <form method="post" action="ej7.php">
        Nombre: <input type="text" name="nombre">
        <input type="submit">
    </form>
</body>
</html>

<?php 
// Descripción:  Crea un formulario HTML que solicite el nombre del usuario y un archivo PHP que procese y muestre el nombre ingresado. //
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];

    print "Hola, $nombre!";
}

?>