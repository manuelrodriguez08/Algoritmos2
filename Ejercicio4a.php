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
        
        
        <input type='text' name='variable' >
        <input type='submit' name='enviar'>
                </form>

      <?php
      
      
        
        $numero =$_POST['variable'];
       
       echo "El numero ingresado al reves es: ".strrev($numero);
       
       
        ?>
        
    </body>
</html>
