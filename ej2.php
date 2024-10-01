<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // uso de variables
    $nombre="Juan";
    $apellido="Gimeno";
    print "$nombre $apellido <br>";
    /*
    function cambianombre(){

        $nombre="Luis";
        global $apellido;
        $apellido ="nuevoApellido";
    }
        puedo declarar las funciones en un archivo

    */
    include 'ej2funciones.php';
    
    cambiaNombre();
    print "$nombre $apellido <br>";
    //no cambia el nombre
    //cambia apellido


    ?>
    
</body>
</html>