
// Imprimir un listado con los números del 1 al 100 cada uno con su respectivo cuadrado

<?php

$numero = 0;

for ($contador = 0; $contador < 100; $contador++) {
    $cuadrado = $numero ** 2;
    echo "El cuadrado de " . $numero . " es: " . $cuadrado . PHP_EOL;
    $numero++;
}

?>