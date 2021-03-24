<?php

$vetor = [$_POST];

function deltadaTodosElementos($vetor, $elemento){

    foreach ($vetor as $chave => $el) {
        if($el == $elemento){
            unset($vetor[$chave]);
             return $vetor;
        }
    }

}

$novovetor = deltadaTodosElementos($vetor, $_POST);

print_r($novovetor);

?>