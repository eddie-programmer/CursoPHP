<?php
require_once 'config.php';
if ($_POST) {
    $nombre          = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $email           = $_POST['email'];
    $telefono        = $_POST['telefono'];
    $mensaje         = $_POST['mensaje'];


    echo 'Soy un echo'. $nombre; //die();

    $sql = "INSERT INTO test (nombre) VALUES ('$nombre')";
    //$sql = "UPDATE `development_test`.`nombresempleados` SET `nombres` = 'REX' WHERE (`idEmpleado` = '6')";
    $conexion -> query($sql);

    if ($conexion -> affected_rows >=1){
        echo 'Filas afectadas a la Base de Datos: '.$conexion -> affected_rows;
    }
}
?>

<a href="/index1.php" class="href">Regresar al formulario</a>