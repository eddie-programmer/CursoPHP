<?php
$test='cinco dos';
$texto='hola';
$texto2='hola          como estamos o que?      g ';
$texto3='Ferrocarril';
//Permite convertir caracteres especiales en entidades HTML
echo htmlspecialchars('<h1>'.$texto.'</h1>'); // evita que inyecten codigo
echo '</br>';

//Elimina espacios al inicio y al final del texto
echo trim($texto2.'</br>');

//Cuenta los caracteres que contiene tu string
echo strlen($test.'</br>'); //Tambien cuenta la que esta encomillado en el echo
echo '</br>';
//Retornar el fragmento del string
$textoCortado = substr($texto3,0,6); //Comienza de la posicion 0 del string y toma hasta la posicion 5
echo $textoCortado.'</br>';

//Convierte todo a MINS o MAYUS
echo strtoupper($texto3).'</br>'; //MAYUSCULAS
echo strtolower($texto3).'</br>'; //MINUSCULAS

//Localiza la letra de un string
echo strpos($textoCortado,'o');


?>
