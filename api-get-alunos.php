<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

//CONEXAO COM O BANCO DE DADOS
include_once("includes/conexao.php");

$sql="SELECT * FROM aluno";
//EXECUCAO DA QUERY
$result=mysqli_query($conn,$sql);


$aListaAlunos = [];

while($arr = mysqli_fetch_array($result)) {

    //$aListaAlunos[$arr['id']]['id'] =  $arr['id'];
    $aListaAlunos[$arr['id']]['nome'] =  $arr['nome'];
    $aListaAlunos[$arr['id']]['email'] =  $arr['email'];
    $aListaAlunos[$arr['id']]['telefone'] =  $arr['telefone'];
}

echo json_encode($aListaAlunos);
