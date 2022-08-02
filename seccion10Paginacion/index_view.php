<!-- Calculos y conexiob a DB -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginación Web</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css" class="hfer">
</head>
<body>  
    <div class="contenedor"> <!-- Centrar todo el contenido -->
        <h1>Articulos</h1>
        <section class="articulos"> <!--Aqui vamos a guardar los articulos-->
            <ul>
                <li>1.- Eddie test</li>
                <li>2.- Eddie test</li>
                <li>3.- Eddie test</li>
                <li>4.- Eddie test</li>
                <li>5.- Eddie test</li>
            </ul>
        </section>
        <section class="paginacion"> <!--vamos a guardar numeros y paginas-->
            <ul>
                <li class="disabled">&laquo;</li> <!--left &laquo izquierda "Boton retroceso"
                //class disable (boton desabilitado)-->
                <li class="active"><a href="#">1</a></li> <!--class active, pagina actual en donde el usuario se encuentra-->
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>  <!--rigth &laquo derecha "boton avance"-->
            </ul>
        </section>
    </div>
</body>
</html>