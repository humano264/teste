<?php
$r = (float) fgets(STDIN);

$v = 4.0 / 3.0 * 3.14159 * pow($r, 3);

echo "VOLUME = " . number_format($v, 3, '.', '') . "\n";
?>