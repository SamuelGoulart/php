<?php

function procuraNome($vetorNomes, $nomeEncontrar){

     foreach($vetorNomes as $nome){
         if($nome == $nomeEncontrar){
             return true;
         }
     }
        return false;
} 


$nomes = ["Natã", "Mõnica", "Samuel"];
 
echo procuraNome($nomes, "Samuel") ? "Nome encontrado" : "Nome não encontrado";
