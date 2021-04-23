<?php
//Se houver uma tarefa a ser inserida, faz a inserção no banco

include("./database/conexao.php");

switch ($_POST["acao"]) {
    case 'inserir':
        if (isset($_POST["tarefa"]) && $_POST["tarefa"] != "") {

            $minhaTarefa = $_POST["tarefa"];
            $sqlInsert = " INSERT  tbl_tasks (descricao) values('$minhaTarefa')";

            $resultadoInsert = mysqli_query($conexao, $sqlInsert);

            if ($resultadoInsert == false) {
                $mesagem = "Erro ao criar a tarefa";
            }
            else{
                $mesagem= "Ação conculida com sucesso";
            }

            //redirecionar para página de tarefas (index.php)
            header("location: index.php?mensagem=$mesagem");
        }
        break;

    case "deletar":
        if (isset($_POST["tarefaId"]) && $_POST["tarefaId"] != "") {

            //receber o id da tarefa
            $tarefaId = $_POST["tarefaId"];

            //montar o sql de deleção com o id da tarefa
            $sqlDelete = "DELETE FROM tbl_tasks WHERE id=$tarefaId";

            mysqli_query($conexao, $sqlDelete);

            if ($resultadoInsert == false) {
                $mesagem = "Erro ao deletar a tarefa";
            }
            else{
                $mesagem= "Deletado com sucesso";
            }

            //redirecionar para página de tarefas (index.php)
            header("location: index.php?mensagem=$mesagem");

            break;
        }
}
