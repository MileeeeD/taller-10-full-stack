<?php
    //VARIABLES
    const TICKET_PRICE =25000;
    $membershiptype = "";
    $person_number = 0;
    
    //PROCESO
    echo"Ingrese su tipo de aficiliación: ";
    fscanf(STDIN, "%s", $membershiptype);
    echo "Ingrese el número de personas: ";
    fscanf(STDIN, "%d", $person_number);
    
    $total_pay = $person_number * TICKET_PRICE;
    
    if($membershiptype == "A"|| $membershiptype == "B" ){
        $total_pay = $total_pay -($total_pay*0.3);
    }else{
        echo"Usted no cuenta con membresia valida para obtener un descuento \n";
    }
    echo "Su valor total de precio a pagar es: ". $total_pay;
?>