<?php

$conexion = new mysqli('localhost', 'root', '', 'development_test');

if ($conexion->connect_errno){
    die('Error al conectar con la base de datos');
}else{
    $id= isset($_GET['id']) ? $_GET['id']:1;
    $sql = "SELECT * FROM nombresempleados where idEmpleado= $id";
    $resultado = $conexion -> query($sql);
    
    if($resultado->num_rows){//Muestra el numero de filas que contiene la tabla
        // echo '<pre>';
        // var_dump($resultado->fetch_assoc());
        // var_dump($resultado->fetch_assoc()['nombres']);
        // echo '<pre>';
        while ($fila = $resultado->fetch_assoc()) {
            echo $fila['nombres'].'<br>';
        }
    }else{
        echo "No hay datos en la tabla";
    } 
    
}

?>