<?php

function contadorLetrasA ($palabra = "Avada Kadabra"){
    $contador = 0;
    $arrayLetrasPalabra = str_split($palabra, 1);
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