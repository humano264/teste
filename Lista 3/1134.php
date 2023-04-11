<?php

// Inicia a leitura do teclado
$handle = fopen("php://stdin", "r");

// Define os contadores iniciais
$alcool = 0;
$gasolina = 0;
$diesel = 0;

// Loop para receber os códigos de combustível
while (true) {
    // Lê um código
    $codigo = (int) trim(fgets($handle));

    // Verifica se o código é válido
    if ($codigo < 1 || $codigo > 4) {
        continue;
    }

    // Verifica o tipo de combustível e incrementa o contador correspondente
    if ($codigo == 1) {
        $alcool++;
    } elseif ($codigo == 2) {
        $gasolina++;
    } elseif ($codigo == 3) {
        $diesel++;
    } elseif ($codigo == 4) {
        // Encerra o loop quando o código 4 for digitado
        break;
    }
}

// Exibe a mensagem de agradecimento e os contadores de combustível
echo "MUITO OBRIGADO\n";
echo "Alcool: $alcool\n";
echo "Gasolina: $gasolina\n";
echo "Diesel: $diesel\n";

// Fecha o leitor do teclado
fclose($handle);