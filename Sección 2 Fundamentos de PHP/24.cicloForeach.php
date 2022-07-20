<?php 

$meses = array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
$eddie = ['Nombre' => 'Eddie Alexander', 'Apellidos' => 'Vázquez Bravo', 'Pais' => 'México', 'Telefono' => '55 2244 9188'];

$generos=array('Rock'=>'Metallica',
               'Reggaeton'=>'Ban bunny',
               'Ska Core'=>'Sekta Core');

//echo count($generos);

?>

<!DOCTYPE html>
<html lang=esp>
    <head>
        <meta charset="UTF-8">
        <title>ARRAYS FUNCIONES</title>
    </head>
    <body>
        <h1>MESES</h1>
        <li>
            <?php
                foreach($meses as $mes){ //Recorre array $meses y guarda temporalmente en $mes
                    echo $mes.'</br>';
                }
                foreach($eddie as $valor => $datos){ //recorre array $eddie, guarda asociacion en $valor, guarda dato en $datos
                    echo $valor.': '.$datos.'</br>';
                }

                foreach($generos as $row=>$date){
                        echo 'El genero es: '.$row.' y una banda de refenecia es: '.$date.'</br>';
                }
            ?>
        </li>
    </body>
</html>