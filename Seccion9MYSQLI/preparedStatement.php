<?php

$conexion = new mysqli('localhost', 'root', '', 'development_test');

if ($conexion->connect_errno){
    die('Error al conectar con la base de datos');
}else{
    $statement = $conexion -> prepare("INSERT INTO nombresempleados VALUES (?,?,?,?)");
    //$sql = "UPDATE `development_test`.`nombresempleados` SET `nombres` = 'REX' WHERE (`idEmpleado` = '6')";

    /*reemplazamos placeholders por cada "?"
    Usar un S por cada placeholder
    s = string 
    i = integer 
    d = double */
    $statement -> bind_param('isss',$id,$nombres,$apaterno,$amaterno);
    $id=23;
    $amaterno='TEST';

    if(isset($_GET['nombre']) && isset($_GET['apaterno'])){
        $nombres    = $_GET['nombre'];
        $apaterno   = $_GET['apaterno'];
    }
    
    $statement->execute();
    
    if ($conexion -> affected_rows >=1){
        echo 'Filas afectadas a la Base de Datos: '.$conexion -> affected_rows;
    }else{
        echo "No se agrego nada";
    }

}

?>