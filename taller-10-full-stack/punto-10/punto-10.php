<?php
//INICILIZATING VARIABLE
$number = 0;

// Iniciamos el bucle while que se ejecutará mientras $numero sea menor o igual a 100
while ($number<= 100) {
    // Verificamos si el número es par utilizando el operador módulo (%)
    // Si el residuo de dividir $numero entre 2 es igual a 0, entonces es par
    if ($number % 2 === 0) {
        echo $number . " ";
    }
    // Incremento $numero en 1 para pasar al siguiente número
    $number++;
}
?>