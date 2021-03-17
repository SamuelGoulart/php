<link rel="stylesheet" href="../../styles-global.css">

<?php
$nome = $_POST["nome"];
$cidade = $_POST["cidade-selecionada"];

$arrayCidades = array(

    1 => "Jandira",
    2 => "Itapevi",
    3 => "Barueri",
    4 => "Osasco",
    5 => "Cotia",
    6 => "Santa de Parnaíba",
    7 => "Carapicuíba",
    8 => "São Paulo",
);

?>

<form>
   <div class="input-group" >
     <h1>Olá <?php echo $nome ?>, de <?php echo ($arrayCidades[$cidade]); ?> , seja bem-vindo.</h1>
   </div>
</form> 