
// Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente hasta 2.
<?php

$n = readline("Ingrese un numero Positivo: ");

while ($n > 0 ) {
    if ($n % 2 == 0) {
        echo $n . PHP_EOL;
    }
    $n--;
}

?>