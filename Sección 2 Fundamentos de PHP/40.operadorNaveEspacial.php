<?php

//Operador de nave espacial <=>

//Regresa  1 si el valor en la izquierda es mayor que el de la derecha
//Regresa  0 si los valores en ambos lados son iguales
//Regresa -1 si el valor de la derecha es mayor que el de la izquierda

//  <   =    >
//  1   0   -1

 echo 10 <=> 1;
 echo '</br>';
 echo 1 <=> 1;
 echo '</br>';
 echo 1 <=> 10;
 echo '</br>';



$array=[3,1,6,9,23];

function comparar($a, $b){
    return $a <=> $b;
}

//usort — Ordena un array según sus valores usando una función de comparación definida por el usuario
usort($array, 'comparar'); 

foreach($array as $a){
    echo($a.',');
    //echo '<br>';
}
'<br>';
//implode — Une elementos de un array en un string
echo implode(' - ', $array);



?>