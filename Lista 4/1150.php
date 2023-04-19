<?php
$x = intval(fgets(STDIN));
$z = intval(fgets(STDIN));

while ($z <= $x) {
  $z = intval(fgets(STDIN));
}

$cont = 1;
$soma = $x;
while ($soma < $z) {
  $x++;
  $soma += $x;
  $cont++;
}

echo $cont . "\n";
?>