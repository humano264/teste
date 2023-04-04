<?php
// Leitura do caractere que indica a operação
$operacao = readline();

// Leitura dos valores da matriz
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $matriz[$i][$j] = floatval(readline());
    }
}

$soma = 0;
$cont = 0;

// Cálculo da soma ou média dos elementos abaixo da diagonal principal
for ($i = 1; $i < 12; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $soma += $matriz[$i][$j];
        $cont++;
    }
}

if ($operacao == 'M') {
    $resultado = $soma / $cont;
} else {
    $resultado = $soma;
}

echo number_format($resultado, 1, '.', '') . "\n";
?>