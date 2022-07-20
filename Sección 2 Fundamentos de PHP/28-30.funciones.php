<?php
//FUNCIONES:  bloques de codigo que nos permite ejecutar y repetir un bloque de sentencias
//PARAMETROS: Son las variables que estan dentro de nuestras funciones y cuando llamamos a nuestra funcion podemos poner el valor deseado  
//Sentencia return: Devolver un valor desde dentro de una function hacia afuera
//Evitar usar echo dentro de las funciones!!!!!

function saludo($nombre){
    echo "Saludos ".$nombre.'</br>';
}
saludo("Eddie"); //se manda a llamar de esta manera

function sumar($num1, $num2){
    $resultado = $num1 + $num2;
    echo $resultado.'</br>';
}
sumar(50,40);
sumar(45,40);
sumar(890,40);
sumar(07,40);

function traerArticulos(){

}

function restar($nume1, $nume2){
    $resultadoResta = $nume1 - $nume2;
    return $resultadoResta.'</br>'; //almacena la operacion 01
    //Despues de esta sentencia ya no se pued escribir mas codigo por que no se ejecutara
    //Solo se puede renornar un valor, no se puede mas de uno
}
$resultadoResta=restar(1000,99); //llamamos a la variable que tendra el resultado, llamamos a la funcion y colocamos valores
echo $resultadoResta;

$resultado=restar(1000,800);
echo $resultado;

function departamentos($depto){
    return 'El departamento es: '.$depto; //Return guardara "'El departamento es: '.$depto"
}

echo departamentos('Sistemas'); //asignamos a $depto ('Sistemas')

?>