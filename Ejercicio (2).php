<?php

session_start();

$array = arrray() ;


$array[] = $_SESSION['numero'];

foreach ($array as $item){
    
    echo $item ."<br>";
    
}


?>
