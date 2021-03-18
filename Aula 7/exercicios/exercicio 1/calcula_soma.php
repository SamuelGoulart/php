<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];


function somaInteiros(array $inteiros){
    $soma = 0;
    foreach($inteiros as $num){
      $soma += $num;
    }
    return $soma;
  }

?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles-global.css">
    <title>Total da soma</title>
  </head>
  <body>
       <form>
          <div class="input-group">
            <h3><?= $numero1." + ". $numero2." = " ?></h3>
            <h1><?= somaInteiros([$numero1, $numero2]);?></h1>
          </div>
       </form>
  </body>
  </html>