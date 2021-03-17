<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles-global.css">
    <title>Document</title>
</head>
<body>
    <form  action="retorna_valor.php"  method="post">
         <div class="input-group" >
            <label for="valor-1">1º Valor</label>
            <input type="text" required name="valor-1" >
         </div>
         <div class="input-group" >
            <label for="valor-2">2º Valor</label>
            <input type="text" required name="valor-2" >
         </div>
         <div class="input-group" >
            <label for="qual-valor-mudar">Qual valor deseja, deletar?</label>
            <input type="text" required name="qual-valor-mudar" >
         </div>
         <button>Enviar</button>
    </form>
    
</body>
</html>