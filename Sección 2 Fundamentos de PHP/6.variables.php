<?php
//Las variables son contenedores de informacion para despues trabajar con ellas
//Las variables son sencibles a min y mayus
//isset — Determina si una variable está definida y no es null

//String: Cadena de texto
$nombre = "Modifica";
$nombre = "Eddie";
//Integer: Numeros enteros
$num = 7;
//Double: Numeros con decimales
$num = 7.5;
//Boleano: Verdadero Falso (true / false)
$verdadero = false;

//Array: Arreglo
//Object: Objeto
//Class: Clase
//Null: Cuando a una variable aun no se le ha asignado ningun valor 
echo "Hola, $nombre" .'</br>';
echo 'Hola, ' .$num .'</br>'; //Se recomineda concatenar las variables con este metodo
echo 'Hola, tu valor es'.$verdadero.'</br>';
echo gettype($num).'</br>'; //Saber el tipo de variable, lo muestra en el navegador
echo gettype($verdadero).'</br>';
echo gettype($nombre).'</br>';
define('eddie','El wey de la xona Brava');

echo eddie;
?>