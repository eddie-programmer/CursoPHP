<?php

class Persona{
    public static $dia='5 de Julio';

    public static function saludo($nombre = null){
        if($nombre){
            return "Hola, ween día: ".$nombre;
        }else{
            return 'Hola bebe';
        }
        
    }
}

$carlos = new Persona;
echo $carlos->saludo('Aleshander').'<br>';

echo Persona::$dia .'<br>';   //Acedemos a la propiedad $dia sin instanciar ($carlos = new Persona; echo $carlos->dia)
echo Persona::saludo('Eddie Bravo'); 

?>