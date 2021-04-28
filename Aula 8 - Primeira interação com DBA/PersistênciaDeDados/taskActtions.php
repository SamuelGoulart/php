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
                $tipoMesagem = "erro";

            }
            else{
                $mesagem= "Ação conculida com sucesso";
                $tipoMesagem = "sucesso";

            }
        }
        break;

    case "deletar":
        if (isset($_POST["tarefaId"]) && $_POST["tarefaId"] != "") {

            //receber o id da tarefa
            $tarefaId = $_POST["tarefaId"];

            //montar o sql de deleção com o id da tarefa
            $sqlDelete = "DELETE FROM tbl_tasks WHERE id=$tarefaId";

             $resultadoDelete  = mysqli_query($conexao, $sqlDelete);

            if ($resultadoDelete == false) {
                $mesagem = "Erro ao deletar a tarefa";
                $tipoMesagem = "erro";   

            }
            else{
                $mesagem= "Deletado com sucesso";
                $tipoMesagem = "sucesso";
            }

            break;

        }
    case 'editar':

        if (isset($_POST["tarefa"]) && isset($_POST["tarefaId"])) {
         
            //pegar a tarefa e a taredaId
            $tarefa = $_POST["tarefa"];
            $tarefaId = $_POST["tarefaId"];

            //declarar a query update
            $sqlUpadate = "UPDATE tbl_tasks SET descricao = '$tarefa' WHERE id = $tarefaId;";

            //Executar a query
            $resultado = mysqli_query($conexao, $sqlUpadate);

            //Verificar se deu certo
            if ($resultado) {

                $mesagem = "Tarefa editada com sucesso!";
                $tipoMesagem = "sucesso";


            }else {

                $mesagem = "Ops, erro ao editar a tarefa";
                $tipoMesagem = "erro";

            }
        }
            
        break;

        //Caso ele não cai em nenhum case
        default:{
            die ("Ops, ação inválida");
        }

}
       //redirecionar para página de tarefas (index.php)
        header("location: index.php?mensagem=$mesagem&tipoMensagem=$tipoMesagem");