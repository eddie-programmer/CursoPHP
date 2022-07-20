<?php

//Array indexado, por que se accede a los varoles mediante numeros
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
$num = [1,2,3,4,5,6,7]; //Se pueden poner los arrays sin la palabra 'array' solo con las posiciones
$array = ['cadena',1,1.5];

$semana[7]='Día inventado'; //Se agrega espacio al array, posicion 7
$semana[7]='Modifica de la modificación';
$semana[0]='Modifica';      //Modificamos el array, posicion 0
echo $semana[7] . '</br>', $semana[0]. '</br>' ;
echo $num[0].'</br>';
echo $semana[3].'</br>';
echo $num[6].'</br>';
echo $array[0].'</br>';
echo $array[1].'</br>';
echo $array[2].'</br>';


?>