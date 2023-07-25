<?php
    //VARIABLES
    $first_numer = 0;
    $second_number = 0;
    
    //PROCESS
    echo "Ingresa el primer número a sumar: ". "\n";
    fscanf(STDIN, "%d", $first_number);
    echo "________________________". "\n";
    echo "Ingresa el sgeundo valor a sumar: ". "\n";
    fscanf(STDIN, "%d", $second_number);
    
    $add = $first_number + $second_number;
    
    //OUT
    echo "La suma es: ". $add;
?>