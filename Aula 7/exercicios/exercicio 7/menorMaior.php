<?php

$numeros = [5, 10, 5000, 1000, 3];

$maiorNumero = null;
$menorNumero = $numeros[0];


function maiorValor($numeros, $maiorNumero)
{
    for ($i = 0; $i < count($numeros); $i++) {
        if ($maiorNumero < $numeros[$i]) {
            $maiorNumero = $numeros[$i];
        }
    }
    return $maiorNumero;
}

function menorValor($numeros, $menorNumero)
{
    for ($i = 0; $i < count($numeros); $i++) {

        if ($menorNumero > $numeros[$i]) {
            $menorNumero = $numeros[$i];
        }
    }
    return $menorNumero;
}

$maiorValor = maiorValor($numeros, $maiorNumero);
$menorValor = menorValor($numeros, $menorNumero);
$array = [$maiorValor, $menorValor];
print_r($array);

?>
