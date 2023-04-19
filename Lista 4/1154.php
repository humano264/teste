<?php
$idades = array();
while (true) {
  $idade = intval(fgets(STDIN));
  if ($idade < 0) {
    break;
  }
  $idades[] = $idade;
}

$total_idades = count($idades);
if ($total_idades > 0) {
  $media_idades = array_sum($idades) / $total_idades;
  echo number_format($media_idades, 2, '.', '') . "\n";
}
?>