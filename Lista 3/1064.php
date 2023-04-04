<?php
// Inicializa o contador de valores positivos e a soma dos valores positivos
$positivos = 0;
$somaPositivos = 0;

// Laço de repetição para ler os 6 valores
for ($i = 1; $i <= 6; $i++) {
  // Lê um valor numérico
  $valor = floatval(fgets(STDIN));

  // Verifica se o valor é positivo
  if ($valor > 0) {
    $positivos++;
    $somaPositivos += $valor;
  }
}

// Calcula a média dos valores positivos
$mediaPositivos = $somaPositivos / $positivos;

// Imprime o resultado
echo $positivos . " valores positivos\n";
echo number_format($mediaPositivos, 1, '.', '') . "\n";
?>