<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
        
        <h2>Por Favor Ingrese Las Coeficientes </h2> <br>
        <label> Variable b:  <input type='text' name='b' ></label><br>
        <label> Variable a:  <input type='text' name='a' ></label><br>
        <label> Variable c:  <input type='text' name='c' ></label><br>
        <input type='submit' name='enviar'>
                </form>
        
        <?php
        
        
        
        $b1 = $_POST['b'] * 2;
        
        $a1 = $_POST['a'];
        $a2 = $_POST['c'];
        $b2 = ($a1 * $a2);
        $b3 = 4 * $b2;
      $y =  sqrt($b3);
      
    
      
        $b4= $b1 - $y;
        $b5 = $_POST['b'] + $b4;
        $b6 = $b5 / (2*$a1);
        echo "<br>";
        echo "El Resultado de la ecuacion es: ". $b6;
        
        ?>
    </body>
</html>
