<?php

function copiarArchivoNuevoFichero ($nombreArchivo){

$nombreArchivoModificado = $nombreArchivo . "MODIFICADO";

$fecha = date("Y-m-d");
mkdir("$fecha");
copy("$nombreArchivo","$fecha/$nombreArchivoModificado");
}

copiarArchivoNuevoFichero("el_quijote.txt");