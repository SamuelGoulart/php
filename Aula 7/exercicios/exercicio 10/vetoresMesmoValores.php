<?php

$vetor = [1, 2, 3, 5, 6];
$vetor1 = [3, 4, 7];


function comparaVetores($vetor, $vetor1)
{
     if ($vetor == $vetor1) {
          return "Verdadeiro";
     }else{
          return "Falso";
     }
          
}

echo comparaVetores($vetor, $vetor1);
