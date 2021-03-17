<?php

$valor_1 = $_POST["valor-1"];
$valor_2 = $_POST["valor-2"];
$qual_valor_mudar = $_POST["qual-valor-mudar"];

$input = [$valor_1, $valor_2];
$key = array_search($qual_valor_mudar, $input);

function deletaElemento($input, $key)
{
    if ($key !== false) {
        unset($input[$key]);
        $arrayComNovoValor =  $input;
        return $arrayComNovoValor;
    } else {

        return  "Valor inexistente, no array ";
    }
}


$resultado = deletaElemento($input, $key);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles-global.css">
    <title>Document</title>
</head>

<body>
    <form>
    <div class="input-group">
        <?php
        if (is_string($resultado)) {
            echo "Valor inexistente, no array";
        } else {
            echo " <h2>Como o valor foi preenchido inicialmente no array:</h2>";
            echo print_r($input);
            echo "<h2>Como ficou após a mudança:</h2> ";
            print_r($resultado);
        }

        ?>
    </form>
</body>
</html>
