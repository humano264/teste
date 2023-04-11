<?php
while (true) {
    $x = intval(fgets(STDIN));
    if ($x == 0) {
        break;
    }
    for ($i = 1; $i <= $x; $i++) {
        if ($i == $x) {
            echo $i;
        } else {
            echo $i . " ";
        }
    }
    echo "\n";
}
?>