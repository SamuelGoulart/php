<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles-global.css">
    <title>Imprimindo valores em ordem invertida.</title>
</head>

<body>
    <form action="inverte_valores.php" method="post">
        <div class="input-group">
            <label for="">Escreva Três valores, para ser imprimido em ordem invertida </label>
        </div>
        <div class="input-group">
            <label for="valor1" >1° valor</label>
            <input required type="text" name="valor1" >
        </div>
        <div class="input-group">
            <label for="valor2">2° valor</label>
            <input required type="text" name="valor2">
        </div>
        <div class="input-group">
            <label for="valor3">3° valor</label>
            <input required type="text" name="valor3">
        </div>
        <button>Enviar</button>
    </form>
</body>

</html>