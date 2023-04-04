<?php

// lê a operação a ser realizada (Soma ou Média)
$operacao = readline();

// lê os valores da matriz
for ($i = 0; $i < 12; $i++) {
  for ($j = 0; $j < 12; $j++) {
    $matriz[$i][$j] = floatval(readline());
  }
}

$soma = 0;
$contagem = 0;

// percorre a matriz acima da diagonal principal e realiza a operação solicitada
for ($i = 0; $i < 11; $i++) {
  for ($j = $i+1; $j < 12; $j++) {
    $soma += $matriz[$i][$j];
    $contagem++;
  }
}

// verifica a operação solicitada e exibe o resultado com uma casa decimal
if ($operacao == 'S') {
  printf("%.1f\n", $soma);
} else {
  $media = $soma / $contagem;
  printf("%.1f\n", $media);
}

?>