<?php
//POO nos permite organizar nuestro codigo, escribir codigo limpio y organizado

// Ejemplo 1 sin POO

// $nombre='Eddie';
// $edad=29;
// $pais='México';

// $nombre2='Eddie';
// $edad2=29;
// $pais2='México';

//echo $nombre;

//Ejemplo con POO

class Persona{          //Una clase es una platilla que almacena propiedades y/o metodos
    public $nombre;
    public $edad;       //A las variables dentro de una clase se les conoce como PROPIEDADES
    public $pais;

    public function mostrarInformacion(){ //Todas las personas pueden acceder a este metodo
        echo 'Hola mundo';                //A las funciones dentro de una clase se les conoce como METODOS
    }
  
}

$eddie = new Persona;   //Un objeto tiene propiedades y funciones que podemos ejecutar, vienen de una clase
$eddie -> nombre = 'Eddie Alexander';
$eddie -> edad = 29;
$eddie -> pais = 'Mexico';

$eddie->mostrarInformacion();//metodo de Eddie, ejecutara el metodo de la clase PERSONA
echo '<br>';
echo $eddie->nombre.' tiene '.$eddie->edad.' años de edad '; //Accedemos al objeto $eddie y a su propiedad $nombre y $edad  
echo '<br>';

$alexander = new Persona;
$alexander -> nombre = 'Alexanders';

echo $alexander->nombre;
echo '<br>';


class Auto{
    public $color;
    public $marca;
    public $modelo;

    public function Bienvenida(){
        echo "Hola conductor";
    }
}

$bocho = new Auto;
$bocho -> color='verde';
$bocho -> marca='VW';
$bocho -> modelo=1992;

echo 'Tengo un bocho color: ' .$bocho -> color. ' es de la marca: ' .$bocho->marca. ' y es modelo '.$bocho->modelo; 
echo '<br>';
$bocho->Bienvenida();

?>