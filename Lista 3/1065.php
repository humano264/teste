<?php
// leitura dos valores
$valores = array();
for ($i = 0; $i < 5; $i++) {
  $valores[$i] = intval(fgets(STDIN));
}

// contagem dos valores pares
$count = 0;
foreach ($valores as $valor) {
  if ($valor % 2 == 0) {
    $count++;
  }
}

// exibição da quantidade de valores pares
echo $count . " valores pares\n";
?>