<?php

// lê o valor inteiro de N
$n = intval(fgets(STDIN));

// inicializa as variáveis de controle
$i = 1;
$j = 1;

// itera até imprimir todas as linhas de saída
while ($i <= $n) {
    // imprime os três números e a palavra "PUM"
    echo "$j " . ($j+1) . " " . ($j+2) . " PUM\n";
    // atualiza o valor de $j para o próximo conjunto de números
    $j += 4;
    // incrementa o valor de $i para a próxima linha de saída
    $i++;
}