<?php
    //VARIBLES
    $firstname = 0;
    $lastname= 0;
    
    //PROCESS
    echo "¡Bienvenido! Ingresa tu(s) nombre(s): ". "\n";
    fscanf(STDIN, "%s", $firstname);
    echo "Ingresa tus apellidos: ". "\n";
    fscanf(STDIN, "%s", $lastname);
    
    echo "________________________________". "\n";
    
    echo"Es un placer conocerte ". $firstname." ". $lastname;
?>
