<?php
$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    list($A, $B) = explode(' ', trim(fgets(STDIN)));

    $lenA = strlen($A);
    $lenB = strlen($B);

    if ($lenB > $lenA) {
        echo "nao encaixa\n";
    } else {
        $suffix = substr($A, $lenA - $lenB);

        if ($suffix == $B) {
            echo "encaixa\n";
        } else {
            echo "nao encaixa\n";
        }
    }
}
?>