<?php

//FILTER_SANITIZE_STRING: 
//FILTER_SANITIZE_EMAIL:

//Saneamiento: Remueve caracteres, menos letras
//Validación: Comprueba que sea cierto tipo de valor, valida que sea correo, etc

$error='¡Error!';
if(isset($_POST['submit-formulario2'])){  //Esta funcion es para saber que POST contiene info e imprimirla en el mismo sitio
    $nombre=    $_POST['nombre']; 
    $email=     $_POST['email'];

    if(!empty($nombre)){ //SI no esta vacio el nombre, ejecuta
        // $nombre= trim($nombre); //Quita los espaciados al inico y al final y guarda datos en $nombre
        // $nombre= htmlspecialchars($nombre); //Convierte los caracteres especiales en entidades HTML evita que inyecten codigo
        // $nombre= stripslashes($nombre); //Remueve los simbolos (/,<,>) evita que inyecten codigo
    
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); //Remueve los signos que no sean cadena de texto, la variable que limpia es $nombre
        echo 'Tu nombre es: '.$nombre.'</br>';
    }else{
        $error .= 'Por favor ingresa tu nombre </br>';//error es igual al contenido que ya este en $error mas el texto 'Por favor'
    }
    //filter_var
    if(!empty($email)){ //Si la variable $email no esta vacia, entonces ejecuta
        $email = filter_var($email, FILTER_SANITIZE_EMAIL); //sanea y quita caracteres especiales ></ etc..
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Valida que sea un mail correcto
            $error .= 'Por favor ingresa un email correcto </br>';
        }else{
        echo 'Tu email es: '.$email;
        }
    }else{
        $error .= 'Por favor ingresa tu correo electronico';
    }   
}else{

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color:red}; /*Clase error*/
    </style>
</head>
<body>
    <!--<form action="45validaEnvio.php" method="POST">-->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">   
    <!--El form de arriba es lo mismo que:  
    <form action="/eddie/curso_php/seccion3Formularios/formularios/45comprobando.php" method="POST"> --> 
        <input type="text" name="nombre" placeholder="Ingresa tu nombre">
        </br>
        <input type="email" name="email" placeholder="Ingresa tu correo:">
        </br>

        <?php if(!empty($error)): ?><!--Los dos puntos es como si fueran las llaves| Si se cumple, !empty, si tiene contenido, ejecuta lo siguiente -->
            <div class="error"><?php echo $error;?></div>
        <?php endif;?>

        <input type="submit" name="submit-formulario2">

    </form>
</body>
</html>