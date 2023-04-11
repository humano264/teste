<?php
$salario = floatval(fgets(STDIN));
$percentual = 0;

if ($salario <= 400) {
  $percentual = 15;
} else if ($salario <= 800) {
  $percentual = 12;
} else if ($salario <= 1200) {
  $percentual = 10;
} else if ($salario <= 2000) {
  $percentual = 7;
} else {
  $percentual = 4;
}

$novo_salario = $salario * (1 + ($percentual / 100));
$reajuste = $novo_salario - $salario;

echo "Novo salario: " . number_format($novo_salario, 2, '.', '') . "\n";
echo "Reajuste ganho: " . number_format($reajuste, 2, '.', '') . "\n";
echo "Em percentual: " . $percentual . " %\n";
?>