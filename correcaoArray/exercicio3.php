<?php

// Preenchendo as 5 posições do array
$numeros[0] = 18;
$numeros[1] = 7;
$numeros[2] = 25;
$numeros[3] = 12;
$numeros[4] = 9;

// Considera o primeiro valor como o maior inicialmente
$maior = $numeros[0];

// Percorrendo o array para verificar o maior valor
for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
    }
}

// Exibindo o maior valor encontrado
echo "Maior valor: " . $maior;

?>