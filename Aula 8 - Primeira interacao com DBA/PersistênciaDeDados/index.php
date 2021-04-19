<?php

include("conectar.php");

$query = " SELECT * FROM tbl_tasks ";

//Se houver uma tarefa a ser inserida, faz a inserção no banco

if (isset($_POST["tarefa"]) && $_POST["tarefa"] != "") {

    $minhaTarefa = $_POST["tarefa"];
    $sqlInsert = " INSERT  tbl_tasks (descricao) values('$minhaTarefa')";
    $resultadoInsert = mysqli_query($conexao, $sqlInsert);
        
}

$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

while ($linha  = mysqli_fetch_array($resultado)) {

    $tarefas[] = $linha["descricao"];
}


// $tarefa = isset($_POST["tarefa"]) ? $tarefas[] = $_POST["tarefa"]

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />
</head>

<body>

    <div class="content">
        <h1>Lista de Tarefas</h1>
        <form method="POST">
            <div class="input-group">
                <label for="tarefa">Descrição da tarefa</label>
                <input type="text" name="tarefa" id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Adicionar</button>
        </form>
        <hr />
        <div class="tarefas">
            <?php
            foreach ($tarefas as $tarefa) {
            ?>
                <div class="tarefa">
                    <?= $tarefa ?>
                    <span>&#128465;</span>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>