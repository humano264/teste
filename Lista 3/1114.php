<?php

$senhaCorreta = 2002;

do {
    $senha = (int) readline();
    if ($senha != $senhaCorreta) {
        echo "Senha Invalida\n";
    }
} while ($senha != $senhaCorreta);

echo "Acesso Permitido\n";

?>