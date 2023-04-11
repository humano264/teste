<?php

for ($i = 1, $j = 7; $i <= 9; $i += 2) {
  for ($k = 0; $k < 3; $k++) {
    echo "I=$i J=$j\n";
    $j--;
  }
  $j += 5;
}

?>