
                 <form method='POST' > 
        
                 Ingrese el total de kilometros que recorra su automovil :
                 
                 <input name = 'km' type='text'/> 
                 
                 <input name='enviar' type='submit' value='Enviar Numero' />
                 
                 
                 </form>


<?php



if(isset($_REQUEST['enviar'])){
    
    $km = $_POST['km'];
    
    $gasta = $km * 16.4;
    
    
    $total = number_format($gasta, 0, '.', ''); 
    
    echo "Su vehiculo gastara  ".$total. " litros ";
    
    
}


?>