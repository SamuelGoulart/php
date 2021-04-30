<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles-global.css" />
  <link rel="stylesheet" href="./novo.css" />
  <title>Administrar Produtos</title>
  <script>
        setTimeout(() => {
            document.querySelector(".mensagem").style.display = "none";
        }, 10000 );
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
      <main>
        <form class="form-produto" method="POST" action="produtosAcao.php" >
          <h1>Cadastro de produto</h1>
          <div class="input-group span2">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" required>
          </div>
          <div class="input-group">
            <label for="peso">Peso</label>
            <input type="text" id="peso" name="peso" required>
          </div>
          <div class="input-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" id="quantidade" name="quantidade" required>
          </div>
          <div class="input-group">
            <label for="cor">Cor</label>
            <input type="text" id="cor" name="cor"  required>
          </div>
          <div class="input-group">
            <label for="tamanho">Tamanho</label>
            <input type="text" id="tamanho" name="tamanho" >
          </div>
          <div class="input-group">
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" required>
          </div>
          <div class="input-group">
            <label for="desconto">Desconto</label>
            <input type="text" id="desconto" name="desconto" >
          </div>
          <button onclick="javascript:window.location.href = '../'">Cancelar</button>
          <button>Salvar</button>
        </form>
      </main>
    </section>
  </div>
  <footer>
    SENAI 2021 - Todos os direitos reservados
  </footer>
</body>

</html>