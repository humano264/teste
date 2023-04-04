<?php
$X = floatval(fgets(STDIN)); // lê o valor X da entrada
$N = array(); // cria um vetor vazio
$N[0] = $X; // atribui o valor de X na primeira posição do vetor

// preenche o restante do vetor com a metade do valor anterior
for ($i = 1; $i < 100; $i++) {
  $N[$i] = $N[$i-1] / 2;
}

// imprime o vetor formatado com 4 casas decimais
for ($i = 0; $i < 100; $i++) {
  printf("N[%d] = %.4f\n", $i, $N[$i]);
}
?>