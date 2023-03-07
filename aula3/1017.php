<?php

$tempo_gasto = floatval(readline());
$velocidade_media = floatval(readline());

$distancia_percorrida = $tempo_gasto * $velocidade_media;

$consumo_medio = $distancia_percorrida / 12;

echo number_format($consumo_medio, 3, '.', '') . "\n";
?>