<?php

$usuario="sa";
$password="b4$3*2021";
$DB="baseLocal";
$server="127.0.0.1";
$DSN = "Driver={SQL Server};Server=$server;Database=$DB";
$conexion= odbc_connect ("$DSN","$usuario","$password") or die ("Error al conectar con la base de datos");
set_time_limit(0);

// $U="sa";
// $P="shigoto";
// /*******************************/  
// $DB="proventel_test";  
// $Srv = "172.16.1.43";
// $DSN = "Driver={SQL Server};Server=$Srv;Database=$DB";
// $conexion = odbc_connect ("$DSN","$U","$P") or die ("Error al conectar con la base de datos, acceso no disponible");
//   set_time_limit(0);


?>