<?php 
$meses = array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
$nums = array (1,23,68,2,0,-1,-9,47);
echo count ($nums);

sort($meses);         //Ordena nuestros arrays en forma alfabetica
//rsort($meses);        //Ordena nuestros arrays en forma alfabetica a la inversa
//sort($nums);          //Ordena nuestros arrays en orden
rsort($nums);           //Ordena nuestros arrays en orden a la inversa

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
                foreach($nums as $num){
                echo '<li>' .$num. '</li>'; //concatenamos lo que se va a mostrar
                }
                foreach($meses as $mes){
                    echo '<li>'.$mes.'</li>';
                }
            ?>
        </ul>
    </body>
</html>