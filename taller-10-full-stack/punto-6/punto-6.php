<?php
    //VARIABLES
    $firstname = "";
    const AGE = 18;
    $age_user = 0;
    
    //PROCESO
    
    echo"Bienvenido, ingrese su nombre: ". "\n";
    fscanf(STDIN, "%s", $firstname);
    echo "Ingrese su edad: ". "\n";
    fscanf(STDIN, "%d", $age_user);
    
    echo"______________________"."\n";
    if($age_user>= 18){
        echo "Bienvenido: ". $firstname. " tienes " . $age_user ." años, por lo tanto eres mayor de edad. ";
    }else{
        echo "Bienvenido; ". $firstname . " tienes " . $age_user . " años, por lo tanto eres menor de edad. ";
    }
?>