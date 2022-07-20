<?php
if($_SERVER['REQUEST_METHOD']=='POST'){ //De esta manera comprobamos que se enviaron los datosn desde un formulario
    echo 'Formulario se envio por el metodo POST </br>';
} else  
    echo 'Formulario se envio por el metodo GET </br>';


if (isset($_POST['submit-formulario2'])){ //sI post esta seteando(tiene info) hacer el submit con name que viene de 45compribando.php
    echo 'Se envio POST, se comprueba con isset </br>';
    //print_r($_POST['submit-formulario2']);
} else{
    echo 'Se envio GET </br>';
}


?>