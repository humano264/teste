<?php

// leitura do valor V
$V = intval(fgets(STDIN));

// inicialização do vetor N
$N = array_fill(0, 10, 0);
$N[0] = $V;

// preenchimento do vetor N
for ($i = 1; $i < 10; $i++) {
    $N[$i] = $N[$i-1] * 2;
}

// impressão do vetor
for ($i = 0; $i < 10; $i++) {
    echo "N[$i] = " . $N[$i] . "\n";
}

?>