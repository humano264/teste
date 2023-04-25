<?php

    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];

    $area = $largura * $comprimento;

    echo "<h1>Area do terreno: $area metros</h1>";

?>