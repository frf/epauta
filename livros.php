<?php
//CONEXAO COM O BANCO DE DADOS
include_once("includes/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-Chamada Administração</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include_once("includes/menu.php"); ?>
<div class="container">
    <div class="row">
        <div class="table-responsive">
            <a href="livro-cadastro.php" class="btn btn-info btn-xs">Cadastrar</a>
            <table class="table table-bordered table-striped table-hover ">
                <thead>
                    <th>Nome Turma</th>
                    <th>Assunto</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </thead>
                <tbody>
                <?php
                    $sql="SELECT * FROM livro as l INNER JOIN livro_assunto as la ON la.id = l.idassunto";
                    //EXECUCAO DA QUERY
                    $result=mysqli_query($conn,$sql);
                    //PEGA APENAS UM OU MAIS REGISTR

                    if($result) {
                        while ($arr = mysqli_fetch_array($result)) {
                            $id = $arr['id'];
                            $idassunto = $arr['idassunto'];
                            $titulo = $arr['titulo'];
                            $nome = $arr['nome'];

                            echo "<tr>";
                            echo "<td>$titulo</td>";
                            echo "<td>$nome</td>";
                            echo "<td><a href='livro-editar.php?id=$id' class='btn btn-xs btn-primary'>Editar</a></td>";
                            echo "<td><a href='livro-excluindo.php?id=$id' class='btn btn-xs btn-danger'>Excluir</a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>