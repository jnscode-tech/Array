<?php

// Preenchendo o array com 5 nomes
$nomes[0] = "Ana";
$nomes[1] = "Carlos";
$nomes[2] = "Mariana";
$nomes[3] = "João";
$nomes[4] = "Fernanda";

// Exibindo a lista na ordem normal
echo "Lista de nomes (ordem normal):<br>";
for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . "<br>";
}

echo "<br>";

// Exibindo a lista na ordem inversa
echo "Lista de nomes (ordem inversa):<br>";
for ($i = count($nomes) - 1; $i >= 0; $i--) {
    echo $nomes[$i] . "<br>";
}

?>