<?php

$numero = intval(fgets(STDIN));
$ht = intval(fgets(STDIN));
$vh = floatval(fgets(STDIN));


$salario = $ht * $vh;


echo "NUMBER = " . $numero . "\n";
echo "SALARY = U$ " . number_format($salario, 2, '.', '') . "\n";
?>