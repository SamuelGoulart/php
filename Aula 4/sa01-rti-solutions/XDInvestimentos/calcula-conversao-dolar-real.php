<?php

if (
    !isset($_GET["valor-conversao"])
    || !isset($_GET["moeda-conversao"])
    ) {

    header("location: index.php");
}

   $valorconversao = $_GET["valor-conversao"];
   $moeda_para_conversao =$_GET["moeda-conversao"];

   if($moeda_para_conversao == "euro"){

         $valorconvertido = $valorconversao * 6.57;
          echo "<h1>Valor total da conversão para Euro é €$valorconvertido</h1>";
   }else{

        $valorconvertido = $valorconversao * 5.41;
        echo "<h1>Valor total da conversão para Dólar é $$valorconvertido</h1>";
   }