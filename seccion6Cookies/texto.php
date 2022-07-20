<?php

if(isset($_COOKIE['font-size'])){
    $tamaño = htmlspecialchars($_COOKIE['font-size']);
}else{
    $tamaño='100px';
}

// $tamaño= $_COOKIE['font-size'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
        p{
            font-size: <?php echo $tamaño; ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta odit, recusandae totam repellat nam laborum iste adipisci aut vero eveniet veritatis ullam quam distinctio ex aperiam officiis, sapiente incidunt illum.</p>
</body>
</html>