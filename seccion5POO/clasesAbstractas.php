<?php

//Clases abstractas
//Es una manera de proteger toda nuestra clase, no podemos acceder a una clase a menos que la heredemos

abstract class Persona{
    public function saludo(){
        return "Hola perros, auf auf!";
    }
}

class Estudiante extends Persona{

}

$saludo = new Estudiante;
echo $saludo->saludo();



?>