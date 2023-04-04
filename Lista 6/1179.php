<?php
// inicializa os vetores
$par = array();
$impar = array();

// loop para ler os 15 valores
for ($i = 0; $i < 15; $i++) {
    // lê o valor da entrada
    $valor = intval(fgets(STDIN));

    // verifica se o valor é par ou ímpar
    if ($valor % 2 == 0) {
        // valor é par, adiciona no vetor de pares
        $par[] = $valor;

        // verifica se o vetor de pares está cheio
        if (count($par) == 5) {
            // vetor de pares está cheio, imprime e limpa o vetor
            for ($j = 0; $j < 5; $j++) {
                printf("par[%d] = %d\n", $j, $par[$j]);
            }
            $par = array();
        }
    } else {
        // valor é ímpar, adiciona no vetor de ímpares
        $impar[] = $valor;

        // verifica se o vetor de ímpares está cheio
        if (count($impar) == 5) {
            // vetor de ímpares está cheio, imprime e limpa o vetor
            for ($j = 0; $j < 5; $j++) {
                printf("impar[%d] = %d\n", $j, $impar[$j]);
            }
            $impar = array();
        }
    }
}

// imprime o restante dos valores dos vetores
for ($j = 0; $j < count($impar); $j++) {
    printf("impar[%d] = %d\n", $j, $impar[$j]);
}
for ($j = 0; $j < count($par); $j++) {
    printf("par[%d] = %d\n", $j, $par[$j]);
}
?>