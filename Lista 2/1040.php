<?php

$n1 = floatval(readline());
$n2 = floatval(readline());
$n3 = floatval(readline());
$n4 = floatval(readline());


$media = ($n1 * 2 + $n2 * 3 + $n3 * 4 + $n4 * 1) / 10;


if ($media >= 7.0) {
    echo "Media: " . number_format($media, 1) . "\n";
    echo "Aluno aprovado.\n";
} elseif ($media < 5.0) {
    echo "Media: " . number_format($media, 1) . "\n";
    echo "Aluno reprovado.\n";
} else {
    echo "Media: " . number_format($media, 1) . "\n";
    echo "Aluno em exame.\n";
    $exame = floatval(readline()); 
    $media_final = ($media + $exame) / 2; 
    if ($media_final >= 5.0) {
        echo "Nota do exame: " . number_format($exame, 1) . "\n";
        echo "Aluno aprovado.\n";
    } else {
        echo "Nota do exame: " . number_format($exame, 1) . "\n";
        echo "Aluno reprovado.\n";
    }
    echo "Media final: " . number_format($media_final, 1) . "\n";
}

?>