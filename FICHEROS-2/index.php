<?php

function buscarRemplazar($to, $tn, $palabraBusqueda, $palabraRemplazo)
{
    $textoNuevo = fopen("$tn", "r+");
    $textoOriginal = fopen("$to", "r");
    $palabraBusqueda;
    $palabraRemplazo;
    while (($lineaCodigo = fgets($textoOriginal)) !== FALSE) {
        $textoRemplazado = str_replace($palabraBusqueda,$palabraRemplazo,$lineaCodigo);
        fwrite($textoNuevo, $textoRemplazado);
    }
}

buscarRemplazar("el_quijote.txt", "textoRemplazado.txt", "molino", "MOLINOS");
