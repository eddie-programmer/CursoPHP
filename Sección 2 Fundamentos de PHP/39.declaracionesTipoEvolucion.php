<?php

//Nos permite especificar que tipo de dato regresaremos con return

function obtenerEdad() : string{ //Le indicamos que la funciòn regrese un valor entero
    $edad = 'Eddie tiene 25 años';
    return $edad;
}

echo 'Mi edad es: ' .obtenerEdad() .'</br>';


function suma($var1, $var2) : string{
    $operacion=$var1+$var2;
    return $operacion;
}

$varOper=suma(20,40);
echo 'Hola bebe, el resultado de tu suma es '.$varOper;


?>