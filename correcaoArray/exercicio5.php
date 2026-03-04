<?php

// Preenchendo as 7 posições do array
$numeros[0] = 12;
$numeros[1] = 45;
$numeros[2] = 8;
$numeros[3] = 30;
$numeros[4] = 22;
$numeros[5] = 17;
$numeros[6] = 5;

$encontrado = false;

// Verificando se existe o número 30
for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] == 30) {
        echo "O número 30 foi encontrado na posição: " . $i;
        $encontrado = true;
    }
}

// Caso não encontre
if ($encontrado == false) {
    echo "O número 30 não foi encontrado no array.";
}

?>