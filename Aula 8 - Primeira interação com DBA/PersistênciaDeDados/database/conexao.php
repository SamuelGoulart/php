<?php

const HOST = "localhost";
const USER = "root";
const PASSWORD = "abc45101922072";
const DATABASE = "dbtasklist";

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die(mysqli_connect_error());

if (isset($_POST["tarefa"]) && $_POST["tarefa"] != "") {
    $tarefa = $_POST["tarefa"];
    $sqlInsert = " INSERT INTO tbl_task (descricao) VALUES ('$tarefa') ";
    mysqli_query($conexao, $sqlInsert);
}
