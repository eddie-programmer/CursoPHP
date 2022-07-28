<?php

$conexion = new mysqli('localhost', 'root', '', 'development_test');

if ($conexion->connect_errno){
    die('Error al conectar con la base de datos');
}else{
    // codigo
    
}

?>