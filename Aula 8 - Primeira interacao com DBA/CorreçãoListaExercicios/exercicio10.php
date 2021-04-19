<?php

function estaContido(array $vetor, array $vetorContido)
{

    foreach ($vetorContido as $valorVetor2) {

        $encontrado = false;
        foreach ($vetor as $valorVetor1) {

            if ($valorVetor1 == $valorVetor2) {
                $encontrado = true;
                continue;
                break;
            }
        }
        if (!$encontrado) {
            return false;
        }

        return true;
    }
}
$vetor1 = [1, 2, 5, 9, 10];
$vetor2 = [1, 3, 10];

if (estaContido($vetor1, $vetor2)) {
    echo "Sim, está contido";
} else {
    echo "Não, está contido";
}
