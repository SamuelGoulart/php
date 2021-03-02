<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHL Fretes</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>

<body>
    <form method="POST" action="soma-dos-cinco-numero.php">

        <h1>Informe 5 números, para saber o resultado da soma dos 5 números</h1>
        <div class="input-group" >
            <label for="numero-1">Iforme o 1º número</label>
            <input type="number" name="numero-1" id="numero-1" required >
        </div>

        <div class="input-group" >
            <label for="numero-2">Iforme o 2º número</label>
            <input type="number" name="numero-2" id="numero-2" required >
        </div>

        <div class="input-group" >
            <label for="numero-3">Iforme o 3º número</label>
            <input type="number" name="numero-3" id="numero-3" required >
        </div>

        <div class="input-group" >
            <label for="numero-4">Iforme o 4º número</label>
            <input type="number" name="numero-4" id="numero-4" required >
        </div>

        <div class="input-group" >
            <label for="numero-5">Iforme o 5º número</label>
            <input type="number" name="numero-5" id="numero-5" required >
        </div>

        <button>Enviar</button>
    </form>
</body>

</html>