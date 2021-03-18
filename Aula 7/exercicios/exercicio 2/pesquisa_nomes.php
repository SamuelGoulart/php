<link rel="stylesheet" href="../../styles-global.css">

<?php

$nome1 = $_POST["nome1"];
$nome2 = $_POST["nome2"];
$pesquisa_nome = $_POST["pesquisa_nome"];



function encontrarNome($pesquisa_nome, $nome1, $nome2)
{
  if ($nome1 == $pesquisa_nome  or $nome2 == $pesquisa_nome) {
      $trueFalse = "True";
  }  else {
      $trueFalse = "False";
  }
  return $trueFalse;
}


?>

<form>
  <div class="input-group">
    <h1><?php echo encontrarNome($pesquisa_nome, $nome1, $nome2);?></h1>
  </div>
</form>