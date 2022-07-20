<?php
// var_dump() Funcion que nos permite conocer el tipo de dato nuestras variables, asi como su desglose

$texto='Viva la Zona Brava';
$numero=10;
$num2='576';
$decimal=9.9;
$boleano=true;

$arreglo=array('uno','dos','tres','cuatro','cinco');
$arregloAsociativo=['Nombre'=>'Eddie','Apellidos'=>'Vazquez Bravo','Edad'=>29,'Pais'=>'Mèxico'];


var_dump($texto.'</br>');
var_dump($numero.'</br>');

echo'<pre>';
var_dump($boleano);
echo'</pre>';

echo'<pre>';
var_dump($arreglo);
echo'</pre>';


echo'<pre>';
var_dump($arregloAsociativo);
echo'</pre>';

?>