<?php
//Los arrays asosiativos son aquellos a los que accedemos a traves de una asociacion, es decir, una palabra asociada a la varibale.
$eddie = ['nombre' => 'Eddie Alexander', 'apellidos' => 'Vázquez Bravo', 'pais' => 'México', 'telefono' => '55 2244 9188'];
//$eddie ['telefono']='55345678987654345'; //Modificacion del array (telefono)

echo 'Hola, mi nombre es: '.$eddie['nombre'];    //Mandamos a llamr al array con el nombre con el que se le asocia
echo ' '.$eddie['apellidos']. '</br>';
echo 'Mi pais es: '.$eddie['pais']. '</br>';
echo 'Mi número telefonico es el: '.$eddie['tele|fono'].'</br></br>';

//echo 'Hola mi nombre es ' .$eddie['nombre']. '</br>';

$users = array(
    'phernandez@tiprotec.com'=>'secret',
    'htorres@tiprotec.com'=>'R3P0RT33stre114',
    'xrosete@gpmass.com'=>'r3p0rT33stre114',
    'maximilianoh@gpmass.com'=>'r3p0rT34stre214',
    'dramirez@gpmass.com' =>'rep0rT34st6e2120',
    'kcravioto@gpmass.com' =>'c3p0rTe4str3214',
    'evazquez@tiprotec.com' =>'password');

    echo $users['phernandez@tiprotec.com'].'</br>';

$test=array(
      array('sistemas', array('eddie', array('sueldo','puesto','area')
                             ,'rod','luis')),
      array('rh',       array('dani','sol',2.2)));

echo $test[1][1][2];
//var_dump ($test);

?>
