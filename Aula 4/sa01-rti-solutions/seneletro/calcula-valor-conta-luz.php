<?php

    if(!isset($_GET["nome"])
       || !isset($_GET["nome"])
       || !isset($_GET["quilowatts-hora"])
       || !isset($_GET["endereco"])
       || !isset($_GET["numero_casa"])){

           header("location: index.php");
       }
     
    $nome  = $_GET["nome"];
    $quilowatts_hora  = $_GET["quilowatts-hora"];
    $endereco = $_GET["endereco"];
    $numero_casa = $_GET["numero_casa"];

    if( $quilowatts_hora > 120 ){
          $valor_a_pagar = $quilowatts_hora * 0.42;
          echo "<h1>Rua $endereco, $numero_casa</h1>";
          echo "<h1>Consumo: <em style='color: red;' > $quilowatts_hora kwh</em></h1>";
          echo "<h1>Valor a pagar: R$ $valor_a_pagar</h1>";
    }else{
        $valor_a_pagar = $quilowatts_hora * 0.32;
        echo "<h1>Rua $endereco, $numero_casa</h1>";
        echo "<h1>Consumo: <em style='color: blue;' > $quilowatts_hora kwh</em></h1>";
        echo "<h1>Valor a pagar: R$ $valor_a_pagar</h1>";
        echo "<h1>“Obrigado por economizar!”.</h1>";
    }