<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Beastly&display=swap" rel="stylesheet" text='text/css'>
    <link rel="stylesheet" href="estylos.css">
</head>
<body>

    <div class="wrap"> <!-- div donde encerramos nuestro formulario -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST"> <!--Redirigimos al mismo sitio-->   
        <input type="text" class="form-control" id="" name="nombre" placeholder="Ingrese su nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>"></br>  

        <input type="email" class="form-control" id="" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo?>"></br>  
        
        <!-- <textarea name="mensaje" class="form-control" id="" placeholder="Escriba sus comentarios" cols="30" rows="10" value="<?php if(!$enviado && isset($mensaje)) echo $mensaje?>"></textarea></br> -->
        
        <textarea name="mensaje" class="form-control" id="" placeholder="Escriba sus comentarios:" cols="30" rows="10"><?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>

        <?php if(!empty($error)): ?><!--Los dos puntos son las llaves| Si no esta vacia, ejecuta lo siguiente -->
            <div class="alert error">
                <center><?php echo $error;?></center>
            </div>
        <?php elseif($enviado): ?> <!--Se agergar valor true cuando el usuario llena todos los datos-->
            <div class="alert success">
                <center><p>Enviado correctamente</p></center>
            </div>
        <?php endif;?>
       
        <input type="submit" name="submit" class="boton" value="Presione para enviar"></br>
        </form>
    </div>
</body>
</html>