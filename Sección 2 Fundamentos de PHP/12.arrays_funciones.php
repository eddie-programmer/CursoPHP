<?php 
$meses = array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

$datos=array(   'Nombre'=>'Eddie',
                'Apellido Paterno'=>'Vázquez',
                'Apellido Materno'=>'Bravo',
                'Sexo'=>'Masculinote',
                'Fecha de nacimiento'=>'05/07/1992');

echo count($meses).'</br>';
$ultimo_mes = count($meses)-2; //Crear variable, sea igual al contador de arrays 12 -1, nos pone la posicion = 11 del array, son 12 elementos pero los arrays comienzan desde 0, entonces en la posicion 12 ya no hay nada por que llega del 0-11
echo $meses[$ultimo_mes];
//rsort($meses);
?>

<!DOCTYPE html>
<html lang=esp>
    <head>
        <meta charset="UTF-8">
        <title>ARRAYS FUNCIONES</title>
    </head>
    <body>
        <h1>Mese del año</h1>
        <ul>
            <?php
                foreach($meses as $mes){//Por cada mes (foreach recorre todos los valores que guarda nuestro array y guardalo en $mes por cada recorrido)
                    //Ejecutame
                echo '<li>' .$mes. '</li>'; //concatenamos lo que se va a mostrar con la etiqueta '</li>' de lista
                }

                foreach($datos as $row => $datos){
                    echo $row.': '. $datos.'</br>';
                }
            ?>
        </ul>
    </body>
</html>