<?php
//La sentencia break sirve para cortar la ejecucion de un ciclo
$paises=array('México','Francia','Estados Unidos','España','Jamaica','Brasil','Alemania');

foreach($paises as $pais){
    echo 'Hola '.$pais.'</br>'; //Muestra paises hasta el condicional primero muestra pais y luego ejecuta IF

    if($pais=='Jamaica'){
        break;
    }
}
foreach($paises as $pais){  //No muestra pais de condicional, ejecuta IF y despues muestra paises
    if($pais=='Alemania'){
        break;
    }
    echo 'Hola '.$pais.'</br>';
}


//La sentencia continue, permite saltar a la siguiente iteracion de nuestro ciclo
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TEST</title>
    </head>
    <body>
        <h1>PAISES LATINOS</h1>
        <?php
        foreach($paises as $pais){  //No muestra pais de condicional, pero continua leyendo los demas valores del array
            if($pais=='Francia'){
                continue;
            }
            echo 'Hola '.$pais.'</br>';
        }
        ?>
    </body>
</html>
