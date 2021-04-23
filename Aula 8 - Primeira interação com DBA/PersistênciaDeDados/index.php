<?php

/**
 *  CRUD
 * C - Create (INSERSÃO),
 * R - Read (LiSTAGEM, LEITURA),
 * U - Update (Atualização) 
 * D - Delete (EXCLUSÃO, DELEÇÃO).
 * 
 */


//importa um arquivo para dentro sedta página
//todos as variáveis e funções do arquivo importado ficam sisponíveis
include("./database/conexao.php");

$query = " SELECT * FROM tbl_tasks ";

$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />
    <script>
        setTimeout(() => {
            document.querySelector(".mensagem").style.display = "none";
        }, 4000 );
    </script>
</head>

<body>

    <div class="content">
        <?php
        if (isset($_GET['mensagem'])) {
        ?>
            <div class="mensagem">
                <?= $_GET["mensagem"] ?>
            </div>
        <?php
        }
        ?>
        <h1>Lista de Tarefas</h1>
        <form method="POST" action="taskActtions.php">
            <input type="hidden" name="acao" value="inserir">
            <div class="input-group">
                <label for="tarefa">Descrição da tarefa</label>
                <input type="text" name="tarefa" id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Adicionar</button>
        </form>
        <hr />
        <div class="tarefas">
            <?php
            while ($tarefa = mysqli_fetch_array($resultado)) {
            ?>
                <div class="tarefa">
                    <?= $tarefa["descricao"] ?>

                    <form method="POST" action="taskActtions.php">
                        <input type="hidden" name="acao" value="deletar"></input>
                        <input type="hidden" name="tarefaId" value="<?= $tarefa["id"] ?>">
                        <button>&#128465;</button>
                    </form>

                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>