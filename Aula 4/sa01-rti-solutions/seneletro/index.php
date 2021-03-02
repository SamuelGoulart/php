<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHL Fretes</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>

<body>
    <form method="GET" action="calcula-valor-conta-luz.php">

        <h1>Calculadora do valor da conta de luz </h1>
        <div class="input-group" >
            <label for="nome">Informe o nome completo</label>
            <input type="text" name="nome" id="nome" required >
        </div>

        <div class="input-group" >
            <label for="quilowatts-hora">Consumo em Quilowatts-hora</label>
            <input type="number" name="quilowatts-hora" id="quilowatts-hora" required >
        </div>

        <div class="input-group" >
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" required >
        </div>

        <div class="input-group" >
            <label for="numero_casa">Número da casa</label>
            <input type="number" name="numero_casa" id="numero_casa" required >
        </div>
        <button>Enviar</button>
    </form>
</body>

</html>