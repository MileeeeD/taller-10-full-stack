<?php
    //VARIABLES
    const TICKET_PRICE =25000;
    $membershiptype = "";
    $person_number = 0;
    $discount = 0;
    
    //PROCESO
    echo"Ingrese su tipo de membresia: ";
    fscanf(STDIN, "%s", $membershiptype);
    echo "Ingrese el número de personas: ";
    fscanf(STDIN, "%d", $person_number);
    
    $total_pay = $person_number * TICKET_PRICE;

    switch($membershiptype){
        case "A": case "a":
         $discount = $total_pay *0.3;
         break;
        case "B": case "b":
         $discount = $total_pay *0.25;
         break;
        case "C": case "c":
         $discount = $total_pay *0.1;
         break;
        case "D": case "d":
         $discount = $total_pay *0.05;
         break;
            
    }
    
    $total_pay = $total_pay - $discount;
    echo "\n __________________________________\n";
    echo "Su valor total de precio a pagar es: ". $total_pay. " de acuerdo a su membresia ". $membershiptype. " el descuento es de: " . $discount;
?>