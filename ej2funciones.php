<?php
function cambiaNombre(){

    $nombre="Luis";
    echo $nombre . " desde la funcion <br>" ;
    global $apellido;
    $apellido ="nuevoApellido";
}
?>