<?php

// lê o número de casos de teste
$n = intval(fgets(STDIN));

// itera sobre os casos de teste
for ($i = 0; $i < $n; $i++) {
  // lê os valores
  $valores = fgets(STDIN);
  $valores = explode(' ', $valores);

  // converte os valores para float
  $valor1 = floatval($valores[0]);
  $valor2 = floatval($valores[1]);
  $valor3 = floatval($valores[2]);

  // calcula a média ponderada
  $media = ($valor1 * 2 + $valor2 * 3 + $valor3 * 5) / 10;

  // imprime o resultado com uma casa decimal
  printf("%.1f\n", $media);
}