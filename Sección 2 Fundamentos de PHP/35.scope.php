<?php

//Las funciones no pueden acceder a las variables que esten fuera de la funcion
//Desde fuera de la funcion, no se puede acceder a variables que esten dentro de la funcion


//Si queremos acceder a variables fuera de nuestra funcion, las debemos de pasar como parametros en "($numero)"

$numeroFuera=10;

function mostrar($numeroFuera){
    echo $numeroFuera;
}

mostrar($numeroFuera.'</br>');

erro 


//Si queremos acceder a variables de la funcion, debemos declarar la sentencia return y mandar a llamar a la function

function mestrarDos(){
    $num=50;
    return $num;
}

echo 'que pedo razita: '. mestrarDos();


?>
