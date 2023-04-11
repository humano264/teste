<?php

// realizei as trocas de fonemas
function trocarFonemas($palavra) {
  $trocas = array(
    'P' => 'B',
    'F' => 'V',
    'T' => 'D',
    'R' => 'L',
    'J' => 'Z',
    'X' => 'S'
  );
  $novaPalavra = strtr($palavra, $trocas);
  return $novaPalavra;
}

// li a quantidade de casos de teste
$numCasos = intval(fgets(STDIN));

// para cada caso de teste
for ($i = 0; $i < $numCasos; $i++) {
  // lê a linha de entrada
  $linha = trim(fgets(STDIN));
  
  // divide a linha em palavras
  $palavras = explode(" ", $linha);
  
  // inverte a ordem das palavras
  $palavras = array_reverse($palavras);
  
  // aplica as trocas de fonemas em cada palavra
  for ($j = 0; $j < count($palavras); $j++) {
    $palavras[$j] = trocarFonemas($palavras[$j]);
  }
  
  // junta as palavras de volta em uma linha
  $linhaCriptografada = implode(" ", $palavras);
  
  // imprime a linha criptografada
  echo $linhaCriptografada . "\n";
}