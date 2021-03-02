 <?php
       include("../funcoes.php");

if (
    !isset($_GET["valor-conversao"])
    || !isset($_GET["moeda-conversao"])
    ) {

    header("location: index.php");
}

   $valorconversao = $_GET["valor-conversao"];
   $moeda_para_conversao =$_GET["moeda-conversao"];

                
   $valorconvertido = conversao($valorconversao, $moeda_para_conversao);   

   if($moeda_para_conversao == "euro"){
       
          echo "<h1>Valor total da conversão para Euro é €$valorconvertido</h1>";
   }else{

        echo "<h1>Valor total da conversão para Dólar é $$valorconvertido</h1>";
   }