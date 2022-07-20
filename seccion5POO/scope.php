<?php

//Public
//Pueden ser accedidos desde cualquier parte, ya sea dentro o fuera de nuestra clase

//Protected
//Pueden ser accedidos desde dentro de la clase y otras clase que heredaron. Pero no fuera de estas

//Private
//Solo pueden ser accedidos desde dentro de la clase en que fueron creados.
//Es decir que no podemos acceder a ellos desde otra clase que heredo y tampoco podemos aceder desde fuera de las clases

class Usuario{
    protected $nombre;
    public $correo;


    function __construct($nombre, $correo)
    {
        $this->nombre=$nombre;
        $this->correo=$correo;
    }

    public function mostrarInfo(){
        return 'Tu nombre es ' .$this->nombre. ' y tu correo: ' .$this->correo;
    }
}

class Admin extends Usuario{
    public function mostrarNombre(){
        return 'Su nombre con protected es: ' .$this->nombre;
    }

}

$eddie = new Admin('Eddie Vázquez','lia.evazquez@gmail.com');
echo $eddie->correo .'<br>';
echo $eddie->mostrarNombre();

?>