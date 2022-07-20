<?php

//Metodo POST, envia los datos por detras del navegador, no la muestra en la URL a comparacion del metodo GET
//print_r($_POST); //nos muestra como un array los datos ingresados del archivo index

// if($_POST){ //Si hay post, entonces ejecuta, si no, redirigeme al formulario
//     $nombre=     $_POST['nombre'];
//     $sexo=       $_POST['sexo'];    
//     $anio=       $_POST['anio'];
//     $terminos=   $_POST['terminos'];
//     echo 'Hola ' .$nombre. ' tu sexo es: ' .$sexo. ' tu año es: ' .$anio. ' y los terminos son: ' .$terminos. '</br>';    
// }else{
//     header('location: http://localhost/cursoPHP/seccion3Formularios/formularios/index2.php'); //Redirige al usuario a la locacion indicada, es caso de que quieran ingresar directo a recibe.php
// };

// if(!$_POST){  //IF automatizado, si valor es diferente a POST, redirige, si no, guarda en variables
//     header('location: http://localhost/eddie/curso_php/seccion3Formularios/formularios');       
// }
//     $nombre=     $_POST['nombre'];
//     $sexo=       $_POST['sexo'];    
//     $anio=       $_POST['anio'];
//     $terminos=   $_POST['terminos'];
//     echo 'Hola ' .$nombre. ' tu sexo es: ' .$sexo. ' tu año es: ' .$anio. ' y los terminos son: ' .$terminos;


//Metodo GET, nunca se utiliza con info sencible, ya que la info la muestra en la url y nos pueden inyectar codigo
//Se utiliza normalmente cuando queremos mostrar url a los usuarios, POR EJEMPLO paginas de un libro de un sitio
//print_r($_GET);

if(!$_GET){
    header('location: http://localhost/cursoPHP/seccion3Formularios/formularios/index2.php');
}
$nombre=     $_GET['nombre'];
$sexo=       $_GET['sexo'];    
$anio=       $_GET['anio'];
$terminos=   $_GET['terminos'];

if(!$nombre){
    echo 'El usuario no ingreso ningun nombre </br>';
}

echo 'hola '.$nombre.' tu sexo es: '.$sexo.' tu año '.$anio.' Terminos '.$terminos;

?>