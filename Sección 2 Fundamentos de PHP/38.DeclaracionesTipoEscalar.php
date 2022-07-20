<?php

//Declaracion de tipo escalar

function cuadrado($numero){  //al colocar el int le estamso diciendo que estamos esperando un int, funciona para string, boolean, etc
    return $numero * $numero;
}

$numero=7254;

echo 'El area de mi cuadrado ' .$numero. ' es ' .cuadrado($numero);