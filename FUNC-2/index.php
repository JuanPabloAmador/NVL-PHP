<?php

$letraBuscada = "d";//letra que define el usuario para ser buscada.
$letraBuscadaUP = strtoupper($letraBuscada);//funcion para convertir la letra a su version Mayuscula

function contadorLetrasA ($palabra = "Avada Kadabra"){
    global $letraBuscada, $letraBuscadaUP;
    $contador = 0; // Variable que cuenta el numero de a en el string.
    $arrayLetrasPalabra = str_split($palabra, 1); //convertir el string en un Array para separar los caracteres.
    foreach($arrayLetrasPalabra as $letra){
        if ($letra == $letraBuscada){
            $contador ++;
        }
        elseif ($letra == $letraBuscadaUP){
            $contador ++;
        }
    }

    echo "La palabra tiene $contador letras $letraBuscada.";
}

contadorLetrasA ();

?>