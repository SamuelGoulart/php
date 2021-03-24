<?php
  function deletarElemento($vetor, $elemento){

    //percorre o vetor
      foreach ($vetor as $chave => $el ) {
         
        //verifica se encontrou
        if ($el == $elemento) {
            
            //se encontrou
            unset($vetor[$chave]);
            return $vetor;

            //retorna o novo vetor
        }
      }
      
      // caso não encontrado, retorna o false
      return false;
  }


    $vetor = ["Abacaxi", "Morango", "Uva", "Melancia"];

    $novoVetor = deletarElemento($vetor, "Morangodd");

    print_r($novoVetor ? $novoVetor : "Não encontado" );
?>