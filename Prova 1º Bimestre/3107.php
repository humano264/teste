<?php

// lê as entradas do usuário
$velocidadeMedia = floatval(fgets(STDIN));
$distanciaViagem = floatval(fgets(STDIN));
$consumoMedio = floatval(fgets(STDIN));

// calcula o tempo necessário em horas para completar a viagem
$tempoViagem = $distanciaViagem / $velocidadeMedia;

// calcula o total de combustível gasto
$combustivelGasto = $distanciaViagem / $consumoMedio;

// imprime os resultados
printf("%.2f\n", $tempoViagem);
printf("%.2f\n", $combustivelGasto);