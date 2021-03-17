<?php

$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$valor3 = $_POST["valor3"];

$valores = [$valor1, $valor2, $valor3];

$invertido = inverteValores($valores);
function inverteValores($valores)
{

    $invertido = array_reverse($valores);
    return $invertido;
}

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
            <label for=""> Os valores inseridos </label>
            <input type="text" value="<?php echo "1º = ".$valor1." 2º = ".$valor2." 3º = ".$valor3; ?>" readonly>

        </div>
        <div class="input-group">
            <label for=""> Os valores invertido </label>
            <input type="text" value="<?php echo $invertido[0]." ".$invertido[1]." ".$invertido[2]; ?>" readonly>

        </div>
    </form>
</body>

</html>