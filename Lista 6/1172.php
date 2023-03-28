<?php

// leitura dos valores do vetor
for ($i = 0; $i < 10; $i++) {
    $valor = intval(fgets(STDIN));
    $vetorX[$i] = $valor;
}

// substituição dos valores negativos e nulos por 1
for ($i = 0; $i < 10; $i++) {
    if ($vetorX[$i] <= 0) {
        $vetorX[$i] = 1;
    }
}

// impressão do vetor
for ($i = 0; $i < 10; $i++) {
    echo "X[$i] = " . $vetorX[$i] . "\n";
}

?>