<?php

function todasLasVocales ($frase= "lorem ipsum dolor sit amet") {
    $arrayFrase = str_split($frase);
    
    foreach ($arrayFrase as $letra){
        //Variables Globales
        global $busquedaA, $busquedaE, $busquedaI, $busquedaO, $busquedaU, $contienelas5Vocales;
        //Busqueda Vocal A
        if ($letra == "a"){
            $busquedaA = true;
        }
        elseif ($letra == "A"){
            $busquedaA = true;
        }
        //Busqueda Vocal E
        elseif ($letra == "e"){
            $busquedaE = true;
        }
        elseif ($letra == "E"){
            $busquedaE = true;
        }
        //Busqueda Vocal I
        elseif ($letra == "i"){
            $busquedaI = true;
        }
        elseif ($letra == "I"){
            $busquedaI = true;
        }
        //Busqueda Vocal O
        elseif ($letra == "o"){
            $busquedaO = true;
        }
        elseif ($letra == "O"){
            $busquedaO = true;
        }
        //Busqueda Vocal U
        elseif ($letra == "u"){
            $busquedaU = true;
        }
        elseif ($letra == "U"){
            $busquedaU = true;
        }
    }
    if ($busquedaA && $busquedaE && $busquedaI && $busquedaO && $busquedaU){
        echo "La frase contiene las 5 vocales";
    } 
    else {
        echo "La frase no contiene las 5 vocales";
        
    }
}

todasLasVocales()

?>