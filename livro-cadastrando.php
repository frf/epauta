<?php
//CONEXAO COM O BANCO DE DADOS
include_once("includes/conexao.php");
//VALIDAR SE VIER INFORMACOES
if(count($_POST)){
    $titulo = $_POST['titulo'];
    $idassunto = $_POST['idassunto'];

    $sql = "INSERT INTO livro (titulo,idassunto) VALUES ('$titulo',$idassunto); ";

    $conn->query($sql);
    $conn->close();
}

header('Location: livros.php');


exit;
?>