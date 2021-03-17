<?php


function somaDasNotas( array $notas){
    $soma = 0;
    foreach($_POST as $notas){
      $soma += $notas;
    }
    return $soma;
  }


//   function menorNota( array $notas){
//       $menorNotas =   min($_POST);  
//         return  $menorNotas;
//     }

    $maiorNota =  max($_POST);
   

  ?>
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles-global.css">
      <title>Média das Notas</title>
  </head>
  <body>
       <form action="">
          <div class="input-group" >
              <p>A média das notas são:</p>
              <h1><?= print_r (somaDasNotas([$_POST]) / count($_POST));  ?></h1>
          </div>
          <div class="input-group" >
              <p>A maior nota é:</p>
              <input type="number" max="2" value="<?= max($_POST); ?>" readonly >
          </div>
          <div class="input-group" >
              <p>A menor nota é:</p>
              <input type="number" max="2" value="<?= min($_POST); ?>" readonly >
          </div>
       </form>
  </body>
  </html>
<!-- 
  echo somaDasNotas([$_POST]) / count($_POST);
  echo "<br><br>";
  echo max($_POST);
  echo "<br><br>";

  echo min($_POST); -->







