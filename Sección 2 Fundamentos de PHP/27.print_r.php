<?php

//La funcion print_r nos muestra informacion legible para nosotros, para conocer las variales

$texto='Viva la Zona Brava';
$numero=10;
$num2='576';
$decimal=9.9;
$boleano=true;

$arreglo=array('uno','dos','tres','cuatro','cinco');
$arregloAsociativo=['Nombre'=>'Eddie','Apellidos'=>'Vazquez Bravo','Edad'=>29,'Pais'=>'Mèxico'];

var_dump($arreglo);

print_r($texto.'</br>');
print_r($numero.'</br>');

echo'<pre>';
print_r($boleano);
echo'</pre>';

echo'<pre>';
print_r($arreglo);
echo'</pre>';


echo'<pre>';
print_r($arregloAsociativo);
echo'</pre>';

?>