<?php
$numeros = array (1,2,3,4);
$array2 = array (7,8,9);

array_push ($numeros,5,6); // acrescenta elemento depois do último elemento
array_pop ($numeros); // tira o último elemento do array
array_unshift ($numeros,0,-1); /* coloca elementos na frente do array*/ 

$numeros = array_merge($numeros, $array2);  // mescla os dois arrays
sort ($numeros); // ajusta em ordem crescente
rsort($numeros); // ajusta em ordem descrescente

//$numeros = array_slice ($numeros, 2,3); // recorta uma parte do array - mascarar

for ($i=0; $i< count ($numeros); $i++){

    echo $numeros[$i]."<br>";
}
?>