<?php

class Persona{
    public  $nombre;
    public  $edad;
    public  $pais;

    function __construct($nombre, $edad, $pais) //Metodo constructor, se ejecuta al crear objeto
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    } 

    public function mostrarInformacion(){
        return  $this -> nombre.' tiene '.$this -> edad.' y es de '.$this ->pais;
    }
}

//Herencia: Pasar las propiedad y metodos de una clase a otra clase diferente
//Traemos datos de persona, los heredamos y ademas agregamos propiedades adicionales


class Estudiante extends Persona{                         //Heredar propiedades y metodos de la class Persona
    function __construct($nombre, $edad, $pais, $carrera) //Sobreescribiendo el metodo constructor
    {
        parent::__construct($nombre, $edad, $pais);       //Traemos metodo constructor padre con sus propiedades 
        $this-> carrera = $carrera;                        //Le añadinos la propiedad adicional
    }
}

class Trabajador extends Persona{
    function __construct($nombre, $pais, $trabajo)
    {
        $this-> nombre = $nombre;
        $this-> pais = $pais;
        $this-> trabajo = $trabajo;
    }
}

$eddie = new Estudiante('Eddie Vázquez',29,'México','Desarrollador');
echo $eddie->carrera.'<br>';
echo $eddie->nombre.'<br>';
$juancho = new Trabajador('Juanchito','Venzuela','Obrero');
echo $juancho->trabajo.'<br>';
$juancha = new Persona('Juancha',30,'JAPAN');
echo $juancha->mostrarInformacion();



// class PaisFabricacion{
//     public $fabricante;
//     public $modelo;
//     public $color;
//     public $pais;

//     function __construct($fabricante, $modelo, $color, $pais)
//     {
//         $this->fabricante=$fabricante;
//         $this->modelo=$modelo;
//         $this->color=$color;
//         $this->pais=$pais;
//     }

//     public function mostrarDatos(){
//         return 'El fabricante es ' .$this->fabricante. ' el modelo es ' .$this->modelo. ' y su color es ' .$this->color. ' y su país de fabricacion es: '.$this->fabricante;
//         }
// }
?>