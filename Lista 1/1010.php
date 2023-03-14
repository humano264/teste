<?php
list($c1, $q1, $p1) = explode(' ', fgets(STDIN));

list($c2, $q2, $p2) = explode(' ', fgets(STDIN));

$total = $q1 * $p1 + $q2 * $p2;

echo "VALOR A PAGAR: R$ " . number_format($total, 2, '.', '') . "\n";
?>