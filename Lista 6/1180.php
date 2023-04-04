<?php
// Lendo o valor de N
$n = intval(fgets(STDIN));

// Lendo os valores do vetor X
$x = explode(" ", fgets(STDIN));

// Encontrando o menor valor e sua posição
$min = $x[0];
$pos = 0;

for ($i = 1; $i < $n; $i++) {
    if ($x[$i] < $min) {
        $min = $x[$i];
        $pos = $i;
    }
}

// Imprimindo o resultado
echo "Menor valor: " . $min . "\n";
echo "Posicao: " . $pos . "\n";
?>