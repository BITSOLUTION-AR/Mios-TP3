
// Realizar la operación de potenciación (ab), de dos valores enteros positivos, con multiplicaciones.

<?php

$potencia = 1; // Tiene que iniciar en 1, porque todo numero multiplicado por cero es igual a cero.
$contador = 0;

$A = readline("ingrese el número Base: ");
$B = readline("ingrese el número Exponente: ");

if ($B < 0) {
    $A *= -1;
    $B *= -1;
}

// Usando WHILE.
while ($contador < $B) {
    $potencia *= $A;
    $contador++;
}

/* Usando el DO WHILE.
do{
    $potencia *= $A;
    $contador++;
}while ($contador < $B); */

/* Usando FOR.
for ($contador = 0, $potencia = 1; $contador < $B; $contador++) { // Puedo pasar varias variables al inicio del For.
    $potencia *= $A;
} */
echo "El resultado de la potenciación es: " . $potencia . "\n";

?>