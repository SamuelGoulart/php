<?php


function calculaMediaNota(array $notas)
{
    $soma = 0;
    foreach ($_POST as $notas) {
        $soma += $notas / count($_POST);
    }
    return $soma;
}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles-global.css">
    <title>Média das Notas</title>
</head>

<body>
    <form action="">
        <div class="input-group">
            <p>A média das notas são:</p>
            <input type="number" readonly  value="<?php print_r(calculaMediaNota([$_POST])); ?>">
        </div>
    </form>
</body>

</html>