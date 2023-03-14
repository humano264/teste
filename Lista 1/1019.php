<?php
$segundos = intval(fgets(STDIN));

$horas = intdiv($segundos, 3600);
$segundos %= 3600;

$minutos = intdiv($segundos, 60);
$segundos %= 60;

printf("%d:%d:%d\n", $horas, $minutos, $segundos);
?>