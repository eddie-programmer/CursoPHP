<?php

$error = '';
$enviado = '';

if(isset($_POST['submit'])){ //Comprobar que los datos se han enviado, Si presiono el boton enviar
    $nombre =    $_POST['nombre']; //Recogemos variables con metodo POST
    $correo =    $_POST['correo'];
    $mensaje =   $_POST['mensaje'];

    if(!empty($nombre)){ //Si hay contenbido, ejecuta. Si el usuario ingreso nombre en formulario
        $nombre = trim($nombre); //Quita espacios de inicio y final
        $nombre = htmlspecialchars($nombre); //Codifica caracteres especiales
    }else{ //Si no escribe nombre
        $error .= '*Por favor ingresa un nombre </br>';
    }
    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){ //Comprueba si es un correo real, regresa false si es incorrecto, si es true regresa el correo
                $error .='*Ingresa un correo valido </br>';
            }
    }else{
        $error .= '*Ingresa un correo electronico</br>';
    }
    if(!empty($mensaje)){
        $mensaje=htmlspecialchars($mensaje); //Convierte los caracteres especiales en entidades HTML evita que inyecten codigo
        $mensaje=trim($mensaje);             //Elimina espaciados del inicio y del final 
        $mensaje=stripslashes($mensaje);     //Remueve simbolos <> para que no inyecten codigo
    }else{
        $error .='*Por favor ingresa el mensaje';
    }
    if(!$error){ //Si no hay errores
        $enviar_a = 'lia.evazquez@gmail.com';
        $asunto = 'Correo enviado desde miPagina.com';
        $mensaje_enviar = 'De:' .$nombre. '\n';
        $mensaje_enviar .= "Correo: $correo \n";
        $mensaje_enviar .= "Mensaje: $mensaje";

        // mail($enviar_a, $asunto, $mensaje_enviar); //Esto se envia cuando el sitio ya este en un hosting
        $enviado.='true';
    }
}
require_once 'index_view.php';
?>