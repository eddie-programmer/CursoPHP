<?php
$edad = 18;

if($edad >= '18'){
    echo '<h1> Bienvenido </h1>';
}else
    echo '<h1> No eres mayor de edad </h1>';

//IF anidados************************************
$mes = 'Julio';

if($mes=='Diciembre'){ //si la condicion se cumple imprimir
echo "Feliz navidad".'</br>';
}else if ($mes=='Enero'){ //pero si la condicion de arriba no se cumple, entonces imprime
    echo "Feliz año".'</br>';
    }else if ($mes=='Julio'){//Si la segunda condicion no se cumple, entonces imprime
        echo "Cumple Eddie".'</br>';
            }else
            echo "No se encontro ese mes".'</br>'; //Si ninguna de las condiciones anteriores se cumplen, cerrar con "else"

$test = false; //Si hay un valor verdadero
if($test){
    echo 'La variable '.$test.' contiene verdadero';
}else   //Si hay un valor falso
    echo 'La variable '.$test.' contiene falso';
?>