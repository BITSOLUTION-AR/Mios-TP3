
// Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres algoritmos con cada estructura repetitiva.

<?php

$suma = 0;
$contador = 0;

$A = readline("ingrese el númera de A: ");
$B = readline("ingrese el númera de B: ");

if ($B < 0) {
    $A *= -1;
    $B *= -1;
}

/* Usando WHILE.
while ($contador < $B) {
    $suma += $A;
    $contador++;
}

/* Usando el DO WHILE.
do{
    $suma += $A;
    $contador++;
}while ($contador < $B); */

// Usando FOR.
for ($contador = 0, $suma = 0; $contador < $B; $contador++) { // Puedo pasar varias variables al inicio del For.
    $suma += $A;
}
echo "El resultado de la multiplicacion es: " . $suma . "\n";

?>

