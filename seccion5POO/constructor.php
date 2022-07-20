<?PHP

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
        echo  $this -> nombre.' tiene '.$this -> edad.' y es de '.$this ->pais;
    }
}

// this hace referencia a la clase, y el nombre depende del objeto

$eddie = new Persona('Eddie Bravo',25,'México');    
$alejandro = new Persona('Adrian',45,'Hawai');  
$juan = new Persona('Juanillu',23,'Atizapunk');

$eddie->mostrarInformacion();
echo '<br>';
$alejandro->mostrarInformacion();
echo '<br>';
$juan->mostrarInformacion();
echo '<br>';

class album{
    public $artista;
    public $genero;
    public $numRolones;
    public $discografia;

    public function __construct($artista,$genero,$numRolones,$discografia){
        $this->artista=$artista;
        $this->genero=$genero;
        $this->numRolones=$numRolones;
        $this->discografia=$discografia;
    }
    public function mostrarArtista(){
        echo 'El artista es:'.$this->artista.' su genero es: '.$this->genero.' esta con el sello '.$this->discografia.' con el numero de rolones: '.$this->numRolones;
    }
}

$eddieBravo = new album('eddieBravo','Baladas',12,'Declive');
$eddieBravo->mostrarArtista();

?>