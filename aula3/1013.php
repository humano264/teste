<?php

$linha = readline();
$valores = explode(" ", $linha);


$a = (int) $valores[0];
$b = (int) $valores[1];
$c = (int) $valores[2];


$maiorAB = ($a + $b + abs($a - $b)) / 2;
$maiorABC = ($maiorAB + $c + abs($maiorAB - $c)) / 2;


echo $maiorABC . " eh o maior\n";
?>