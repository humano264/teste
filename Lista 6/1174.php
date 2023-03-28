<?php

// Lendo o vetor A
for ($i = 0; $i < 100; $i++) {
    $a[$i] = floatval(fgets(STDIN));
}

// Mostrando as posições com valor <= 10
for ($i = 0; $i < 100; $i++) {
    if ($a[$i] <= 10) {
        printf("A[%d] = %.1f\n", $i, $a[$i]);
    }
}

?>