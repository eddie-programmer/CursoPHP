<?php //Nos permiten tomar desiciones en base a condiciones que nosotros establecemos

/*if(condicion){
    //Instrucciones
}*/

/*OPERADORES DE COMPARACION
=== Identico
==  Igualdad
<   Menor que
>   Mayor que
<=  Menor o igual que
>=  Mayor o igual que
!=  Diferente
!   Negacion

OPERADORES LOGICOS 
&&      AND, evalua que se cumplan las 2 condiciones
||, OR  Evalua que se cumpla al menos una condicion 
xor     Evalua que se cumpla una y solo una condicion
*/
$empresa = array(
    array('sistemas',        array('eddie','juan','mansilla','vero')),
    array('RH',              array('dani','xol','jesus','humberto')),
    array('mercadotecnia',   array('name1','name2')),
    array('direccion',       array('boss1','boss2','boss3')),
    array('compensaciones',  array('comp1','comp2','comp3')) 
                );
$edad=18;
$nom= array('Eddie','Vero','Name1');

//Condicionales, con variables y con los parametros de un array
if ($empresa[0][0] == 'sistemas' xor $empresa [0][1][0] == 'eddie3'){
    echo '<h1> Hola, como estas sistemas o eddie de sistemas? </h1>';
}
if($edad >= 18 && $nom[0] == 'Eddie'){
    echo '<h1> Bienvenido </h1>';
}
if($edad <= 24 xor $nom[0] != 'Eddie'){
    echo '<h1> Eres menor de edad y/o no te llamas Eddie </h1>';
}

$users = array(
    'phernandez@tiprotec.com'=>'secreto de amor',
    'htorres@tiprotec.com'=>'R3P0RT33stre114',
    'xrosete@gpmass.com'=>'r3p0rT33stre114',
    'maximilianoh@gpmass.com'=>'r3p0rT34stre214',
    'dramirez@gpmass.com' =>'rep0rT34st6e2120',
    'kcravioto@gpmass.com' =>'c3p0rTe4str3214',
    'evazquez@tiprotec.com' =>'password');

if($users['phernandez@tiprotec.com']=='secreto de amor') {
    echo'Hola '.$users['phernandez@tiprotec.com'];
}
?>