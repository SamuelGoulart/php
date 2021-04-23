<?php

// EM PHP, HOJE EM DIA, TEMOS DUAS MANEIRAS DE MANIPULAR BD.

//MYSQLI $ PDO

//CONECTANDO AO BANCO DADOS

const HOST = "localhost";
const USER = "root";
const PASSWORD = "abc45101922072";
const DATABASE = "dbtasklist";

//realiza a conexão com o banco de dados
$conexao = mysqli_connect(HOST,USER, PASSWORD, DATABASE) or die(mysqli_connect_error());

//declaramos a consulta a ser executada
$query = " SELECT * FROM tbl_tasks ";


//executamos a consulta utilizando a conexão criada e recebemos o resultado
//Mostra onde está o erro, se houver die(mysqli_error($conexao));
//Isso se chama tratamento de erro
$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

//tratando o erro na consulta

// if () {
//     # code...
// }



// trazendo a primeira linha da tabela
// $linha1 = mysqli_fetch_array($resultado);

// // trazendo a segundo linha da tabela
// $linha2 = mysqli_fetch_array($resultado);

// trazendo a terceira linha da tabela
// $linha3 = mysqli_fetch_array($resultado);


//print_r($linha1);

// echo "A tafera da linha 1 é: ". $linha1["descricao"];
// echo "<br><br>";
// echo "A tafera da linha 2 é: ". $linha2["descricao"];
// echo "<br><br>";
// echo "A tafera da linha 3 é: ". $linha3["descricao"];

$minhaTarefa = "Nova Tarefa";

$sqlInsert = " INSERT  tbl_tasks (descricao) values('$minhaTarefa')";

$resultadoInsert = mysqli_query($conexao, $sqlInsert);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" >
       <tr>
         <th>ID</th>
         <th>DESCRIÇÃO</th>
       </tr>
       <?php 
         while ($linha  = mysqli_fetch_array($resultado)) {
       ?>
       <tr>
           <td><?= $linha["id"]  ?></td>
           <td><?= $linha["descricao"] ?></td>
       </tr>
       <?php
             }
        ?>
    </table>
</body>
</html>

<?php
     //Encera a conexão com o banco de dados
     mysqli_close($conexao);
  
?>