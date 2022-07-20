<?php
    //Recuperar los datos del formulario "html_php"
    $nombre=$_POST['nombre']; //Variable que viene del html $nombre y $nombre se deben llamar igual
    $direc=$_POST['direc'];
    $puesto=$_POST['puesto'];
    //Concatenamos la variable
    echo 'El nombre ingresado es ' .$nombre .'<br><br>';
    echo 'La direccion ingresada es ' .$direc .'<br><br>'; 
    echo 'Su puesto es ' .$puesto;
?>