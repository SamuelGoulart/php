<?php

require("../../database/conexao.php");

if (isset($_POST["descricao"]) && $_POST["descricao"] != "" 
   || isset($_POST["peso"]) && $_POST["peso"] != ""  
   || isset($_POST["quantidade"]) && $_POST["quantidade"] != ""  
   || isset($_POST["cor"]) && $_POST["cor"] != ""  
   || isset($_POST["tamanho"]) && $_POST["tamanho"] != ""  
   || isset($_POST["valor"]) && $_POST["valor"] != "" 
   || isset($_POST["desconto"]) && $_POST["desconto"] != "") {

   $descricao = $_POST["descricao"];
   $peso = $_POST["peso"];
   $quantidade = $_POST["quantidade"];
   $cor = $_POST["cor"];
   $tamanho = $_POST["tamanho"];
   $valor = $_POST["valor"];
   $desconto = $_POST["desconto"];
   $imagem = "http://3.bp.blogspot.com/-u34_1MW1w5g/T_eNqYLmtFI/AAAAAAAAEP0/jnssgMNcS8Y/s1600/converse-all-star-dark-blue.png";

   $valita_Se_E_Numero = [$quantidade, $valor, $desconto, $peso];

    function is_numerico( array $valita_Se_E_Numero){
        foreach($valita_Se_E_Numero as $valores){
            if (is_numeric(str_replace(",",".", $valores))) {  
                  
            }else{
                return false;
            }   
        }
      return true;
    }

    $valorComPonto = str_replace(",",".", $valor);
    $descontoComPonto = str_replace(",",".", $desconto);
    $pesoComPonto = str_replace(",",".", $peso);

    $sqlInsert = " INSERT INTO  tbl_produto (descricao ,peso , quantidade, cor, tamanho, valor, desconto, imagem) VALUES ('$descricao','$pesoComPonto','$quantidade','$cor','$tamanho','$valorComPonto','$descontoComPonto','$imagem') ";
  
    $resultadoInsert = mysqli_query($conexao, $sqlInsert);

    if (is_numerico($valita_Se_E_Numero) == false) { 

        $mesagem= "Os campos quantidades, valor, desconto e peso, aceitam somente valores numéricos";
        $tipoMesagem = "erro";
        header("location: index.php?mensagem=$mesagem&tipoMensagem=$tipoMesagem");
        
    }else{
        
        if ($resultadoInsert == false) {
            $mesagem = "Erro ao inserir o produto";
            $tipoMesagem = "erro";
        }
         else {
         $mesagem= "Ação conculida com sucesso";
         $tipoMesagem = "sucesso";
        }
     
        header("location: ../index.php?mensagem=$mesagem&tipoMensagem=$tipoMesagem");
        echo "Ação conculida com sucesso";
    }
}
