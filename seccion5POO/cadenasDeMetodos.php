<?php

class Usuario{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo){
        $this->nombre=$nombre;
        $this->correo=$correo;
    }

    public function mostrarNombre(){
        echo 'Su nombre es: ' .$this->nombre. '<br>';
        return $this;
    }

    public function mostrarCorreo(){
        echo 'Su correo es: ' .$this->correo. '<br>';
        return $this;
    }
}


$eddie = new Usuario('Drack','lia.evazquez@gmail.com');

$eddie->mostrarNombre()->mostrarCorreo(); //CADENA DE METODOS


?>