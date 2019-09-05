<?php

$descriptor = fopen("el_quijote.txt", "r");

$cantidadMolino = 0;
while (($contenido = fgets($descriptor)) !== FALSE) {
    $cantidadMolinoPorLinea = substr_count($contenido, "molino");
    $cantidadMolino = $cantidadMolino + $cantidadMolinoPorLinea;
}
echo $cantidadMolino;
?>
