<?php

// lê o valor de T
$t = intval(fgets(STDIN));

// inicializa o vetor N com os valores de 0 a T-1
for ($i = 0; $i < 1000; $i++) {
  $n[$i] = $i % $t;
}

// imprime o vetor N
for ($i = 0; $i < 1000; $i++) {
  echo "N[$i] = " . $n[$i] . "\n";
}

?>