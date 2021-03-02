<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHL Fretes</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>

<body>
    <form method="GET" action="calcula-conversao-dolar-real.php">

        <h1>Conversão monetária de Real para Euro e Dólar.</h1>
        <div class="input-group">
            <label for="valor-conversao">Valor em reais, a ser convertido</label>
            <input type="number" name="valor-conversao" id="valor-conversao" required>
        </div>
        <div class="input-group">
            <label>Corversão para qual moeda?</label>

            <select name="moeda-conversao">
                <option value="dolar" selected>Dólar</option>
                <option value="euro" >Euro</option>
            </select>
        
        </div>

        <button>Enviar</button>
    </form>
</body>

</html>