<?php

$linha = readline();
$valores = explode(" ", $linha);


$a = (float) $valores[0];
$b = (float) $valores[1];
$c = (float) $valores[2];


$triangulo = ($a * $c) / 2;
$circulo = 3.14159 * pow($c, 2);
$trapezio = (($a + $b) * $c) / 2;
$quadrado = pow($b, 2);
$retangulo = $a * $b;


echo "TRIANGULO: " . number_format($triangulo, 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($circulo, 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($trapezio, 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($quadrado, 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($retangulo, 3, '.', '') . "\n";