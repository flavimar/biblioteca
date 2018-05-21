
<?php
    include "views/cabecalho.html";
    require "conexao.php";
    require "models/aluno.php";
    require "models/repositorio_alunos.php";
    require "models/pedido.php";
    require "models/repositorio_pedido.php";
    require "models/livros.php";
    require "models/repositorio_livro.php";
    $repositorio_alunos = new RepositorioAluno($conexao);
    $repositorio_livros = new RepositorioLivro($conexao);
    $repositorio_pedidos = new RepositorioPedidos($conexao,$repositorio_alunos,$repositorio_livros);


     $rota = "lista_pedidos";


    if(array_key_exists("rota", $_GET)){
      $rota = (string) $_GET["rota"];
    }

    if(is_file("controllers/{$rota}.php")){
      require "controllers/{$rota}.php";
    }else {
      echo "Rota não encontrada";
    }




?>
