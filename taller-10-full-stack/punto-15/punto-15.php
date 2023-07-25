<?php
// FUNCTIONS
function sumar($num1, $num2) {
    return $num1 + $num2;
}
function restar($num1, $num2) {
    return $num1 - $num2;
}
function multiplicar($num1, $num2) {
    return $num1 * $num2;
}
function dividir($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: No se puede dividir entre cero.";
    }
}
// Solicitar ingreso de números y la operación
echo "Ingrese el primer número: ";
$num1 = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$num2 = trim(fgets(STDIN));
echo "Ingrese la operación (suma, resta, multiplicacion, division): ";
$operacion = trim(fgets(STDIN));
// Realizar operación y mostrar resultado
switch ($operacion) {
    case 'suma':
        $resultado = sumar($num1, $num2);
        break;
    case 'resta':
        $resultado = restar($num1, $num2);
        break;
    case 'multiplicacion':
        $resultado = multiplicar($num1, $num2);
        break;
    case 'division':
        $resultado = dividir($num1, $num2);
        break;
    default:
        $resultado = "Error: Operación no válida.";
        break;
}
echo "El resultado de la operación es: " . $resultado;
?>
