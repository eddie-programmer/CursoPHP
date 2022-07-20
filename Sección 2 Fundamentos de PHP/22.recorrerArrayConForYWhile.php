<?php
//Recorrer arreglos mediante FOR y WHILE
$meses = array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

echo count ($meses).'</br>';

// RECORRIDO CON FOR
for ($i=0; $i <count($meses); $i++){
    echo 'El mes es: '.$meses[$i].'</br></br>';
}

// RECORRIDO CON WHILE
$a=0;
while($a < count($meses)){
    echo 'El mes con WHILE es:'.$meses[$a].'</br>';
    $a++;
}

$carros=['Fierrari','Vochoman','MicrobusRun'];

//echo count($carros);

for($a=0; $a<count($carros); $a++){
    echo 'Tu mamalon es: '.$carros[$a].'</br>';
}
?>