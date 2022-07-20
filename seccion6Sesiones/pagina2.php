<?php
session_start();

if ($_SESSION){
    // $nombre = $_SESSION['nombre'];
    // echo '<h1> Hola bebesito moxo'.$nombre.'</h1>';
    print_r($_SESSION);
}else{
    echo 'Quien demonios eres y que haces aqui?';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <!-- <h1>Hola, <?php echo $_SESSION['nombre'];?></h1> -->
    <a href="cerrar.php">Cerrar sesion</a>
</body>
</html>