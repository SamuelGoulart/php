<?php

$notas = [10, 10, 10];

function calculaMediaNotas($notas)
{
    $soma = 0;
    foreach ($notas as $valores) {
        $soma += $valores / count($notas);
    }

    return $soma;
}


echo calculaMediaNotas($notas);
