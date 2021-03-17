<?php
//declarando funções com PHP
function exibirMensagem()
{
    $mensagem = "Olá Mundo das Funções!";
    echo $mensagem;
}
//Executando (invocando) uma função
exibirMensagem();
exibirMensagem();
exibirMensagem();
exibirMensagem();
echo "<br/><br/>";
//passar argumentos para funções
function somar($a, $b)
{
    echo $a + $b;
}
somar(99, 120);
echo "<br/><br/>";
somar(40, 35);
echo "<br/><br/>";
//retornando valores de uma função
function nomeFormatado($primeiroNome, $ultimoNome)
{
    $nomeFormatado = $primeiroNome . " " . $ultimoNome;
    return $nomeFormatado;
}
$nome = nomeFormatado("Fulano", "de Tal");
echo $nome;
echo "<br/><br/>";
$nome = nomeFormatado("Rafael", "Leme");
echo $nome;
echo "<br/><br/>";

//argumentos opcionais
//parametros opcionais devem sempre ficar por último na lista de argumentos
function formatarData(int $dia, $mes = 06, $ano = 2021)
{
    $dataFormatada = $dia . "/" . $mes . "/" . $ano;
    return $dataFormatada;
}
echo formatarData(10, 06);
echo "<br/><br/>";
//passando vetores para como argumento
function mostrarNomes(array $nomes)
{
    foreach ($nomes as $nome) {
        echo $nome . "<br />";
    }
}
mostrarNomes(["Fulano", "Ciclano", "Beltrano"]);
