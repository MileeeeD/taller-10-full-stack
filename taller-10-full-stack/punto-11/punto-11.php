<?php
    //VARIEBALES
    $sum =0;
    
    //PROCESO
    for($x = 0; $x<= 100; $x = $x + 2){
       echo $x . "\n" ;
       $sum = $sum + $x;
    }
    echo "Suma total: ". $sum;
?>