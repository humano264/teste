<?php

$palavra1 = trim(fgets(STDIN));
$palavra2 = trim(fgets(STDIN));
$palavra3 = trim(fgets(STDIN));

if ($palavra1 == "vertebrado") {
    if ($palavra2 == "ave") {
        if ($palavra3 == "carnivoro") {
            echo "aguia\n";
        } else {
            echo "pomba\n";
        }
    } else {
        if ($palavra3 == "onivoro") {
            echo "homem\n";
        } else {
            echo "vaca\n";
        }
    }
} else {
    if ($palavra2 == "inseto") {
        if ($palavra3 == "hematofago") {
            echo "pulga\n";
        } else {
            echo "lagarta\n";
        }
    } else {
        if ($palavra3 == "hematofago") {
            echo "sanguessuga\n";
        } else {
            echo "minhoca\n";
        }
    }
}

?>