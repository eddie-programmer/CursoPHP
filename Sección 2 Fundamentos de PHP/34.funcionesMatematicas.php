<?php

//Redondea los decimales

$numero=40.508981440;
echo round($numero).'</br>';
echo round($numero, 4).'</br>'; //el ,4 es el numero de decimales que nos va mostrar en pantalla, pero si pones esto, ya no redondea

//Permite obtener un numero al azar entre dos numeros que nosotros establezcamos 

$numAzar=rand(1,1000000);
echo $numAzar.'</br>';

//Permite redondear un numero hacia arriba

$redondea=ceil(12.13445999);
echo $redondea.'</br>';

//Constante 

define('numeroChingon',3.14);
echo numeroChingon.'</br>';

echo M_PI;



?>