<?php
require_once 'config.php';
if ($_POST) {
    $nombre          = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $email           = $_POST['email'];
    $telefono        = $_POST['telefono'];
    $mensaje         = $_POST['mensaje'];

    $qry="INSERT INTO tabla_empleados()
          VALUES ()"
    odbc_exec($conexion, $qry);
}

?>