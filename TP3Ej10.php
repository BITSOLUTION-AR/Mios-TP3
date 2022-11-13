
// Imprimir los 100 primeros números de Fibonacci. Recuerde que un número de Fibonacci se calcula como la suma de los dos anteriores así: 0, 1, 1, 2, 3, 5, 8,13…

// En este caso tenemos una suma de los primeros números de Fibonacci.

<?php

$num1 = 0;
$num2 = 1;

for ($contador = 0; $contador < 100; $contador++) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp + $num1;

    echo $num1 . PHP_EOL;
}

?>
