<?php
// Solicitar ingreso de contraseña
echo "Ingrese una contraseña: ";
$password = trim(fgets(STDIN));

// Validar contraseña con funciones integradas de PHP
if (strlen($password) >= 8 && preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password)) {
    echo "La contraseña es segura.";
} else {
    echo "La contraseña no es segura. Debe tener al menos 8 caracteres, una letra mayúscula y un número.";
}
?>