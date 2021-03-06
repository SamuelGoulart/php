<link rel="stylesheet" href="../styles-global.css">
<?php

    if(!isset($_GET["nome"])
       || !isset($_GET["salario_atual"])){

           header("location: index.php");
       }

      
   $nome_funcionario  = $_GET["nome"];
   $salario_atual  = $_GET["salario_atual"];

   if($salario_atual <= 5000){
        $salario_com_aumento =  $salario_atual +($salario_atual * 20) / 100;
        echo "<h1>Valor total da conversão para Euro é <?= number_format($salario_com_aumento, 2, ",", "." )</h1>";
    
   }else{
        $salario_com_aumento = $salario_atual +($salario_atual * 10) / 100;  
        echo "<h1>O $nome_funcionario passará a receber R$  $salario_com_aumento</h1>";
   }


