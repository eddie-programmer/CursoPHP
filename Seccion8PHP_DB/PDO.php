<?php
// $id = $_GET['id'];
$id=$_GET['liga']; //http://127.0.0.1/GitHub_Home/CursoPHP/Seccion8PHP_DB/PDO.php?liga=3

try{
    //codigo de DB
    $conexion = new PDO('mysql:host=127.0.0.1;dbname=development', 'root','');
    echo 'Conectado a la base de datos correctamente'.'<br>'.'<br>';

    //METODO QUERY
    // $resultado= $conexion->query("SELECT * FROM TEST WHERE ID=1");
    //     //Se recomienda utilizar metodo query cuando no se manejen variables en la consulta 
    // foreach ($resultado as $fila) {
    //     echo 'Nombre: '.$fila['nombre']. '    Edad: '.$fila['edad'].'</br>';
    // }

    // $insertar= $conexion->query('INSERT INTO test values(4,"Pedro",32)');

    //PREPARED STATEMENTS (Consultas preparadas) evita que inyecten codigo
    $statement = $conexion->prepare("SELECT * FROM TEST WHERE ID = :id or :id2");
    $statement -> execute(array 
                         (':id' => $id,
                          ':id2' => 2)
                         );
    // $resultado=$statement->fetchAll(); //fetch solo trae un valor, fetchAll trae todos los valores
    // // echo "<pre>";
    // // print_r($resultado);
    // // echo "<pre>";
    // foreach ($resultado as $value) {
    //     echo $value['nombre'].'<br>';
    // }

    // $statement = $conexion->prepare('INSERT INTO test values(6,"German",23)');
    // $statement -> execute();

    $resultado=$statement->fetchAll(); //fetch solo trae un valor, fetchAll trae todos los valores
    foreach ($resultado as $value) {
        echo $value['id'].'-';
        echo $value['nombre'].'<br>';
    }
        
}catch(PDOException $e){
    //Mostrar error, si hay error.
     echo 'Error al conectarse a la base de datos:'.$e;
}

?>