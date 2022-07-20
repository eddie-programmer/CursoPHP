<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refueroz de temas PHP</title>
</head>
<body>
    <?php
        define ('constante','Valore de constante');
        echo constante .'</br>';

        $array = array ('nombre'=>'Eddie','Edad'=>'29');
        
        foreach($array as $a => $b){
            echo $a. ':' .$b.'</br>';
        }

        echo count($array);
        for($a=0; $a<=count($array); $a++){
             echo 'datos son: </br>' .$a; 
         }  

        print_r($array);  
        
        


        function restar($var1, $var2){
            $operacion=$var1-$var2;
            return $operacion;
        }

        echo $resul=restar(10,5);
    ?>





    $empleados(array );

</body>
</html>