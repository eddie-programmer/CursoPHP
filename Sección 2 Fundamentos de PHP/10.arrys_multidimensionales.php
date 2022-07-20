<?php
//Nos permite guardar uno o mas arreglos dentro de un array

$amigos = array (
    /*0*/array('eddie', 27, /*2*/array('Hola', 24567)), 
    /*1*/array('alexander', 39), 
    /*2*/array('pamela', 50)); 

$empresa = array(
    /*0*/array('sistemas',       /*1*/array('eddie','juan','mansilla','vero')),
    /*1*/array('RH',             /*1*/array('dani','xol','jesus','humberto')),
    /*2*/array('mercadotecnia',  /*1*/array('name1','name2')),
    /*3*/array('direccion',      /*1*/array('boss1','boss2','boss3')),
    /*4*/array('compensaciones', /*1*/array('comp1','comp2','comp3')) 
                );

echo $amigos[0]/*Primer array */[2]/*Array secundario*/[1]/*Array tercero (24567)*/.'</br>'; 
echo $amigos[1][1].'</br>';//Entramos al array principial y despues al array deseado
echo $amigos[2][1].'</br>';

echo $empresa[0][1][3].'</br>'; //Accedemos al primer array, despues contando la variable sistemas, saltamos al segundo array, en ese array ya ponemos la posicion deseada
echo $empresa[1][0].'</br>';
echo $empresa[2][0].'</br>';
echo $empresa[3][0].'</br>';
echo $empresa[4][0].'</br>';
/*accediendo a "boss3"*/ 
echo $empresa[3][1][2];
?>