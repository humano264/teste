<?php
$L = intval(fgets(STDIN));
$C = intval(fgets(STDIN));

if (($L + $C) % 2 == 0) {
    echo "1\n"; // casa branca
} else {
    echo "0\n"; // casa preta
}
?>