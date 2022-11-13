
// Imprimir un listado con los números impares desde 1 hasta 999 y seguidamente otro listado con los números pares desde 2 hasta 1000

<?php

$contador = 1;

while ($contador < 1000) {
    if ($contador % 2 == 1) {
        echo $contador . PHP_EOL;
    }
    $contador++;
}

echo PHP_EOL;

$contador = 1;

while ($contador < 1001) {
    if ($contador % 2 == 0) {
        echo $contador . PHP_EOL;
    }
    $contador++;
}

?>