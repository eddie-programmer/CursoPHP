<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once ($_SERVER['DOCUMENT_ROOT'] . "/developmentclub/callcenterclub/asistencia/modulos/config/rutas.php");

require_once (DIR_CONTROLADORES . 'ConsultarServicioController.php');

$idOt=$_POST['idOt'];
new ConsultarServicioController('mostrar_form_servicio', $idOt);
?>
