<?php

// Criando o array e preenchendo posição por posição
//$valores = [20, 8, 12, 20, 7, 15, 3, 25, 10, 15];
//$valores = [];
$valores[0] = 20;
$valores[1] = 8;
$valores[2] = 12;
$valores[3] = 20;
$valores[4] = 7;
$valores[5] = 15;
$valores[6] = 3;
$valores[7] = 25;
$valores[8] = 10;
$valores[9] = 15;

$soma = 0;

// Calculando a soma
for ($i = 0; $i < count($valores); $i++) {
    $soma =$soma + $valores[$i];
}

// Calculando a média
$media = $soma / count($valores);

echo "<br><br>";
echo "Soma: " . $soma . "<br>";
echo "Media: " . $media;

?>