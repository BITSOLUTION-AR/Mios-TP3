
/* Calcular el factorial de 10 números diferentes cuyos valores se leen.

En estos casos se acostumbra utilizar la notación ! , denominada factorial, que indica: 
    n! = n * (n-1) * (n-2) * (n-3) * (n-4) *... (n-n)
    3!=3x2x1=6 
    4!=4x3x2x1
    5!=5x4x3x2x1=120 */

<?php

$numero = readline("Ingrese un número: ") . PHP_EOL;
$factN = 0;

for ($factN = $numero, $contador = 0; $contador < 10; $contador++) {
    $factN = $factN * $contador;
    echo "El factorial de " . $numero . " es: " . $factN . PHP_EOL;
    echo $numero = readline("Ingrese un número: ") . PHP_EOL;
}

// Lo modifico para probar el GITHUB!!!.

?>