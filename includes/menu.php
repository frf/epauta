<?php

    $menu = '<br><a href="exemplo1.php">Exemplo 1</a><br><a href="exemplo2.php">Exemplo 2</a>';

?>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">E-Pauta Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Principal</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configurações <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="turmas.php">Turmas</a></li>
                        <li><a href="materias.php">Matérias</a></li>
                        <li><a href="livros.php">Livros</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li  class="active"><a href="#">Meus Dados</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>