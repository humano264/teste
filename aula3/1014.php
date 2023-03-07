<?php
$distancia = readline();

$combustivel = readline();
$consumo_medio = $distancia / $combustivel;

echo number_format($consumo_medio, 3, '.', '') . " km/l\n";
?>