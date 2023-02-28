<?php

    $pi = 3.14159;
    $raio = floatval('150.00');  //150.00;
    //$raio = floatval(readline());

    $a = $pi * ($raio * $raio); 
    $a = number_format($a, 4, '.', '');
    echo "A=".$a."\n";

?> 