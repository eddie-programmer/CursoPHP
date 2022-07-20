<?php
//Ciclo FOR: permite repetir el codigo las veces que deseemos

for ($i = 1; $i <= 10; $i++){
    echo $i."  Hola".'</br>';
}

//Hacemos el recorrido sumando 2 valores en cada ciclo, es decir, se recorrera de 2 en 2 hasta que se cumpla la condicion
for ($e=5; $e<=20; $e=$e+2){
    echo $e.'</br>';
}

/*    for(variable y valor; condicion; incremento en cada ciclo){
            echo'imprimimos los que querramos';
}*/ 

for ($v=1; $v<=2; $v++){
    echo 'Hola veces.</br>';
}

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);
echo count($people).'</br>';

for($i = 0; $i < count($people); ++$i) {
    echo json_encode ($people);
}

?>