<?php

// $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'CHALE!'; //Esta linea es lo mismos que un if, else
// echo $nombre;


// if (isset($_GET['nombre'])){
//     $nombre = $_GET['nombre'];
//     echo $nombre.'</br>';
// }else{
//     echo 'chale!!';
// }


//PHP7 
$nombre = $_GET['nombre'] ?? 'Anonimo'; //Si esta sseteado, guarda 'nombre' en variable $nombre, si no tiene nada, asigna 'Anonimo'
echo $nombre;


?>