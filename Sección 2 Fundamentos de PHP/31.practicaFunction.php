<?php

//Las funciones solo deben de realizar un calculo u operación

function calulaAreaTriangulo($base,$altura){
    $result=($base*$altura)/2;
    return $result;
}
$areaTriangulo=calulaAreaTriangulo(50,560);  //Creamos variable, almacenamos la funcion y parametros de variables
echo 'El area del trangulo es: '.$areaTriangulo.' metros cuadrados</br>'; //llamamos a la nueva variable $areaTriangulo

function division($nu,$do){
    $resultado=$nu/$do;
    return $resultado;
}

$divisionNums=division(100,50);
echo 'La division de las variables es: '.$divisionNums.'</br>';


function divisionDos($var2){
    require_once 'variables.php';
    $operacion=$var1/$var2;
    return $operacion;
}

$variableDos=divisionDos(5);
echo 'Hola mundo bebe, el resultado de tu division es:'.$variableDos; 


?>