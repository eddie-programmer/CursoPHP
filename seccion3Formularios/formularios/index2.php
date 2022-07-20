<?php
if($_POST){
    $nombre = $_POST['nombre'];
    echo $nombre;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body> <!--name es como queremos recibit los datos en de nuestro formulario  || el id es para JS-->
    <form action=<?php htmlspecialchars($_SERVER['PHP_SELF']);?> method="POST" name="" id="" class=""> <!--accion para saber a donde vamos a enviar nuestros datos-->
    <!-- <form action="recibe.php" method="GET" name="" id="" class="">  -->
        <!-- htmlspecialchars($_SERVER['PHP_SELF']) Traemos la ruta actual del archivo que se esta ejecutando
             SIEMPRE htmlspecialchars para evitar problemas de seguridad-->
        <input type="text" placeholder="Ingresa tu nombre:" name="nombre" id="">
        <br>

        <label for="hombre">Hombre</label> <!--for e id deben ser iguales para que se relacionen-->
        <input type="radio" name="sexo" value='hombre' id="hombre">

        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value='mujer' id="mujer">
        <br>

        <label for="">Año:</label>
        <select name="anio" id="anio"> <!--input radio-->
            <option value="2000">2000</option> <!--Value/valor que vamos a recibir el dato-->
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>

        <label for="terminos">Terminos y condiciones</label>  <!--Label se relaciona (for & id) para al dar clic sobre texto se paloomee la casilla-->
        <input type="checkbox" name="terminos" id="terminos" value='Acepta terminos'>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
?>