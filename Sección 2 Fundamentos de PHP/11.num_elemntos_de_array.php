<?php
$meses = array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

echo count($meses).'</br>'; //count, nos devuelve el numero de valores que tiene un array
//$ultimo_mes = count($meses)-1; //restas una posicion para que no mande errror

echo count($meses).'</br>'; //count, nos devuelve el numero de valores que tiene un array
$ultimo_mes = count($meses)-2; //Crear variable, sea igual al contador de arrays 12 -1, nos pone la posicion = 11
echo ' </br>';
echo $meses[$ultimo_mes].'</br>';
//rsort($meses);

echo $ultimo_mes.' Esta es la posicion que se genera en la variable $ultimo mes' ;
?>

! <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>