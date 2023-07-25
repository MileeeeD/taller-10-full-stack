<?php
// ARRAY FIVE POSITIONS
$array = array(1000, 2000, 3000, 4000, 5000);

//VARIABLE
$sum = 0;

//PROCESS
foreach ($array as $number) {
   echo $number . "\n";
 $sum += $number;
}

echo "La suma de los números es: " . $sum;
?>