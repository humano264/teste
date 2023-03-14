<?php

$dias = (int) fgets(STDIN);

$anos = $dias / 365;
$dias = $dias % 365;

$meses = $dias / 30;
$dias = $dias % 30;

printf("%d ano(s)\n%d mes(es)\n%d dia(s)\n", $anos, $meses, $dias);

?>