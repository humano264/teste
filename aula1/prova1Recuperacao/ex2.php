<?php
$f = 0;

$a = readline();

for ($i = 0; $i<$a; $i++){
    $b = readline();
    list($c, $d) = explode(" ", $b);
    
    $e = $c*$d;
    $f = $f + $e;
    
}

echo "$f\n"

?>