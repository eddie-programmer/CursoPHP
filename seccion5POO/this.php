<?PHP

class Persona{
    public  $nombre;
    public  $edad;
    public  $pais;

    public function mostrarInformacion(){
        echo  $this -> nombre.' tiene '.$this -> edad.' y es de '.$this ->pais;
    }
}

// $this hace referencia a la clase, y el nombre depende del objeto
// $this nos permite acceder a la propiedad de nuestra clase

$eddie = new Persona;  
$eddie -> nombre = 'Eddie Alexander';
$eddie -> edad = 29;
$eddie -> pais = 'Mexico';         

$alejandro = new Persona;  
$alejandro -> nombre = 'Alejandro';
$alejandro -> edad = 30;
$alejandro -> pais = 'USA';      

$eddie->mostrarInformacion();
echo '<br>';
$alejandro->mostrarInformacion();
echo '<br>';

class motocicleta{
    public $marca;
    public $cilindraje;
    public $modelo;

    public function mostrarDatosMoto(){
        echo 'Su moto es: '.$this->marca.', es cilindraje '.$this->cilindraje.' y es modelo '.$this->modelo;
    }
}

$honda =new motocicleta;
$honda -> marca='Hondita bebe';
$honda -> cilindraje=250;
$honda -> modelo='2020';
$honda->mostrarDatosMoto();
echo '<br>';

$honda =new motocicleta;
$honda -> marca='Mortalika';
$honda -> cilindraje=600;
$honda -> modelo='2030';
$honda->mostrarDatosMoto();
echo '<br>';

class hospital{
    public $area;
    public $especialidad;
    public $nombre;

    public function doctorSimi(){
        echo 'Hola Dr. '.$this->nombre.' su area es: '.$this->area.' con la especialidad en: '.$this->especialidad;
    }
}

$similar = new hospital;
$similar -> area='piso 5';
$similar -> especialidad='maxilofacial';
$similar -> nombre='Dr SIMI el chido';


$similar->doctorSimi();

?>