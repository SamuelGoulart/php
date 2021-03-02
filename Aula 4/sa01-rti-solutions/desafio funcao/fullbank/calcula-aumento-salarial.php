<link rel="stylesheet" href="../styles-global.css">
<?php

     include("../funcoes.php");
   
    if(!isset($_GET["nome"])
       || !isset($_GET["salario_atual"])){

           header("location: index.php");
       }
 
   $nome_funcionario  = $_GET["nome"];
   $salario_atual  = $_GET["salario_atual"];

              
   $salario_com_aumento = salario_com_aumento($salario_atual);

   if($salario_atual <= 5000){
       
        echo "<h1>O $nome_funcionario passará a receber R$  $salario_com_aumento</h1>";
   }else{
        echo "<h1>O $nome_funcionario passará a receber R$  $salario_com_aumento</h1>";
   }


