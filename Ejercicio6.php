
<h4>Digite acontinuacion un numero para saber si es capicuo</h4>



<form method='POST'>

    Ingrese su numero: 
    
<input type='number' name='capicuo' required/>
<br>
<input name='suma' type='submit' value='Enviar Numero' />
<br>
<?php

if(isset($_REQUEST['suma'] )){
    
    $num = $_POST['capicuo'];
    
    $cap = strrev($num);
    
   
    
    if($num == $cap) echo "El numero $num es capicuo";
    else echo "El numero $num no es capicuo";
    
}


?>