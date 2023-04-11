<?php

$n = intval(fgets(STDIN)); // Lê o número de casos de teste

for ($i = 1; $i <= $n; $i++) {
  $x = intval(fgets(STDIN)); // Lê o valor inteiro
  
  // Verifica se o valor é zero
  if ($x == 0) {
    echo "NULL\n";
  }
  // Verifica se o valor é par ou ímpar
  else {
    echo ($x % 2 == 0 ? "EVEN " : "ODD ");
    
    // Verifica se o valor é positivo ou negativo
    echo ($x > 0 ? "POSITIVE\n" : "NEGATIVE\n");
  }
}

?>