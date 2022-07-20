<?php
//Atajo del condicional IF

//isset (Saber si una variable tiene un valor o no)

$edad =18;

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad'; //Si la variable tiene un valor, guardalo, : de la contrario mandar mensaje
echo 'Edad con shorthad: '.$edad.'</br>';

$edad =(isset($edad)) ? $edad : 'No ha definido edad';


//$edad = (condicion(varibale a comprobar)) ? $edad(Ejecuta si se cumple) : 'El user no esta..'(Ejecuta si no se cumple) 
/*Es la misma logica que si hacemos un if/else*/

if (isset ($edad)){
    $edad = $edad;
} else {
    $edad = 'El usuario no establecio su edad';
}
echo 'Edad con IF: '.$edad.'</br>';

//Ejercicio
$nombre= 'Eddie';
$nombre=(isset($nombre)) ? $nombre : 'EL usuario aun no define su nombre';
echo 'Nombre:'.$nombre.'</br>';

$mes='Jelouuuu';
$mes=(isset($mes)) ? 'La variable tiene almacenado '.$mes: 'La variable no contiene ningun valor';
echo $mes;


$barras='praderas';

$barras=(isset($barras))?'Barras es: '.$barras:'Que rollo';
echo $barras;

$edoCivil='Pinche soltero';
echo '</br>';

$edoCivil = (isset($edoCivil)) ? 'Hola '. $edoCivil : 'Pinche solteron culero hahahaha';
echo $edoCivil.'</br>';







$rock='kk';
$short=(isset($rock))?$rock:'No tienes Rock en las venas bebe';

echo $short;







?>