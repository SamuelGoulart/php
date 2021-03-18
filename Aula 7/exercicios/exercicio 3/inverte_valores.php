<?php

$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$valor3 = $_POST["valor3"];

$vetorQualquer = [$valor1, $valor2, $valor3];

function inverteVetor(array $vetor){
    $vetorInvertido = [];

    for ($i= (count($vetor) - 1 ); $i >= 0; $i--) { 
        $vetorInvertido[] = $vetor[$i];
    }

    return $vetorInvertido;
}



$vetorInvertido = inverteVetor($vetorQualquer);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores Invertidos</title>
    <link rel="stylesheet" href="../../styles-global.css">
</head>

<body>
    <form action="inverte_valores.php" method="post">
        <div class="input-group">
            <h3> Os valores inseridos </h3>
            <input type="text" value="<?php echo "1º = ".$valor1." 2º = ".$valor2." 3º = ".$valor3; ?>" readonly>

        </div>
        <div class="input-group">
            <h3> Os valores invertido </h3>
            <input type="text" value="<?php echo "1° = ".$vetorInvertido[0]." 2º ".$vetorInvertido[1]." 3° ".$vetorInvertido[2];  ?>" readonly>

        </div>
    </form>
</body>

</html>
