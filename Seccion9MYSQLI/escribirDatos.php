<?php

$conexion = new mysqli('localhost', 'root', '', 'development_test');

if ($conexion->connect_errno){
    die('Error al conectar con la base de datos');
}else{
    $sql = "INSERT INTO nombresempleados VALUES (4,'Vicente','Villa','Ajua')";
    //$sql = "UPDATE `development_test`.`nombresempleados` SET `nombres` = 'REX' WHERE (`idEmpleado` = '6')";
    $conexion -> query($sql);

    if ($conexion -> affected_rows >=1){
        echo 'Filas afectadas a la Base de Datos: '.$conexion -> affected_rows;
    }
}

?>