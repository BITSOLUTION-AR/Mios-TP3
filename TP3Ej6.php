
// Realizar la división entera a/b de dos valores enteros positivos mediante restas.

<?php

$A = readline("ingrese el 'Dividendo': "); 
$B = readline("ingrese el 'Divisor: ");

$const = 0; // Se guarda el resultado, que son las veces que resta en realidad.
$resta = $A;

while ($resta - $B >= 0) {
    $resta -= $B;
    $const += 1;
}

echo "La división entre: " . $A . "/" . $B . " = " . $const;

?>