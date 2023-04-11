<?php
    $velocidade = readline();
    $distancia = readline();
    $consumo = readline();

    $velocidade = number_format($velocidade, 2, ".", "");
    $distancia = number_format($distancia, 2, ".", "");
    $consumo = number_format($consumo, 2, ".", "");

    $horas = $distancia/$velocidade;
    $combustivel = $distancia/$consumo;
    $horas = number_format($horas, 2, ".", "");
    $combustivel = number_format($combustivel, 2, ".", "");

    echo "Total horas: $horas\n";
    echo "Total combustivel: $combustivel\n";
    
?>