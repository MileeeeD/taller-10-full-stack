<?php
    //CONSTANTS
    define("constant_number",10);
    
    //VARIABLES
    $number_1 = 26;
    echo "El primer número es: ". constant_number . "\n";
    echo "El segundo número es: ". $number_1. "\n";
    
    //PLUS OPERATION
    $plus = constant_number + $number_1;
    echo "La suma de los dos primeros números es: ". $plus. "\n";
    
    echo "__________________________________________________". "\n";
    //CHANGE VARIABLE
    $number_1 = 54;
    
    //PLUS OPERATION 2
    $plus = constant_number + $number_1;
    echo "El primer número es: ". constant_number. "\n";
    echo "El segundo número es: ". constant_number. "\n";
    
    echo "La suma de los dos números finales es : ". $plus;
?>