<?php
//CONEXAO COM O BANCO DE DADOS
include_once("includes/conexao.php");
//VALIDAR SE VIER INFORMACOES
if(count($_POST)){
    $nome = $_POST['nome'];

    $sql = "INSERT INTO turma (nome) VALUES ('$nome'); ";
    $conn->query($sql);
    $conn->close();
}

header('Location: turmas.php');


exit;
?>