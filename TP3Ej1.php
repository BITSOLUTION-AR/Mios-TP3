
// Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar?

<?php

echo " PARA TERMINAR LA CARGA DE NOTAS, INGRESE UN VALOR NEGATIVO" . PHP_EOL;
echo PHP_EOL;

$nota = 0;
$contador = 0;
$notas = 0;

$nota = readline("Ingrese una nota: ");

while ($nota >= 0) {
    $notas += $nota;
    $contador++;
    $nota = readline("Ingrese una nota: ");
}

$promedio = ($contador) ? "El promedio de notas es: " . $notas / $contador : "La nota no puede ser Negativa";
/* Si $contador es igual o mayor a 1 es TRUE, si es igual o menor a 0 es FALSE.
$promedio = ($contador) ? valor de Verdad :  valor de Falso; . EL "?" es como un IF simplificado */

echo $promedio;

?>