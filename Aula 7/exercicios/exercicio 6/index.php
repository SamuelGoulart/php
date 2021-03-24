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
    <form action="retornaApenasChavesDoVetorRecebido.php" method="POST" >
       <div class="input-group" >
          <label for="valor1">1º valor</label>
          <input required name="valor1" type="text">
       </div>
       <div class="input-group" >
          <label for="valor2">2º valor</label>
          <input required name="valor2" type="text">
       </div>
       <div class="input-group" >
          <label for="valor3">3º valor</label>
          <input required name="valor3" type="text">
       </div>
       <button>Enviar</button>
    </form>
</body>
</html>