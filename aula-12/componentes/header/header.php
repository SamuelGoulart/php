<?php
session_start();

?>

<link href="/web-backend/aula-12/componentes/header/header.css" rel="stylesheet" />

<header class="header">

    <figure>
        <img src="/web-backend/aula-12/imgs/logo.png" />
    </figure>
    <input type="search" placeholder="Pesquisar" />
    <nav>
        <?php
        if (isset($_SESSION["login"])) {
            $login = "<button>Sair<button>";
            
        }else{
            $login = " <ul><a  id='menu-admin'> Administrador</a></ul>";
        }
        ?>

        <form action="/web-backend/aula-12/componentes/header/acoesLogin.php" method="post">
             <input type="hidden" name="acao" value="logout">
             <?= $login ?>
        </form>  
     
   

    </nav>
    <div id="container-login" class="container-login">
        <h1>Fazer Login</h1>
        <form action="/web-backend/aula-12/componentes/header/acoesLogin.php" method="POST">
            <input type="hidden" name="acao" value="login">
            <input type="text" name="usuario" placeholder="Usuário" />
            <input type="password" name="senha" placeholder="Senha" />
            <button>Entrar</button>
        </form>
    </div>
    <?php
    //verifica se existe erros na sessão do usuário
    if (isset($_SESSION["mensagemAutenticacao"])) {
        // se existir perccore os erros exbindo na tela

        $mensagem = $_SESSION["mensagemAutenticacao"];
    ?>
        <div id="mensagemAutenticacao">
            <p><?= $mensagem ?></p>
        </div>
    <?php
        // eliminar da sessão os erros já mostrados
        unset($_SESSION["mesagemAutenticacao"]);
    }

    ?>

</header>

<script>
    setTimeout(() => {
        document.querySelector("#mensagemAutenticacao").style.display = "none";
    }, 4000);
</script>

<script lang="javascript">
    document.querySelector("#menu-admin").addEventListener("click", toggleLogin);

    function toggleLogin() {
        let containerLogin = document.querySelector("#container-login");
        //se estiver oculto, mostra 
        if (containerLogin.style.opacity == 0) {
            containerLogin.style.opacity = 1;
            containerLogin.style.height = "200px";
            //se não, oculta
        } else {
            containerLogin.style.opacity = 0;
            containerLogin.style.height = "0px";
        }
    }
</script>