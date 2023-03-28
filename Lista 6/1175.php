<?php

// Lendo o vetor N
for ($i = 0; $i < 20; $i++) {
    $n[$i] = intval(fgets(STDIN));
}

// Trocando as posições
for ($i = 0; $i < 10; $i++) {
    $temp = $n[$i];
    $n[$i] = $n[19-$i];
    $n[19-$i] = $temp;
}

// Mostrando o vetor modificado
for ($i = 0; $i < 20; $i++) {
    printf("N[%d] = %d\n", $i, $n[$i]);
}

?>