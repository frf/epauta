<?php
//CONEXAO COM O BANCO DE DADOS
include_once("includes/conexao.php");
//VALIDAR SE VIER INFORMACOES
if(count($_POST)){
    $id     = $_POST['id'];//VEM DO CAMPO HIDDEN
    $nome   = $_POST['nome']; //INFORMAÇAO ALTERADA

    $sql = "UPDATE turma SET nome='$nome' WHERE id = $id "; //ATUALIZO NO BANCO SOMENTE NESTE ID
    $conn->query($sql);//EXECUTO A QUERY
    $conn->close(); //FECHAR CONEXAO COM O BANCO DE DADO
}

header('Location: turmas.php');


exit;
?>