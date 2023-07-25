<?php
    //DECLARACIÓN DE VARIABLES DE ENTRADA
    $firstnumber = 0;
    $secondnumber = 0;
    $operationtype = "";
    $result =0;
    
    //PROCESO
    echo "Ingrese el primer número a operar: " . "\n";
    fscanf(STDIN, "%d", $firstnumber);
    echo "Ingrese el segundo número a operar: ". "\n";
    fscanf(STDIN, "%d", $secondnumber);
    
    echo "Elija el tipo de operación: \n";
    echo "1- Sumar\n";
    echo "2- Restar\n";
    echo "3- Multiplicar\n";
    echo "4- Dividir\n";
    fscanf(STDIN, "%d", $operationtype);
    echo"______________________________ \n";
    switch($operationtype){
        case 1:
            $result = $firstnumber+$secondnumber;
            break;
        case 2:
             $result = $firstnumber-$secondnumber;
            break;
        case 3:
             $result = $firstnumber*$secondnumber;
            break;
        case 4:
             $result = $firstnumber/$secondnumber;
            break;
        default:
            echo "No eligió una opción correcta";
    }
    
    echo "______________________ \n";
    echo "El resultado es: ". $result;
?>