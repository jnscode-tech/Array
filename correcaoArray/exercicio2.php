<?php

// Preenchendo as 10 posições do array
$numeros[0] = 4;
$numeros[1] = 9;
$numeros[2] = 15;
$numeros[3] = 8;
$numeros[4] = 12;
$numeros[5] = 20;
$numeros[6] = 3;
$numeros[7] = 7;
$numeros[8] = 11;
$numeros[9] = 6;

$soma = 0;

// Calculando a soma dos valores
for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];
}

// Exibindo apenas a soma final
echo "Soma total: " . $soma;

?>