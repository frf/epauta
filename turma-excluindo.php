<?php
//CONEXAO COM O BANCO DE DADOS
include_once("includes/conexao.php");

//VALIDAR SE VIER INFORMACOES
if(count($_GET)){
    $id = $_GET['id'];
    //SELECT * FROM turma WHERE id = $id
    //SE EXISTE PODE DELETAR
    //if(){

    $sql = "DELETE FROM turma WHERE id = $id ";
    $conn->query($sql);
    $conn->close();

    //}
}

header('Location: turmas.php');


exit;
?>