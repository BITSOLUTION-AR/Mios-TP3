
/* Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial.

En estos casos se acostumbra utilizar la notación ! , denominada factorial, que indica: 
    n! = n * (n-1) * (n-2) * (n-3) * (n-4) *... (n-n)
    3!=3x2x1=6 
    4!=4x3x2x1
    5!=5x4x3x2x1=120 */

<?php

$numero = readline("Ingrese un número mayor a cero: ");
$factN = 1;

// Usando FOR.
/* for ($contador = $numero; $contador > 1; $contador--) {
    $factN = $factN * $contador;
}
echo "El factorial de " . $numero . " es: " . $factN . PHP_EOL; */

// Usando WHILE.
$contador = $numero;
while ($contador > 1) {
    $factN = $factN * $contador;
    $contador--;
    $numero = readline("Ingrese un número mayor a cero: ");
    // echo "El factorial de " . $contador . " es: " . $factN . PHP_EOL;
}
echo "El factorial de " . $numero . " es: " . $factN . PHP_EOL;
?>