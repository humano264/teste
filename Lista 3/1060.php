<?php
// Inicializa o contador de valores positivos
$positivos = 0;

// Laço de repetição para ler os 6 valores
for ($i = 1; $i <= 6; $i++) {
  // Lê um valor inteiro
  $valor = intval(fgets(STDIN));

  // Verifica se o valor é positivo
  if ($valor > 0) {
    $positivos++;
  }
}

// Imprime o resultado
echo $positivos . " valores positivos\n";
?>