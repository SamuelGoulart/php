<link rel="stylesheet" href="../../styles-global.css">

<?php

$nome1 = $_POST["nome1"];
$nome2 = $_POST["nome2"];
$pesquisa_nome = $_POST["pesquisa_nome"];
$array = [$nome1, $nome2];


function encontrarNome($pesquisa_nome, $array)
{
  if (in_array($pesquisa_nome, $array)) {
      $trueFalse = "verdadeiro";
  } else {
      $trueFalse = "Falso";
  }
  return $trueFalse;
}


?>

<form>
  <div class="input-group">
    <h1><?php echo encontrarNome($pesquisa_nome, $array);?></h1>
  </div>
</form>