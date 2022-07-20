<?php
//No se pueden cambiar los valores de las constantes
$nom = "Eddie";
$nom = "Este es un cambio de valor de la variable nom (Eddie)";
echo 'Hola '.$nom. '</br>';

define('PI', 2.14); //PI, nombre de constante, 2.14, valor de la constante
echo PI.'</br>';            //La constante se manda a llamar sin $ y sin comillas

define('numEmpleadoEddie', 1728952);
echo numEmpleadoEddie.'</br>';

define('nombre', 'Eddie Alexander Vázquez Bravo');
echo nombre;

define ('vari','este valor siempre se quedara perros');
echo vari;

?>