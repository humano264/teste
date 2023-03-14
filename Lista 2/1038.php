<?php
$notas = fgets(STDIN);
$valores = explode(" ", $notas);
$nota1 = (float) $valores[0];
$nota2 = (float) $valores[1];
$nota3 = (float) $valores[2];
$nota4 = (float) $valores[3];

$media = ($nota1 * 2 + $nota2 * 3 + $nota3 * 4 + $nota4) / 10;

printf("Media: %.1f\n", $media);

if ($media >= 7.0) {
    echo "Aluno aprovado.\n";
} elseif ($media < 5.0) {
    echo "Aluno reprovado.\n";
} else {
    echo "Aluno em exame.\n";
    
    $nota_exame = (float) fgets(STDIN);
    
    printf("Nota do exame: %.1f\n", $nota_exame);
    
    $media_final = ($media + $nota_exame) / 2;
    
    if ($media_final >= 5.0) {
        echo "Aluno aprovado.\n";
    } else {
        echo "Aluno reprovado.\n";
    }
    
    printf("Media final: %.1f\n", $media_final);
}
?>
