<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles-global.css">

    <title>Soma de notas</title>
</head>

<body>
    <form action="calcula_soma.php" method="post" >
        <div class="input-group">
            <label for="numero1">1º número</label>
            <input type="number" required name="numero1" >
        </div>
        <div class="input-group">
            <label for="numero2">2º número</label>
            <input type="number" required name="numero2" >
        </div>
        <button>Enviar</button>
    </form>
</body>

</html>