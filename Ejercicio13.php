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
            <h1> REALIZAR FACTURACION  </h1>
            
            <h2> Articulo: </h2>
            
        <label>Codigo: <input type="text" name="codigo" > </label>
        <label>Nombre: <input type="text" name="nombre" > </label>
        <label>Cantidad: <input type="text" name="cantidad" > </label>
        <label>Precio: <input type="text" name="precio" > </label>
        <br>
        <input type="submit" name="acceder" > 
        
        
        </form>
        <?php
        
        session_start();
        $x1= $_POST['codigo'];
        $x2= $_POST['nombre'];
        $x3= $_POST['cantidad'];
        $x3= $_POST['precio'];
        
        $_SESSION['codigo'] = $x1;
        
        echo "su codigo es: ".$_SESSION['codigo'];
        
        ?>
    </body>
</html>

