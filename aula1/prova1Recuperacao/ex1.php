<?php
$m[5][5] = array();
$n = readline();

for($i=0;$i<5;$i++){

    for ($c=0;$c<5;$c++){
    $coluna[$i][$c] = number_format(trim(fgets(STDIN)),2,".","");
    if($coluna[$i][$c]>= $n) {
        echo "Valor Encontrado: ".$coluna[$i][$c]." Linha: $i Coluna: $c\n";
        }
    }
} 
?>