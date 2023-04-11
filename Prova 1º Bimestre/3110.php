<?php
  //declaração 
  $matriz = readline();
  $valor = array();
  
  for($i = 0; $i < 5; $i++){
  for($j = 0; $j < 5; $j++){
  $valor[$i][$j] = readline();
  
} 
//saída de dados 
  }
  for($i = 0; $i < 5; $i++){
  for($j = 0; $j < 5; $j++){
  if($valor[$i][$j] >= $matriz){
  print("Valor Encontrado: ".$valor[$i][$j]." Linha: ".$i." Coluna: ".$j."\n");
      }
    } 
  }
?>