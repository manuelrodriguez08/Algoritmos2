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
        <?php
        $km = 300000;
        $seg = 1;
        $segs = 6912000;
        
        
        $total = ($km * $segs) / $seg;
        
        echo "la distancia en km que recorre la velocidad de la luz en 800 dias es igual a: ".$total;
        ?>
    </body>
</html>
