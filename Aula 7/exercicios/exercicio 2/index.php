<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles-global.css">
    <title>Calcula Nota</title>
</head>

<body>
    <form action="pesquisa_nomes.php" method="post">
        <div class="input-group" >
            <label for="nome1">Iforme o 1º nome</label>
            <input required type="text" name="nome1" >
        </div>
        <div class="input-group" >
            <label for="nome2">Iforme o 2º nome</label>
            <input required type="text" name="nome2" >
        </div>
        <div class="input-group" >
            <label for="nome2">Qual nome que pesquisar?</label>
            <input required type="text" name="pesquisa_nome" >
        </div>
        <button>Enviar</button>
    </form>
</body>

</html>