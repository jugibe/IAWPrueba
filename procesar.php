<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    
    echo "Nombre: " . $nombre . " tiene " . strlen($nombre) . "letras. <br>";
    echo "Apellido: " . $apellido;
}
?>
