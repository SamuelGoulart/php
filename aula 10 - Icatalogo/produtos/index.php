<?php
require("../database/conexao.php");

$query = " SELECT * FROM tbl_produto ";

$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <link rel="stylesheet" href="./produtos.css" />
    <title>Administrar Produtos</title>
    <script>
        setTimeout(() => {
            document.querySelector(".mensagem").style.display = "none";
        }, 4000 );
    </script>
</head>

<body>
    <header>
        <input type="search" placeholder="Pesquisar" />
    </header>
    
    <?php
        if (isset($_GET['mensagem'])) {
        ?>
            <div class="mensagem" 
             <?= 
             $_GET["tipoMensagem"] == "sucesso"
              ? "style='background-color: #006600;'"
               : ""
                ?> 
            >
                <?= $_GET["mensagem"] ?>
            </div>
        <?php
        }
        ?>
    <div class="content">
        <section class="produtos-container">
            <header>
                <button onclick="javascript:window.location.href ='./novo/'">Novo Produto</button>
                <button>Adicionar Categoria</button>
            </header>
            <main>
                <?php
                while ($informacoesProduto = mysqli_fetch_array($resultado)) {
                ?>
                    <article class="card-produto">
                        <figure>
                            <img src="<?= $informacoesProduto["imagem"]  ?>" />
                        </figure>
                        <section>
                            <span class="preco"><?= str_replace(".",",", $informacoesProduto["valor"]); ?></span>
                            <span class="parcelamento">ou em <em>10x <?= str_replace(".",",", $informacoesProduto["valor"]); ?> sem juros</em></span>

                            <span class="descricao"><?= $informacoesProduto["descricao"]  ?></span>
                            <span class="categoria">
                                <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                            </span>
                        </section>
                        <footer>

                        </footer>
                    </article>

                <?php
                }
                ?>

            </main>
        </section>
    </div>
    <footer>
        SENAI 2021 - Todos os direitos reservados
    </footer>
</body>

</html>