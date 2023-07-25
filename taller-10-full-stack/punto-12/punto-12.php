<?php
//VARIABLES
$number= 0;
echo "Ingrese un número: ";
fscanf(STDIN, "%d", $numero);

// PROCESO 31 veces (0 al 30)
for ($x = 0; $x <= 30; $x++) {
    //Resultado de la multiplicación
    $resultado = $numero * $x;

    echo $numero . " x " . $x . " = " . $resultado . "\n";
}
?>