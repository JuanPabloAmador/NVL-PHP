<?php

function contadorLetrasA ($palabra = "Avada Kadabra"){
    $contador = 0; // Variable que cuenta el numero de a en el string.
    $arrayLetrasPalabra = str_split($palabra, 1); //convertir el string en un Array para separar los caracteres.
    foreach($arrayLetrasPalabra as $letra){
        if ($letra == "a"){
            $contador ++;
        }
        elseif ($letra == "A"){
            $contador ++;
        }
    }

    echo "La palabra tiene $contador letras a.";
}

contadorLetrasA ();

?>