<?php
    require("./database/conexao.php");

    // //receber o id tarefa a ser editada
     $tarefaId = $_GET["tarefaId"];

    // //select no banco da tarefa a ser editada
    // //SELECT * FROM tbl_task WHERE id = $tarefaId;
     $sqlSelect = " SELECT * FROM tbl_tasks WHERE id = $tarefaId; ";

    // //executar a consulta (mysqli_query)
    $resultado =  mysqli_query($conexao, $sqlSelect);

    //extrair a linha da consulta (mysql_fetch_array)
    $tarefa = mysqli_fetch_array($resultado);

    if(!$tarefa) {
        die("Impossivel editar, tarefa não encontrada.");  
    }

    //colocar dentro do value do input a descrição da tarefa retornada do banco de dados
   
    
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />
</head>

<body>

    <div class="content">
        <h1>Editar Tarefas</h1>
        <form method="POST" action="taskActtions.php">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="tarefaId" value="<?= $tarefa["id"] ?>" >
            <div class="input-group">
    
                <label for="tarefa">Descrição Tarefa</label>
                <input type="text" name="tarefa" value="<?= $tarefa["descricao"] ?>"  id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Editar</button>
        </form>
    </div>
</body>

</html>