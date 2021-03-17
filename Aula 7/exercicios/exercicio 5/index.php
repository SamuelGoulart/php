<?php

$cidades = [
    "Selecione a cidade",
    "Jandira",
    "Itapevi",
    "Barueri",
    "Osasco",
    "Cotia",
    "Santa de Parnaíba",
    "Carapicuíba",
    "São Paulo"
];

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
    <form action="msg.php" method="post">
        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" required name="nome">
        </div>
        <div class="input-group">
            <label for="cidade-selecionada">Selecione sua cidade</label>

            <select name="cidade-selecionada" >
                <?php
                 echo "<option value='' disabled >".$cidades[0]."</option>";  

                for ($i = 1; $i < count($cidades); $i++) {
                    echo "<option value=".$i.">".$cidades[$i]."</option>";
                }
                ?>
            </select>
        </div>
        <button>Enviar</button>

    </form>
</body>

</html>