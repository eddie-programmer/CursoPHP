<?php

//Funciones para arrays

$amigo = array('telefono'=>5522449188,'edad'=>29,'país'=>'México bebe');
extract($amigo); //Con esta funcion se pueden extraer los arreglos con la asociacion como si fueran variables

echo 'Telefono extraido del array amigo '.$telefono.'</br>';
echo 'Edad extraida deln array amigo '.$edad.'</br>';
echo $país.'</br>';


//Esta funcion permite extraer el ultimo elemento que esta al final de nuestro array
$meses = array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
$ultimoMes=array_pop($meses);
echo $ultimoMes.'</br>';

foreach($meses as $mes){
    echo 'Este es el mes de: '.$mes.'</br>';
}

//Esta funcion recibe dos parametros, parametros que definimos (- o / o *) y nuestro array
//Ademas nos trae todo el contenido de nuestro array sin nececidad de un ciclo
echo join('</br>'.$meses .'</br>');

//Invierte el contenido de nuestro array

$mesesReversa=array_reverse($meses);
echo join ($mesesReversa);

?>