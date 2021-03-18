<?php

$valor_1 = $_POST["valor-1"];
$valor_2 = $_POST["valor-2"];
$qual_valor_mudar = $_POST["qual-valor-mudar"];

$doisparametros = [$valor_1, $valor_2];

function deletaElemento($doisparametros, $valor_1, $valor_2, $qual_valor_mudar)
{
      
    if($valor_1 == $qual_valor_mudar ){
        unset($doisparametros[0]);
        $arrayComValorDeletado =  $doisparametros;
        return $arrayComValorDeletado;

    }else if($valor_2 == $qual_valor_mudar){
        unset($doisparametros[1]);
        $arrayComValorDeletado =  $doisparametros;
        return $arrayComValorDeletado;
    } else {

        return  "Valor inexistente, no array ";
    }
}


$resultado = deletaElemento($doisparametros, $valor_1, $valor_2, $qual_valor_mudar);


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
            echo print_r($doisparametros);
            echo "<h2>Como ficou após a mudança:</h2> ";
            print_r($resultado);
        }
        ?>
    </form>
</body>
</html>
