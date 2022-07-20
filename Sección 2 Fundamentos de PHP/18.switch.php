<?php
$var ='cancer';
switch($var){
    case ('sagitario'):
        echo '<h1> 1er SWITCH con SWITCH</h1>';
    break;
    case ('leo'):
        echo '<h1> 2do SWITCH con SWITCH</h1>';
    break;
    case ('cancer'):
        echo '<h1> 3er SWITCH con SWITCH</h1>';
    break;
    default:
        echo '<h1>Ninguna Opcion es valida con SWITCH</h1>'.'</br>';
    break;
}

if ($var=='sagitario'){
    echo '<h1> 1er con IF</h1>'; 
}else if ($var=='leo'){
        echo '<h1> 2do con IF</h1>';
    }else if($var=='cancer'){
            echo '<h1> 3do con IF</h1>';
        }else{
                echo '<h1> Ninguna Opcion es valida con IF</h1>'.'</br>';
            }
?>