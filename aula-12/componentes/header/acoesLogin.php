<?php

session_start();

require("../../database/conexao.php");

switch ($_POST["acao"]) {
    case "login":

        //receber os campos do fomulário
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        //monstar o sql select na tabela tbl_adminitrador
        // $sqlLogin = " SELECT * FROM tbl_administrador WHERE usuario = '$usuario'; ";

        $sqlLogin = "SELECT * FROM tbl_administrador WHERE usuario='$usuario'";

        // //verificar se o usuário existe e se a senha está correta

        $resultado = mysqli_query($conexao, $sqlLogin);
        if ($dadosLoginBanco = mysqli_fetch_array($resultado)) {

            if ($dadosLoginBanco["senha"] == $senha) {

                $_SESSION["mensagemAutenticacao"] = "Seja bem vindo " . $dadosLoginBanco["nome"];
                $_SESSION["login"] = "logado";
            } else {
                $_SESSION["mensagemAutenticacao"] = "Senha informada errada!";
            }
        } else {

            $_SESSION["mensagemAutenticacao"] = "O usuário " . $usuario . " não existe!";
        }
        header("location: /web-backend/aula-12/produtos/index.php");

        //se estiver correta, salvar o id e o nome do usuário na sessão

        // $_SESSION["id"] = $dadosLoginBanco["id"];


        //redirecionar para tela de listagem de produtos

        break;

    case "logout":
        session_destroy();
        header("location: /web-backend/aula-12/produtos/index.php");

        break;
}
