<?php

function isFunnyLaugh(string $laugh): bool {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelSequence = '';
    
    // Extrai as vogais da risada e armazena em $vowelSequence
    for ($i = 0; $i < strlen($laugh); $i++) {
        if (in_array($laugh[$i], $vowels)) {
            $vowelSequence .= $laugh[$i];
        }
    }
    
    // Compara a sequência de vogais com a mesma sequência invertida
    return $vowelSequence == strrev($vowelSequence);
}

$laugh = trim(fgets(STDIN));
if (isFunnyLaugh($laugh)) {
    echo "S\n";
} else {
    echo "N\n";
}

?>