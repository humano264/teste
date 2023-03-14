<?php
$n = fgets(STDIN);
$s = (float) fgets(STDIN);
$v = (float) fgets(STDIN);

$c = $v * 0.15;

$t = $s + $c;

echo "TOTAL = R$ " . number_format($t, 2, '.', '') . "\n";
?>